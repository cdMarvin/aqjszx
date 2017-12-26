<?php /* Smarty version 2.6.26, created on 2017-07-21 10:10:41
         compiled from index.dwt */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.dwt', 61, false),)), $this); ?>
﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
    <meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
" />
    <title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
    <link rel="stylesheet" href="http://www.scaqkj.com.cn/theme/default/css/wb.css" />
   <SCRIPT src="http://www.scaqkj.com.cn/theme/default/js/fd.js" type=text/javascript charset="utf-8"></SCRIPT>
      <link rel="stylesheet" href="http://www.scaqkj.com.cn/theme/default/css/slidebar.css">
	  <link rel="stylesheet" href="http://www.scaqkj.com.cn/theme/default/css/guanggao.css">
      <SCRIPT src="http://www.scaqkj.com.cn/theme/default/js/8!tool1.js" type=text/javascript charset="utf-8"></SCRIPT>
<SCRIPT src="http://www.scaqkj.com.cn/theme/default/js/30!jui.js" type=text/javascript charset="utf-8"></SCRIPT>
<SCRIPT src="http://www.scaqkj.com.cn/theme/default/js/9!mokoutil.js" type=text/javascript charset="utf-8"></SCRIPT>
<LINK href="http://www.scaqkj.com.cn/theme/default/css/lanrenzhijia.css" type=text/css rel=stylesheet>
<SCRIPT src="http://www.scaqkj.com.cn/theme/default/js/lanrenzhijia.js" type=text/javascript charset="utf-8"></SCRIPT>
  </head>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="content">
            <div class="clearfix textbox">
            	<div class="left">
            		<div class="Lcard1 clearfix">
            			<p class="title clearfix">
            				<span><a class="titlehead noline" href="article_category.php?id=1">中心要闻</a></span>
            				<a href="article_category.php?id=1" class="gt">&gt;&gt;</a>
            			</p>
            			<div class="banner2box" style="float: left;">
            				<div class="banner2">
                                <?php if ($this->_tpl_vars['zxyw_article']): ?>
                                <ul class="banner2Ul clearfix">
                                    <?php $_from = $this->_tpl_vars['zxyw_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                    <?php if ($this->_tpl_vars['item']['image']): ?>
			                        <li>
			                            <a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="unsliderLink">
											<img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" width="460" height="316">
			                            </a>
			                        </li>
                                    <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
			                    </ul>
                                <?php endif; ?>
			                    <div class="bannerleftinfo clearfix" style="padding-left: 10px;width: 440px;">
                                    <?php if ($this->_tpl_vars['zxyw_article']): ?>
			                        <ol class="dots controlUl clearfix" style="float: right;">
                                        <?php $_from = $this->_tpl_vars['zxyw_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                        <?php if ($this->_tpl_vars['item']['image']): ?>
			                        	<li class="dot"></li>
                                        <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>							
			                        </ol>
                                    <?php endif; ?>
			                    </div>
            				</div>
            			</div>
            			<div class="ss" id="ss">
            				<?php if ($this->_tpl_vars['zxyw_article']): ?>
            				<?php $_from = $this->_tpl_vars['zxyw_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> 
            				<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="newslink">
	        					<span class="contents"><?php echo $this->_tpl_vars['item']['title']; ?>
</span>
	        					<span class="times mr10"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m.%d') : smarty_modifier_date_format($_tmp, '%m.%d')); ?>
</span>
        					</a>
            				<?php endforeach; endif; unset($_from); ?> 
        					<?php endif; ?>
            			</div>
            		</div>
            		<div class="Lcard1 clearfix" style="width: 890px;height:113px;margin-top:10px;">
            			<div class=wrap>
                            <div class=moko-slider>
                                <div class=frame style="width:890px;height:113px;">
                                    <ul>
                                        <?php $_from = $this->_tpl_vars['newshow_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                        <li><A hideFocus title="<?php echo $this->_tpl_vars['item']['show_name']; ?>
"  href="<?php echo $this->_tpl_vars['item']['show_link']; ?>
" target=_blank><IMG src="<?php echo $this->_tpl_vars['item']['show_img']; ?>
" style="width:890px;height:113px;"></A> </li>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
            	   </div>
                </div>
            	<div class="right clearfix">
            		<div class="Rcard1">
                        <?php if ($this->_tpl_vars['gsgg_article']): ?>
                        <p class="title clearfix">
                            <span><a class="titlehead noline" href="article_category.php?id=2">公示公告</a></span>
                            <a href="article_category.php?id=2" class="gt">&gt;&gt;</a>
                        </p>
						<div style="overflow: hidden;height: 136px;" id="ceng1">
    						<ul class="newsul" style="margin-top: 0px;" id="ceng2">
                				<?php $_from = $this->_tpl_vars['gsgg_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> 
                    			<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="newslink1 clearfix">
                					<span class="contents1"><?php echo $this->_tpl_vars['item']['title']; ?>
</span>
                					<span class="times1"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m.%d') : smarty_modifier_date_format($_tmp, '%m.%d')); ?>
</span>
                				</a>
                				<?php endforeach; endif; unset($_from); ?> 
    						 </ul>
							 <?php endif; ?>
            		    </div>
                    </div>
            		<div class="Rcard2" style="z-index:1">
            			<p class="title clearfix">
            				<span><a href="article_category.php?id=3" class="titlehead noline">培训通知</a></span>
            				<a href="article_category.php?id=3" class="gt">&gt;&gt;</a>
            			</p>
            			<?php if ($this->_tpl_vars['pxtz_article']): ?>
						<div style="overflow: hidden;height: 136px;" id="ceng3">
						<ul class="newsu1" style="margin-top: 0px;" id="ceng4">
        				<?php $_from = $this->_tpl_vars['pxtz_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> 
					            			<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="newslink1 clearfix">
							<span class="contents1"><?php echo $this->_tpl_vars['item']['title']; ?>
</span>
        					<?php echo $this->_tpl_vars['item']['add_titletime']; ?>

        					<span class="times1"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m.%d') : smarty_modifier_date_format($_tmp, '%m.%d')); ?>
</span>
        				</a>
        				<?php endforeach; endif; unset($_from); ?> 
						</ul>
    					<?php endif; ?>
					  </div>
            		</div>
            		<div class="Rcard3   clearfix">
				
            		   	<!--<div class="pso clearfix" > <img src="http://www.scaqkj.com.cn/http://www.scaqkj.com.cn/theme/default/images/jm_11.png)" style="width:90px;height:13px;"><a href="http://www.scaqkj.com.cn/oa_login/" class="otherLink" title="中心办公OA系统"></a></div>
						<div class="pso clearfix" ><div class="pso2" ><a href="" class="otherLink" style="background-image: url(http://www.scaqkj.com.cn/theme/default/images/c1.png);" title="综合监督平台"></a></div><div class="pso1 clearfix"><a href="">综合监管平台</a></div></div>
    	
            		    <div class="pso clearfix" style="clear:both;" ><div class="pso2" style="overflow:hidden; clear:both;"><a href="http://www.scaqkj.com.cn/oa_login/" class="otherLink" style="background-image: url(http://www.scaqkj.com.cn/theme/default/images/c4.png);margin-right: 0;" title="中心办公OA系统"></a></div><div class="pso1 clearfix"><a href="http://www.scaqkj.com.cn/oa_login/">中心办公OA系统</a></div></div>
						<div class="pso clearfix" ><div class="pso2" ><a href="" class="otherLink" style="background-image: url(http://www.scaqkj.com.cn/theme/default/images/c1.png);" title="综合监督平台"></a></div><div class="pso1 clearfix"><a href="">综合监管平台</a></div></div>
                        <div class="pso clearfix"><div class="pso2" ><a href="http://125.70.227.150/mk/" class="otherLink" style="background-image: url(http://www.scaqkj.com.cn/theme/default/images/c2.png);" title="矿用品检测系统"></a></div><div class="pso1 clearfix"><a href="http://125.70.227.150/mk/">矿用品检测系统</a></div></div>
                        <div class="pso clearfix"><div class="pso2" ><a href="article_category.php?id=59" class="otherLink" style="background-image: url(http://www.scaqkj.com.cn/theme/default/images/c3.png);" title="职业病危害评价公开系统"></a></div><div class="pso1 "><a href="article_category.php?id=59">职业病评价公开系统</a></div></div>
        --> 	
				<div class="psoss clearfix" style="clear:both;width:300px;" >
				<ul>
				<li class="psoss"><a href="http://www.scaqkj.com.cn/oa_login/"><img src="http://www.scaqkj.com.cn/theme/default/images/jm_11.png" /></a></li>
				<li class="psoss"><a href="http://202.61.88.159:8080/"><img src="http://www.scaqkj.com.cn/theme/default/images/jm_13.jpg" /></a></li>
				<li class="psoss"><a href="http://125.70.227.150/mk/"><img src="http://www.scaqkj.com.cn/theme/default/images/jm_15.jpg" /></a></li>
				<li class="psoss"><a href="http://www.scaqkj.com.cn/article_category.php?id=59"><img src="http://www.scaqkj.com.cn/theme/default/images/jm_17.jpg" /></a></li>
				<li class="psoss"><a href="http://www.scaqkj.com.cn/article.php?id=1078"><img src="http://www.scaqkj.com.cn/theme/default/images/jm_29.jpg" /></a></li>
				<li class="psoss"><a href="http://www.buidea.com/"><img src="http://www.scaqkj.com.cn/theme/default/images/jm_31.jpg"  /></a></li>
				<li class="psoss"><a href="#"><img src="http://www.scaqkj.com.cn/theme/default/images/jm_33.jpg"  /></a></li>
				<li class="psoss"><a href="http://182.140.197.59/"><img src="http://www.scaqkj.com.cn/theme/default/images/jm_35.jpg"  /></a></li>
				</ul>
			    </div>
            		</div>
            	</div>
            </div>	
            <div class="clearfix" style="margin-left: -9px;clear:both">
        		<div class="Lcard">
        			<p class="title clearfix">
        				<span><a href="article.php?id=27" class="titlehead noline">安全培训</a></span>
        				<a href="article_category.php?id=4" class="gt">&gt;&gt;</a>
        			</p>
        			<?php if ($this->_tpl_vars['aqpx_article']): ?>
    				<?php $_from = $this->_tpl_vars['aqpx_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> 
    				<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="newslink2 clearfix">
    					<span class="contents2"><?php echo $this->_tpl_vars['item']['title']; ?>
</span>
    					<span class="times"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m.%d') : smarty_modifier_date_format($_tmp, '%m.%d')); ?>
</span>
    				</a>
    				<?php endforeach; endif; unset($_from); ?> 
    				<?php endif; ?>
        		</div>
       			<div class="Lcard">
        			<p class="title clearfix">
        				<span><a href="article.php?id=41" class="titlehead noline">安全设备设施检测检验</a></span>
        				<a href="article_category.php?id=5" class="gt">&gt;&gt;</a>
        			</p>
        			<?php if ($this->_tpl_vars['aqsb_article']): ?>
    				<?php $_from = $this->_tpl_vars['aqsb_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> 
    				<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="newslink2 clearfix">
    					<span class="contents2"><?php echo $this->_tpl_vars['item']['title']; ?>
</span>
    					<span class="times"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m.%d') : smarty_modifier_date_format($_tmp, '%m.%d')); ?>
</span>
    				</a>
    				<?php endforeach; endif; unset($_from); ?> 
    				<?php endif; ?>
        		</div>
        		<div class="Lcard">
        			<p class="title clearfix">
                        <span><a href="article.php?id=42" class="titlehead noline">职业卫生技术服务</a></span>
        				<a href="article_category.php?id=6" class="gt">&gt;&gt;</a>
        			</p>
        			<?php if ($this->_tpl_vars['zyws_article']): ?>
    				<?php $_from = $this->_tpl_vars['zyws_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> 
    				<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="newslink2 clearfix">
    					<span class="contents2"><?php echo $this->_tpl_vars['item']['title']; ?>
</span>
    					<span class="times"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m.%d') : smarty_modifier_date_format($_tmp, '%m.%d')); ?>
</span>
    				</a>
    				<?php endforeach; endif; unset($_from); ?> 
    				<?php endif; ?>
        		</div>
        		<div class="Lcard">
        			<p class="title clearfix">
                        <span><a href="article.php?id=26" class="titlehead noline">安全社区技术支持</a></span>
        				<a href="article_category.php?id=7" class="gt">&gt;&gt;</a>
        			</p>
        			<?php if ($this->_tpl_vars['aqsq_article']): ?>
    				<?php $_from = $this->_tpl_vars['aqsq_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> 
    				<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="newslink2 clearfix">
    					<span class="contents2"><?php echo $this->_tpl_vars['item']['title']; ?>
</span>
    					<span class="times"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m.%d') : smarty_modifier_date_format($_tmp, '%m.%d')); ?>
</span>
    				</a>
    				<?php endforeach; endif; unset($_from); ?> 
    				<?php endif; ?>
        		</div>
        		<div class="Lcard">
        			<p class="title clearfix">
                        <span><a href="article.php?id=40" class="titlehead noline">安全技术服务</a></span>
        				<a href="article_category.php?id=8" class="gt">&gt;&gt;</a>
        			</p>
        			<?php if ($this->_tpl_vars['aqjs_article']): ?>
    				<?php $_from = $this->_tpl_vars['aqjs_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> 
    				<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="newslink2 clearfix">
    					<span class="contents2"><?php echo $this->_tpl_vars['item']['title']; ?>
</span>
    					<span class="times"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m.%d') : smarty_modifier_date_format($_tmp, '%m.%d')); ?>
</span>
    				</a>
    				<?php endforeach; endif; unset($_from); ?> 
    				<?php endif; ?>
        		</div>
        		<div class="Lcard">
        			<p class="title clearfix">
                        <span><a href="article.php?id=29" class="titlehead noline">司法鉴定</a></span>
        				<a href="article_category.php?id=9" class="gt">&gt;&gt;</a>
        			</p>
        			<?php if ($this->_tpl_vars['sfjd_article']): ?>
    				<?php $_from = $this->_tpl_vars['sfjd_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> 
    				<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="newslink2 clearfix">
    					<span class="contents2"><?php echo $this->_tpl_vars['item']['title']; ?>
</span>
    					<span class="times"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m.%d') : smarty_modifier_date_format($_tmp, '%m.%d')); ?>
</span>
    				</a>
    				<?php endforeach; endif; unset($_from); ?> 
    				<?php endif; ?>
        		</div>
        		<div class="Lcard">
        			<p class="title clearfix">
                        <span><a href="article.php?id=72" class="titlehead noline">工程质量监督</a></span>
        				<a href="article_category.php?id=44" class="gt">&gt;&gt;</a>
        			</p>
        			<?php if ($this->_tpl_vars['gczl_article']): ?>
    				<?php $_from = $this->_tpl_vars['gczl_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> 
    				<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="newslink2 clearfix">
    					<span class="contents2"><?php echo $this->_tpl_vars['item']['title']; ?>
</span>
    					<span class="times"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m.%d') : smarty_modifier_date_format($_tmp, '%m.%d')); ?>
</span>
    				</a>
    				<?php endforeach; endif; unset($_from); ?> 
    				<?php endif; ?>
        		</div>
        		<div class="Lcard">
        			<p class="title clearfix">
                        <span><a href="article_category.php?id=11" class="titlehead noline">政策法规</a></span>
        				<a href="article_category.php?id=11" class="gt">&gt;&gt;</a>
        			</p>
        			<?php if ($this->_tpl_vars['aqsc_article']): ?>
    				<?php $_from = $this->_tpl_vars['aqsc_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> 
    				<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="newslink2 clearfix">
    					<span class="contents2"><?php echo $this->_tpl_vars['item']['title']; ?>
</span>
    					<span class="times"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m.%d') : smarty_modifier_date_format($_tmp, '%m.%d')); ?>
</span>
    				</a>
    				<?php endforeach; endif; unset($_from); ?> 
    				<?php endif; ?>
        		</div>
        		<div class="Lcard">
        			<p class="title clearfix">
                        <span><a href="article_category.php?id=12" class="titlehead noline">党群建设</a></span>
        				<a href="article_category.php?id=12" class="gt">&gt;&gt;</a>
        			</p>
        			<?php if ($this->_tpl_vars['dqjs_article']): ?>
    				<?php $_from = $this->_tpl_vars['dqjs_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> 
    				<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="newslink2 clearfix">
    					<span class="contents2"><?php echo $this->_tpl_vars['item']['title']; ?>
</span>
    					<span class="times"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m.%d') : smarty_modifier_date_format($_tmp, '%m.%d')); ?>
</span>
    				</a>
    				<?php endforeach; endif; unset($_from); ?> 
    				<?php endif; ?>
        		</div>
        	<div class="honner">
	        		<p class="title clearfix">
	        			<span class="titlehead">图片展示</span>
	        		</p>
	        		<div class="bannerhonner">
                        <ul class="clearfix">
                            <?php $_from = $this->_tpl_vars['show_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		        			<li><a href="<?php echo $this->_tpl_vars['item']['show_link']; ?>
"><img src="<?php echo $this->_tpl_vars['item']['show_img']; ?>
" alt="<?php echo $this->_tpl_vars['item']['show_name']; ?>
" /></br><?php echo $this->_tpl_vars['item']['show_name']; ?>
</a></li>
		        			<?php endforeach; endif; unset($_from); ?>
		        		</ul>
	        		</div>
            	</div>
            	<div class="Lcard">
        			<p class="title clearfix">
        				<span class="titlehead">视频展示</span>
        			</p>	
    				<div style="margin-top: 10px;margin-left:60px">
						<embed width="230" height="175" align="center" name="plugin" src="http://www.scaqkj.com.cn/public/images/2014050501.wmv"  autostart="false" loop="" type="video/x-ms-wmv" />
        			</div>
        		</div>
                <div class="friendlink">
                    <p class="title clearfix">
                        <span class="titlehead">友情链接</span>
                    </p>
                    <div>
                        <?php if ($this->_tpl_vars['friendlink_list_a']): ?>
                        <select name="a">
                            <option value="A">上级单位</option>
                            <?php $_from = $this->_tpl_vars['friendlink_list_a']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                            <option value="<?php echo $this->_tpl_vars['item']['show_link']; ?>
"><?php echo $this->_tpl_vars['item']['show_name']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['friendlink_list_b']): ?>
                        <select name="b">
                            <option value="B">成员单位</option>
                            <?php $_from = $this->_tpl_vars['friendlink_list_b']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                            <option value="<?php echo $this->_tpl_vars['item']['show_link']; ?>
"><?php echo $this->_tpl_vars['item']['show_name']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['friendlink_list_c']): ?>
                        <select name="c">
                            <option value="C">相关链接</option>
                            <?php $_from = $this->_tpl_vars['friendlink_list_c']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                            <option value="<?php echo $this->_tpl_vars['item']['show_link']; ?>
"><?php echo $this->_tpl_vars['item']['show_name']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                        <?php endif; ?>
                    </div>
                </div>
        	</div>
		</div>
    <script src="http://www.scaqkj.com.cn/theme/default/js/jquery-1.7.2.min.js"></script>
    <script src="http://www.scaqkj.com.cn/theme/default/js/unslider.min.js"></script>
    <script src="http://www.scaqkj.com.cn/theme/default/js/index.js"></script>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footeraj.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<script src="http://www.scaqkj.com.cn/theme/default/js/dgg.js"></script>
</body>
</html>
