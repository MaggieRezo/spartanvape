<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:16:29
         compiled from "/usr/home/spartanvape.com/web/modules/pk_productscarousel_single/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11524677855937b65d884ba1-60771872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ef9a81ecb29767c3ba2f8002499eaffa6f5f1c' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_productscarousel_single/header.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11524677855937b65d884ba1-60771872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sc_products_visible' => 0,
    'sc_autoplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b65d8a9352_63258856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b65d8a9352_63258856')) {function content_5937b65d8a9352_63258856($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'favadd')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'favadd'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'has been added to your favorites','mod'=>'pk_productsCarousel_single','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'favadd'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'favrem')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'favrem'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'has been removed from your favorites','mod'=>'pk_productsCarousel_single','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'favrem'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productsNum_s'=>$_smarty_tpl->tpl_vars['sc_products_visible']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('sc_autoplay_s'=>$_smarty_tpl->tpl_vars['sc_autoplay']->value),$_smarty_tpl);?>
<?php }} ?>
