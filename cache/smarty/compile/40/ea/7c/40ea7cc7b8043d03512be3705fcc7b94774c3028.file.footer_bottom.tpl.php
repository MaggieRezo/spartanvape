<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:38
         compiled from "/usr/home/spartanvape.com/web/modules/pk_themesettings/views/frontend/footer_bottom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5529765375937bb521c0512-91415446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40ea7cc7b8043d03512be3705fcc7b94774c3028' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_themesettings/views/frontend/footer_bottom.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5529765375937bb521c0512-91415446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'soc' => 0,
    'name' => 0,
    's' => 0,
    'pay' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb522027a7_63503068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb522027a7_63503068')) {function content_5937bb522027a7_63503068($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['socials_in_footer']==1) {?>
<div id="socialnetworks">
<ul class="socialnetworks_menu dib">
<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['soc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
<li class="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 dib sec_bg"><a title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
" class="icon-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><svg class="dib svgic svgic-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><use xlink:href="#si-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></use></svg></a></li>
<?php } ?>
</ul>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['pay_in_footer']==1) {?>
<div id="payment-icons">
<ul class="dib">
<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pay']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
<li class="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
images/payment_icons/32/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.png" alt="" /></li>
<?php } ?>
</ul>
</div>
<?php }?><?php }} ?>
