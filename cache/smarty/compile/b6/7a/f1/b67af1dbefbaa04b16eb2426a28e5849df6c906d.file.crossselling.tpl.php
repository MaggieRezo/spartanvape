<?php /* Smarty version Smarty-3.1.19, created on 2017-06-06 19:25:13
         compiled from "/usr/home/spartanvape.com/web/themes/alysum/modules/crossselling/crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9921231075936e5799f3e16-70106820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b67af1dbefbaa04b16eb2426a28e5849df6c906d' => 
    array (
      0 => '/usr/home/spartanvape.com/web/themes/alysum/modules/crossselling/crossselling.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9921231075936e5799f3e16-70106820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
    'orderProduct' => 0,
    'alysum_image' => 0,
    'crossDisplayPrice' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5936e579a74993_93532021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936e579a74993_93532021')) {function content_5936e579a74993_93532021($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/usr/home/spartanvape.com/web/tools/smarty/plugins/modifier.replace.php';
?><?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)) {?>
<div id="crossselling">
	<div class="productscategory_h2 lmromancaps"><?php echo smartyTranslate(array('s'=>'Also purchased products','mod'=>'crossselling'),$_smarty_tpl);?>
</div>
		<div id="productscategory_slider">
		<div id="crossselling_list">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['orderProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderProduct']->key => $_smarty_tpl->tpl_vars['orderProduct']->value) {
$_smarty_tpl->tpl_vars['orderProduct']->_loop = true;
?>
				<li>
					<div class="li-indent">
					<a href="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" class="lnk_img">
						<?php $_smarty_tpl->tpl_vars["alysum_image"] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['orderProduct']->value['image'],'medium_default','home_default'), null, 0);?>
						<img src="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['alysum_image']->value, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" />						
					</a>
					<div class="product_name hidden">
						<a href="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['orderProduct']->value['name'],15,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['crossDisplayPrice']->value&&$_smarty_tpl->tpl_vars['orderProduct']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
						<span class="price_display hidden">
							<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['orderProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
						</span>
					<?php }?>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['orderProducts']->value)>=4) {?>
	<script type="text/javascript">		
		$("#crossselling_list ul").flexisel({
			pref: "cross",
	        visibleItems: 4,
	        animationSpeed: 1000,
	        autoPlay: true,
	        autoPlaySpeed: 3000,            
	        pauseOnHover: true,
	        enableResponsiveBreakpoints: true,
	        responsiveBreakpoints: { 
	            portrait: { 
	                changePoint:480,
	                visibleItems: 2
	            }, 
	            landscape: { 
	                changePoint:728,
	                visibleItems: 3
	            },
	            tablet: { 
	                changePoint:980,
	                visibleItems: 4
	            }
	        }
	    });
	</script>
	<?php }?>
</div>
<?php }?>
<?php }} ?>
