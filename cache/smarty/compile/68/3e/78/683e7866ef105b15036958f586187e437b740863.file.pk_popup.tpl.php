<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:29:04
         compiled from "/usr/home/spartanvape.com/web/modules/pk_popup/pk_popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:869362615937b9507cea33-92012520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '683e7866ef105b15036958f586187e437b740863' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_popup/pk_popup.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '869362615937b9507cea33-92012520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pk_ppp' => 0,
    'module_dir' => 0,
    'link' => 0,
    'msg' => 0,
    'nw_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b950860c43_26271110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b950860c43_26271110')) {function content_5937b950860c43_26271110($_smarty_tpl) {?><div class="pk_popup" style="<?php if ($_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_WIDTH']) {?>width:<?php echo $_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_WIDTH'];?>
px;<?php }?><?php if ($_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_HEIGHT']) {?>height:<?php echo $_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_HEIGHT'];?>
px;<?php }?><?php if ($_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_BG']==1) {?>background-image: url(<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value).((string)$_smarty_tpl->tpl_vars['popup_bg']->value));?>
);<?php }?>">
	<div id="newsletter_block_popup" class="block">
		<div class="block_content">
		<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?>
			<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>warning_inline<?php } else { ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
		<?php }?>
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
				<?php if ($_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_TEXT']!='') {?><div class="popup_text"><?php echo $_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_TEXT'];?>
</div><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_NEWSLETTER']==1) {?>
				<!--<input class="inputNew popup_name" type="text" value="<?php echo smartyTranslate(array('s'=>'first name','mod'=>'pk_popup'),$_smarty_tpl);?>
" />-->
				<input class="inputNew dib" id="newsletter-input-popup" type="text" name="email" value="<?php echo smartyTranslate(array('s'=>'Enter your email','mod'=>'pk_popup'),$_smarty_tpl);?>
" /><div class="send-reqest button_unique main_color_hover smooth02 dib"><svg class="svgic svgic-right-arrow"><use xlink:href="#si-right-arrow"></use></svg></div>
                <div class="send-response"></div>
                <?php }?>
			</form>
		</div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_NEWSLETTER']==1) {?>
<script type="text/javascript">
    var placeholder2 = "<?php echo smartyTranslate(array('s'=>'Enter your email','mod'=>'pk_popup','js'=>1),$_smarty_tpl);?>
";
    
        $(document).ready(function() {
            $('#newsletter-input-popup').on({
                focus: function() {
                    if ($(this).val() == placeholder2) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder2);
                    }
                }
            });
        });
    
</script>
<?php }?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_popup_width'=>$_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_WIDTH']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_popup_height'=>$_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_HEIGHT']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_popup_newsletter'=>$_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_NEWSLETTER']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_popup_bg'=>$_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_BG']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_popup_path'=>$_smarty_tpl->tpl_vars['pk_ppp']->value['PK_POPUP_PATH']),$_smarty_tpl);?>
<?php }} ?>
