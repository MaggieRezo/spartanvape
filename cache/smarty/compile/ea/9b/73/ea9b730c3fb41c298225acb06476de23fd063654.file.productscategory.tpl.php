<?php /* Smarty version Smarty-3.1.19, created on 2017-06-06 19:25:13
         compiled from "/usr/home/spartanvape.com/web/themes/alysum/modules/productscategory/productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8515998005936e579a8d8b0-64984902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea9b730c3fb41c298225acb06476de23fd063654' => 
    array (
      0 => '/usr/home/spartanvape.com/web/themes/alysum/modules/productscategory/productscategory.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8515998005936e579a8d8b0-64984902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
    'categoryProduct' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5936e579b11763_65382814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936e579b11763_65382814')) {function content_5936e579b11763_65382814($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/usr/home/spartanvape.com/web/tools/smarty/plugins/function.math.php';
?><?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false) {?>
<div class="clearfix blockproductscategory">
	<div class="productscategory_h2"><?php echo smartyTranslate(array('s'=>'Related products','mod'=>'productscategory'),$_smarty_tpl);?>
</div>
	<div id="<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>2) {?>productscategory<?php } else { ?>productscategory_noscroll<?php }?>">
	<div id="productscategory_slider">
	<div id="productscategory_list">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['categoryProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoryProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoryProduct']->key => $_smarty_tpl->tpl_vars['categoryProduct']->value) {
$_smarty_tpl->tpl_vars['categoryProduct']->_loop = true;
?><!--<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)<6) {?>style="width: <?php echo smarty_function_math(array('equation'=>"width / nbImages",'width'=>94,'nbImages'=>count($_smarty_tpl->tpl_vars['categoryProducts']->value)),$_smarty_tpl);?>
%"<?php }?>--> 
			<li>
				<div class="li-indent">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
" class="lnk_img" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['id_image'],('home_').($_smarty_tpl->tpl_vars['cookie']->value->img_name));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
" /></a>
			</div>
			</li>
			<?php } ?>
		</ul>
	</div>
	</div>
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>2) {?>
	<script type="text/javascript">		
		$("#productscategory_list ul").flexisel({
			pref: "pc",
	        visibleItems: 3,
	        animationSpeed: 1000,
	        autoPlay: true,
	        autoPlaySpeed: 3000,            
	        pauseOnHover: true,
	        enableResponsiveBreakpoints: true,
	        responsiveBreakpoints: { 
	            portrait: { 
	                changePoint:480,
	                visibleItems: 1
	            }, 
	            landscape: { 
	                changePoint:728,
	                visibleItems: 2
	            },
	            tablet: { 
	                changePoint:980,
	                visibleItems: 3
	            }
	        }
	    });
	</script>
	<?php }?>
</div>
<?php }?><?php }} ?>
