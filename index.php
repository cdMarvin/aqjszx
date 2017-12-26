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

if (isset($_REQUEST['mobile'])) setcookie('client', 'pc'); // 判断时候强制在移动端中显示PC版

require (dirname(__FILE__) . '/include/init.php');

// 如果存在搜索词则转入搜索页面
if ($_REQUEST['s']) {
    if ($check->is_text($keyword = trim($_REQUEST['s']))) {
        require (ROOT_PATH . 'include/search.inc.php');
    } else {
        $dou->dou_msg($_LANG['search_keyword_wrong']);
    }
}

// 获取关于我们信息
$sql = "SELECT * FROM " . $dou->table('page') . " WHERE id = '1'";
$query = $dou->query($sql);
$about = $dou->fetch_array($query);

// 写入到index数组
$index['about_name'] = $about['page_name'];
$index['about_content'] = $dou->dou_substr($about['content'], 300);
$index['about_link'] = $dou->rewrite_url('page', '1');
$index['cur'] = true;

// 赋值给模板-meta和title信息
$smarty->assign('page_title', $dou->page_title());
$smarty->assign('keywords', $_CFG['site_keywords']);
$smarty->assign('description', $_CFG['site_description']);

// 赋值给模板-导航栏
$smarty->assign('nav_top_list', $dou->get_nav('top'));
$smarty->assign('nav_middle_list', $dou->get_nav('middle'));
$smarty->assign('nav_bottom_list', $dou->get_nav('bottom'));

// 赋值给模板-数据
$smarty->assign('show_list', $dou->get_show_list());
$smarty->assign('newshow_list', $dou->get_newshow_list());
$smarty->assign('friendlink_list_a', $dou->get_friendlink_list(1));
$smarty->assign('friendlink_list_b', $dou->get_friendlink_list(2));
$smarty->assign('friendlink_list_c', $dou->get_friendlink_list(3));
$smarty->assign('link', get_link_list());
$smarty->assign('index', $index);
$smarty->assign('recommend_product', $dou->get_list('product', 'ALL', $_DISPLAY['home_product'], 'sort DESC'));
$smarty->assign('recommend_article', $dou->get_list('article', 'ALL', $_DISPLAY['home_article'], 'sort DESC'));

//add nowenjun
// var_dump($dou->get_list('article', '1', 10, 'sort DESC'));exit;
$smarty->assign('zxyw_article', $dou->get_list('article', '1', 10, 'sort DESC'));//中心要闻
$smarty->assign('gsgg_article', $dou->get_list('article', '2', 5, 'sort DESC'));//公示公告
$smarty->assign('pxtz_article', $dou->get_list('article', '3', 5, 'sort DESC'));//培训通知
$smarty->assign('aqpx_article', $dou->get_list('article', '4', 6, 'sort DESC'));//安全培训
$smarty->assign('aqsb_article', $dou->get_list('article', '5', 6, 'sort DESC'));//安全设备设施检测检验
$smarty->assign('zyws_article', $dou->get_list('article', '6', 6, 'sort DESC'));//职业卫生技术服务
$smarty->assign('aqsq_article', $dou->get_list('article', '7', 6, 'sort DESC'));//安全社区技术支持
$smarty->assign('aqjs_article', $dou->get_list('article', '8', 6, 'sort DESC'));//安全技术服务
$smarty->assign('sfjd_article', $dou->get_list('article', '9', 6, 'sort DESC'));//司法鉴定
$smarty->assign('gczl_article', $dou->get_list('article', '44', 6, 'sort DESC'));//工程质量监督
$smarty->assign('aqsc_article', $dou->get_list('article', '11', 6, 'sort DESC'));//安全生产物联网技术
$smarty->assign('dqjs_article', $dou->get_list('article', '12', 6, 'sort DESC'));//党群建设

$smarty->display('index.dwt');

/**
 * +----------------------------------------------------------
 * 获取下级幻灯列表
 * +----------------------------------------------------------
 */
function get_link_list() {
    $sql = "SELECT * FROM " . $GLOBALS['dou']->table('link') . " ORDER BY sort ASC, id ASC";
    $query = $GLOBALS['dou']->query($sql);
    while ($row = $GLOBALS['dou']->fetch_array($query)) {
        $link_list[] = array (
                "id" => $row['id'],
                "link_name" => $row['link_name'],
                "link_url" => $row['link_url'],
                "sort" => $row['sort'] 
        );
    }
    return $link_list;
}
?>