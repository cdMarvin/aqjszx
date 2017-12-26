<?php /* Smarty version 2.6.26, created on 2017-08-14 23:45:29
         compiled from inc/search_article.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'inc/search_article.tpl', 4, false),)), $this); ?>
<div class="searchBox">
 <form name="search" method="get" action="<?php echo $this->_tpl_vars['site']['m_url']; ?>
">
  <input type="hidden" name="module" value="article">
  <input name="s" type="text" class="keyword" autocomplete="off" maxlength="128" value="<?php if ($this->_tpl_vars['keyword_article']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['keyword_article'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['search_article']; ?>
<?php endif; ?>" onclick="formClick(this,'<?php echo $this->_tpl_vars['lang']['search_article']; ?>
')">
  <input type="submit" class="btnSearch" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
">
 </form>
</div>