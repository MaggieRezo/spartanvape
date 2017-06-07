<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:29:06
         compiled from "/usr/home/spartanvape.com/web/modules/pk_aboutus/pk_aboutus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9818911825937b9525a8284-37287686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2af0e8ab212795c4b01e6b949d5d116c9a759504' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_aboutus/pk_aboutus.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9818911825937b9525a8284-37287686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pk_aboutus' => 0,
    'homepage_logo' => 0,
    'image_path' => 0,
    'link' => 0,
    'image_width' => 0,
    'image_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b9526165d8_81031715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b9526165d8_81031715')) {function content_5937b9526165d8_81031715($_smarty_tpl) {?><!-- Module pk_aboutus -->
<div id="pk_aboutus_block_center" class="pk_aboutus_block homemodule load-animate">
	<?php if ($_smarty_tpl->tpl_vars['pk_aboutus']->value->body_home_logo_link) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pk_aboutus']->value->body_home_logo_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo stripslashes(htmlspecialchars($_smarty_tpl->tpl_vars['pk_aboutus']->value->body_title, ENT_QUOTES, 'UTF-8', true));?>
"><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['homepage_logo']->value) {?><img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['image_path']->value), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo stripslashes(htmlspecialchars($_smarty_tpl->tpl_vars['pk_aboutus']->value->body_title, ENT_QUOTES, 'UTF-8', true));?>
" <?php if ($_smarty_tpl->tpl_vars['image_width']->value) {?>width="<?php echo $_smarty_tpl->tpl_vars['image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['image_height']->value) {?>height="<?php echo $_smarty_tpl->tpl_vars['image_height']->value;?>
" <?php }?>/><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['pk_aboutus']->value->body_home_logo_link) {?></a><?php }?>
	<div class="pk_aboutus_text">
		<?php if ($_smarty_tpl->tpl_vars['pk_aboutus']->value->body_title) {?><h6 class="lmromancaps"><?php echo stripslashes($_smarty_tpl->tpl_vars['pk_aboutus']->value->body_title);?>
</h6><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pk_aboutus']->value->body_paragraph) {?><div class="rte"><?php echo stripslashes($_smarty_tpl->tpl_vars['pk_aboutus']->value->body_paragraph);?>
</div><?php }?>
	</div>
</div>
<!-- /Module pk_aboutus -->
<?php }} ?>
