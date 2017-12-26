<?php
/**
 * DouPHP
 * --------------------------------------------------------------------------------------------------
 * 版权所有 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.douco.com
 * --------------------------------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在遵守授权协议前提下对程序代码进行修改和使用；不允许对程序代码以任何形式任何目的的再发布。
 * 授权协议：http://www.douco.com/license.html
 * --------------------------------------------------------------------------------------------------
 * Author: DouCo
 * Release Date: 2015-10-16
 */
define('IN_DOUCO', true);

require (dirname(__FILE__) . '/include/init.php');

// 验证并获取合法的ID，如果不合法将其设定为-1
$id = $firewall->get_legal_id('article', $_REQUEST['id'], $_REQUEST['unique_id']);
$cat_id = $dou->get_one("SELECT cat_id FROM " . $dou->table('article') . " WHERE id = '$id'");
$parent_id = $dou->get_one("SELECT parent_id FROM " . $dou->table('article_category') . " WHERE cat_id = '" . $cat_id . "'");
if ($id == -1)
    $dou->dou_msg($GLOBALS['_LANG']['page_wrong'], ROOT_URL);
    
/* 获取详细信息 */
$query = $dou->select($dou->table('article'), '*', '`id` = \'' . $id . '\'');
$article = $dou->fetch_array($query);

// 格式化数据
$article['add_time'] = date("Y-m-d", $article['add_time']);

// 格式化自定义参数
foreach (explode(',', $article['defined']) as $row) {
    $row = explode('：', str_replace(":", "：", $row));
    
    if ($row['1']) {
        $defined[] = array (
                "arr" => $row['0'],
                "value" => $row['1'] 
        );
    }
}

// 访问统计
$click = $article['click'] + 1;
$dou->query("update " . $dou->table('article') . " SET click = '$click' WHERE id = '$id'");

// 赋值给模板-meta和title信息
$smarty->assign('page_title', $dou->page_title('article_category', $cat_id, $article['title']));
$smarty->assign('keywords', $article['keywords']);
$smarty->assign('description', $article['description']);

// 赋值给模板-导航栏
$smarty->assign('nav_top_list', $dou->get_nav('top'));
$smarty->assign('nav_middle_list', $dou->get_nav('middle', '0', 'article_category', $cat_id, $parent_id));
$smarty->assign('nav_bottom_list', $dou->get_nav('bottom'));

// 赋值给模板-数据
$smarty->assign('ur_here', $dou->ur_here('article_category', $cat_id, $article['title']));
$smarty->assign('article_category', $dou->get_category('article_category', 0, $cat_id));
$smarty->assign('lift', $dou->lift('article', $id, $cat_id));
$smarty->assign('article', $article);
$smarty->assign('defined', $defined);

// 面包屑
$smarty->assign('mbx', $dou->get_url($cat_id,''));
// 上一页 下一页
$sql = "SELECT id,title FROM " . $dou->table('article') . " WHERE cat_id = '$cat_id' and id<'$id'";
$query = $dou->query($sql);
$shang_page = $dou->fetch_array($query);
$smarty->assign('shang_page', $shang_page);

$sql = "SELECT id,title FROM " . $dou->table('article') . " WHERE cat_id = '$cat_id' and id>'$id'";
$query = $dou->query($sql);
$xia_page = $dou->fetch_array($query);
$smarty->assign('xia_page', $xia_page);

// add by nowenjun
$sql = "SELECT cat_id, cat_name, parent_id FROM " . $dou->table('article_category') . " WHERE cat_id = '$cat_id'";
$query = $dou->query($sql);
$cat_info = $dou->fetch_array($query);
$smarty->assign('cat_info', $cat_info);
// 公示公告
$smarty->assign('gsgg_article', $dou->get_list('article', '2', 6, 'sort DESC'));//公示公告
//当前分类列表
$temp_article = $dou->get_list('article', $cat_id, 5, 'sort DESC');
if(count($temp_article) > 0){
	foreach($temp_article as $key => $val){
		$temp_article[$key]['title'] = $dou->dou_substr($val['title'], 18);
	}
}
$smarty->assign('temp_article', $temp_article);


$smarty->display('article.dwt');
?>