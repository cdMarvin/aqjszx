<?php /* Smarty version 2.6.26, created on 2017-08-16 11:43:00
         compiled from friendlink.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $this->_tpl_vars['lang']['home']; ?>
<?php if ($this->_tpl_vars['ur_here']): ?> - <?php echo $this->_tpl_vars['ur_here']; ?>
 <?php endif; ?></title>
<meta name="Copyright" content="Douco Design." />
<link href="templates/public.css" rel="stylesheet" type="text/css">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "javascript.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</head>
<body>
<div id="dcWrap">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="dcLeft"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <div id="dcMain">
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ur_here.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   <div class="mainBox imgModule">
    <h3><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
    <tr>
       <th><?php echo $this->_tpl_vars['lang']['friendlink_add']; ?>
</th>
       <th><?php echo $this->_tpl_vars['lang']['friendlink_list']; ?>
</th>
     </tr>
     <tr>
      <td width="350" valign="top">
       <form action="friendlink.php?rec=<?php if ($this->_tpl_vars['show']): ?>update<?php else: ?>insert<?php endif; ?>"<?php if ($this->_tpl_vars['show']): ?> class="formEdit"<?php endif; ?> method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableOnebor">
         <tr>
          <td><b>友情链接分类</b>
            <select name="cid">
              <option <?php if ($this->_tpl_vars['show']['cid'] == 1): ?>selected="selected"<?php endif; ?> value="1">上级单位</option>
              <option <?php if ($this->_tpl_vars['show']['cid'] == 2): ?>selected="selected"<?php endif; ?> value="2">成员单位</option>
              <option <?php if ($this->_tpl_vars['show']['cid'] == 3): ?>selected="selected"<?php endif; ?> value="3">相关链接</option>
            </select>
          </td>
         </tr>
         <tr>
          <td><b><?php echo $this->_tpl_vars['lang']['friendlink_name']; ?>
</b>
<input type="text" name="show_name" value="<?php echo $this->_tpl_vars['show']['show_name']; ?>
" size="20" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td><b><?php echo $this->_tpl_vars['lang']['friendlink_link']; ?>
</b>
           <input type="text" name="show_link" value="<?php echo $this->_tpl_vars['show']['show_link']; ?>
" size="40" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td><b><?php echo $this->_tpl_vars['lang']['sort']; ?>
</b>
<input type="text" name="sort" value="<?php if ($this->_tpl_vars['show']['sort']): ?><?php echo $this->_tpl_vars['show']['sort']; ?>
<?php else: ?>50<?php endif; ?>" size="20" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td>
           <?php if ($this->_tpl_vars['show']): ?>
           <a href="show.php" class="btnGray"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
           <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['show']['id']; ?>
">
           <input type="hidden" name="show_img" value="<?php echo $this->_tpl_vars['show']['show_img']; ?>
">
           <?php endif; ?>
           <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
           <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
          </td>
         </tr>
        </table>
       </form>
      </td>
      <td valign="top">
       <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableOnebor">
        <tr>
         <td width="100">分类</td>
         <td width="100"><?php echo $this->_tpl_vars['lang']['friendlink_name']; ?>
</td>
         <td width="50" align="center"><?php echo $this->_tpl_vars['lang']['sort']; ?>
</td>
         <td width="80" align="center"><?php echo $this->_tpl_vars['lang']['handler']; ?>
</td>
        </tr>
        <?php $_from = $this->_tpl_vars['show_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['show_list']):
?>
        <tr<?php if ($this->_tpl_vars['show_list']['id'] == $this->_tpl_vars['id']): ?> class="active"<?php endif; ?>>
         <td align="center"><?php echo $this->_tpl_vars['show_list']['cname']; ?>
</td>
         <td><a target="_blank" href="<?php echo $this->_tpl_vars['show_list']['show_link']; ?>
"><?php echo $this->_tpl_vars['show_list']['show_name']; ?>
</a></td>
         <td align="center"><?php echo $this->_tpl_vars['show_list']['sort']; ?>
</td>
         <td align="center"><a href="friendlink.php?rec=edit&id=<?php echo $this->_tpl_vars['show_list']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['edit']; ?>
</a> | <a href="friendlink.php?rec=del&id=<?php echo $this->_tpl_vars['show_list']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['del']; ?>
</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
       </table>
      </td>
     </tr>
    </table>
   </div>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 </div>
</body>
</html>