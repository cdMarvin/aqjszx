<?php /* Smarty version 2.6.26, created on 2017-07-21 10:10:41
         compiled from inc/header.tpl */ ?>
<body style="background: url(http://www.scaqkj.com.cn/theme/default/images/bg2.jpg) no-repeat;background-size: cover;" onload="akbzz_start()">

    <div class="content">
      <div class="header clearfix">
        <a href="/" class="logo" style="background: url(http://www.scaqkj.com.cn/theme/default/images/bg.png);"></a>
        <embed class="focusFont" src="http://www.scaqkj.com.cn/theme/default/images/flash.swf" quality="high" wmode="transparent" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" autostart="true" width="240" height="130">
      </div>
    </div>
    <div class="navbar">
      <div class="nav clearfix">
        <ul class="clearfix">
          <li><a href="<?php echo $this->_tpl_vars['site']['root_url']; ?>
" class="navlink"><?php echo $this->_tpl_vars['lang']['home']; ?>
</a></li>
          <?php $_from = $this->_tpl_vars['nav_middle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?> 
          <li>
            <a href="<?php echo $this->_tpl_vars['nav']['url']; ?>
" class="navlink"><?php echo $this->_tpl_vars['nav']['nav_name']; ?>
</a>
            <?php if ($this->_tpl_vars['nav']['child']): ?>
            <span class="sublink">
              <?php $_from = $this->_tpl_vars['nav']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['child']):
?>
                            <?php if ($this->_tpl_vars['child']['child']): ?>
                            <span class="sedlink">
                                <a href="<?php echo $this->_tpl_vars['child']['url']; ?>
" class="sublinkA" id="hassed"><?php echo $this->_tpl_vars['child']['nav_name']; ?>
</a>
                                <?php $_from = $this->_tpl_vars['child']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['children']):
?>
                                    <a href="<?php echo $this->_tpl_vars['children']['url']; ?>
" class="sedlinkA" style="top:<?php echo $this->_tpl_vars['key']*36; ?>
px;<?php if (strlen ( $this->_tpl_vars['children']['nav_name'] ) < 24): ?>line-height:35px;<?php endif; ?>"><?php echo $this->_tpl_vars['children']['nav_name']; ?>
</a>
                                <?php endforeach; endif; unset($_from); ?>
                            </span>
                            <?php else: ?>
              <a href="<?php echo $this->_tpl_vars['child']['url']; ?>
" class="sublinkA"><?php echo $this->_tpl_vars['child']['nav_name']; ?>
</a>
                            <?php endif; ?> 
              <?php endforeach; endif; unset($_from); ?>
            </span>
            <?php endif; ?>
          </li>
          <?php endforeach; endif; unset($_from); ?>
         
        </ul>
         <div class="searchdiv">
          <form action="<?php echo $this->_tpl_vars['site']['root_url']; ?>
" class="panel-2">
            <input type="text" class="search-title" name="s" id="search" />
            <input class="search-btn" name="submit" type="submit" value="" style="background-image: url(http://www.scaqkj.com.cn/theme/default/images/search.png);">
          </form>
        </div> 
      </div>
    </div>