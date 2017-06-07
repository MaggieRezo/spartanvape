<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:37
         compiled from "/usr/home/spartanvape.com/web/modules/pk_blocklinkfooter/pk_blocklinkfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2907019535937bb516783d4-48558631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ca59f47d3ae17d4df15c1492bb9b7d82de42efe' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_blocklinkfooter/pk_blocklinkfooter.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2907019535937bb516783d4-48558631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'title' => 0,
    'blocklinkfooter_links' => 0,
    'lang' => 0,
    'blocklink_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb516afc83_60510197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb516afc83_60510197')) {function content_5937bb516afc83_60510197($_smarty_tpl) {?><!-- Block links module -->
<div id="links_block_footer" class="block">
	<div class="block_content">
		<h4 class="dropdown-cntrl dd_el_mobile">
		<?php if ($_smarty_tpl->tpl_vars['url']->value=="!") {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

		<?php }?>
		</h4>
		<ul class="block_content dropdown-content dd_container_mobile">
		<?php  $_smarty_tpl->tpl_vars['blocklink_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blocklink_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blocklinkfooter_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blocklink_link']->key => $_smarty_tpl->tpl_vars['blocklink_link']->value) {
$_smarty_tpl->tpl_vars['blocklink_link']->_loop = true;
?>
			<?php if (isset($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value])) {?> 
			<li><a href="<?php echo htmlentities($_smarty_tpl->tpl_vars['blocklink_link']->value['url']);?>
"<?php if ($_smarty_tpl->tpl_vars['blocklink_link']->value['newWindow']) {?> onclick="window.open(this.href);return false;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value];?>
</a></li>
			<?php }?>
		<?php } ?>
		</ul>
	</div>
</div>
<!-- Block links module -->
<?php }} ?>
