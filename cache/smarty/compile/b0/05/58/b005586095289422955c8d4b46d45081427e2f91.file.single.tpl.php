<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:37
         compiled from "/usr/home/spartanvape.com/web/modules/pk_smallslider/views/templates/front/single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18208223925937bb512302c6-93939168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b005586095289422955c8d4b46d45081427e2f91' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_smallslider/views/templates/front/single.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18208223925937bb512302c6-93939168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'minicSlider' => 0,
    'defLang' => 0,
    'slides' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb512bce78_33101565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb512bce78_33101565')) {function content_5937bb512bce78_33101565($_smarty_tpl) {?>    



<div id="small_slider" class="theme-default<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['thumbnail']==1&&$_smarty_tpl->tpl_vars['minicSlider']->value['options']['control']!=0) {?> controlnav-thumbs<?php }?>">   
	<div id="minicslider_adv" class="minictopbg">
		<div class="minicbottombg">
			<div id="minicslider_nivo" class="nivoSlider" style="<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['width']) {?>width:<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['width'];?>
px;<?php }?><?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['height']) {?>height:<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['height'];?>
px<?php }?><?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['control']!=1) {?>margin-bottom:0;<?php }?><?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['position']=='top') {?>display:inline-block;<?php }?>">
                <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value[$_smarty_tpl->tpl_vars['defLang']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['image']->value['url']!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['image']->value['target']==1) {?>target="_blank"<?php }?>><?php }?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['path']['images'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" class="slider_image" <?php if ($_smarty_tpl->tpl_vars['image']->value['alt']) {?>alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['alt'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['thumbnail']==1) {?>data-thumb="<?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['path']['thumbs'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
"<?php }?> />
                    <?php if ($_smarty_tpl->tpl_vars['image']->value['url']!='') {?></a><?php }?>
                <?php } ?>
			</div>
		</div>
	</div>
</div> <?php }} ?>
