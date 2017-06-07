<?php /* Smarty version Smarty-3.1.19, created on 2017-06-07 14:36:50
         compiled from "/usr/home/spartanvape.com/web/modules/pk_themesettings/views/frontend/comingsoon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1200467035937f3626a1fe5-70602767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46c18920b8b8432bb6ab90cc375a4ae6fa4fe7e0' => 
    array (
      0 => '/usr/home/spartanvape.com/web/modules/pk_themesettings/views/frontend/comingsoon.tpl',
      1 => 1496774850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1200467035937f3626a1fe5-70602767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'name' => 0,
    'mainURL' => 0,
    'cs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5937f36271fe22_42232290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5937f36271fe22_42232290')) {function content_5937f36271fe22_42232290($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
js/jq.js" type="text/javascript"></script>		
<script src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
js/jquery.countdown.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
js/impromtu.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
js/jquery.ez-bg-resize.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<div class="container">
	<h1><span><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span><div></div></h1>


	<div class="send_form">
		<div class="form-indent">
			<h4><?php echo smartyTranslate(array('s'=>'Notify me when its ready','mod'=>'pk_themesettings'),$_smarty_tpl);?>
</h4>
			<form action="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
maintenance/maintenance.php" method="post" >
				<input type="email" name="cs-email" class="cs-email" value="" placeholder="<?php echo smartyTranslate(array('s'=>'Enter your email','mod'=>'pk_themesettings'),$_smarty_tpl);?>
" />
				<input type="hidden" name="path" value="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
" />
				<input type="hidden" name="mainURL" value="<?php echo $_smarty_tpl->tpl_vars['mainURL']->value;?>
" />
				<input type="submit" name="submit" class="cs-submit" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'pk_themesettings'),$_smarty_tpl);?>
" />  
			</form>
		</div>
	</div>

</div>
<span style="clear:both;">&nbsp;</span>
<script>
$(document).ready(function() {

	$("body").ezBgResize({
		img     : "<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
images/smoke.jpg", // Relative path example.  You could also use an absolute url (http://...).
		opacity : 1, // Opacity. 1 = 100%.  This is optional.
		center  : true // Boolean (true or false). This is optional. Default is true.
	});
	// Grab the current date
	var currentDate = new Date();
	var mnt = parseInt(<?php echo $_smarty_tpl->tpl_vars['cs']->value['mon'];?>
);
	var futureDate = new Date(<?php echo $_smarty_tpl->tpl_vars['cs']->value['year'];?>
, (mnt), <?php echo $_smarty_tpl->tpl_vars['cs']->value['day'];?>
, <?php echo $_smarty_tpl->tpl_vars['cs']->value['hour'];?>
, <?php echo $_smarty_tpl->tpl_vars['cs']->value['min'];?>
);
	$('.someTimer').countdown({ until: futureDate });
	
	var readyDate = Math.round(futureDate/1000);
	var readyCurr = Math.round(currentDate/1000);		
	var length = readyDate-<?php echo $_smarty_tpl->tpl_vars['cs']->value['date_set'];?>
;	
	var passed = readyCurr-<?php echo $_smarty_tpl->tpl_vars['cs']->value['date_set'];?>
;	
	var percent = Math.round(passed*100/length);
	/*console.log(<?php echo $_smarty_tpl->tpl_vars['cs']->value['year'];?>
, <?php echo $_smarty_tpl->tpl_vars['cs']->value['mon'];?>
, <?php echo $_smarty_tpl->tpl_vars['cs']->value['day'];?>
, <?php echo $_smarty_tpl->tpl_vars['cs']->value['hour'];?>
, <?php echo $_smarty_tpl->tpl_vars['cs']->value['min'];?>
);
	console.log("readyDate: "+readyDate+" => "+timeConverter(readyDate));
	console.log("setteDate: "+<?php echo $_smarty_tpl->tpl_vars['cs']->value['date_set'];?>
+" => "+timeConverter(<?php echo $_smarty_tpl->tpl_vars['cs']->value['date_set'];?>
));
	console.log("curreDate: "+readyCurr+" => "+timeConverter(readyCurr));
	console.log("Length:    "+length+" = "+readyDate+" - "+<?php echo $_smarty_tpl->tpl_vars['cs']->value['date_set'];?>
);
	console.log("Passed:    "+passed+" = "+readyCurr+" - "+<?php echo $_smarty_tpl->tpl_vars['cs']->value['date_set'];?>
);
	*/

	$(".marker").width(percent+"%");
	$(".point").text(percent+"%");

	function initialize() {
		$.getJSON("//maps.google.com/maps/api/geocode/json?address=<?php echo $_smarty_tpl->tpl_vars['cs']->value['addr'];?>
&sensor=false",function(data) {
			//console.log(data.results[0].geometry.location);
			console.log(data);
			var location = data.results[0].geometry.location;			
			var myLatlng = new google.maps.LatLng(location.lat,location.lng);
			var mapOptions = {
			zoom: 9,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

			var marker = new google.maps.Marker({
			  position: myLatlng,
			  map: map
			});
		});		
	}

	/*function timeConverter(UNIX_timestamp){
	 var a = new Date(UNIX_timestamp*1000);
	 var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
	     var year = a.getFullYear();
	     var month = months[a.getMonth()];
	     var date = a.getDate();
	     var hour = a.getHours();
	     var min = a.getMinutes();
	     var sec = a.getSeconds();
	     var time = year+' '+date+','+month+' '+hour+':'+min+':'+sec ;
	     return time;
	 }*/

	google.maps.event.addDomListener(window, 'load', initialize);

	<?php if (isset($_GET['message'])) {?>
		$.prompt('<?php echo $_GET['message'];?>
');
	<?php }?>
});
</script><?php }} ?>
