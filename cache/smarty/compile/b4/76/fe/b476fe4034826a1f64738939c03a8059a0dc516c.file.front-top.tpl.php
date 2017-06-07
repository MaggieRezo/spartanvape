<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:29:06
         compiled from "/usr/home/spartanvape.com/web/modules/pk_bannercarousel/views/templates/front/front-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14899430455937b952039609-15455813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b476fe4034826a1f64738939c03a8059a0dc516c' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_bannercarousel/views/templates/front/front-top.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14899430455937b952039609-15455813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slides' => 0,
    'minicSlider' => 0,
    'page_name' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b9520f41c3_60764936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b9520f41c3_60764936')) {function content_5937b9520f41c3_60764936($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['slides']->value)!=0) {?>
    <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['front']==1&&$_smarty_tpl->tpl_vars['page_name']->value!='index') {?>
        <!-- Banner Carousel Slider -->
    <?php } else { ?>
    <div class="banners_carousel container homemodule load-animate">
        <div class="banners_carousel-container">
        <div id="banners_carousel" class="banners_carousel_top theme-default<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['thumbnail']==1&&$_smarty_tpl->tpl_vars['minicSlider']->value['options']['control']!=0) {?> controlnav-thumbs<?php }?>">   
              <ul id="sliderCarousel" class="slides bannersCarousel sliderCarousel_top">
                  <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                  <li class="dib">
                      <div class="banners_carousel_wrap">
                      <?php if ($_smarty_tpl->tpl_vars['image']->value['url']!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['image']->value['target']==1) {?>target="_blank"<?php }?>><?php }?>
                          <img src="<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['path']['images'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" class="slider_image" 
                              alt="<?php if ($_smarty_tpl->tpl_vars['image']->value['alt']) {?><?php echo $_smarty_tpl->tpl_vars['image']->value['alt'];?>
<?php }?>" />
                      <?php if ($_smarty_tpl->tpl_vars['image']->value['url']!='') {?></a><?php }?>
                      </div>
                  </li>
                  <?php } ?>
              </ul>
        </div> 
        </div>
    </div>
        <?php if (count($_smarty_tpl->tpl_vars['slides']->value)>=$_smarty_tpl->tpl_vars['minicSlider']->value['options']['startSlide']) {?>        
        <script type="text/javascript">
            $(window).load(function() {
              var v_num = <?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['startSlide'];?>
;
                 $(".sliderCarousel_top").flexisel({
                      pref: "ban-top",
                      visibleItems: v_num,
                      animationSpeed: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['speed']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['speed'];?>
<?php } else { ?>500<?php }?>,
                      autoPlay: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['manual']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['manual'];?>
<?php } else { ?>false<?php }?>,
                      autoPlaySpeed: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['pause']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['pause'];?>
<?php } else { ?>3000<?php }?>,
                      pauseOnHover: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['hover']!='') {?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['hover'];?>
<?php } else { ?>true<?php }?>,
                      enableResponsiveBreakpoints: true,
                      clone : true,
                      responsiveBreakpoints: { 
                          portrait: { 
                              changePoint:400,
                              visibleItems: 1
                          }, 
                          landscape: { 
                              changePoint:768,
                              visibleItems: 1
                          },
                          tablet: { 
                              changePoint:991,
                              visibleItems: 2
                          },
                          tablet_land: { 
                              changePoint:1199,
                              visibleItems: v_num
                          }
                      }
                  });   
            });        
        </script>   
        <?php }?>
    <?php }?>
<?php }?><?php }} ?>
