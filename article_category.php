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
$cat_id = $firewall->get_legal_id('article_category', $_REQUEST['id'], $_REQUEST['unique_id']);
if ($cat_id == -1) {
    $dou->dou_msg($GLOBALS['_LANG']['page_wrong'], ROOT_URL);
} else {
    $where = ' WHERE cat_id IN (' . $cat_id . $dou->dou_child_id('article_category', $cat_id) . ')';
}
    
// 获取分页信息
$page = $check->is_number($_REQUEST['page']) ? trim($_REQUEST['page']) : 1;
$limit = $dou->pager('article', ($_DISPLAY['article'] ? $_DISPLAY['article'] : 10), $page, $dou->rewrite_url('article_category', $cat_id), $where);

/* 获取文章列表 */
$sql = "SELECT id, title, content, image, cat_id, add_time, click, description FROM " . $dou->table('article') . $where . " ORDER BY id DESC" . $limit;
$query = $dou->query($sql);

while ($row = $dou->fetch_array($query)) {
    $url = $dou->rewrite_url('article', $row['id']);
    $add_time = date("Y-m-d", $row['add_time']);
    $add_time_short = date("m-d", $row['add_time']);
    $image = $row['image'] ? ROOT_URL . $row['image'] : '';
    
    // 如果描述不存在则自动从详细介绍中截取
    $description = $row['description'] ? $row['description'] : $dou->dou_substr($row['content'], 200);
    
    $article_list[] = array (
            "id" => $row['id'],
            "cat_id" => $row['cat_id'],
            "title" => $row['title'],
            "image" => $image,
            "add_time" => $add_time,
            "add_time_short" => $add_time_short,
            "click" => $row['click'],
            "description" => $description,
            "url" => $url 
    );
}

// 获取分类信息
$sql = "SELECT cat_id, cat_name, parent_id FROM " . $dou->table('article_category') . " WHERE cat_id = '$cat_id'";
$query = $dou->query($sql);
$cate_info = $dou->fetch_array($query);

// 赋值给模板-meta和title信息
$smarty->assign('page_title', $dou->page_title('article_category', $cat_id));
$smarty->assign('keywords', $cate_info['keywords']);
$smarty->assign('description', $cate_info['description']);

// 赋值给模板-导航栏
$smarty->assign('nav_top_list', $dou->get_nav('top'));
$smarty->assign('nav_middle_list', $dou->get_nav('middle', '0', 'article_category', $cat_id, $cate_info['parent_id']));
$smarty->assign('nav_bottom_list', $dou->get_nav('bottom'));

// 赋值给模板-数据
$smarty->assign('ur_here', $dou->ur_here('article_category', $cat_id));
$smarty->assign('cate_info', $cate_info);
$smarty->assign('article_category', $dou->get_category('article_category', 0, $cat_id));
$smarty->assign('article_list', $article_list);
$smarty->assign('article_countx', count($article_list) == 0 ? 1 : 0);
$smarty->assign('article_count', count($article_list) == 1 ? 0 : 1);


// 如果只有一条，就只显示一条
if(count($article_list) == 1){
    $id = $article_list[0]['id'];
    $query = $dou->select($dou->table('article'), '*', '`id` = \'' . $id . '\'');
    $article = $dou->fetch_array($query);
    $smarty->assign('article', $article);
}
// var_dump($article_list);exit;

// 面包屑
$smarty->assign('mbx', $dou->get_url($cat_id,''));

// 上一页 下一页
$shang_info =
$xia_info =

// add
// 下级分类
//$sql = "SELECT cat_id, cat_name, parent_id FROM " . $dou->table('article_category') . " WHERE parent_id = '$cat_id' limit 6";
$sql = "SELECT cat_id, cat_name, parent_id FROM " . $dou->table('article_category') . " WHERE parent_id = '$cat_id'";
$query = $dou->query($sql);
$child_list = array();
while ($row = $dou->fetch_array($query)) {
    $child_list[] = $row;
}
$smarty->assign('child_list', $child_list);
$smarty->assign('child_count', count($child_list));

if(count($child_list) == 0){
	$sql = "SELECT cat_id, cat_name, parent_id FROM " . $dou->table('article_category') . " WHERE cat_id = ".$cate_info['parent_id'];
	$query = $dou->query($sql);
	$new_name = array();
	while ($row = $dou->fetch_array($query)) {
		$new_name = $row;
	}
	$smarty->assign('new_name', $new_name);

	$sql = "SELECT cat_id, cat_name, parent_id FROM " . $dou->table('article_category') . " WHERE parent_id = ".$cate_info['parent_id'];
	$query = $dou->query($sql);
	$new_list = array();
	while ($row = $dou->fetch_array($query)) {
		$new_list[] = $row;
	}
	$smarty->assign('new_list', $new_list);
	$smarty->assign('new_count', count($new_list));
}

// 公示公告
$smarty->assign('gsgg_article', $dou->get_list('article', '2', 5, 'sort DESC'));//公示公告


$smarty->display('article_category.dwt');
?>