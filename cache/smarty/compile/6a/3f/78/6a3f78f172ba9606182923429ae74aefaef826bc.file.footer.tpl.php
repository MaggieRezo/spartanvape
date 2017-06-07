<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:38
         compiled from "/usr/home/spartanvape.com/web/themes/alysum/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18334305195937bb520dee93-36595437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a3f78f172ba9606182923429ae74aefaef826bc' => 
    array (
      0 => '/usr/home/spartanvape.com/web/themes/alysum/footer.tpl',
      1 => 1496768981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18334305195937bb520dee93-36595437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'page_name' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'theme_settings' => 0,
    'link' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb521977c4_89418697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb521977c4_89418697')) {function content_5937bb521977c4_89418697($_smarty_tpl) {?>		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
				</div>
				<?php if (($_smarty_tpl->tpl_vars['page_name']->value!="index")) {?>
					<?php if (($_smarty_tpl->tpl_vars['page_name']->value!="products-comparison")&&($_smarty_tpl->tpl_vars['page_name']->value!="product")) {?>
						<div id="left_column" class="column">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

						</div>
					<?php }?>
				<?php } else { ?>
					<?php if (($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_column']=='1')) {?>
						<div id="left_column" class="column">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

						</div>
					<?php }?>
				<?php }?>
			</div>
		</div><!-- id="white_bg" -->
		<div class="hook-section section-wide-top wide-section">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'wide_top'),$_smarty_tpl);?>

		</div>
		<div class="hook-section section-narrow-top">
			<div class="page_width">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'narrow_top'),$_smarty_tpl);?>

			</div>
		</div>
		<div class="hook-section section-wide-middle wide-section">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'wide_middle'),$_smarty_tpl);?>

		</div>
		<div class="hook-section section-narrow-middle">
			<div class="page_width">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'narrow_middle'),$_smarty_tpl);?>

			</div>
		</div>
		<div class="hook-section section-wide-bottom wide-section">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'wide_bottom'),$_smarty_tpl);?>

		</div>
		<div class="hook-section section-narrow-bottom">
			<div class="page_width">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'narrow_bottom'),$_smarty_tpl);?>

			</div>
		</div>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'footer_twitter'),$_smarty_tpl);?>

		<!-- Footer -->
		<?php if (($_smarty_tpl->tpl_vars['theme_settings']->value['show_map_bottom']==1)) {?>
		<div class="wide-bottom-map">
			<div id="bottom-map"></div>
			<div class="qc-container">
				<div class="page_width">
					<div class="quick-contact sec_bg">
						<div class="qc-indent">
							<h3 class="lmromandemi"><?php echo smartyTranslate(array('s'=>'Quick contact'),$_smarty_tpl);?>
</h3>
							<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="contact-form-box" enctype="multipart/form-data">
		                        <input class="" type="text" name="name" value="" placeholder="<?php echo smartyTranslate(array('s'=>'Your name'),$_smarty_tpl);?>
" />
		                        <input class="" type="text" name="from" value="" placeholder="<?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
" />
		                        <textarea class="form-control" name="message" onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s'=>'Your message'),$_smarty_tpl);?>
')this.value='';" onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s'=>'Your message'),$_smarty_tpl);?>
';" ><?php echo smartyTranslate(array('s'=>'Your message'),$_smarty_tpl);?>
</textarea>
		                        <input type="submit" name="submitMessage" value="<?php echo smartyTranslate(array('s'=>'Send'),$_smarty_tpl);?>
" class="button main_bg_hvr" />
		                        <input type="hidden" id="id_contact" name="id_contact" value="2">
							</form>
						</div>
					</div>
				</div>
			</div>
			<script>
			function initialize() {
			  var myLatlng = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['location_lat'];?>
,<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['location_lng'];?>
);
			  var mapOptions = {
			    zoom: 7,
			    scrollwheel: false,
			    center: myLatlng,
			    mapTypeId: google.maps.MapTypeId.ROADMAP
			  }
			  var map = new google.maps.Map(document.getElementById('bottom-map'), mapOptions);

			  var marker = new google.maps.Marker({
			      position: myLatlng,
			      map: map
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
		</div>
		<?php }?>
		<div id="footer" class="clearfix<?php if (($_smarty_tpl->tpl_vars['theme_settings']->value['show_map_bottom']==1)) {?> topmap<?php }?>">
			<div class="footer-top">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"footer_top"),$_smarty_tpl);?>
				
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['theme_settings']->value)&&($_smarty_tpl->tpl_vars['theme_settings']->value['footer']==1)) {?>
			<div class="footer-relative">
				<div class="page_width">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

				<div class="clearfix"></div>
				</div>
			</div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['theme_settings']->value)&&$_smarty_tpl->tpl_vars['theme_settings']->value['footer_bottom']==1) {?>
			<div class="footer_bottom">
				<div class="footer_bottom-top-border">							
					<div class="page_width">
						<div class="footer_text dib"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['footer_text'];?>
</div><div class="footer_bottom_hook dib"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'footer_bottom'),$_smarty_tpl);?>
</div>
					</div>
				</div>	
			</div>				
			<?php }?>
		</div>
	</div>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
</body>
</html>
<?php }} ?>
