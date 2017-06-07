<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:36
         compiled from "/usr/home/spartanvape.com/web/modules/zopimfree/header-new-widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11605932005937bb50250628-90496681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1125c02b3a807ec8ddc06276ab8dd465dd33f8d9' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/zopimfree/header-new-widget.tpl',
      1 => 1496733514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11605932005937bb50250628-90496681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widgetid' => 0,
    'customerName' => 0,
    'customerEmail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb5027f4b2_59460249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb5027f4b2_59460249')) {function content_5937bb5027f4b2_59460249($_smarty_tpl) {?><?php if (!isset($_GET['content_only'])) {?>
<!--Start of Zopim Live Chat Script-->

<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?<?php echo $_smarty_tpl->tpl_vars['widgetid']->value;?>
';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');

</script>
<!--End of Zopim Live Chat Script-->

<?php if ($_smarty_tpl->tpl_vars['customerName']->value&&$_smarty_tpl->tpl_vars['customerEmail']->value) {?>

<script>
  $zopim(function() {
    $zopim.livechat.setName('<?php if ($_smarty_tpl->tpl_vars['customerName']->value) {?><?php echo $_smarty_tpl->tpl_vars['customerName']->value;?>
<?php }?>');
    $zopim.livechat.setEmail('<?php if ($_smarty_tpl->tpl_vars['customerEmail']->value) {?><?php echo $_smarty_tpl->tpl_vars['customerEmail']->value;?>
<?php }?>');
  });
</script>

<?php }?>
<?php }?><?php }} ?>
