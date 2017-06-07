<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:29:05
         compiled from "/usr/home/spartanvape.com/web/modules/pk_instafeed/pk_instafeed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20980118695937b951726759-95691370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7c5389c756348117cb24d08bd63b74bd2ad6d64' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_instafeed/pk_instafeed.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20980118695937b951726759-95691370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pk_ig_suffix' => 0,
    'pk_ig' => 0,
    'module_dir' => 0,
    'link' => 0,
    'ilink' => 0,
    'icaption' => 0,
    'iimage' => 0,
    'ilikes' => 0,
    'icomments' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b95180d0d9_92915458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b95180d0d9_92915458')) {function content_5937b95180d0d9_92915458($_smarty_tpl) {?><div class="instagram-feed homemodule block ig_<?php echo $_smarty_tpl->tpl_vars['pk_ig_suffix']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_CAROUSEL']==false) {?> instalist<?php }?><?php if ($_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_BACKGROUND']==1) {?> instabg<?php } else { ?> noinstabg<?php }?><?php if (($_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_COLOR']==true)) {?> light-color<?php } else { ?> dark-color<?php }?>" <?php if ($_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_BACKGROUND']==1) {?>style='background-image:url(<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value).((string)$_smarty_tpl->tpl_vars['insta_bg']->value));?>
);'<?php }?>>
	<div class="container">
		<div class="row instafeed-container">
			<div class="col-xs-12">
				<table class="title-table">
			      <tr>
			        <td class="w50p"><span class="right-wing title-wing"></span></td>
			        <td class="carousel-title"><h3 class="lmroman"><?php echo smartyTranslate(array('s'=>'Instagram Feed','mod'=>'pk_instafeed'),$_smarty_tpl);?>
</h3></td>
			        <td class="w50p"><span class="left-wing title-wing"></span></td>
			      </tr>
			    </table>
				<ul id="instafeed_<?php echo $_smarty_tpl->tpl_vars['pk_ig_suffix']->value;?>
"></ul>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->tpl_vars['ilikes'] = new Smarty_variable('', null, 0);?>
<?php $_smarty_tpl->tpl_vars['icomments'] = new Smarty_variable('', null, 0);?>
<?php $_smarty_tpl->tpl_vars['icaption'] = new Smarty_variable('', null, 0);?>
<?php $_smarty_tpl->tpl_vars['ilink'] = new Smarty_variable('{{link}}', null, 0);?>
<?php $_smarty_tpl->tpl_vars['iimage'] = new Smarty_variable('{{image}}', null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_LINKS']) {?><?php $_smarty_tpl->tpl_vars['ilikes'] = new Smarty_variable('{{likes}}', null, 0);?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_COMMENTS']) {?><?php $_smarty_tpl->tpl_vars['icomments'] = new Smarty_variable('{{comments}}', null, 0);?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_CAPTION']) {?><?php $_smarty_tpl->tpl_vars['icaption'] = new Smarty_variable('{{caption}}', null, 0);?><?php }?>
<?php $_smarty_tpl->tpl_vars["template"] = new Smarty_variable("<li><div class=\'ig-indent\'><div class=\'ig-wrapper tr05\'><a target=\'_blank\' class=\'ig-link\' href=\'".((string)$_smarty_tpl->tpl_vars['ilink']->value)."\'><img alt=\'instagram-image\' title=\'".((string)$_smarty_tpl->tpl_vars['icaption']->value)."\' width=\'306\' height=\'306\' src=\'".((string)$_smarty_tpl->tpl_vars['iimage']->value)."\' /><span class=\'ig-caption\'>".((string)$_smarty_tpl->tpl_vars['icaption']->value)."</span><span class=\'ig-likes ig-icon\'><svg class=\'svgic main_color dib svgic-eye\'><use xlink:href=\'#si-eye\'></use></svg>".((string)$_smarty_tpl->tpl_vars['ilikes']->value)."</span><span class=\'ig-comments ig-icon\'><svg class=\'svgic main_color dib svgic-comment\'><use xlink:href=\'#si-comment\'></use></svg>".((string)$_smarty_tpl->tpl_vars['icomments']->value)."</span></a></div></div></li>", null, 0);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_api_code'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_API_CODE']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_api_secret'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_API_SECRET']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_at'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_AT']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_api_callback'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_API_CALLBACK']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_carousel'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_CAROUSEL']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_content_type'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_CONTENT_TYPE']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_username'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_USERNAME']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_userid'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_USERID']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_sortby'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_SORTBY']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_number'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_NUMBER']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_number_vis'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_NUMBER_VIS']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_hashtag'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_HASHTAG']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_links'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_LINKS']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_back'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_BACKGROUND']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_auto'=>$_smarty_tpl->tpl_vars['pk_ig']->value['PK_INSTA_AUTOSCROLL']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_template'=>$_smarty_tpl->tpl_vars['template']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('pk_insta_suffix'=>$_smarty_tpl->tpl_vars['pk_ig_suffix']->value),$_smarty_tpl);?>
<?php }} ?>
