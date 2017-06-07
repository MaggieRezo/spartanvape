<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:29:05
         compiled from "/usr/home/spartanvape.com/web/modules/pk_newsletter/views/templates/hook/pk_newsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9358623895937b951ea9ec5-76282624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aad2da43c41cf9a92a5dfcdaef9f3cd77887f3a9' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_newsletter/views/templates/hook/pk_newsletter.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9358623895937b951ea9ec5-76282624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'image_soc' => 0,
    'youtube_url' => 0,
    'twitter_url' => 0,
    'facebook_url' => 0,
    'gplus_url' => 0,
    'image_news' => 0,
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
    'value' => 0,
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
    'modules_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b952023610_64444420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b952023610_64444420')) {function content_5937b952023610_64444420($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=="index") {?>
<!-- Block Newsletter module-->
<div id="newsletter_block_ext" class="homemodule load-animate">
	<div class="col social dib">
		<div class="content">
			<img class="soc_img" src="<?php echo $_smarty_tpl->tpl_vars['image_soc']->value;?>
" alt="" />
			<div class="opaque smooth02">
				<div class="indent">
				<h4 class="lmromancaps"><?php echo smartyTranslate(array('s'=>'Socialize With Us!','mod'=>'pk_newsletter'),$_smarty_tpl);?>
</h4>
				<p class="lmroman"><?php echo smartyTranslate(array('s'=>'Subscribe to the latest news from your favorite brands.','mod'=>'pk_newsletter'),$_smarty_tpl);?>
</p>
				<ul class="newsletter_soc"><?php if (isset($_smarty_tpl->tpl_vars['youtube_url']->value)&&$_smarty_tpl->tpl_vars['youtube_url']->value) {?><li class="dib smooth02 main_bg_hvr youtube"><a class="icon" target="_blank" href="http://www.youtube.com/user/<?php echo $_smarty_tpl->tpl_vars['youtube_url']->value;?>
"><svg class="svgic svgic-youtube"><use xlink:href="#si-youtube"></use></svg></a></li><?php }?><?php if (isset($_smarty_tpl->tpl_vars['twitter_url']->value)&&$_smarty_tpl->tpl_vars['twitter_url']->value) {?><li class="dib smooth02 main_bg_hvr twitter"><a class="icon" target="_blank" href="https://twitter.com/#!/<?php echo $_smarty_tpl->tpl_vars['twitter_url']->value;?>
"><svg class="svgic svgic-twitter"><use xlink:href="#si-twitter"></use></svg></a></li><?php }?><?php if (isset($_smarty_tpl->tpl_vars['facebook_url']->value)&&$_smarty_tpl->tpl_vars['facebook_url']->value) {?><li class="dib smooth02 main_bg_hvr facebook"><a class="icon" target="_blank" href="http://www.facebook.com/<?php echo $_smarty_tpl->tpl_vars['facebook_url']->value;?>
"><svg class="svgic svgic-facebook"><use xlink:href="#si-facebook"></use></svg></a></li><?php }?><?php if (isset($_smarty_tpl->tpl_vars['gplus_url']->value)&&$_smarty_tpl->tpl_vars['gplus_url']->value) {?><li class="dib smooth02 main_bg_hvr google_plus"><a class="icon" target="_blank" href="https://plus.google.com/u/0/<?php echo $_smarty_tpl->tpl_vars['gplus_url']->value;?>
/posts"><svg class="svgic svgic-gplus"><use xlink:href="#si-gplus"></use></svg></a></li><?php }?></ul>
				</div>
			</div>
		</div>
	</div><div class="col nwltr dib">
		<div class="content">
			<img class="newsletter_img" src="<?php echo $_smarty_tpl->tpl_vars['image_news']->value;?>
" alt="" />
			<div class="opaque smooth02">
				<div class="indent">
				<h4 class="lmromancaps"><?php echo smartyTranslate(array('s'=>'Become aVIP member','mod'=>'pk_newsletter'),$_smarty_tpl);?>
</h4>
				<div class="msg-cont">
				<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?>
					<span class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>warning_inline<?php } else { ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</span>
				<?php } else { ?>
					<p class="lmroman"><?php echo smartyTranslate(array('s'=>'Sign up to get exclusive offers from your favorite brands!','mod'=>'pk_newsletter'),$_smarty_tpl);?>
</p>
				<?php }?>
				</div>
				<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
" method="post" class="newsletter_form dib">
					<div class="ind">
						
						<input type="text" name="email" size="18" 
							value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value) {?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'pk_newsletter'),$_smarty_tpl);?>
<?php }?>" 
							onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'pk_newsletter'),$_smarty_tpl);?>
')this.value='';" 
							onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'pk_newsletter'),$_smarty_tpl);?>
';" 
							class="inputNew" />
							<input type="button" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'pk_newsletter'),$_smarty_tpl);?>
" class="registerEmail minibutton lmromancaps smooth02 main_bg_hvr sec_bg" name="submitNewsletter" />
						<input type="hidden" name="action" value="0" />
					</div>
				</form>
				</div>
			</div>
		</div>
	</div><div class="col promo dib">
	<div class="content">
		<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="406" height="406" />
		</a>
	</div>
	</div>
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_newsletter_path'=>$_smarty_tpl->tpl_vars['modules_dir']->value),$_smarty_tpl);?>

<script>
$(document).ready(function(){

	$(".registerEmail").click(function() {
		var email = $('.inputNew').val();
		
		if (isEmail(email)) {
			$.ajax({
				type: "POST",
				headers: { "cache-control": "no-cache" },
				async: false,
				url: pk_newsletter_path+'pk_newsletter/ajax.php',
				//url: currentIndex + "&token=" + token + "&" + "rand=" + new Date().getTime(),
				data: "email="+email,
				success: function(data) {
					var d = jQuery.parseJSON(data);
					if (d.tp == 'success') {
						var cls = 'success_inline';
					}
					if (d.tp == 'err') {
						var cls = 'warning_inline';
					}
					console.log(d);
					$('.msg-cont').empty().append("<p class='"+cls+"'>"+d.msg+"</p>");
				}
			});
		} else {
			$('.msg-cont').empty().append("<p class='warning_inline'>Wrong email address</p>");
		}

	});

});
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{ 2,4 })+$/;
  return regex.test(email);
}
</script>
<!-- /Block Newsletter module-->
<?php }?><?php }} ?>
