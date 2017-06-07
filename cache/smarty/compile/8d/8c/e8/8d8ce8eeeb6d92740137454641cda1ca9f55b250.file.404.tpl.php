<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:37
         compiled from "/usr/home/spartanvape.com/web/themes/alysum/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13693596135937bb51776790-60727586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d8ce8eeeb6d92740137454641cda1ca9f55b250' => 
    array (
      0 => '/usr/home/spartanvape.com/web/themes/alysum/404.tpl',
      1 => 1496768980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13693596135937bb51776790-60727586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb5178f064_74328169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb5178f064_74328169')) {function content_5937bb5178f064_74328169($_smarty_tpl) {?>
<div class="wht_bg">
	<div class="wrap_indent">
		<div class="pagenotfound">
			<h1><?php echo smartyTranslate(array('s'=>'This page is not available'),$_smarty_tpl);?>
</h1>
			<p>
				<?php echo smartyTranslate(array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl);?>

			</p>

			<h3><?php echo smartyTranslate(array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl);?>
</h3>
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">
				<fieldset>
					<p>
						<label for="search"><?php echo smartyTranslate(array('s'=>'Search our product catalog:'),$_smarty_tpl);?>
</label>
						<input id="search_query" name="search_query" type="text" />
						<input type="submit" name="Submit" value="OK" class="button_small" />
					</p>
				</fieldset>
			</form>
		</div>
	</div>
</div><?php }} ?>
