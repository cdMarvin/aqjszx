<?php /* Smarty version 2.6.26, created on 2017-07-21 16:21:22
         compiled from dou_msg.dwt */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if ($this->_tpl_vars['url']): ?>
<meta http-equiv="refresh" content="<?php echo $this->_tpl_vars['time']; ?>
; URL=<?php echo $this->_tpl_vars['url']; ?>
" />
<?php endif; ?>
<meta name="viewport" content="width=device-width,user-scalable=0,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link rel="apple-touch-icon-precomposed" href="<?php echo $this->_tpl_vars['site']['m_url']; ?>
data/logo-icon.png" >
<title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
" />
<meta name="generator" content="DouPHP v1.3" />
<link href="http://182.140.197.60:80/m/theme/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://182.140.197.60:80/m/theme/default/images/jquery.min.js"></script>
<script type="text/javascript" src="http://182.140.197.60:80/m/theme/default/images/global.js"></script>
<?php if (! $this->_tpl_vars['url']): ?>
<script type="text/javascript">
<?php echo '
function go() {
    window.history.go( - 1);
}
setTimeout("go()", 3000);
'; ?>

</script>
<?php endif; ?>
</head>
<body>
<div id="wrapper"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="douMsg">
  <dl>
   <dt><?php echo $this->_tpl_vars['text']; ?>
</dt>
   <dd><?php echo $this->_tpl_vars['cue']; ?>
</dd>
   <dd><a href="<?php if ($this->_tpl_vars['url']): ?><?php echo $this->_tpl_vars['url']; ?>
<?php else: ?>javascript:history.go(-1);<?php endif; ?>" class="back"><?php echo $this->_tpl_vars['lang']['dou_msg_back']; ?>
</a></dd>
  </dl>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
</body>
</html>