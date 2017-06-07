<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:29:06
         compiled from "/usr/home/spartanvape.com/web/modules/pk_isotopesort/pk_isotopesort.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17859195465937b952189ec1-05017637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06bb404e0ee5cf91b0de2732741e3a7f5378b33b' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_isotopesort/pk_isotopesort.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17859195465937b952189ec1-05017637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'fea' => 0,
    'spe' => 0,
    'new' => 0,
    'bes' => 0,
    'categories' => 0,
    'category' => 0,
    'product' => 0,
    'isotope_max' => 0,
    'type' => 0,
    'cookie' => 0,
    'link' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'countdown' => 0,
    'to' => 0,
    'wishlist' => 0,
    'isInWishList' => 0,
    'favorite' => 0,
    'isFav' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b95244ec80_95763322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b95244ec80_95763322')) {function content_5937b95244ec80_95763322($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/home/spartanvape.com/web/tools/smarty/plugins/modifier.date_format.php';
?><!-- MODULE IsotopeSort -->
<div id="isotopeSort" class="homemodule load-animate">
	<div class="isotopeSortIndent">
	<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
        <div class="option-combo">
      	<ul class="filter option-set clearfix" data-filter-group="type"> 
	          <li><a href="#" data-filter-value="" class="selected lmroman"><?php echo smartyTranslate(array('s'=>'All','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
</a></li><?php if ($_smarty_tpl->tpl_vars['fea']->value) {?><li><a class="lmroman" href="#" data-filter-value=".featured_product"><?php echo smartyTranslate(array('s'=>'Featured','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['spe']->value) {?><li><a class="lmroman" href="#" data-filter-value=".special_product"><?php echo smartyTranslate(array('s'=>'Special','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['new']->value) {?><li><a class="lmroman" href="#" data-filter-value=".new_product"><?php echo smartyTranslate(array('s'=>'Latest','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['bes']->value) {?><li><a class="lmroman" href="#" data-filter-value=".bestsellers"><?php echo smartyTranslate(array('s'=>'Bestsellers','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['categories']->value) {?><?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?><li><a class="lmroman" href="#" data-filter-value=".<?php echo $_smarty_tpl->tpl_vars['category']->value['link_rewrite'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li><?php } ?>
	          <?php }?>
	      </ul>
    	</div>        
		<div class="block_content">
			<ul id="isotope" class="isotope products-module">
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['isotopeSortProduct']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->value = $_smarty_tpl->tpl_vars['product']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['isotopeSortProduct']['index']++;
?>
            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['name'])&&($_smarty_tpl->getVariable('smarty')->value['foreach']['isotopeSortProduct']['index']<$_smarty_tpl->tpl_vars['isotope_max']->value)) {?>
       			<li class="ajax_block_product <?php echo $_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['product']->value["id_product"]];?>
" data-productid="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
">
					<div class="product_image_cont">
						<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="product_image"><img src='<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],"large_".((string)$_smarty_tpl->tpl_vars['cookie']->value->img_name));?>
' alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
						<span class="labels">
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?>
								<span class="new sec_bg"><?php echo smartyTranslate(array('s'=>'New','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                              <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['price'])) {?>
                                <span class="pk-reduction sec_bg">
                                  <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=="amount") {?>
                                      -<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']),$_smarty_tpl);?>

                                  <?php } else { ?>
                                      -<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*round(100,2);?>
%        
                                  <?php }?>
                                </span>
                              <?php }?>                            
                              <?php }?>
						</span>
						<?php if (($_smarty_tpl->tpl_vars['countdown']->value==true)) {?>
				        <?php $_smarty_tpl->tpl_vars['to'] = new Smarty_variable(explode("-",$_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']), null, 0);?> 
				        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'])&&($_smarty_tpl->tpl_vars['to']->value[0]!="0000")) {?>
				        	<div class="countdown countdown-<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" title="<?php echo smartyTranslate(array('s'=>'To the end of this offer'),$_smarty_tpl);?>
"></div>
				        	<script>
				        	$(document).ready(function(){
				        		$(function() {
								    $('#isotope .countdown-<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
').countdown({
								        date: "<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],'%B %e, %Y %H:%M:%S');?>
",
								          render: function(data) {
								            $(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span><?php echo smartyTranslate(array('s'=>'Days'),$_smarty_tpl);?>
</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span><?php echo smartyTranslate(array('s'=>'Hours'),$_smarty_tpl);?>
</span></div><div>" + this.leadingZeros(data.min, 2) + " <span><?php echo smartyTranslate(array('s'=>'Min'),$_smarty_tpl);?>
</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span><?php echo smartyTranslate(array('s'=>'Sec'),$_smarty_tpl);?>
</span></div>");
								            $(this.el).attr('title', this.leadingZeros(data.days, 2)+" <?php echo smartyTranslate(array('s'=>'Days'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'and'),$_smarty_tpl);?>
 "+this.leadingZeros(data.hours, 2)+" <?php echo smartyTranslate(array('s'=>'Hours'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'to the end of this offer'),$_smarty_tpl);?>
");
								          }
								    });
								});
				        	});
				        	</script>			        	
				        <?php }?>
				        <?php }?>
						<div class="function_buttons altview smooth02">

							<?php if (($_smarty_tpl->tpl_vars['wishlist']->value['install']=="installed")&&($_smarty_tpl->tpl_vars['wishlist']->value['enable']=="enabled")) {?>
								<div class="function_button dib product_wishlist sec_bshadow_hvr smooth02 sec_bg_hvr<?php if ($_smarty_tpl->tpl_vars['isInWishList']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']]==1) {?> sec_bg sec_bshadow remove<?php }?>">
                              		<a href="#" class="wishlist_button addToWishlist" title="<?php if ($_smarty_tpl->tpl_vars['isInWishList']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']]==1) {?><?php echo smartyTranslate(array('s'=>'This product is already in your wishlist','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
<?php }?>">
                              			<svg class="svgic svgic-wishlist"><use xlink:href="#si-wishlist"></use></svg>
                              		</a>
                              	</div>
                            <?php }?>
                            
                            <?php if (($_smarty_tpl->tpl_vars['favorite']->value['install']=="installed")&&($_smarty_tpl->tpl_vars['favorite']->value['enable']=="enabled")) {?>
                            	<div class="function_button dib product_like sec_bshadow_hvr smooth02 sec_bg_hvr <?php if ($_smarty_tpl->tpl_vars['isFav']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']]==1) {?> sec_bg sec_bshadow<?php }?>">
                            		<a title="<?php echo smartyTranslate(array('s'=>'Add this product to my favorites','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
" href="#" class="addfav dib<?php if ($_smarty_tpl->tpl_vars['isFav']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']]==1) {?> hidden<?php }?>">
                            			<svg class="svgic svgic-like"><use xlink:href="#si-like"></use></svg>
                            		</a>
                            		<a title="<?php echo smartyTranslate(array('s'=>'Remove product from my favorites','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
" href="#" class="remfav  dib<?php if ($_smarty_tpl->tpl_vars['isFav']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']]!=1) {?> hidden<?php }?>">
                            			<svg class="svgic svgic-like"><use xlink:href="#si-like"></use></svg>
                            		</a>
                              	</div>
                            <?php }?>

                            	<div class="function_button dib quickview sec_bshadow_hvr smooth02 sec_bg_hvr">
                            		<a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Quick view'),$_smarty_tpl);?>
">
                            			<svg class="svgic svgic-search"><use xlink:href="#si-search"></use></svg>
                            		</a>
                            	</div>

						</div>
					</div>
					<div class="isotope_bottom_block">					
						<h5 class="s_title_block normview"><a class="ellipsis" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h5>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<p class="price_container">
								<?php if (($_smarty_tpl->tpl_vars['product']->value['reduction']>0)) {?>
								<span class="price isotope-old-price old-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
</span>	
								<?php }?>
								<span class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span>
							</p>
						<?php }?>
						<h5 class="s_title_block altview"><a class="ellipsis" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h5>
						<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<?php if (($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
								<a class="exclusive ajax_add_to_cart_button lmromancaps" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp7=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp7."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
</a>
							<?php } else { ?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" class="button exclusive lmromancaps altview"><?php echo smartyTranslate(array('s'=>'View','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
</a>
							<?php }?>
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" class="button exclusive lmromancaps altview"><?php echo smartyTranslate(array('s'=>'View','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
</a>
						<?php }?>
					</div>
				</li>
			<?php }?>
			<?php } ?>
			</ul>
		</div>
	<?php } else { ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'There are no products right now','mod'=>'pk_isotopesort'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div>
</div>
<script>
function getProducts() {
	$.ajax({
	    type: 'POST',
	    url: baseDir + 'modules/pk_isotopesort/ajax.php',
	    success: function(result){
	      if (result == '0') {
	        console.log("no data")
	      } else {
			  
				$('#isotope').prepend(result);			
	      }
	    }
	});
}
$(window).load(function() {
// cache container
	var $container = $('#isotope');

	// initialize isotope
	$container.isotope({
	  // options...
	});

// filter items when filter link is clicked
$('.filter a').click(function(){
  var selector = $(this).attr('data-filter-value');
  $container.isotope({ filter: selector });
  $('.filter a.selected').removeClass('selected');
  $(this).addClass('selected');
  return false;
});
});
</script>
<!-- /MODULE IsotopeSort --><?php }} ?>
