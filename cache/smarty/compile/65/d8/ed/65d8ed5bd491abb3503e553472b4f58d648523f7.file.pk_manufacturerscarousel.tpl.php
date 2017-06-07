<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:29:06
         compiled from "/usr/home/spartanvape.com/web/modules/pk_manufacturerscarousel/pk_manufacturerscarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16340793765937b95262e476-80136157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65d8ed5bd491abb3503e553472b4f58d648523f7' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_manufacturerscarousel/pk_manufacturerscarousel.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16340793765937b95262e476-80136157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manufacturers' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
    'show_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b9526a7e09_26664159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b9526a7e09_26664159')) {function content_5937b9526a7e09_26664159($_smarty_tpl) {?><!-- Manufacturers Carousel module -->
<div id="manufacturersCarousel" class="homemodule load-animate">
	<?php if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>
		<ul id="m-list">
		<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
 $_smarty_tpl->tpl_vars['manufacturer']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->index++;
 $_smarty_tpl->tpl_vars['manufacturer']->first = $_smarty_tpl->tpl_vars['manufacturer']->index === 0;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['first'] = $_smarty_tpl->tpl_vars['manufacturer']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['iteration']<=$_smarty_tpl->tpl_vars['text_list_nb']->value) {?>		
			<li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['first']) {?>first_item<?php } else { ?>item<?php }?>">
				<div class="manuf-indent">
					<a class="smooth02" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'pk_manufacturerscarousel'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
">
					<img class="dib" src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'];?>
-manu_alysum.jpg" alt="" />
					</a>
					<?php if (isset($_smarty_tpl->tpl_vars['show_title']->value)&&$_smarty_tpl->tpl_vars['show_title']->value==1) {?>
					<span class="lmroman"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span><?php }?>
				</div>
			</li>
			<?php }?>
		<?php } ?>
		</ul>	
	<?php } else { ?>
		<p><?php echo smartyTranslate(array('s'=>'No manufacturer','mod'=>'pk_manufacturerscarousel'),$_smarty_tpl);?>
</p>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['manufacturers']->value&&(count($_smarty_tpl->tpl_vars['manufacturers']->value)>=6)) {?>
	<script>
	$("#m-list").flexisel({
		pref: "mnf",
        visibleItems: 6,
        animationSpeed: 1000,
        autoPlay: false,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 2
            }, 
            landscape: { 
                changePoint:728,
                visibleItems: 3
            },
            tablet: { 
                changePoint:980,
                visibleItems: 5
            },
            tablet_land: { 
                changePoint:1170,
                visibleItems: 6
            }
        }
    });
	</script>
<?php }?>
</div>	
<!-- /Manufacturers Carousel module --><?php }} ?>
