<?php /* Smarty version 2.6.26, created on 2017-07-21 15:03:24
         compiled from search.dwt */ ?>
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
      <link rel="stylesheet" href="http://www.scaqkj.com.cn/theme/default/css/slidebar.css">
  </head>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="content">
            <div class="clearfix textbox">
              <div class="left" style="float: right;">
                <div class="Rcard2" style="margin-top: 0;height: 300px;">
                  <p class="title clearfix">
                    <span class="titlehead"><?php echo $this->_tpl_vars['ur_here']; ?>
</span>
                  </p>
                  <?php if ($this->_tpl_vars['search_list']): ?>
                  <ul class="fuck2">
                  <?php $_from = $this->_tpl_vars['search_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                    <li>
                      <a href="<?php echo $this->_tpl_vars['item']['url']; ?>
">
                        <span>&gt;<?php echo $this->_tpl_vars['item']['title']; ?>
</span>
                        <p class="cons">
                          <?php echo $this->_tpl_vars['item']['description']; ?>

                        </p>
                        <div class="Ftime">
                          <div class="clearfix">
                            <span class="day"><?php echo $this->_tpl_vars['item']['click']; ?>
</span>
                          </div>
                          <div>
                            <span class="mounth"><?php echo $this->_tpl_vars['item']['add_time_short']; ?>
</span> 
                          </div>
                          
                        </div>
                      </a>
                    </li>
                    <?php endforeach; endif; unset($_from); ?>
                  </ul>
                  <?php endif; ?>
                  <p style="margin-left: 30px;margin-top: 10px;">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  </p>

                </div>
              </div>
              <div class="right" style="margin-left: 0;">
                <div class="Rcard2" style="margin-top: 0;">
                  <p class="title clearfix">
                    <span class="titlehead">文章分类</span>
                  </p>
                  <?php if ($this->_tpl_vars['article_category']): ?>
                  <ul class="fuck">
                    <?php $_from = $this->_tpl_vars['article_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                    <li><a href="article_category.php?id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
" ><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                  </ul>
                  <?php endif; ?>
                </div>
              </div>
            </div>  
    </div>
    <script src="http://www.scaqkj.com.cn/theme/default/js/index.js"></script>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footeraj.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </body>