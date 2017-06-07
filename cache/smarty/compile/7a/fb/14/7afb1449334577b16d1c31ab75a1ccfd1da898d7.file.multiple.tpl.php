<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:29:05
         compiled from "/usr/home/spartanvape.com/web/modules/pk_promominicslider/views/templates/front/multiple.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13524729265937b9514d1704-88219313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7afb1449334577b16d1c31ab75a1ccfd1da898d7' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_promominicslider/views/templates/front/multiple.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13524729265937b9514d1704-88219313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'slides' => 0,
    'image' => 0,
    'minicSlider' => 0,
    'k' => 0,
    'cookie' => 0,
    'link' => 0,
    'product' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'price' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b95170f545_19092656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b95170f545_19092656')) {function content_5937b95170f545_19092656($_smarty_tpl) {?><div id="blocksliderpluspromo" class="homemodule load-animate">
    <div id="promo_show">
        <div class="promoborder">
            <div id="camera_wrap">
                <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value[$_smarty_tpl->tpl_vars['lang_iso']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['singleimage']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['singleimage']['index']++;
?>                
                <?php if ($_smarty_tpl->tpl_vars['image']->value["lang_iso"]==$_smarty_tpl->tpl_vars['lang_iso']->value&&count($_smarty_tpl->tpl_vars['image']->value["lang_iso"])!=0) {?>              
                    <div data-src="<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['path']['images'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['thumbnail']==1) {?>data-thumb="<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['path']['thumbs'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
"<?php }?> data-video="hide">
                        <?php if ($_smarty_tpl->tpl_vars['image']->value['caption']!='') {?>
                            <div class="camera_caption"><?php echo $_smarty_tpl->tpl_vars['image']->value['caption'];?>
</div>                                    
                        <?php }?>
                        <div class="button_container item_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['singleimage']['index'];?>
">
                            <?php if ($_smarty_tpl->tpl_vars['image']->value['url']!='') {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
" class="button_small lmromancaps dib" <?php if ($_smarty_tpl->tpl_vars['image']->value['target']==1) {?>target="_blank"<?php }?>><?php echo smartyTranslate(array('s'=>'View','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
</a>
                            <?php }?>
                        </div>                
                    </div>
                    <?php }?>                                    
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="promo_section">        
        <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['promo_products']) {?>
            <ul class="products clearfix">
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['minicSlider']->value['promo_products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['specProducts']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['product']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['specProducts']['index']++;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['specProducts']['index']<4) {?>    
                <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['price_reduction']==1) {?>
                    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable($_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['price'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable($_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['price_without_reduction'], null, 0);?>
                <?php }?>        
                <li class="smooth02 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['specProducts']['index']%2) {?>odd <?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['specProducts']['index']<2) {?>top_item<?php }?><?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['img_view']==0) {?> full_height<?php }?>">                    
                <div class="promoborder">
                    <div class="indent">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['link'];?>
" class="imgLink">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['link_rewrite'],$_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['id_image'],('large_').($_smarty_tpl->tpl_vars['cookie']->value->img_name));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['legend'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
                        </a>
                        <div class="productInfo smooth02 <?php if (!isset($_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['specific_prices']['price'])) {?>not_special<?php }?>">
                            <div class="wrap"></div>
                            <div class="info smooth02">
                                <div class="clearfix">
                                    <span class="manufacturer_name trajan ellipsis"><?php if (isset($_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['manufacturer_name'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['manufacturer_name'],30);?>
<?php }?></span>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <span class="reduction dib trajan">                                
                                        <?php if (isset($_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['specific_prices']['price'])) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['specific_prices']['reduction_type']=="amount") {?>
                                                -<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']),$_smarty_tpl);?>

                                            <?php } else { ?>
                                                -<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['specific_prices']['reduction']*round(100,2);?>
%        
                                            <?php }?>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['price']->value),$_smarty_tpl);?>

                                        <?php }?>
                                    </span>
                                    <?php }?>
                                    <span class="name ellipsis"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['name'], ENT_QUOTES, 'UTF-8', true),30,'...',true);?>
</span>
                                    <a class="button lmromandemi" href="<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['link'];?>
"><?php echo smartyTranslate(array('s'=>'Buy now!','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
</a>
                                </div>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                        <div class="price_with_reduction smooth02 trajan">
                            <span class="now trajan"><?php echo smartyTranslate(array('s'=>'Now','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
</span>
                            <span class="price lmromandunh">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['price']->value),$_smarty_tpl);?>
                                
                            </span>
                            <a class="button lmromandemi" href="<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['promo_products'][$_smarty_tpl->tpl_vars['k']->value]['link'];?>
"><?php echo smartyTranslate(array('s'=>'Buy now!','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
</a>
                        </div>
                        <?php }?>
                    </div>    
                </div>                          
                </li>
                <?php }?><?php } ?>
            </ul>
        <?php } else { ?>
            <p><?php echo smartyTranslate(array('s'=>'No products at this time','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
</p>
        <?php }?>
    </div>
</div>
<script type="text/javascript">
        jQuery(function(){         
            jQuery('#camera_wrap').camera({
                height: '95.82%',
                loader: 'pie',
                loaderColor: '#e17365',
                loaderBgColor: '#ffffff',
                loaderStroke: 7,
                playPause: false,
                imagePath: '<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['path']['mod_url'];?>
',
                fx: '<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['current']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['current'];?>
<?php } else { ?>random<?php }?>',
                slicedCols: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['slices']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['slices'];?>
<?php } else { ?>3<?php }?>,
                slicedRows: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['rows']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['rows'];?>
<?php } else { ?>3<?php }?>, 
                transPeriod: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['speed']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['speed'];?>
<?php } else { ?>500<?php }?>, 
                time: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['pause']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['pause'];?>
<?php } else { ?>3000<?php }?>, 
                navigation: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['buttons']==1) {?>true<?php } else { ?>false<?php }?>, 
                pagination: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['control']==1) {?>true<?php } else { ?>false<?php }?>,
                thumbnails: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['thumbnail']==1) {?>true<?php } else { ?>false<?php }?>,
                hover: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['hover']==1) {?>true<?php } else { ?>false<?php }?>, 
                autoAdvance: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['manual']==0) {?>true<?php } else { ?>false<?php }?>
            });
        });
</script><?php }} ?>
