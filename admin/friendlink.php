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

// rec操作项的初始化
$rec = $check->is_rec($_REQUEST['rec']) ? $_REQUEST['rec'] : 'default';
                                                
// 赋值给模板
$smarty->assign('rec', $rec);
$smarty->assign('cur', 'friendlink');
$smarty->assign('ur_here', $_LANG['friendlink']);
$smarty->assign('show_list', $dou->get_friendlink_list(0));

/**
 * +----------------------------------------------------------
 * 幻灯列表
 * +----------------------------------------------------------
 */
if ($rec == 'default') {
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->set_token('show_add'));
    
    $smarty->display('friendlink.htm');
} 

/**
 * +----------------------------------------------------------
 * 幻灯添加处理
 * +----------------------------------------------------------
 */
elseif ($rec == 'insert') {
    if (empty($_POST['show_name']))
        $dou->dou_msg($_LANG['show_name'] . $_LANG['is_empty']);
    
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token'], 'show_add');
    
    $sql = "INSERT INTO " . $dou->table('friendlink') . " (id, cid, show_name, show_link, type, sort)" .
             " VALUES (NULL, '$_POST[cid]', '$_POST[show_name]', '$_POST[show_link]', 'pc', '$_POST[sort]')";
    $dou->query($sql);
    
    $dou->create_admin_log($_LANG['friendlink_add'] . ': ' . $_POST[show_name]);
    $dou->dou_msg($_LANG['friendlink_add_succes'], 'friendlink.php');
} 

/**
 * +----------------------------------------------------------
 * 幻灯编辑
 * +----------------------------------------------------------
 */
elseif ($rec == 'edit') {
    // 验证并获取合法的ID
    $id = $check->is_number($_REQUEST['id']) ? $_REQUEST['id'] : '';
    
    $query = $dou->select($dou->table('friendlink'), '*', '`id` = \'' . $id . '\'');
    $show = $dou->fetch_array($query);
    
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->set_token('show_edit'));
    
    // 赋值给模板
    $smarty->assign('id', $id);
    $smarty->assign('show', $show);
    
    $smarty->display('friendlink.htm');
} 

elseif ($rec == 'update') {
    if (empty($_POST['show_name']))
        $dou->dou_msg($_LANG['friendlink_name'] . $_LANG['is_empty']);
        
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token'], 'show_edit');
    
    $sql = "update " . $dou->table('friendlink') . " SET cid='$_POST[cid]', show_name='$_POST[show_name]',show_link = '$_POST[show_link]', sort = '$_POST[sort]' WHERE id = '$_POST[id]'";
    $dou->query($sql);
    
    $dou->create_admin_log($_LANG['friendlink_edit'] . ': ' . $_POST[show_name]);
    
    $dou->dou_msg($_LANG['friendlink_edit_succes'], 'friendlink.php');
} 

/**
 * +----------------------------------------------------------
 * 幻灯删除
 * +----------------------------------------------------------
 */
elseif ($rec == 'del') {
    // 验证并获取合法的ID
    $id = $check->is_number($_REQUEST['id']) ? $_REQUEST['id'] : $dou->dou_msg($_LANG['illegal'], 'friendlink.php');
    
    $show_name = $dou->get_one("SELECT show_name FROM " . $dou->table('friendlink') . " WHERE id = '$id'");
    
    if (isset($_POST['confirm']) ? $_POST['confirm'] : '') {
        $dou->create_admin_log($_LANG['friendlink_del'] . ': ' . $show_name);
        $dou->delete($dou->table('friendlink'), "id = $id", 'friendlink.php');
    } else {
        $_LANG['del_check'] = preg_replace('/d%/Ums', $show_name, $_LANG['del_check']);
        $dou->dou_msg($_LANG['del_check'], 'friendlink.php', '', '30', "friendlink.php?rec=del&id=$id");
    }
}

?>