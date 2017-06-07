<?php

if (!defined('_PS_VERSION_'))
  exit;

class pk_smallslider extends Module
{
	protected $maxImageSize = 1048576;

	public function __construct()
	    {
		    $this->name = 'pk_smallslider';
		    $this->tab = 'advertising_marketing';
		    $this->version = '3.0.2';
		    $this->author = 'promokit.eu';
		    $this->need_instance = 1;
			$this->secure_key = Tools::encrypt($this->name);
			$this->bootstrap = true;
	
		    parent::__construct();
	
		    $this->displayName = $this->l('Small Advertising Slider');
		    $this->description = $this->l('Easy image slider for advertising.');
	    }
	
	private function installDB()
		{
	
			Db::getInstance()->Execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'pk_small_slider`');
    		Db::getInstance()->Execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'pk_small_slider_options`');
	
			if (!Db::getInstance()->Execute('
				CREATE TABLE `'._DB_PREFIX_.'pk_small_slider` (
					`id_slide` int(10) unsigned NOT NULL AUTO_INCREMENT,
					`id_shop` int(10) unsigned NOT NULL,
					`id_lang` int(10) unsigned NOT NULL,
					`id_order` int(10) unsigned NOT NULL,
					`lang_iso` VARCHAR(5),
					`title` VARCHAR(100),
					`url` VARCHAR(100),
					`target` tinyint(1) unsigned NOT NULL DEFAULT \'0\',
					`image` VARCHAR(100),
					`alt` VARCHAR(100),
					`caption` VARCHAR(300),
					`active` tinyint(1) unsigned NOT NULL DEFAULT \'1\',
					PRIMARY KEY (`id_slide`, `id_shop`)
			    ) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;'))
				return false;
	
			if (!Db::getInstance()->Execute('
				CREATE TABLE `'._DB_PREFIX_.'pk_small_slider_options` (
					`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
					`id_shop` int(10) unsigned NOT NULL,
					`effect` VARCHAR(300),
					`current` VARCHAR(300),
					`slices` int(3) NOT NULL DEFAULT \'5\',
					`cols` int(3) NOT NULL DEFAULT \'3\',
					`rows` int(3) NOT NULL DEFAULT \'3\',
					`speed` int(4) NOT NULL DEFAULT \'800\',
					`pause` int(4) NOT NULL DEFAULT \'3500\',
					`manual` tinyint(1) unsigned NOT NULL DEFAULT \'0\',
					`hover` tinyint(1) unsigned NOT NULL DEFAULT \'1\',
					`buttons` tinyint(1) unsigned NOT NULL DEFAULT \'1\',
					`control` tinyint(1) unsigned NOT NULL DEFAULT \'1\',
					`thumbnail` tinyint(1) unsigned NOT NULL DEFAULT \'0\',
					`random` tinyint(1) unsigned NOT NULL DEFAULT \'0\',
					`start_slide` int(2) unsigned NOT NULL DEFAULT 0,
					`single` tinyint(1) unsigned NOT NULL DEFAULT \'0\',
					`width` int(4) unsigned NOT NULL DEFAULT \'0\',
					`height` int(4) unsigned NOT NULL DEFAULT \'0\',
					`front` tinyint(1) unsigned NOT NULL DEFAULT \'0\',
					PRIMARY KEY (`id`, `id_shop`)
		        ) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;'))
				return false;	
			return true;
		}
	
	private function insertOptions()
		{
			if (!Db::getInstance()->Execute('
				INSERT INTO `'._DB_PREFIX_.'pk_small_slider_options` (
					`id_shop`, `effect`
				) VALUES (
					1,
					"sliceDown,sliceDownLeft,sliceUp,sliceUpLeft,sliceUpDown,sliceUpDownLeft,fold,slideInRight,slideInLeft,boxRandom,boxRain,boxRainReverse,boxRainGrow,boxRainGrowReverse,fade");'))
				return false;
			if (!Db::getInstance()->Execute('
				INSERT INTO `'._DB_PREFIX_.'pk_small_slider` (
					`id_slide`, `id_shop`, `id_lang`, `id_order`, `lang_iso`, `title`, `url`, `target`, `image`, `alt`, `caption`, `active`
				) VALUES (1, 1, 1, 1, "en", "Slide 01", "#", 0, "slide0.jpg", "", "caption demo", 1),
						 (2, 1, 1, 2, "en", "Slide 02", "#", 0, "slide1.jpg", "", "caption demo", 1);'))
				return false;
			return true;
		}
	
	public function install()
	    {
			if (parent::install() && $this->installDB() && $this->insertOptions() && $this->registerHook('displayLeftColumn') && $this->registerHook('displayHeader') && $this->registerHook('displayBackOfficeHeader') && Configuration::updateValue('PS_MINIC_SLIDER_FIRST_ADV', '0')){
				return true;
			}else{
				$this->uninstall();
				return false;
			}
		}
	
	public function uninstall()
		{
			$image = Db::getInstance()->ExecuteS('SELECT image FROM `'._DB_PREFIX_.'pk_small_slider`');
	
			foreach($image as $img){
				$this->_deleteImages($img['image']);
			}
	
			if (!Db::getInstance()->Execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'pk_small_slider`') OR
	    		!Db::getInstance()->Execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'pk_small_slider_options`') OR
	    		!Configuration::deleteByName('PS_MINIC_SLIDER_FIRST_ADV') OR
				!parent::uninstall())
				return false;
			return true;	
		}		
	
	public function getContent()
		{
			if (Tools::isSubmit('submitOptions')){
				$this->_handleOptions();
			} elseif (Tools::isSubmit('submitNewSlide')){
				$this->_handleNewSlide();
			} elseif (Tools::isSubmit('editSlide')){
				$this->_handleEditSlide();
			} elseif (Tools::isSubmit('deleteSlide')) {
				$this->_handleDeleteSlide();
			}
			return $this->_displayForm();
		}
	
	private function _displayForm()
		{	
			$defaultLanguage = Language::getLanguage(Configuration::get('PS_LANG_DEFAULT'));
			$activeLanguages = Language::getLanguages(true);
			$allLanguages = Language::getLanguages(false);
			$id_shop = (int)$this->context->shop->id;
			$options = Db::getInstance()->getRow('SELECT * FROM `'._DB_PREFIX_.'pk_small_slider_options`');
			$slides = array();
	
			foreach($activeLanguages as $lang){
				$slides[$lang['iso_code']] = Db::getInstance()->ExecuteS('SELECT * FROM `'._DB_PREFIX_.'pk_small_slider` WHERE id_lang ='.$lang['id_lang'].' AND id_shop = '.$id_shop.' ORDER BY id_order ASC');
			}
	
			$this->smarty->assign('slider', array(
				'options' => array(
					'effect' => (!empty($options['effect'])) ? explode(',', $options['effect']) : NULL,
					'current' => (!empty($options['current'])) ? explode(',', $options['current']) : NULL,
					'slices' => $options['slices'],
					'cols' => $options['cols'],
					'rows' => $options['rows'],
					'speed' => $options['speed'],
					'pause' => $options['pause'],
					'manual' => $options['manual'],
					'hover' => $options['hover'],
					'buttons' => $options['buttons'],
					'control' => $options['control'],
					'thumbnail' => $options['thumbnail'],
					'random' => $options['random'],
					'startSlide' => $options['start_slide'],
					'single' => $options['single'],
					'width' => $options['width'],
					'height' => $options['height'],
					'front' => $options['front']
				),
				'slides' => $slides,
				'lang' => array(
					'default' => $defaultLanguage,
					'default_iso' => $defaultLanguage,
					'default_name' => $defaultLanguage,
					'all' => $activeLanguages,
					'lang_dir' => _THEME_LANG_DIR_,
					'user' => $this->context->language->id
				),				
				'tpl' => array(
                	'options' => _PS_MODULE_DIR_.$this->name.'/views/templates/admin/admin-options.tpl',
                	'new' => _PS_MODULE_DIR_.$this->name.'/views/templates/admin/admin-new.tpl',
                	'slides' => _PS_MODULE_DIR_.$this->name.'/views/templates/admin/admin-slides.tpl',
                	'feedback' => _PS_MODULE_DIR_.$this->name.'/views/templates/admin/admin-feedback.tpl',
                	'bug' => _PS_MODULE_DIR_.$this->name.'/views/templates/admin/admin-bug.tpl'
            	),
            	'info' => array(
            		'name' => Configuration::get('PS_SHOP_NAME'),
            		'domain' => Configuration::get('PS_SHOP_DOMAIN'),
            		'email' => Configuration::get('PS_SHOP_EMAIL'),
            		'version' => $this->version,
                	'psVersion' => _PS_VERSION_,
            		'server' => $_SERVER['SERVER_SOFTWARE'],
            		'php' =>phpversion(),
            		'mysql' => Db::getInstance()->getVersion(),
            		'theme' => _THEME_NAME_,
            		'userInfo' => $_SERVER['HTTP_USER_AGENT']
        		),
				'postAction' => 'index.php?tab=AdminModules&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&tab_module=advertising_marketing='.$this->name.'',
				'sortUrl' => _PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/ajax_'.$this->name.'.php?action=updateOrder&secure_key='.$this->secure_key,
				'firstStart' => Configuration::get('PS_MINIC_SLIDER_FIRST_ADV'),
				'id_shop' => (int)$this->context->shop->id
			));	
			
			$this->context->controller->addCSS($this->_path . 'views/css/tipsy.css');
			$this->context->controller->addCSS($this->_path . 'views/css/style.css');
			$this->context->controller->addJS($this->_path . 'views/js/fn.ghostText.min.js');
			$this->context->controller->addJS($this->_path . 'views/js/jquery.tipsy.js');
			$this->context->controller->addJS($this->_path . 'views/js/minicFeedback.js');
			$this->context->controller->addJS($this->_path . 'views/js/minicSlider.js');
			//$this->context->controller->addJS($this->_path . 'views/js/jquery-ui-1.9.0.custom.min.js');
			$this->context->controller->addJS(_PS_ROOT_DIR_.'js/jquery/ui/jquery.ui.sortable.min.js');

			if(Configuration::get('PS_MINIC_SLIDER_FIRST_ADV') == 1)
				Configuration::updateValue('PS_MINIC_SLIDER_FIRST_ADV', '0');

			return $this->display(__FILE__, 'views/templates/admin/admin.tpl');
		}

	private function _handleOptions()
		{		
			$id_shop = (int)$this->context->shop->id;
			//$effect = implode(',', Tools::getValue('nivo_effect'));
			$effect = "";
			$current = '';
			if(Tools::getValue('nivo_current') != '')
				$current = implode(',', Tools::getValue('nivo_current'));
		
			if(!Db::getInstance()->Execute('
				UPDATE `'._DB_PREFIX_.'pk_small_slider_options` SET 
					effect = "'.$effect.'",
					current = "'.$current.'",
					slices = "'.(int)Tools::getValue('slices').'",
					cols = "'.(int)Tools::getValue('cols').'",
					rows = "'.(int)Tools::getValue('rows').'",
					speed = "'.(int)Tools::getValue('speed').'",
					pause = "'.(int)Tools::getValue('pause').'",
					manual = "'.(int)Tools::getValue('manual').'",
					hover = "'.(int)Tools::getValue('hover').'",
					buttons = "'.(int)Tools::getValue('buttons').'",
					control = "'.(int)Tools::getValue('control').'",
					thumbnail = "'.(int)Tools::getValue('thumbnail').'",					
					random = "'.(int)Tools::getValue('random').'",
					start_slide = "'.(int)Tools::getValue('startSlide').'",
					single = "'.(int)Tools::getValue('single').'",
					width = "'.(int)Tools::getValue('width').'",
					height = "'.(int)Tools::getValue('height').'",
					front = "'.(int)Tools::getValue('front').'" 
				WHERE id = 1
					')){
				$this->smarty->assign('error', $this->l('An error occurred while saving data. I`m sure this is a DataBase error.'));
				return false;
			}
		
			return true;
		}
	
	private function _handleNewSlide()
		{
			$languages = Language::getLanguages(false);		
			$id_lang = (int)Tools::getValue('language');
			$lang = Language::getLanguage($id_lang);
			$id_shop = (int)$this->context->shop->id;
			$lastSlideID = Db::getInstance()->ExecuteS('SELECT id_slide, id_order FROM `'._DB_PREFIX_.'pk_small_slider` WHERE id_lang = '.$id_lang.' AND id_shop = '.$id_shop.' ORDER BY id_slide DESC LIMIT 1');
			$currentSlideID = ($lastSlideID) ? $lastSlideID[0]['id_slide']+1 : 1;
			$currentOrderID = ($lastSlideID) ? $lastSlideID[0]['id_order']+1 : 1 ;
		
			if(empty($_FILES['image']['name'])){
				$this->smarty->assign('error', $this->l('Image needed, please choose one.'));
				return false;
			}
			
			$image = $this->_resizer($_FILES['image'], Tools::getValue('imageName'));
		
			if(!$image)
				return false;
		
			$insert = Db::getInstance()->Execute('
				INSERT INTO `'._DB_PREFIX_.'pk_small_slider` ( 
					id_shop, id_lang, id_order, lang_iso, title, url, target, image, alt, caption 
				) VALUES ( 
					"'.$id_shop.'",
					"'.(int)Tools::getValue('language').'",
					"'.$currentOrderID.'",
					"'.$lang['iso_code'].'",
					"'.Tools::getValue('title').'",
					"'.Tools::getValue('url').'",
					"'.(int)Tools::getValue('target').'",
					"'.$image.'",
					"'.Tools::getValue('alt').'",
					"'.pSQL(Tools::getValue('caption'), true).'")
				');

			if(!$insert){
				$this->_deleteImages($image);
				$this->smarty->assign('error', $this->l('An error occured while saving data.'));	
				return false;	
			}	
		
			$this->smarty->assign('confirmation', $this->l('New slide added successfull.'));
		}
	private function _handleEditSlide()
		{	
			$langIso = Tools::getValue('slideIso');
			$newImage = '';
		
			if(!empty($_FILES['newImage']['name'])){
				$image = $this->_resizer($_FILES['newImage']);
				if(empty($image))
					return false;
				$newImage = 'image = "'.$image.'",';
			}
		
			$update = Db::getInstance()->Execute('
				UPDATE `'._DB_PREFIX_.'pk_small_slider` SET 
					title = "'.Tools::getValue('title').'",
					url = "'.Tools::getValue('url').'",
					target = "'.(int)Tools::getValue('target').'",
					'.$newImage.'
					alt = "'.Tools::getValue('alt').'",
					caption = "'.pSQL(Tools::getValue('caption'), true).'",
					active = "'.(int)Tools::getValue('isActive').'"
				WHERE id_slide = '.(int)Tools::getValue('slideId'));
		
			if(!$update){
				$this->_deleteImages(Tools::getValue('image'));			
				$this->smarty->assign('error', $this->l('An error occured while saving data.'));	
				return false;			
			}
		
			if(!empty($_FILES['newImage']['name'])){
				$this->_deleteImages(Tools::getValue('oldImage'));
			}
		
			$this->smarty->assign('confirmation', $this->l('Saved succsessfull.'));
		}
	
	public function _handleDeleteSlide()
		{
			$id_shop = (int)$this->context->shop->id;
			Db::getInstance()->delete(_DB_PREFIX_.'pk_small_slider', 'id_slide = '.(int)Tools::getValue('slideId'));
		
			if(Db::getInstance()->Affected_Rows() == 1){
				Db::getInstance()->Execute('
					UPDATE `'._DB_PREFIX_.'pk_small_slider` 
					SET id_order = id_order-1 
					WHERE (
						id_order > '.Tools::getValue('orderId').' AND 
						lang_iso = "'.Tools::getValue('slideIso').'" AND 
						id_shop = '.$id_shop.')
				');
		
				$this->_deleteImages(Tools::getValue('oldImage'));
				$this->smarty->assign('confirmation', $this->l('Deleted succsessfull.'));
			}else{
				$this->smarty->assign('error', $this->l('Cant delete slide data from database.'));
			}
		}
	
	private function _resizer($image, $newName = NULL)
		{			
			$path = '../modules/pk_smallslider/uploads/';
			$pathThumb = '../modules/pk_smallslider/uploads/thumbs/';
			$imageName = explode('.', str_replace(' ', '_', $image['name']));
			$name = $imageName[0].'.'.$imageName[1];
			if($newName)
				$name = str_replace(' ', '_', $newName).'.'.$imageName[1];
			
			Configuration::set('PS_IMAGE_GENERATION_METHOD', 1);
		
			if(file_exists($path.$name) && $newName == NULL){
				$name = $imageName[0].date('-i-s').'.'.$imageName[1];
			}
			if (!ImageManager::isRealImage($image['tmp_name'], $image['type'])) {
				$this->smarty->assign('error', $this->l('Image format not recognized, allowed formats are: .gif, .jpg, .png'));
				return false;
			}else{
				if (ImageManager::validateUpload($image, $this->maxImageSize)){
					$this->context->smarty->assign('error', $this->l('Image is to large: ').$image['size'].' kb '.$this->l('Maximum allowed: ').$this->maxImageSize.' kb');
					return false;
				}else{
					if (!$tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS') OR !move_uploaded_file($image['tmp_name'], $tmpName)){
						$this->context->smarty->assign('error', $this->l('An error occurred while moving files. Please check permissions.'));
						return false;
						unlink($tmpName);
					}else{
						if (!ImageManager::resize($tmpName, $pathThumb.'admin_'.$name,250)){
							$this->context->smarty->assign('error', $this->l('An error occurred while creating thumbnails.'));
							return false;
							unlink($tmpName);
						}else{
							if (!ImageManager::resize($tmpName, $pathThumb.'front_'.$name,50)){
								$this->context->smarty->assign('error', $this->l('An error occurred while creating thumbnails.'));
								return false;
								unlink($tmpName);
							}else{
								if (!rename($tmpName, $path.$name)){
									$this->context->smarty->assign('error', $this->l('An error occurred while renaming files.'));
									unlink($tmpName);
								}else{
									$image = $name;
									chmod($path.$name, 0644);
									return $image;
								}
							}
						}
					}
				}
			}
		}	
	
	private function _deleteImages($image)
		{
			$path = '../modules/pk_smallslider/uploads/';
			$pathThumb = '../modules/pk_smallslider/uploads/thumbs/';			
			if(file_exists($path.$image)){
				if(!unlink($path.$image) || !unlink($pathThumb.'admin_'.$image) || !unlink($pathThumb.'front_'.$image))
					$this->smarty->assign('error', $this->l('Cant delete images, please check permissions!'));			
			}else{
				//$this->smarty->assign('error', $this->l('Image doesn`t exists!'));
			}
		}
	
	public function hookDisplayHeader()
		{
			if ($this->context->controller->php_self != "index") {
				$this->context->controller->addCSS($this->_path.'views/css/nivo-slider.css');
				$this->context->controller->addJS($this->_path.'views/js/jquery.nivo.slider.pack.js');
			}
		}
 	
 	public function hookHome($position = '')
	 	{
			$defLanguages = (int)Configuration::get('PS_LANG_DEFAULT');
			$activeLanguages = Language::getLanguages(true);
			$allLanguages = Language::getLanguages(false);
			$defLangIso = $allLanguages[$defLanguages-1]['iso_code'];
			$id_shop = (int)$this->context->shop->id;
			// $this->smarty->assign('defaultLangIso', $defLangIso);
			$options = Db::getInstance()->getRow('SELECT * FROM `'._DB_PREFIX_.'pk_small_slider_options`');
			$tpl = 'single.tpl';

			if($options['single'] == 1)
				$tpl = 'multiple.tpl';
			$width = array();
			$slides = array();
	
			if($options['single'] == 0){
				$slides[$defLangIso] = Db::getInstance()->ExecuteS('SELECT * FROM `'._DB_PREFIX_.'pk_small_slider` WHERE (id_lang ='.$defLanguages.' AND id_shop = '.$id_shop.' AND active = 1) ORDER BY id_order ASC');			
			}else{
				foreach ($activeLanguages as $lang) {
					$slides[$lang['iso_code']] = Db::getInstance()->ExecuteS('SELECT * FROM `'._DB_PREFIX_.'pk_small_slider` WHERE (id_lang ='.$lang['id_lang'].' AND id_shop = '.$id_shop.' AND active = 1) ORDER BY id_order ASC');	
				}
			}			
	
			$this->smarty->assign('slides', $slides);		
			$this->smarty->assign('defLang', $defLangIso);
			$this->smarty->assign('minicSlider', array(
				'options' => array(
					'current' => $options['current'],
					'slices' => $options['slices'],
					'cols' => $options['cols'],
					'rows' => $options['rows'],
					'speed' => $options['speed'],
					'pause' => $options['pause'],
					'manual' => $options['manual'],
					'hover' => $options['hover'],
					'buttons' => $options['buttons'],
					'control' => $options['control'],
					'thumbnail' => $options['thumbnail'],
					'random' => $options['random'],
					'startSlide' => $options['start_slide'],
					'single' => $options['single'],
					'width' => $options['width'],
					'height' => $options['height'],
					'front' => $options['front']
				),
				'path' => array(
					//'images' => $this->_path.'uploads/',
					//'thumbs' => $this->_path.'uploads/thumbs/front_'
					'images' => '//'.Tools::getMediaServer($this->name)._MODULE_DIR_.$this->name.'/uploads/',
					'thumbs' => '//'.Tools::getMediaServer($this->name)._MODULE_DIR_.$this->name.'/uploads/thumbs/front_'
				),
				'tpl' => _PS_MODULE_DIR_.$this->name.'/views/templates/front/'.$tpl,
				'position' => $position
			));

	 		return $this->display(__FILE__, 'views/templates/front/front.tpl');
		}
	
	public function hookLeftColumn()
		{
			return $this->hookHome('left');
		}
	
	public function hookRightColumn()
		{
			return $this->hookHome('right');
		}		

	public function hookDisplayTop()
		{
			return $this->hookHome('top');
		}
}

?>