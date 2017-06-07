<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:37:37
         compiled from "/usr/home/spartanvape.com/web/modules/pk_twitterwidget/pk_twitterwidget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17673483305937bb516bbc57-22841173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57a5d8b0789127c7bebbbaf3e1889c3ca70a2a54' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_twitterwidget/pk_twitterwidget.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17673483305937bb516bbc57-22841173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'count' => 0,
    'tw_this_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937bb516fbb75_57214039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937bb516fbb75_57214039')) {function content_5937bb516fbb75_57214039($_smarty_tpl) {?><!-- begin twitter widget -->
<div id="twitter-feed" class="block">
  <div class="block_content">
    <h4 class="dropdown-cntrl dd_el_mobile"><?php echo smartyTranslate(array('s'=>'Latest Tweets','mod'=>'pk_twitterwidget'),$_smarty_tpl);?>
</h4>
    <div class="dropdown-content dd_container_mobile">
      <div class="tweet"></div>
    </div>  
  </div>
</div>
<script>
/*jQuery(function($){ 
    var twitterSlider = function(){  
        $(".tweet_list").flexisel({
      pref: "twt",
          visibleItems: 1,
          animationSpeed: 1000,
          autoPlay: true,
          autoPlaySpeed: 4000,            
          pauseOnHover: true,
          enableResponsiveBreakpoints: true,
          responsiveBreakpoints: { 
              portrait: { 
                  changePoint:480,
                  visibleItems: 1
              }, 
              landscape: { 
                  changePoint:640,
                  visibleItems: 1
              },
              tablet: { 
                  changePoint:768,
                  visibleItems: 1
              }
          }
      });
            
    }; */     
    $('.tweet').tweet({
        join_text: "auto",
          username: '<?php if (isset($_smarty_tpl->tpl_vars['username']->value)&&$_smarty_tpl->tpl_vars['username']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php } else { ?>PromokitTest<?php }?>',
          avatar_size: 0,
          count: <?php if (isset($_smarty_tpl->tpl_vars['count']->value)&&$_smarty_tpl->tpl_vars['count']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
<?php } else { ?>2<?php }?>,
          auto_join_text_default: "",
          auto_join_text_ed: "",
          auto_join_text_ing: "",
          auto_join_text_reply: "",
          auto_join_text_url: "",
          loading_text: "loading tweets...",
          modpath: '<?php if (isset($_smarty_tpl->tpl_vars['tw_this_path']->value)&&$_smarty_tpl->tpl_vars['tw_this_path']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['tw_this_path']->value;?>
<?php } else { ?>/modules/twitterwidget/ajax.php<?php }?>',
        // loaded: twitterSlider
    });     
//});
</script>
<!-- end twitter widget --><?php }} ?>
