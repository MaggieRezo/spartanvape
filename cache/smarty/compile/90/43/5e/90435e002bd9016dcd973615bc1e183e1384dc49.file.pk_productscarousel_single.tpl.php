<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:16:41
         compiled from "/usr/home/spartanvape.com/web/modules/pk_productscarousel_single/pk_productscarousel_single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:621954965937b6690a2192-57378534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90435e002bd9016dcd973615bc1e183e1384dc49' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_productscarousel_single/pk_productscarousel_single.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '621954965937b6690a2192-57378534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pr_type' => 0,
    'products_kit' => 0,
    'set' => 0,
    'link' => 0,
    'productLink' => 0,
    'cookie' => 0,
    'countdown' => 0,
    'to' => 0,
    'p_hover' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'quick_view' => 0,
    'wishlist' => 0,
    'isInWishList' => 0,
    'favorite' => 0,
    'isFav' => 0,
    'comments' => 0,
    'p_rating' => 0,
    'p_price' => 0,
    'p_button' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b6695fb022_92798145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b6695fb022_92798145')) {function content_5937b6695fb022_92798145($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/home/spartanvape.com/web/tools/smarty/plugins/modifier.date_format.php';
?><!-- pk_productscarousel_single -->
<div id="productsCarousel_single" class="carouselDesktop load-animate homemodule">
    <table class="title-table">
      <tr>
        <td class="w50p"><span class="right-wing title-wing"></span></td>
        <td class="carousel-title"><h3 class="lmroman"><?php if ($_smarty_tpl->tpl_vars['pr_type']->value=="fea") {?>
        <?php echo smartyTranslate(array('s'=>'Featured Products','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>

      <?php } elseif ($_smarty_tpl->tpl_vars['pr_type']->value=="new") {?>
        <?php echo smartyTranslate(array('s'=>'New Products','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>

      <?php } elseif ($_smarty_tpl->tpl_vars['pr_type']->value=="spe") {?>
        <?php echo smartyTranslate(array('s'=>'On Sale','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>

      <?php } elseif ($_smarty_tpl->tpl_vars['pr_type']->value=="bes") {?>
        <?php echo smartyTranslate(array('s'=>'Bestsellers','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>

      <?php }?></h3></td>
        <td class="w50p"><span class="left-wing title-wing"></span></td>
      </tr>
    </table>
    <div class="wht-bg">
      <div class="indent">
        <?php if ((!empty($_smarty_tpl->tpl_vars['products_kit']->value)&&$_smarty_tpl->tpl_vars['products_kit']->value)) {?>
          <ul id="products-single" class="da-thumbs slides products-module">
              <?php  $_smarty_tpl->tpl_vars['set'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['set']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products_kit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['set']->key => $_smarty_tpl->tpl_vars['set']->value) {
$_smarty_tpl->tpl_vars['set']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['set']->key;
?>
              <?php if ((!empty($_smarty_tpl->tpl_vars['set']->value)&&$_smarty_tpl->tpl_vars['set']->value)) {?>
              <?php $_smarty_tpl->tpl_vars['productLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['set']->value['data']['id_product'],$_smarty_tpl->tpl_vars['set']->value['data']['link_rewrite']), null, 0);?>
              <li class="block_product ajax_block_product slide" data-productid="<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['id_product'];?>
">
                  <div class="carouselContainer">
                    <div class="slide-animate">

                      <a href="<?php echo $_smarty_tpl->tpl_vars['productLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['legend'];?>
" class="product_image p<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['id_product'];?>
">

                        <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['set']->value['data']['link_rewrite'],((string)$_smarty_tpl->tpl_vars['set']->value['prodCover']['id_product'])."-".((string)$_smarty_tpl->tpl_vars['set']->value['prodCover']['id_image']),('home_').($_smarty_tpl->tpl_vars['cookie']->value->img_name));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['data']['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="add_to_cart_image" />

                      </a>
                        <?php if (($_smarty_tpl->tpl_vars['countdown']->value==true)) {?>
                            <?php $_smarty_tpl->tpl_vars['to'] = new Smarty_variable(explode("-",$_smarty_tpl->tpl_vars['set']->value['data']['specific_prices']['to']), null, 0);?> 
                            <?php if (isset($_smarty_tpl->tpl_vars['set']->value['data']['specific_prices']['to'])&&($_smarty_tpl->tpl_vars['to']->value[0]!="0000")) {?>
                              <div class="countdown countdown-<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['id_product'];?>
" title="<?php echo smartyTranslate(array('s'=>'To the end of this offer'),$_smarty_tpl);?>
"></div>
                              <script>
                              $(document).ready(function(){
                                $(function() {
                                  $('#productsCarousel_single .countdown-<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['id_product'];?>
').countdown({
                                      date: "<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['set']->value['data']['specific_prices']['to'],'%B %e, %Y %H:%M:%S');?>
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

                        <?php if (isset($_smarty_tpl->tpl_vars['p_hover']->value)&&($_smarty_tpl->tpl_vars['p_hover']->value==1)) {?>
                          <?php if (isset($_smarty_tpl->tpl_vars['set']->value['image'])) {?>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['productLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['legend'];?>
" class="additional-image smooth02">                   
                              <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['set']->value['data']['link_rewrite'],((string)$_smarty_tpl->tpl_vars['set']->value['data']['id_product'])."-".((string)$_smarty_tpl->tpl_vars['set']->value['image']),('home_').($_smarty_tpl->tpl_vars['cookie']->value->img_name));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['data']['name'], ENT_QUOTES, 'UTF-8', true);?>
" />                    
                            </a>
                          <?php }?>
                        <?php }?>

                        <span class="labels">
                          <?php if (isset($_smarty_tpl->tpl_vars['set']->value['data']['new'])&&$_smarty_tpl->tpl_vars['set']->value['data']['new']==1) {?><span class="pk-new sec_bg"><?php echo smartyTranslate(array('s'=>'New','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
</span><?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['set']->value['data']['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                              <?php if (isset($_smarty_tpl->tpl_vars['set']->value['data']['specific_prices']['price'])) {?>
                                <span class="pk-reduction">
                                  <?php if ($_smarty_tpl->tpl_vars['set']->value['data']['specific_prices']['reduction_type']=="amount") {?>
                                      -<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['set']->value['data']['specific_prices']['reduction']),$_smarty_tpl);?>

                                  <?php } else { ?>
                                      -<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['specific_prices']['reduction']*round(100,2);?>
%        
                                  <?php }?>
                                </span>
                              <?php }?>                            
                          <?php }?>
                        </span>

                        <?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
                          <a class="quick-view normview" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['data']['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['data']['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Quick view'),$_smarty_tpl);?>
"><svg class="svgic svgic-search"><use xlink:href="#si-search"></use></svg></a>
                        <?php }?>

                        <div class="function_buttons smooth02 altview">

                            <?php if (($_smarty_tpl->tpl_vars['wishlist']->value['install']=="installed")&&($_smarty_tpl->tpl_vars['wishlist']->value['enable']=="enabled")) {?>
                            <div class="function_button dib product_wishlist sec_bshadow_hvr smooth02 sec_bg_hvr<?php if ($_smarty_tpl->tpl_vars['isInWishList']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]==1) {?> sec_bg sec_bshadow remove<?php }?>">
                                  <a href="#" class="wishlist_button addToWishlist" title="<?php if ($_smarty_tpl->tpl_vars['isInWishList']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]==1) {?><?php echo smartyTranslate(array('s'=>'This product is already in your wishlist','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
<?php }?>">
                                    <svg class="svgic svgic-wishlist"><use xlink:href="#si-wishlist"></use></svg>
                                  </a>
                                </div>
                            <?php }?>
                            
                            <?php if (($_smarty_tpl->tpl_vars['favorite']->value['install']=="installed")&&($_smarty_tpl->tpl_vars['favorite']->value['enable']=="enabled")) {?>
                              <div class="function_button dib product_like sec_bshadow_hvr smooth02 sec_bg_hvr <?php if ($_smarty_tpl->tpl_vars['isFav']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]==1) {?> sec_bg sec_bshadow<?php }?>">
                                <a title="<?php echo smartyTranslate(array('s'=>'Add this product to my favorites','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
" href="#" class="addfav dib<?php if ($_smarty_tpl->tpl_vars['isFav']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]==1) {?> hidden<?php }?>">
                                  <svg class="svgic svgic-like"><use xlink:href="#si-like"></use></svg>
                                </a>
                                <a title="<?php echo smartyTranslate(array('s'=>'Remove product from my favorites','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
" href="#" class="remfav  dib<?php if ($_smarty_tpl->tpl_vars['isFav']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]!=1) {?> hidden<?php }?>">
                                  <svg class="svgic svgic-like"><use xlink:href="#si-like"></use></svg>
                                </a>
                                </div>
                            <?php }?>

                            <div class="function_button dib quickview sec_bshadow_hvr smooth02 sec_bg_hvr">
                              <a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['data']['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['data']['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Quick view'),$_smarty_tpl);?>
">
                                <svg class="svgic svgic-search"><use xlink:href="#si-search"></use></svg>
                              </a>
                            </div>

                        </div>

                    </div>

                    <div class="bottom_block">  
                    <!-- BESTSELLERS -->
                      <?php if (($_smarty_tpl->tpl_vars['comments']->value["install"]=="installed")&&($_smarty_tpl->tpl_vars['comments']->value["enable"]=="enabled")&&($_smarty_tpl->tpl_vars['p_rating']->value==1)) {?>
                        <span class="rate_block smooth05">
                          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['set']->value['data']),$_smarty_tpl);?>

                        </span>      
                        <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['pr_type']->value=="bes") {?>
                      <a class="f_title ellipsis" href="<?php echo $_smarty_tpl->tpl_vars['productLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['legend'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['data']['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),35);?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['set']->value['data']['price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                          <?php if (isset($_smarty_tpl->tpl_vars['p_price']->value)&&($_smarty_tpl->tpl_vars['p_price']->value==1)) {?>
                            <div class="content_price smooth02 price-bg<?php if (isset($_smarty_tpl->tpl_vars['set']->value['data']['specific_prices']['price'])) {?> oldprice-exist<?php }?>">
                              <?php if (isset($_smarty_tpl->tpl_vars['set']->value['data']['specific_prices']['price'])) {?>
                              <span class="old-price product-price lmroman"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['set']->value['data']['price_without_reduction']),$_smarty_tpl);?>
</span>
                              <?php }?>
                              <span class="price product-price lmroman"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['set']->value['data']['price']),$_smarty_tpl);?>
</span>
                            </div>
                          <?php }?>
                        <?php }?>
                        
                        <?php if (isset($_smarty_tpl->tpl_vars['p_button']->value)&&($_smarty_tpl->tpl_vars['p_button']->value==1)) {?>
                        <div class="carousel-buttons smooth02">
                          <?php if (($_smarty_tpl->tpl_vars['set']->value['data']['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['set']->value['data']['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['set']->value['data']['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['set']->value['data']['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                            <?php if (($_smarty_tpl->tpl_vars['set']->value['data']['quantity']>0||$_smarty_tpl->tpl_vars['set']->value['data']['allow_oosp'])) {?>
                              <a class="exclusive ajax_add_to_cart_button button dib" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['set']->value['data']['id_product']);?>
<?php $_tmp5=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp5."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['set']->value['data']['id_product']);?>
"><span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
</span></a><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['link'];?>
" class="button dib exclusive"><?php echo smartyTranslate(array('s'=>'View','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
</a><?php }?><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['link'];?>
" class="button exclusive dib"><?php echo smartyTranslate(array('s'=>'Details','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
</a><?php }?><?php if (($_smarty_tpl->tpl_vars['favorite']->value['install']=="installed")&&($_smarty_tpl->tpl_vars['favorite']->value['enable']=="enabled")) {?><div class="function_button normview product_like<?php if ($_smarty_tpl->tpl_vars['isFav']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]==1) {?> active<?php }?>"><a title="<?php echo smartyTranslate(array('s'=>'Add this product to my favorites','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
" href="#" class="addfav sec_bg_hvr dib button<?php if ($_smarty_tpl->tpl_vars['isFav']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]==1) {?> hidden<?php }?>"><svg class="svgic svgic-like"><use xlink:href="#si-like"></use></svg></a><a title="<?php echo smartyTranslate(array('s'=>'Remove product from my favorites','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
"  href="#" class="remfav sec_bg_hvr dib button<?php if ($_smarty_tpl->tpl_vars['isFav']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]!=1) {?> hidden<?php }?>"><svg class="svgic svgic-like"><use xlink:href="#si-like"></use></svg></a></div><?php }?><?php if (($_smarty_tpl->tpl_vars['wishlist']->value['install']=="installed")&&($_smarty_tpl->tpl_vars['wishlist']->value['enable']=="enabled")) {?><div class="function_button normview product_wishlist<?php if ($_smarty_tpl->tpl_vars['isInWishList']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]==1) {?> active<?php }?>"><a href="#" class="wishlist_button sec_bg_hvr dib button addToWishlist" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['set']->value['data']['id_product']);?>
', false, 1, '.p<?php echo intval($_smarty_tpl->tpl_vars['set']->value['data']['id_product']);?>
 .image-cover'); return false;" data-wishid="<?php echo intval($_smarty_tpl->tpl_vars['set']->value['data']['id_product']);?>
" title="<?php if ($_smarty_tpl->tpl_vars['isInWishList']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]==1) {?><?php echo smartyTranslate(array('s'=>'This product is already in your wishlist','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
<?php }?>"><svg class="svgic svgic-wishlist"><use xlink:href="#si-wishlist"></use></svg></a>
                          </div>
                          <?php }?>
                        </div>
                        <?php }?>
                        
                        <!-- END BESTSELLERS -->
                      <?php } else { ?>
                        <a class="f_title ellipsis normview" href="<?php echo $_smarty_tpl->tpl_vars['productLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['legend'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['data']['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),35);?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['set']->value['data']['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                          <?php if (isset($_smarty_tpl->tpl_vars['p_price']->value)&&($_smarty_tpl->tpl_vars['p_price']->value==1)) {?>
                            <div class="content_price smooth02 price-bg<?php if (isset($_smarty_tpl->tpl_vars['set']->value['data']['specific_prices']['price'])) {?> oldprice-exist<?php }?>">
                              <?php if (isset($_smarty_tpl->tpl_vars['set']->value['data']['specific_prices']['price'])) {?>
                              <span class="old-price product-price lmroman"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['set']->value['data']['price_without_reduction']),$_smarty_tpl);?>
</span>
                              <?php }?>
                              <span class="price product-price lmroman"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['set']->value['data']['price']),$_smarty_tpl);?>
</span>
                            </div>
                          <?php }?>
                        <?php }?>
                        <a class="f_title ellipsis altview" href="<?php echo $_smarty_tpl->tpl_vars['productLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['legend'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['data']['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),35);?>
</a>
                        <?php if (isset($_smarty_tpl->tpl_vars['p_button']->value)&&($_smarty_tpl->tpl_vars['p_button']->value==1)) {?>
                        <div class="carousel-buttons smooth02">
                          <?php if (($_smarty_tpl->tpl_vars['set']->value['data']['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['set']->value['data']['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['set']->value['data']['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['set']->value['data']['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                            <?php if (($_smarty_tpl->tpl_vars['set']->value['data']['quantity']>0||$_smarty_tpl->tpl_vars['set']->value['data']['allow_oosp'])) {?>
                              <a class="exclusive ajax_add_to_cart_button button dib" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['set']->value['data']['id_product']);?>
<?php $_tmp6=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp6."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['set']->value['data']['id_product']);?>
"><span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
</span></a>
                            <?php } else { ?>
                              <a href="<?php echo $_smarty_tpl->tpl_vars['set']->value['data']['link'];?>
" class="button exclusive"><?php echo smartyTranslate(array('s'=>'View','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
</a><?php }?>
                            <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['favorite']->value['install']=="installed")&&($_smarty_tpl->tpl_vars['favorite']->value['enable']=="enabled")) {?><div class="function_button normview product_like<?php if ($_smarty_tpl->tpl_vars['isFav']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]==1) {?> active<?php }?>"><a title="<?php echo smartyTranslate(array('s'=>'Add this product to my favorites','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
" href="#!" class="addfav sec_bg_hvr button<?php if ($_smarty_tpl->tpl_vars['isFav']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]==1) {?> hidden<?php }?>"><svg class="svgic svgic-like"><use xlink:href="#si-like"></use></svg></a><a title="<?php echo smartyTranslate(array('s'=>'Remove product from my favorites','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
"  href="#!" class="remfav sec_bg_hvr button<?php if ($_smarty_tpl->tpl_vars['isFav']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]!=1) {?> hidden<?php }?>"><svg class="svgic svgic-like"><use xlink:href="#si-like"></use></svg></a>
                          </div><?php }?><?php if (($_smarty_tpl->tpl_vars['wishlist']->value['install']=="installed")&&($_smarty_tpl->tpl_vars['wishlist']->value['enable']=="enabled")) {?><div class="function_button normview product_wishlist<?php if ($_smarty_tpl->tpl_vars['isInWishList']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]==1) {?> active<?php }?>">
                          <a href="#" class="wishlist_button sec_bg_hvr button addToWishlist dib" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['set']->value['data']['id_product']);?>
', false, 1, '.p<?php echo intval($_smarty_tpl->tpl_vars['set']->value['data']['id_product']);?>
 .image-cover'); return false;" data-wishid="<?php echo intval($_smarty_tpl->tpl_vars['set']->value['data']['id_product']);?>
" title="<?php if ($_smarty_tpl->tpl_vars['isInWishList']->value[$_smarty_tpl->tpl_vars['set']->value['data']['id_product']]==1) {?><?php echo smartyTranslate(array('s'=>'This product is already in your wishlist','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
<?php }?>"><svg class="svgic svgic-wishlist"><use xlink:href="#si-wishlist"></use></svg></a>
                          </div>
                          <?php }?>
                        </div>
                        <?php }?>
                        
                      <?php }?>               
                    </div>
                </div>
            </li>
            <?php }?>
            <?php } ?>
        </ul>
        <?php } else { ?>
          <p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'There are no products right now','mod'=>'pk_productscarousel_single'),$_smarty_tpl);?>
</p>
        <?php }?>
        <div class="clearfix"></div>                    
      </div>
    </div>
</div><?php }} ?>
