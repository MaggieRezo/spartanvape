<?php /* Smarty version Smarty-3.1.19, created on 2017-06-06 19:25:08
         compiled from "/usr/home/spartanvape.com/web/admin1613/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1044577275936e5749cc267-90309615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e509bb8ec4cb7153e5b62be65fb06aae2fa23a7' => 
    array (
      0 => '/usr/home/spartanvape.com/web/admin1613/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1496732812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1044577275936e5749cc267-90309615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5936e574a03ef2_27435128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936e574a03ef2_27435128')) {function content_5936e574a03ef2_27435128($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
