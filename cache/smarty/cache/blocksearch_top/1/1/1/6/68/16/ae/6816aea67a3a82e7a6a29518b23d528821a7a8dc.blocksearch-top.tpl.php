<?php /*%%SmartyHeaderCode:1575478666593658d3c5b823-89470863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6816aea67a3a82e7a6a29518b23d528821a7a8dc' => 
    array (
      0 => '/usr/home/spartanvape.com/web/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1496732821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1575478666593658d3c5b823-89470863',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5936bd89f34827_56451394',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936bd89f34827_56451394')) {function content_5936bd89f34827_56451394($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//spartanvape.com/es/buscar" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Buscar</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
