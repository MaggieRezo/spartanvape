<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:38
         compiled from "/usr/home/spartanvape.com/web/modules/pk_flexmenu/pk_flexmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17585918645937bb52089998-10119328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '330ec712380efec9421ae6859e14c094484be4f7' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_flexmenu/pk_flexmenu.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17585918645937bb52089998-10119328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'theme_settings' => 0,
    'flexmenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb520d4251_15391245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb520d4251_15391245')) {function content_5937bb520d4251_15391245($_smarty_tpl) {?><div class="flexmenu-container">	
	<div class="page_width">
		<div class="flexmenu">
			<div class="mobileMenuTitle lmromandemi"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'pk_flexmenu'),$_smarty_tpl);?>
</div>
			<ul class="flexmenu_ul">
				<li class="menu_logo">
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['theme_settings']->value['logo_type'])&&$_smarty_tpl->tpl_vars['theme_settings']->value['logo_type']==1) {?>hidden<?php }?> />
						<span id="logo-text-menu" class="<?php if (isset($_smarty_tpl->tpl_vars['theme_settings']->value['logo_type'])&&$_smarty_tpl->tpl_vars['theme_settings']->value['logo_type']==0) {?>hidden<?php }?>">
								<?php if (isset($_smarty_tpl->tpl_vars['theme_settings']->value['logo_text'])) {?><span class="logo main_color"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['logo_text'];?>
</span><?php }?>
						</span>	
					</a>
				</li>
				<?php echo $_smarty_tpl->tpl_vars['flexmenu']->value;?>

			</ul>
		</div>
	</div>
</div><?php }} ?>
