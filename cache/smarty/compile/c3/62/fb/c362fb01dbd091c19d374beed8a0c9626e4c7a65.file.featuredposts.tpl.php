<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:37
         compiled from "/usr/home/spartanvape.com/web/modules/ph_featuredposts/views/templates/hook/featuredposts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9388152285937bb5108bc88-36299424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c362fb01dbd091c19d374beed8a0c9626e4c7a65' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/ph_featuredposts/views/templates/hook/featuredposts.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9388152285937bb5108bc88-36299424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recent_posts' => 0,
    'post' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb51157c23_44950796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb51157c23_44950796')) {function content_5937bb51157c23_44950796($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/home/spartanvape.com/web/tools/smarty/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['recent_posts']->value)&&count($_smarty_tpl->tpl_vars['recent_posts']->value)>0) {?>
<div class="ph_simpleblog simpleblog-featured block">
    <h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Featured Posts','mod'=>'ph_featuredposts'),$_smarty_tpl);?>
</h4>
	<div class="ph_row blogpost-list-feat">
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']<2) {?>
		<section class="blog-item post-item-<?php echo $_smarty_tpl->tpl_vars['post']->value['id_simpleblog_post'];?>
">
			<div class="post-item" data-postid="<?php echo $_smarty_tpl->tpl_vars['post']->value['id_simpleblog_post'];?>
">
				<?php if (isset($_smarty_tpl->tpl_vars['post']->value['banner'])&&Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')) {?>
					<figure>
						<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" title="">
							<?php if (Configuration::get('ph_featuredposts_LAYOUT')=='full') {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['banner_wide'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" class="img-responsive" />
							<?php } else { ?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['banner_thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" class="img-responsive" />
							<?php }?>
						</a>
						<div class="blog-info">
							<?php if (Configuration::get('PH_BLOG_DISPLAY_DATE')) {?>
							<div class="blog-date main_bg bshadow">
								<div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],"%e <span>%b</span>");?>
</div>
							</div>
							<?php }?>					
							<div class="blog-post-likes grayshadow likes_<?php echo $_smarty_tpl->tpl_vars['post']->value['id_simpleblog_post'];?>
" onclick="addRating(<?php echo $_smarty_tpl->tpl_vars['post']->value['id_simpleblog_post'];?>
);"><svg class="svgic svgic-like"><use xlink:href="#si-like"></use></svg><div class="lmromandemi"><?php echo $_smarty_tpl->tpl_vars['post']->value['likes'];?>
</div></div>
						</div>
					</figure>
				<?php }?>
				<h2>
					<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</a>
				</h2>
				<div class="post-content">					
					<?php if (Configuration::get('PH_BLOG_DISPLAY_DESCRIPTION')) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['short_content'],80,'...');?>

					<?php }?>
				</div>	
				<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" title="<?php echo smartyTranslate(array('s'=>'Permalink to','mod'=>'ph_featuredposts'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" class="button"><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'ph_featuredposts'),$_smarty_tpl);?>
</a>
				<div class="clearfix"></div>
			</div>
		</section><!-- .ph_col -->
		<?php }?>
		<?php } ?>
	</div><!-- .ph_row -->
</div><!-- .ph_simpleblog -->
<?php } else { ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'There are no posts','mod'=>'ph_featuredposts'),$_smarty_tpl);?>
</p>
<?php }?>

<script>
jQuery(document).ready(function() {
	$.each($(".simpleblog-featured .post-item"), function( index, value ) {
		  var pid = $(value).data("postid");
		  if ($.cookie('guest_<?php echo $_smarty_tpl->tpl_vars['cookie']->value->id_guest;?>
_'+pid) == "voted") {
			$(".post-item-"+pid+" .blog-post-likes").addClass("voted");
		}
	});	
});
function addRating(item_id) {	
	if ($.cookie('guest_<?php echo $_smarty_tpl->tpl_vars['cookie']->value->id_guest;?>
_'+item_id) != "voted") {
		$.cookie('guest_<?php echo $_smarty_tpl->tpl_vars['cookie']->value->id_guest;?>
_'+item_id, 'voted');
		$.post(baseDir+'modules/ph_simpleblog/ajax.php', {
			action:'addRating',
			item_id : item_id
		}, 
		function (data) {
			if (data.status == 'success') {		
				$(".post-item-"+item_id+" .blog-post-likes").addClass("voted");
				$(".post-item-"+item_id+" .blog-post-likes div").text(data.message);
			} else {
				alert(data.message);
			}
			
		}, 'json');
	} else {
		$.cookie('guest_<?php echo $_smarty_tpl->tpl_vars['cookie']->value->id_guest;?>
_'+item_id, '');
		$.post(baseDir+'modules/ph_simpleblog/ajax.php', {
			action:'removeRating',
			item_id : item_id
		}, 
		function (data) {
			if (data.status == 'success') {		
				$(".post-item-"+item_id+" .blog-post-likes div").text(data.message);
				$(".post-item-"+item_id+" .blog-post-likes").removeClass("voted");
			} else {
				alert(data.message);
			}
			
		}, 'json');
	}
	return false;
}
</script><?php }} ?>
