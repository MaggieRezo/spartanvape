<?php /* Smarty version Smarty-3.1.19, created on 2017-06-06 19:25:13
         compiled from "/usr/home/spartanvape.com/web/modules/pk_themesettings/views/frontend/customcontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12247345415936e579c7b588-35517876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de2c9edd60cfe4818af61b35d4b6253ee44ab78' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_themesettings/views/frontend/customcontent.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12247345415936e579c7b588-35517876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pk_custom_tab' => 0,
    'pk_video_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5936e579cac1e1_21087965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936e579cac1e1_21087965')) {function content_5936e579cac1e1_21087965($_smarty_tpl) {?>
<?php if ((isset($_smarty_tpl->tpl_vars['pk_custom_tab']->value)&&($_smarty_tpl->tpl_vars['pk_custom_tab']->value!=''))) {?>
<section data-section="12" class="page-product-box">
	<div class="rte">
	<?php echo $_smarty_tpl->tpl_vars['pk_custom_tab']->value;?>

	</div>
</section>
<?php }?>
<?php if ((isset($_smarty_tpl->tpl_vars['pk_video_id']->value)&&($_smarty_tpl->tpl_vars['pk_video_id']->value!=''))) {?>
<section data-section="13" class="page-product-box">
	<div class="rte">
		<!--[if !IE]> -->
		<div class="videoWrapper"><iframe id="ytplayer" type="text/html" width="420" height="270" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['pk_video_id']->value;?>
" frameborder="0"></iframe></div>
		<!-- <![endif]-->
		<!--[if gt IE 8]>
		<div class="videoWrapper"><iframe id="ytplayer" type="text/html" width="420" height="270" src="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['pk_video_id']->value;?>
" frameborder="0"></iframe></div>
		<![endif]-->
		<!--[if lte IE 8]>
		<object id="ytplayer" width="420" height="270"><param name="movie" value="https://www.youtube-nocookie.com/v/<?php echo $_smarty_tpl->tpl_vars['pk_video_id']->value;?>
?hl=en_US&amp;version=3&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube-nocookie.com/v/<?php echo $_smarty_tpl->tpl_vars['pk_video_id']->value;?>
?hl=en_US&amp;version=3&amp;rel=0" type="application/x-shockwave-flash" width="420" height="270" allowscriptaccess="always" allowfullscreen="true"></embed></object>		    
		<![endif]-->  
		</div>
</section>
<?php }?><?php }} ?>
