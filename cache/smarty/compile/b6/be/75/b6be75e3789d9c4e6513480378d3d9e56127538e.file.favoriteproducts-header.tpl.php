<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:36
         compiled from "/usr/home/spartanvape.com/web/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19432781765937bb5015ab57-32126065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6be75e3789d9c4e6513480378d3d9e56127538e' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1496732849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19432781765937bb5015ab57-32126065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb5018eff1_97486511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb5018eff1_97486511')) {function content_5937bb5018eff1_97486511($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add')));?>
';
	var favorite_products_url_remove = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),true));?>
';
<?php if (isset($_GET['id_product'])) {?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>
