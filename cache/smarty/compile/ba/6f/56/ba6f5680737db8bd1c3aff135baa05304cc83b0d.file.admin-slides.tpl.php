<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 10:09:36
         compiled from "/usr/home/spartanvape.com/web/modules/pk_promominicslider/views/templates/admin/admin-slides.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13302969525937b4c06a62d4-65596452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba6f5680737db8bd1c3aff135baa05304cc83b0d' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_promominicslider/views/templates/admin/admin-slides.tpl',
      1 => 1496768982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13302969525937b4c06a62d4-65596452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slider' => 0,
    'lang' => 0,
    'iso' => 0,
    'slide' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937b4c07f9fb9_10941093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937b4c07f9fb9_10941093')) {function content_5937b4c07f9fb9_10941093($_smarty_tpl) {?>

<fieldset id="list_slide" class="">
    <legend><?php echo smartyTranslate(array('s'=>'Slides','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
</legend>
    <div>
    <div id="navigation">
        <?php if ($_smarty_tpl->tpl_vars['slider']->value['options']['single']==0) {?>
            <a href="#<?php echo $_smarty_tpl->tpl_vars['slider']->value['lang']['default']['iso_code'];?>
_slides" class="navigation active">
                <img src="<?php echo $_smarty_tpl->tpl_vars['slider']->value['lang']['lang_dir'];?>
<?php echo $_smarty_tpl->tpl_vars['slider']->value['lang']['default']['id_lang'];?>
.jpg" />
                <?php echo $_smarty_tpl->tpl_vars['slider']->value['lang']['default']['name'];?>

            </a>
        <?php } else { ?>
            <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value['lang']['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
                <a href="#<?php echo $_smarty_tpl->tpl_vars['lang']->value['iso_code'];?>
_slides" class="navigation <?php if ($_smarty_tpl->tpl_vars['lang']->value['iso_code']==$_smarty_tpl->tpl_vars['slider']->value['lang']['default']['iso_code']) {?>active<?php }?>">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['slider']->value['lang']['lang_dir'];?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
.jpg" />
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>

                </a>
            <?php } ?>    
        <?php }?>
    </div>
    <div class="titles">
        <span class="order"><?php echo smartyTranslate(array('s'=>"Order",'mod'=>'pk_promominicslider'),$_smarty_tpl);?>
</span>
        <span class="title"><?php echo smartyTranslate(array('s'=>"Title",'mod'=>'pk_promominicslider'),$_smarty_tpl);?>
</span>
        <span class="active"><?php echo smartyTranslate(array('s'=>"Active",'mod'=>'pk_promominicslider'),$_smarty_tpl);?>
</span>
        <span class="arrow"></span>    
    </div>
    <div class="slides_holder">  
        <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['iso'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slider']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['iso']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
            <ul id="<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
_slides" class="languages">
                <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
                    <li id="order_<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
h<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_order'];?>
" class="slide_elem" >
                        <div class="slide_header <?php if ($_smarty_tpl->tpl_vars['slide']->value['active']!=1) {?>inactive<?php }?>">
                            <span class="order">
                                <span></span>
                                <?php if ($_smarty_tpl->tpl_vars['slide']->value['id_order']<=9) {?>0<?php }?><?php echo $_smarty_tpl->tpl_vars['slide']->value['id_order'];?>

                            </span>
                            <span class="title"><?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
</span>
                            <span class="<?php if ($_smarty_tpl->tpl_vars['slide']->value['active']==1) {?>active<?php } else { ?>deactivated<?php }?>"></span>
                            <span class="arrow"></span>
                        </div>
                        <div class="slide_body">
                              <form id="<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_order'];?>
" method="post" action="<?php echo $_smarty_tpl->tpl_vars['slider']->value['postAction'];?>
" enctype="multipart/form-data">
                                  <div class="image_holder">
                                      <img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
uploads/thumbs/admin_<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" />
                                      <div class="file_input">
                                          <input type="file" name="newImage" class="file"/>
                                          <div>
										      <span></span>                          
										      <input type="submit" value="<?php echo smartyTranslate(array('s'=>'Change image','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
"/>                          
									      </div>                        
                                      </div>                        <br/>         
                                      <strong style="color:#ff715c; clear:both; display:block"><?php echo smartyTranslate(array('s'=>'Recommended image dimensions are 600x600px','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
</strong>
                                  </div>                                  
                                  <div class="form_cont">
                                      <div class="title input">
                                          <label><?php echo smartyTranslate(array('s'=>'Title','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
: </label>
                                          <input type="text" name="title" class="sl-tooltip" size="41" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
" title="<?php echo smartyTranslate(array('s'=>'This will be the title on the slide.','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
" /> 
                                      </div>
                                      <div class="url input">
                                      	<label><?php echo smartyTranslate(array('s'=>'Url','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
: </label>
                                      	<input type="text" name="url" class="sl-tooltip" size="41" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
" title="<?php echo smartyTranslate(array('s'=>'ex. http://myshop.com/promotions','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
" />           
                                      </div>
                                      <div class="target">
                                          <label><?php echo smartyTranslate(array('s'=>'Blank target','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
: </label>
                                          <input type="checkbox" name="target" class="sl-tooltip" value="1" <?php if ($_smarty_tpl->tpl_vars['slide']->value['target']==1) {?>checked="true"<?php }?> title="<?php echo smartyTranslate(array('s'=>'Check this if you want to open the link in new window.','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
" />
                                      </div>
                                      <div class="alt input">
                                          <label><?php echo smartyTranslate(array('s'=>'Image alt','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
: </label>
                                          <input type="text" name="alt" class="sl-tooltip" size="41" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['alt'];?>
" title="<?php echo smartyTranslate(array('s'=>'The image alt, alternate text for the image','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
" />
                                      </div>
                                      <div class="caption"> 
                                      	<label><?php echo smartyTranslate(array('s'=>'Caption','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
: </label>
                                      	<textarea type="text" name="caption" class="sl-tooltip" cols="40" rows="6" title="<?php echo smartyTranslate(array('s'=>'Be carefull, too long text isnt good and HTML is not allowed.','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['slide']->value['caption'];?>
</textarea>                      
                                      </div>
                                      <div class="switch">
                                          <label><?php echo smartyTranslate(array('s'=>'Active','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
: </label>
                  						<div class="field switch">
                  							<input type="radio" id="active-e" class="" name="isActive"  value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['active'];?>
" checked="true" />
                  							<label for="r-keyboard-e" class="cb-enable <?php if ($_smarty_tpl->tpl_vars['slide']->value['active']==1) {?>selected<?php }?>" ><span>ON</span></label>
                  							<label for="r-keyboard-d" class="cb-disable <?php if ($_smarty_tpl->tpl_vars['slide']->value['active']==0) {?>selected<?php }?>" ><span>OFF</span></label>
                  						</div>
                                      </div>
                                  </div>     
                                  <div class="button_cont">
                                      <input type="hidden" name="slideId" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
" />
                                      <input type="hidden" name="orderId" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_order'];?>
" />
                                      <input type="hidden" name="slideIso" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['lang_iso'];?>
" />
                                      <input type="hidden" name="oldImage" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" />    
                                      <input type="submit" name="deleteSlide" value="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
" id="delete-slide" class="red disabled" />   
                                      <input type="submit" name="editSlide" value="<?php echo smartyTranslate(array('s'=>'Update','mod'=>'pk_promominicslider'),$_smarty_tpl);?>
" id="update-slide" class="green" />       
                                  </div>    
                            </form>
                        </div>  
                    </li>                 
              <?php } ?>    
          </ul>               
      <?php } ?>
    </div>  
    </div>
</fieldset><?php }} ?>
