<?php /* Smarty version 2.6.26, created on 2017-07-21 10:11:11
         compiled from article_category.dwt */ ?>
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
    <link rel="stylesheet" href="http://scaqkj.com.cn/theme/default/css/wb.css" />
    <script src="http://scaqkj.com.cn/theme/default/js/jquery-1.7.2.min.js"></script>
    <script src="http://scaqkj.com.cn/theme/default/js/unslider.min.js"></script>
    <script src="http://scaqkj.com.cn/theme/default/js/index.js"></script>
      <link rel="stylesheet" href="http://scaqkj.com.cn/theme/default/css/slidebar.css">
  </head>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div class="content">
            <div class="clearfix textbox">
              <?php if ($this->_tpl_vars['article_count']): ?>
			    <?php if ($this->_tpl_vars['article_countx']): ?>
               <div class="Rcard2" style="margin-top: 0;height: 300px;">
				   <p class="titlehead_navname clearfix">
                   <span class="titlehead_icon"></span>
                    <span class="titlehead_nav">当前位置：<?php echo $this->_tpl_vars['mbx']; ?>
</span>
                      </p>
                </div>
				 
				<?php else: ?>
			  <div class="left" style="float:right;">
			  <div class="Rcard2" style="margin-top: 0;height: 300px;">
			                    <p class="titlehead_navname clearfix">
                   <span class="titlehead_icon"></span>
                    <span class="titlehead_nav">当前位置：<?php echo $this->_tpl_vars['mbx']; ?>
</span>
         
                  </p>

               <?php endif; ?>

                <?php if ($this->_tpl_vars['article_list']): ?>
                  <ul class="fuck2">
                  <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                    <li class="clearfix">
                      <a href="<?php echo $this->_tpl_vars['item']['url']; ?>
">
                        <span><?php echo $this->_tpl_vars['item']['title']; ?>
</span>

                      </a>
                        <div class="Ftime">
                            <div>
                            <span class="mounth"><?php echo $this->_tpl_vars['item']['add_time_short']; ?>
</span> 
                          </div>
                        </div>
     
                    </li>
                    <?php endforeach; endif; unset($_from); ?>
                  </ul>
                  </div>
                  <?php endif; ?>
                  <p style="margin-left: 30px;margin-top: 10px;">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  </p>
              </div>
              <div class="right" style="margin-left: 0;">
                  <?php if ($this->_tpl_vars['child_list']): ?>
                <div class="Rcard2" style="margin-top: 0;height: 250px;">
                  <p class="title clearfix">
                    <span class="titlehead"><?php echo $this->_tpl_vars['cate_info']['cat_name']; ?>
</span>
                    <!-- <a href="" class="gt">&gt;&gt;</a> -->
                  </p>
                  <ul class="fuck">
                    <?php $_from = $this->_tpl_vars['child_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                    <?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['child_count']): ?>
                    <li style="border-bottom: none;"><a href="article_category.php?id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
" ><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</a></li>
                    <?php else: ?>
                    <li><a href="article_category.php?id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
"><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</a></li>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                  </ul>
                </div>
			
			
			           
                

				
		  <?php else: ?>
		<div class="Rcard2" style="margin-top: 0;height: 250px;">
                  <p class="title clearfix">
                    <span class="titlehead"><?php if ($this->_tpl_vars['new_name']['cat_name']): ?><?php echo $this->_tpl_vars['new_name']['cat_name']; ?>
<?php else: ?>安监局安全技术中心<?php endif; ?></span>
                    <!-- <a href="" class="gt">&gt;&gt;</a> -->
                  </p>
                  <ul class="fuck">
                    <?php $_from = $this->_tpl_vars['new_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                    <?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['new_count'] - 1): ?>
                    <li style="border-bottom: none;" <?php if ($this->_tpl_vars['cate_info']['cat_id'] == $this->_tpl_vars['item']['cat_id']): ?>class="active"<?php endif; ?> ><a href="article_category.php?id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
" ><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</a></li>
                    <?php else: ?>
                    <li <?php if ($this->_tpl_vars['cate_info']['cat_id'] == $this->_tpl_vars['item']['cat_id']): ?>class="active"<?php endif; ?> ><a href="article_category.php?id=<?php echo $this->_tpl_vars['item']['cat_id']; ?>
"><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</a></li>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                  </ul>
                </div>
                  <?php endif; ?>
                
                      <?php else: ?>
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
                </div>
              </div>
              <?php endif; ?>
            </div>  
    </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footeraj.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </body>