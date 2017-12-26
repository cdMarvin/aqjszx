<?php /* Smarty version 2.6.26, created on 2017-07-21 10:11:00
         compiled from article.dwt */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'article.dwt', 32, false),)), $this); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
    <meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
" />
    <title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
    <link rel="stylesheet" href="http://www.scaqkj.com.cn/theme/default/css/wb.css" />
    <script src="http://www.scaqkj.com.cn/theme/default/js/jquery-1.7.2.min.js"></script>
    <script src="http://www.scaqkj.com.cn/theme/default/js/unslider.min.js"></script>
    <script src="http://www.scaqkj.com.cn/theme/default/js/index.js"></script>
      <link rel="stylesheet" href="http://www.scaqkj.com.cn/theme/default/css/slidebar.css">
  </head>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class="content">
           <div class="clearfix textbox">
              <div>
                <div class="Rcard2" style="margin-top: 0;height: 300px;">
                  <p class="titlehead_navname clearfix">
                   <span class="titlehead_icon"></span>
                    <span class="titlehead_nav">当前位置：<?php echo $this->_tpl_vars['mbx']; ?>
</span>
         
                  </p>


                  <h1 style="text-align: center;margin: 10px 0;"><?php echo $this->_tpl_vars['article']['title']; ?>
</h1>
                  <div class="contentedit"><p style="font-size: 16px;text-indent: 10px;"><?php echo $this->_tpl_vars['article']['content']; ?>
</p></div>
<div class="clear h30"></div>
             <div class="pre_next_navigation" >
                  <li>上一篇：
                    <?php if ($this->_tpl_vars['shang_page']): ?>
                    <a href="article.php?id=<?php echo $this->_tpl_vars['shang_page']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['shang_page']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30) : smarty_modifier_truncate($_tmp, 30)); ?>
</a>
                    <?php else: ?>
                    <span class="">没有了！！！</span>
                    <?php endif; ?>
                    </li>
                    <li>下一篇：
                    <?php if ($this->_tpl_vars['xia_page']): ?>
                    <a href="article.php?id=<?php echo $this->_tpl_vars['xia_page']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['xia_page']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 36) : smarty_modifier_truncate($_tmp, 36)); ?>
</a>
                    <?php else: ?>
                    <span >没有了！！！</span>
                    <?php endif; ?>
                       </li>
                  </div>
                </div>
              </div>
            </div>  
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footeraj.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </body>
</html>