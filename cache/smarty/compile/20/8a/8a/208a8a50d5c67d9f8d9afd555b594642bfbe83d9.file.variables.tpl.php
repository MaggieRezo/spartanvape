<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:36
         compiled from "/usr/home/spartanvape.com/web/modules/pk_themesettings/views/frontend/variables.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4385189105937bb503e4d80-41672429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '208a8a50d5c67d9f8d9afd555b594642bfbe83d9' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_themesettings/views/frontend/variables.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4385189105937bb503e4d80-41672429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb504b0701_25549209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb504b0701_25549209')) {function content_5937bb504b0701_25549209($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('cookie_page'=>false),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('mobileBlocks'=>false),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('tooltips'=>false),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('scrolltotop'=>false),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('sticky'=>false),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('use_cookies'=>false),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('load_effect'=>false),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('invert_logo'=>false),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_bg'=>$_smarty_tpl->tpl_vars['theme_settings']->value['sliderbg']),$_smarty_tpl);?>
<?php if (($_smarty_tpl->tpl_vars['page_name']->value=="category")||($_smarty_tpl->tpl_vars['page_name']->value=="prices-drop")||($_smarty_tpl->tpl_vars['page_name']->value=="new-products")||($_smarty_tpl->tpl_vars['page_name']->value=="best-sales")||($_smarty_tpl->tpl_vars['page_name']->value=="search")||($_smarty_tpl->tpl_vars['page_name']->value=="manufacturer")) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('listing_view_buttons'=>true),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['tooltips']==1&&$_smarty_tpl->tpl_vars['theme_settings']->value['browser']=='') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('tooltips'=>true),$_smarty_tpl);?>
<?php }?><?php if (($_smarty_tpl->tpl_vars['theme_settings']->value['toTop']==1)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('scrolltotop'=>true),$_smarty_tpl);?>
<?php }?><?php if (($_smarty_tpl->tpl_vars['theme_settings']->value['sticky_menu']==1)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('sticky'=>true),$_smarty_tpl);?>
<?php }?><?php if (($_smarty_tpl->tpl_vars['theme_settings']->value['mobileBlocks']==1)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('mobileBlocks'=>true),$_smarty_tpl);?>
<?php }?><?php if (($_smarty_tpl->tpl_vars['theme_settings']->value['use_cookie']==1)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('use_cookies'=>true),$_smarty_tpl);?>
<?php }?><?php if (($_smarty_tpl->tpl_vars['theme_settings']->value['cookie_page']!='')) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('cookie_page'=>$_smarty_tpl->tpl_vars['theme_settings']->value['cookie_page']),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('load_effect'=>$_smarty_tpl->tpl_vars['theme_settings']->value['load_effect']),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'cookie_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'cookie_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'We are using Cookies. By browsing our websites, cookies will be stored on your computer. Please see our','mod'=>'pk_themesettings','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'cookie_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'cookie_link')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'cookie_link'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Cookie Policy','mod'=>'pk_themesettings','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'cookie_link'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'cookie_accept')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'cookie_accept'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Accept ','mod'=>'pk_themesettings','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'cookie_accept'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['load_effect']==false) {?>
<style>.no-touch .load-animate, #pk_funfacts_block li { opacity: 1 !important }</style>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'pleaselogin')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'pleaselogin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You must be logged in to manage your favorites','mod'=>'pk_themesettings','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'pleaselogin'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
