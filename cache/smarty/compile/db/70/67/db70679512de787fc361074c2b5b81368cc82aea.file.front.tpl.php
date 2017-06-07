<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:29:05
         compiled from "/usr/home/spartanvape.com/web/modules/pk_promominicslider/views/templates/front/front.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134576685937b951438f73-38900561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db70679512de787fc361074c2b5b81368cc82aea' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_promominicslider/views/templates/front/front.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134576685937b951438f73-38900561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'minicSlider' => 0,
    'page_name' => 0,
    'currencies' => 0,
    'cookie' => 0,
    'f_currency' => 0,
    'def_iso' => 0,
    'slides' => 0,
    'lang_iso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b9514c8577_59513965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b9514c8577_59513965')) {function content_5937b9514c8577_59513965($_smarty_tpl) {?><?php if (($_smarty_tpl->tpl_vars['minicSlider']->value['options']['front']==0)||($_smarty_tpl->tpl_vars['page_name']->value=="index")) {?>
<!-- PROMOMINIC SLIDER -->
    <?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>
            <?php $_smarty_tpl->tpl_vars["current_currency"] = new Smarty_variable($_smarty_tpl->tpl_vars['f_currency']->value['sign'], null, 0);?>
        <?php }?>
    <?php } ?>
    <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['single']==0) {?>
        <?php if (count($_smarty_tpl->tpl_vars['slides']->value[$_smarty_tpl->tpl_vars['def_iso']->value])!=0) {?>
            <?php if (($_smarty_tpl->tpl_vars['minicSlider']->value['options']['front']==1)) {?>                
                <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minicSlider']->value['tpl']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minicSlider']->value['tpl']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>            
        <?php }?>
    <?php } else { ?>
    <?php if (count($_smarty_tpl->tpl_vars['slides']->value[$_smarty_tpl->tpl_vars['lang_iso']->value])!=0) {?>
            <?php if (($_smarty_tpl->tpl_vars['minicSlider']->value['options']['front']==1)) {?>                
                <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minicSlider']->value['tpl']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minicSlider']->value['tpl']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>        
        <?php }?>
    <?php }?>
<!-- PROMOMINIC SLIDER -->
<?php }?><?php }} ?>
