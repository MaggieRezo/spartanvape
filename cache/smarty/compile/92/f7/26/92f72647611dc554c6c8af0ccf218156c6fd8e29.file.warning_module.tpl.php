<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 14:36:45
         compiled from "/usr/home/spartanvape.com/web/admin1613/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5644194995937f35d80c466-08148385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f72647611dc554c6c8af0ccf218156c6fd8e29' => 
    array (
      0 => '/usr/home/spartanvape.com/web/admin1613/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1496732812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5644194995937f35d80c466-08148385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937f35d818ef4_04909225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937f35d818ef4_04909225')) {function content_5937f35d818ef4_04909225($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
