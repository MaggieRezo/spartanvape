<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:37
         compiled from "/usr/home/spartanvape.com/web/modules/pk_blockfacebooklike/pk_blockfacebooklike.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19694740275937bb51709344-37203516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcecbca46f534e4777a80afe9c3c3a996decaac5' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_blockfacebooklike/pk_blockfacebooklike.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19694740275937bb51709344-37203516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FB_page_URL' => 0,
    'company_logo' => 0,
    'FB_data' => 0,
    'company_name' => 0,
    'show_faces' => 0,
    'err' => 0,
    'modulePath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb51750cc4_56237150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb51750cc4_56237150')) {function content_5937bb51750cc4_56237150($_smarty_tpl) {?><div class="block facebook-box">
	<h4 class="dropdown-cntrl dd_el_mobile"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'pk_blockfacebooklike'),$_smarty_tpl);?>
</h4>
	<div class="dropdown-content dd_container_mobile">
		<a href="<?php echo $_smarty_tpl->tpl_vars['FB_page_URL']->value;?>
" target="_blank" class="likeButton sec_bg main_bg_hvr"><?php echo smartyTranslate(array('s'=>'Like','mod'=>'pk_blockfacebooklike'),$_smarty_tpl);?>
</a>
		<div class="block_content">
			<div class="fb_info_top">
				<?php if ($_smarty_tpl->tpl_vars['company_logo']->value) {?>
				<img src="https://graph.facebook.com/<?php echo $_smarty_tpl->tpl_vars['FB_data']->value['id'];?>
/picture" alt="" class="fb_avatar" />
				<?php }?>
				<div class="fb_info">
					<?php if ($_smarty_tpl->tpl_vars['company_name']->value) {?>
					<div><?php echo $_smarty_tpl->tpl_vars['FB_data']->value['name'];?>
</div>
					<?php }?>				
				</div>
			</div>
			<div class="fb_fans"><?php echo $_smarty_tpl->tpl_vars['FB_data']->value['likes'];?>
 <?php echo smartyTranslate(array('s'=>'people like','mod'=>'pk_blockfacebooklike'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['FB_page_URL']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['FB_data']->value['name'];?>
</a></div>
			<?php if ($_smarty_tpl->tpl_vars['show_faces']->value) {?>
			<div class="hidden"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
			<ul class="fb_followers">
				<?php if (file_exists($_smarty_tpl->tpl_vars['modulePath']->value)) {?> 
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['modulePath']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
			</ul>
			<?php }?>
		</div>
	</div>
</div>
<?php }} ?>
