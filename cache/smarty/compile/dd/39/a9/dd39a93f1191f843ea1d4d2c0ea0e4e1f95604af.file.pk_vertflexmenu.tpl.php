<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:37
         compiled from "/usr/home/spartanvape.com/web/modules/pk_vertflexmenu/pk_vertflexmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6340091735937bb512de452-99323675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd39a93f1191f843ea1d4d2c0ea0e4e1f95604af' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_vertflexmenu/pk_vertflexmenu.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6340091735937bb512de452-99323675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vertflexmenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb512e7622_34590072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb512e7622_34590072')) {function content_5937bb512e7622_34590072($_smarty_tpl) {?><div class="vert-flexmenu-container block list-module">	
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'pk_vertflexmenu'),$_smarty_tpl);?>
</h4>
	<div class="vert-flexmenu">
		<ul><?php echo $_smarty_tpl->tpl_vars['vertflexmenu']->value;?>
</ul>
	</div>
</div><?php }} ?>
