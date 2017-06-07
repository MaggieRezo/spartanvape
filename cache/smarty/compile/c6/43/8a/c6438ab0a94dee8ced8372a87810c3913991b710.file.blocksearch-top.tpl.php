<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:36
         compiled from "/usr/home/spartanvape.com/web/themes/alysum/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13782232225937bb50527341-16793274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6438ab0a94dee8ced8372a87810c3913991b710' => 
    array (
      0 => '/usr/home/spartanvape.com/web/themes/alysum/modules/blocksearch/blocksearch-top.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13782232225937bb50527341-16793274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'ENT_QUOTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb50557420_76592377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb50557420_76592377')) {function content_5937bb50557420_76592377($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="smooth05">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query" type="text" id="search_query_top" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo stripslashes(htmlentities($_GET['search_query'],$_smarty_tpl->tpl_vars['ENT_QUOTES']->value,'utf-8'));?>
<?php }?>" placeholder="<?php echo smartyTranslate(array('s'=>'Search...','mod'=>'blocksearch'),$_smarty_tpl);?>
" />
		<button type="submit" name="submit_search" class="searchbutton smooth02 main_bg_hvr">
			<svg class="svgic svgic-search smooth02 main_color"><use xlink:href="#si-search"></use></svg>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
