<?php /* Smarty version Smarty-3.1.19, created on 2017-06-06 19:25:13
         compiled from "/usr/home/spartanvape.com/web/themes/alysum/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18333466315936e579c35452-14707027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '021a6ee2f7f7c29010986f18b6ecadd76a4e7e69' => 
    array (
      0 => '/usr/home/spartanvape.com/web/themes/alysum/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18333466315936e579c35452-14707027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5936e579c4b046_21961975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936e579c4b046_21961975')) {function content_5936e579c4b046_21961975($_smarty_tpl) {?>
<p class="buttons_bottom_block"><a href="#" id="wishlist_button" <?php if ($_smarty_tpl->tpl_vars['page_name']->value!="product") {?>class="button"<?php }?> onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">&raquo; <?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a></p><?php }} ?>
