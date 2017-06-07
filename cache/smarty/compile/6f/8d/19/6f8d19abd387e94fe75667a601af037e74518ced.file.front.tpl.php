<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:29:05
         compiled from "/usr/home/spartanvape.com/web/modules/pk_awshowcaseslider/views/templates/front/front.tpl" */ ?>
<?php /*%%SmartyHeaderCode:578076365937b9511fdd61-59536311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f8d19abd387e94fe75667a601af037e74518ced' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_awshowcaseslider/views/templates/front/front.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '578076365937b9511fdd61-59536311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slides' => 0,
    'minicSlider' => 0,
    'page_name' => 0,
    'image' => 0,
    'coordinates' => 0,
    'coord' => 0,
    'link' => 0,
    'aw_mode' => 0,
    'aw_speed' => 0,
    'aw_auto' => 0,
    'aw_pause' => 0,
    'aw_random' => 0,
    'aw_buttons' => 0,
    'aw_control' => 0,
    'aw_hover' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b9513db5d8_16556901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b9513db5d8_16556901')) {function content_5937b9513db5d8_16556901($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['slides']->value)!=0) {?>
    <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['front']==1&&$_smarty_tpl->tpl_vars['page_name']->value!='index') {?>
        <!-- aw_Slider -->
    <?php } else { ?>
        <div id="aw_slider_container" class="load-animate homemodule">   
            <ul id="aw_slider">
                <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['singleimage']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['singleimage']['index']++;
?>
                    <li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['singleimage']['index']!=0) {?>class="inactive"<?php }?>>
                    <?php if (($_smarty_tpl->tpl_vars['image']->value['video']==0)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['image']->value['url']!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['image']->value['target']==1) {?>target="_blank"<?php }?>><?php }?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['path']['images'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" class="slider_image" alt="<?php if ($_smarty_tpl->tpl_vars['image']->value['alt']) {?><?php echo $_smarty_tpl->tpl_vars['image']->value['alt'];?>
<?php }?>"/>
                        <?php if ($_smarty_tpl->tpl_vars['image']->value['url']!='') {?></a><?php }?>
                        <div class="aw_slide-text">
                            <?php if ($_smarty_tpl->tpl_vars['image']->value['title']!='') {?><h3><?php echo $_smarty_tpl->tpl_vars['image']->value['title'];?>
</h3><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['image']->value['caption']!='') {?><div><?php echo $_smarty_tpl->tpl_vars['image']->value['caption'];?>
</div><?php }?>
                        </div>
                        <div class="showcase-tooltips">
                            <?php  $_smarty_tpl->tpl_vars['coord'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coord']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['coordinates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coord']->key => $_smarty_tpl->tpl_vars['coord']->value) {
$_smarty_tpl->tpl_vars['coord']->_loop = true;
?>
                                <?php if (($_smarty_tpl->tpl_vars['image']->value['id_lang']==$_smarty_tpl->tpl_vars['coord']->value['id_lang'])&&($_smarty_tpl->tpl_vars['image']->value['id_shop']==$_smarty_tpl->tpl_vars['coord']->value['id_shop'])&&($_smarty_tpl->tpl_vars['image']->value['id_slide']==$_smarty_tpl->tpl_vars['coord']->value['id_slide'])) {?>                                
                                    <a href="<?php if ($_smarty_tpl->tpl_vars['coord']->value['point_type']=='product') {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['coord']->value['id_product'],$_smarty_tpl->tpl_vars['coord']->value['product_link_rewrite']);?>
<?php } else { ?>#<?php }?>" coords="<?php echo $_smarty_tpl->tpl_vars['coord']->value['coordinateX']*2+13;?>
, <?php echo $_smarty_tpl->tpl_vars['coord']->value['coordinateY']*2+13;?>
" class="showcase-plus-anchor main_bg" style="top:<?php echo $_smarty_tpl->tpl_vars['coord']->value['coordinateY']*2;?>
px; left:<?php echo $_smarty_tpl->tpl_vars['coord']->value['coordinateX']*2;?>
px">
                                        <div class="point_container">
                                            <?php if ($_smarty_tpl->tpl_vars['coord']->value['point_type']=="product") {?>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['coord']->value['product_image_link'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['coord']->value['product_name'];?>
" />
                                            <span class="aw_pName"><?php echo $_smarty_tpl->tpl_vars['coord']->value['product_name'];?>
</span>
                                            <span class="aw_price price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['coord']->value['price']),$_smarty_tpl);?>
</span>
                                            <?php }?>
                                            <?php if (($_smarty_tpl->tpl_vars['coord']->value['point_type']=="text")&&($_smarty_tpl->tpl_vars['coord']->value['point_text']!=null)) {?>
                                                <span class="aw_text"><?php echo $_smarty_tpl->tpl_vars['coord']->value['point_text'];?>
</span>
                                            <?php }?>
                                        </div>
                                    </a>                                
                                <?php }?>
                            <?php } ?>      
                        </div>
                    <?php } else { ?>
                        <iframe class="videoframe" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['image']->value['video_url'];?>
" frameborder="0" allowfullscreen></iframe>                        
                    <?php }?>                   
                    </li>
                <?php } ?>                
            </ul>
        </div> 
<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['current']!='') {?>
    <?php $_smarty_tpl->tpl_vars['aw_mode'] = new Smarty_variable($_smarty_tpl->tpl_vars['minicSlider']->value['options']['current'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['aw_mode'] = new Smarty_variable('fade', null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['speed']!='') {?>
    <?php $_smarty_tpl->tpl_vars['aw_speed'] = new Smarty_variable($_smarty_tpl->tpl_vars['minicSlider']->value['options']['speed'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['aw_speed'] = new Smarty_variable(1000, null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['manual']==1) {?>
    <?php $_smarty_tpl->tpl_vars['aw_auto'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['aw_auto'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['pause']!='') {?>
    <?php $_smarty_tpl->tpl_vars['aw_pause'] = new Smarty_variable($_smarty_tpl->tpl_vars['minicSlider']->value['options']['pause'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['aw_pause'] = new Smarty_variable(3500, null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['random']==1) {?>
    <?php $_smarty_tpl->tpl_vars['aw_random'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['aw_random'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['buttons']==1) {?>
    <?php $_smarty_tpl->tpl_vars['aw_buttons'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['aw_buttons'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['control']==1) {?>
    <?php $_smarty_tpl->tpl_vars['aw_control'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['aw_control'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['hover']==1) {?>
    <?php $_smarty_tpl->tpl_vars['aw_hover'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['aw_hover'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('aw_mode'=>$_smarty_tpl->tpl_vars['aw_mode']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('aw_speed'=>$_smarty_tpl->tpl_vars['aw_speed']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('aw_auto'=>$_smarty_tpl->tpl_vars['aw_auto']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('aw_pause'=>$_smarty_tpl->tpl_vars['aw_pause']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('aw_random'=>$_smarty_tpl->tpl_vars['aw_random']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('aw_controls'=>$_smarty_tpl->tpl_vars['aw_buttons']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('aw_pager'=>$_smarty_tpl->tpl_vars['aw_control']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('aw_hover'=>$_smarty_tpl->tpl_vars['aw_hover']->value),$_smarty_tpl);?>

    <?php }?>
<?php }?><?php }} ?>
