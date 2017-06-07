<?php

if (!defined('_PS_VERSION_'))
	exit;

class pk_instafeed extends Module
{
	private $_html = '';
	private $_postErrors = array();

    function __construct()
    {
		$this->name = 'pk_instafeed';
		$this->tab = 'front_office_features';
		$this->version = '1.3';
		$this->author = 'promokit.eu';

		$this->bootstrap = true;
		parent::__construct();	

		$this->displayName = $this->l('Instagram Feed');
		$this->description = $this->l('Shows instagram images by hashtag.');
		$this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);

		if (Tools::usingSecureMode())
			$domain = Tools::getShopDomainSsl(true);
		else
			$domain = Tools::getShopDomain(true);

		$this->redirect_url = $domain.__PS_BASE_URI__.'modules/'.$this->name.'/api.php';
	}

	public function install()
	{	

		if (
			parent::install() == false
			|| $this->registerHook('header') == false
			|| $this->registerHook('hook_home_01') == false
			|| $this->registerHook('hook_home_02') == false
			|| $this->registerHook('narrow_top') == false
			|| $this->registerHook('narrow_middle') == false
			|| $this->registerHook('narrow_bottom') == false	
			|| Configuration::updateValue('PK_INSTA_API_CODE', "") == false
			|| Configuration::updateValue('PK_INSTA_AT', "") == false
			|| Configuration::updateValue('PK_INSTA_TEMP_CODE', "") == false
			|| Configuration::updateValue('PK_INSTA_CONTENT_TYPE', "tagged") == false
			|| Configuration::updateValue('PK_INSTA_REDIRECT_URL', $this->redirect_url) == false
			|| Configuration::updateValue('PK_INSTA_HASHTAG', "sky") == false
			|| Configuration::updateValue('PK_INSTA_API_SECRET', "") == false
			|| Configuration::updateValue('PK_INSTA_USERNAME', "prestashop") == false
			|| Configuration::updateValue('PK_INSTA_API_CALLBACK', "http://localhost") == false
			|| Configuration::updateValue('PK_INSTA_SORTBY', "none") == false
			|| Configuration::updateValue('PK_INSTA_NUMBER', "10") == false	
			|| Configuration::updateValue('PK_INSTA_NUMBER_VIS', "4") == false
			|| Configuration::updateValue('PK_INSTA_LINKS', true) == false
			|| Configuration::updateValue('PK_INSTA_LIKES', true) == false
			|| Configuration::updateValue('PK_INSTA_COMMENTS', true) == false
			|| Configuration::updateValue('PK_INSTA_CAPTION', true) == false
			|| Configuration::updateValue('PK_INSTA_CAROUSEL', true) == false
			|| Configuration::updateValue('PK_INSTA_BACKGROUND', false) == false
			|| Configuration::updateValue('PK_INSTA_AUTOSCROLL', true) == false
			|| Configuration::updateValue('PK_INSTA_COLOR', false) == false
			)
			return false;
		return true;	
	}
	
	public function uninstall()
	{
		return 
			Configuration::deleteByName('PK_INSTA_API_CODE') &&
			Configuration::deleteByName('PK_INSTA_AT') &&
			Configuration::deleteByName('PK_INSTA_CONTENT_TYPE') &&
			Configuration::deleteByName('PK_INSTA_TEMP_CODE') &&
			Configuration::deleteByName('PK_INSTA_REDIRECT_URL') &&
			Configuration::deleteByName('PK_INSTA_HASHTAG') &&
			Configuration::deleteByName('PK_INSTA_API_SECRET') &&
			Configuration::deleteByName('PK_INSTA_API_CALLBACK') &&
			Configuration::deleteByName('PK_INSTA_USERNAME') &&
			Configuration::deleteByName('PK_INSTA_SORTBY') &&
			Configuration::deleteByName('PK_INSTA_NUMBER') &&
			Configuration::deleteByName('PK_INSTA_NUMBER_VIS') &&
			Configuration::deleteByName('PK_INSTA_LINKS') &&
			Configuration::deleteByName('PK_INSTA_LIKES') &&
			Configuration::deleteByName('PK_INSTA_COMMENTS') &&
			Configuration::deleteByName('PK_INSTA_CAPTION') &&
			Configuration::deleteByName('PK_INSTA_CAROUSEL') &&
			Configuration::deleteByName('PK_INSTA_BACKGROUND') &&
			Configuration::deleteByName('PK_INSTA_AUTOSCROLL') &&
			Configuration::deleteByName('PK_INSTA_COLOR') &&
			parent::uninstall();
	}

	public function getContent()
	{
		$output = '';

		if (Tools::isSubmit('pk_ig_submit')) {
			Configuration::updateValue('PK_INSTA_API_CODE', Tools::getValue('PK_INSTA_API_CODE'));
			Configuration::updateValue('PK_INSTA_AT', Tools::getValue('PK_INSTA_AT'));
			Configuration::updateValue('PK_INSTA_TEMP_CODE', Tools::getValue('PK_INSTA_TEMP_CODE'));
			Configuration::updateValue('PK_INSTA_CONTENT_TYPE', Tools::getValue('PK_INSTA_CONTENT_TYPE'));
			Configuration::updateValue('PK_INSTA_REDIRECT_URL', Tools::getValue('PK_INSTA_REDIRECT_URL'));
			Configuration::updateValue('PK_INSTA_HASHTAG', 	str_replace('#', '', Tools::getValue('PK_INSTA_HASHTAG')));
			Configuration::updateValue('PK_INSTA_API_SECRET', Tools::getValue('PK_INSTA_API_SECRET'));
			Configuration::updateValue('PK_INSTA_API_CALLBACK', Tools::getValue('PK_INSTA_API_CALLBACK'));
			Configuration::updateValue('PK_INSTA_USERNAME', Tools::getValue('PK_INSTA_USERNAME'));
			Configuration::updateValue('PK_INSTA_SORTBY', Tools::getValue('PK_INSTA_SORTBY'));
			Configuration::updateValue('PK_INSTA_NUMBER', Tools::getValue('PK_INSTA_NUMBER'));
			Configuration::updateValue('PK_INSTA_NUMBER_VIS', Tools::getValue('PK_INSTA_NUMBER_VIS'));
			Configuration::updateValue('PK_INSTA_LINKS', Tools::getValue('PK_INSTA_LINKS'));
			Configuration::updateValue('PK_INSTA_LIKES', Tools::getValue('PK_INSTA_LIKES'));
			Configuration::updateValue('PK_INSTA_COMMENTS', Tools::getValue('PK_INSTA_COMMENTS'));
			Configuration::updateValue('PK_INSTA_CAPTION', Tools::getValue('PK_INSTA_CAPTION'));	
			Configuration::updateValue('PK_INSTA_CAROUSEL', Tools::getValue('PK_INSTA_CAROUSEL'));	
			Configuration::updateValue('PK_INSTA_BACKGROUND', Tools::getValue('PK_INSTA_BACKGROUND'));
			Configuration::updateValue('PK_INSTA_AUTOSCROLL', Tools::getValue('PK_INSTA_AUTOSCROLL'));
			Configuration::updateValue('PK_INSTA_COLOR', Tools::getValue('PK_INSTA_COLOR'));
			$output .= $this->displayConfirmation($this->l('Settings updated'));
			$id_shop = (int)$this->context->shop->id;

			if (isset($_FILES['insta-bg']) && isset($_FILES['insta-bg']['tmp_name']) && !empty($_FILES['insta-bg']['tmp_name'])) {
				$img = dirname(__FILE__).'/img/instabg_'.$id_shop.'.jpg';
				if (file_exists($img))
					unlink($img);
				
				if ($error = ImageManager::validateUpload($_FILES['insta-bg']))
					$output .= $error;

				elseif (!($tmp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES['insta-bg']['tmp_name'], $tmp_name))
					return false;			

				elseif (!ImageManager::resize($tmp_name, $img))
					$output .= $this->displayError($this->l('An error occurred while attempting to upload the image.'));

				if (isset($tmp_name))
					unlink($tmp_name);

			}

			$at = Tools::getValue('PK_INSTA_AT');
			$client_id = Tools::getValue('PK_INSTA_API_CODE');
			$verif = Tools::getValue('PK_INSTA_TEMP_CODE');
			$url = Tools::getValue('PK_INSTA_REDIRECT_URL');
			$secret = Tools::getValue('PK_INSTA_API_SECRET');

			if (empty($at)) {
				if ($client_id != "" && $verif != "" && $url != "" && $secret != "") {
					$resp = $this->instagram_authorize($url, $client_id, $verif, $secret);
					if (isset($resp->error_message)) {
						$output .= $this->displayError($resp->error_message.' Try to change "Redirect URL" to "http://localhost" in both settings and than copy Matching code from address bar.');
					} else {
						Configuration::updateValue('PK_INSTA_AT', $resp->access_token);
					}
				}
			}

			if (empty($verif)) {
				if ($client_id != "" && $url != "") {
					$this->get_verification_code($client_id, $url);
				}
			}

		}
		$img = "";
		$rev = date("H").date("i").date("s");
		if (file_exists(dirname(__FILE__).'/img/instabg_'.$this->context->shop->id.'.jpg'))
			$img = '<div class="panel"><div class="panel-heading"><i class="icon-cogs"></i>&nbsp;Instagram Background Image</div><div class="form-wrapper"><div class="form-group" id="instabg" style="overflow:hidden"><div class="col-lg-12"><div class="form-group"><div class="col-sm-6"><img src="'.$this->_path.'img/instabg_'.$this->context->shop->id.'.jpg?'.$rev.' alt="" style="max-width:400px; height:auto; width:auto; height:150px;" /></div></div></div></div></div></div>';

		return $output.$this->renderForm().$img;
	}

	public function hookhook_home_01($params)
	{
		if (isset($this->context->controller->php_self) && $this->context->controller->php_self == 'index') {
			$status = $this->getModuleState("hook_home_01");
			if ($status == 1) {
					$bgimg = "";
					if (file_exists(dirname(__FILE__).'/img/instabg_'.$this->context->shop->id.'.jpg'))
						$bgimg = "img/instabg_".$this->context->shop->id.".jpg";
					$this->context->smarty->assign(array(
						'pk_ig' => $this->getValuesFromDB(),
						'pk_ig_suffix' => "middle",
						'this_path' => $this->_path,
						'insta_bg' => $bgimg
					));		
				return $this->display(__FILE__, $this->name.'.tpl');
			}
		}

	}

	public function hookhook_home_02($params)
	{

		if (isset($this->context->controller->php_self) && $this->context->controller->php_self == 'index') {
			$status = $this->getModuleState("hook_home_02");
			if ($status == 1) {
				$bgimg = "";
				if (file_exists(dirname(__FILE__).'/img/instabg_'.$this->context->shop->id.'.jpg'))
					$bgimg = "img/instabg_".$this->context->shop->id.".jpg";
				$this->context->smarty->assign(array(
					'pk_ig' => $this->getValuesFromDB(),
					'pk_ig_suffix' => "middle",
					'this_path' => $this->_path,
					'insta_bg' => $bgimg
				));		
				return $this->display(__FILE__, $this->name.'.tpl');
			}
		}
	}

	public function hooknarrow_top($params)
	{
		if (isset($this->context->controller->php_self) && $this->context->controller->php_self == 'index') {
			$status = $this->getModuleState("narrow_top");
			if ($status == 1) {
				$bgimg = "";
				if (file_exists(dirname(__FILE__).'/img/instabg_'.$this->context->shop->id.'.jpg'))
					$bgimg = "img/instabg_".$this->context->shop->id.".jpg";
				$this->context->smarty->assign(array(
					'pk_ig' => $this->getValuesFromDB(),
					'pk_ig_suffix' => "middle",
					'this_path' => $this->_path,
					'insta_bg' => $bgimg
				));		
				return $this->display(__FILE__, $this->name.'.tpl');
			}
		}
	}
	public function hooknarrow_middle($params)
	{
		if (isset($this->context->controller->php_self) && $this->context->controller->php_self == 'index') {
			$status = $this->getModuleState("narrow_middle");
			if ($status == 1) {
				$bgimg = "";
				if (file_exists(dirname(__FILE__).'/img/instabg_'.$this->context->shop->id.'.jpg'))
					$bgimg = "img/instabg_".$this->context->shop->id.".jpg";
				$this->context->smarty->assign(array(
					'pk_ig' => $this->getValuesFromDB(),
					'pk_ig_suffix' => "middle",
					'this_path' => $this->_path,
					'insta_bg' => $bgimg
				));		
				return $this->display(__FILE__, $this->name.'.tpl');
			}
		}
	}
	public function hooknarrow_bottom($params)
	{
		if (isset($this->context->controller->php_self) && $this->context->controller->php_self == 'index') {
			$status = $this->getModuleState("narrow_bottom");
			if ($status == 1) {
				$bgimg = "";
				if (file_exists(dirname(__FILE__).'/img/instabg_'.$this->context->shop->id.'.jpg'))
					$bgimg = "img/instabg_".$this->context->shop->id.".jpg";
				$this->context->smarty->assign(array(
					'pk_ig' => $this->getValuesFromDB(),
					'pk_ig_suffix' => "middle",
					'this_path' => $this->_path,
					'insta_bg' => $bgimg
				));		
				return $this->display(__FILE__, $this->name.'.tpl');
			}
		}
	}

	public function hookHeader($params)
	{
		if (isset($this->context->controller->php_self) && $this->context->controller->php_self == 'index') {
			$this->context->controller->addJS(($this->_path).'js/instafeed.min.js');
			$this->context->controller->addJS(($this->_path).'js/init.js');
			$this->context->controller->addCSS(($this->_path).'css/styles.css', 'all');
		}
	}

	public function renderForm()
	{
		$fields_form_01 = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Instagram Personal Data'),
					'icon' => 'icon-cogs'
				),
				'input' => array(
					array(
						'type' => 'text',
						'label' => $this->l('Redirect URL'),
						'name' => 'PK_INSTA_REDIRECT_URL',
						'class' => 'fixed-width-xxl',
						'required' => false,
						'desc' => $this->l('Put this redirect URL to your Instagram Client Settings.')
					),
					array(
						'type' => 'text',
						'label' => $this->l('Client ID'),
						'name' => 'PK_INSTA_API_CODE',
						'class' => 'fixed-width-xxl',
						'required' => true,
						'desc' => $this->l('Put your Instagram Client ID')
					),
					array(
						'type' => 'text',
						'label' => $this->l('Client Secret'),
						'name' => 'PK_INSTA_API_SECRET',
						'class' => 'fixed-width-xxl',
						'required' => true,
						'desc' => $this->l('Put your Instagram Client Secret.')
					),
					array(
						'type' => 'text',
						'label' => $this->l('Matching Code'),
						'name' => 'PK_INSTA_TEMP_CODE',
						'class' => 'fixed-width-xxl',
						'desc' => $this->l('Leave this field empty and click to "Save" button. You will be redirected to a page with generated Matching code. Copy that code, click to "Back" link and paste it to this field.')
					),
					array(
						'type' => 'text',
						'label' => $this->l('Access Token'),
						'name' => 'PK_INSTA_AT',
						'class' => 'fixed-width-xxl access-token',
						'desc' => $this->l('Access Token generates automatically when Matching code exist. ')
					),	
				),
				'submit' => array(
					'title' => $this->l('Save'),
				)
			),
		);
		$fields_form_02 = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Module Appearance'),
					'icon' => 'icon-cogs'
				),
				'input' => array(					
					array(
						'type' => 'select',
						'label' => $this->l('Feed content by'),
						'name' => 'PK_INSTA_CONTENT_TYPE',
						'class' => 'fixed-width-xxl',
						'desc' => $this->l('Display images by hashtag or by username.'),
						'options' => array(
							'query' => array(
								array(
									'id' => 'tagged',
									'name' => $this->l('Hashtag')),
								array(
									'id' => 'user',
									'name' => $this->l('Username')),
							),
							'id' => 'id',
							'name' => 'name'
						)
					),			
					array(
						'type' => 'text',
						'label' => $this->l('Hashtag #'),
						'name' => 'PK_INSTA_HASHTAG',
						'class' => 'fixed-width-xxl',
						'desc' => $this->l('Name of a hashtag to get. Please notice! You can show images by hashtag only from your Instagram account.')
					),	
					array(
						'type' => 'text',
						'label' => $this->l('Username'),
						'name' => 'PK_INSTA_USERNAME',
						'class' => 'fixed-width-xxl',
						'desc' => $this->l('Your instagram username')
					),
					array(
						'type' => 'select',
						'label' => $this->l('Feed content'),
						'name' => 'PK_INSTA_SORTBY',
						'class' => 'fixed-width-xxl',
						'desc' => $this->l('Sort the images in a set order'),
						'options' => array(
							'query' => array(
								array(
									'id' => 'none',
									'name' => $this->l('None')),
								array(
									'id' => 'most-recent',
									'name' => $this->l('Most Recent')),
								array(
									'id' => 'least-recent',
									'name' => $this->l('Least Recent')),
								array(
									'id' => 'most-liked',
									'name' => $this->l('Most Liked')),
								array(
									'id' => 'least-liked',
									'name' => $this->l('Least Liked')),
								array(
									'id' => 'most-commented',
									'name' => $this->l('Most Commented')),
								array(
									'id' => 'least-commented',
									'name' => $this->l('Least Commented')),
								array(
									'id' => 'random',
									'name' => $this->l('Random')),
							),
							'id' => 'id',
							'name' => 'name'
						)
					),	
					array(
						'type' => 'text',
						'label' => $this->l('Number of images'),
						'name' => 'PK_INSTA_NUMBER',
						'class' => 'fixed-width-xxl',
						'desc' => $this->l('How many images you want to take from instagram')
					),
					array(
						'type' => 'text',
						'label' => $this->l('Visible images'),
						'name' => 'PK_INSTA_NUMBER_VIS',
						'class' => 'fixed-width-xxl',
						'desc' => $this->l('How many images you want to see in carousel')
					),
					array(
						'type' => 'switch',
						'label' => $this->l('Images with links'),
						'name' => 'PK_INSTA_LINKS',
						'desc' => $this->l('Wrap the images with a link to the photo on Instagram'),
						'is_bool' => true,
						'values' => array(
									array(
										'id' => 'active_on',
										'value' => 1,
										'label' => $this->l('Yes')
									),
									array(
										'id' => 'active_off',
										'value' => 0,
										'label' => $this->l('No')
									)
								),
						),
					array(
						'type' => 'switch',
						'label' => $this->l('Show image likes number'),
						'name' => 'PK_INSTA_LIKES',
						'is_bool' => true,
						'values' => array(
									array(
										'id' => 'active_on',
										'value' => 1,
										'label' => $this->l('Yes')
									),
									array(
										'id' => 'active_off',
										'value' => 0,
										'label' => $this->l('No')
									)
								),
						),
					array(
						'type' => 'switch',
						'label' => $this->l('Show image comments number'),
						'name' => 'PK_INSTA_COMMENTS',
						'is_bool' => true,
						'values' => array(
									array(
										'id' => 'active_on',
										'value' => 1,
										'label' => $this->l('Yes')
									),
									array(
										'id' => 'active_off',
										'value' => 0,
										'label' => $this->l('No')
									)
								),
						),
					array(
						'type' => 'switch',
						'label' => $this->l('Show image captions'),
						'name' => 'PK_INSTA_CAPTION',
						'is_bool' => true,
						'values' => array(
									array(
										'id' => 'active_on',
										'value' => 1,
										'label' => $this->l('Yes')
									),
									array(
										'id' => 'active_off',
										'value' => 0,
										'label' => $this->l('No')
									)
								),
						),	
					array(
						'type' => 'switch',
						'label' => $this->l('Display images in carousel'),
						'desc' => $this->l('Use carousel or just a list of instagram images'),
						'name' => 'PK_INSTA_CAROUSEL',
						'is_bool' => true,
						'values' => array(
									array(
										'id' => 'active_on',
										'value' => 1,
										'label' => $this->l('Yes')
									),
									array(
										'id' => 'active_off',
										'value' => 0,
										'label' => $this->l('No')
									)
								),
						),		
					array(
						'type' => 'switch',
						'label' => $this->l('Carousel autorotate'),
						'name' => 'PK_INSTA_AUTOSCROLL',
						'is_bool' => true,
						'values' => array(
									array(
										'id' => 'active_on',
										'value' => 1,
										'label' => $this->l('Yes')
									),
									array(
										'id' => 'active_off',
										'value' => 0,
										'label' => $this->l('No')
									)
								),
						),	
					array(
						'type' => 'switch',
						'label' => $this->l('Light color of the text'),
						'name' => 'PK_INSTA_COLOR',
						'is_bool' => true,
						'values' => array(
									array(
										'id' => 'active_on',
										'value' => 1,
										'label' => $this->l('Yes')
									),
									array(
										'id' => 'active_off',
										'value' => 0,
										'label' => $this->l('No')
									)
								),
						),	
					array(
						'type' => 'switch',
						'label' => $this->l('Display background for module'),
						'name' => 'PK_INSTA_BACKGROUND',
						'is_bool' => true,
						'values' => array(
									array(
										'id' => 'active_on',
										'value' => 1,
										'label' => $this->l('Yes')
									),
									array(
										'id' => 'active_off',
										'value' => 0,
										'label' => $this->l('No')
									)
								),
						),
					array(
						'type' => 'file',
						'label' => $this->l('Background Image'),
						'name' => 'insta-bg',
						'value' => true
					),			
				),
				'submit' => array(
					'title' => $this->l('Save'),
				)
			),
		);

		$bkimg = "";
		if (file_exists(dirname(__FILE__).'/img/instabg_'.$this->context->shop->id.'.jpg'))
			$bkimg = ShopUrl::getBaseURI()."/modules".$this->name."/img/instabg_".$this->context->shop->id.".jpg";
		
		$helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table = $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'pk_ig_submit';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->tpl_vars = array(
			'fields_value' => $this->getValuesFromDB(),
			'insta-bg' => $bkimg
		);
		return $helper->generateForm(array($fields_form_01, $fields_form_02));
	}

	public function getValuesFromDB()
	{

		return array(
			'PK_INSTA_API_CODE' => (Configuration::get('PK_INSTA_API_CODE') ? Configuration::get('PK_INSTA_API_CODE'): ""),
			'PK_INSTA_REDIRECT_URL' => (Configuration::get('PK_INSTA_REDIRECT_URL') ? Configuration::get('PK_INSTA_REDIRECT_URL'): ""),
			'PK_INSTA_AT' => (Configuration::get('PK_INSTA_AT') ? Configuration::get('PK_INSTA_AT'): ""),
			'PK_INSTA_TEMP_CODE' => (Configuration::get('PK_INSTA_TEMP_CODE') ? Configuration::get('PK_INSTA_TEMP_CODE'): ""),
			'PK_INSTA_CONTENT_TYPE' => (Configuration::get('PK_INSTA_CONTENT_TYPE') ? Configuration::get('PK_INSTA_CONTENT_TYPE'):""),
			'PK_INSTA_HASHTAG' => (Configuration::get('PK_INSTA_HASHTAG') ? Configuration::get('PK_INSTA_HASHTAG'): ""),
			'PK_INSTA_API_SECRET' => (Configuration::get('PK_INSTA_API_SECRET') ? Configuration::get('PK_INSTA_API_SECRET'): ""),
			'PK_INSTA_API_CALLBACK' => (Configuration::get('PK_INSTA_API_CALLBACK') ? Configuration::get('PK_INSTA_API_CALLBACK'): ""),			
			'PK_INSTA_USERNAME' => (Configuration::get('PK_INSTA_USERNAME') ? Configuration::get('PK_INSTA_USERNAME'): ""),
			'PK_INSTA_SORTBY' => (Configuration::get('PK_INSTA_SORTBY') ? Configuration::get('PK_INSTA_SORTBY'): ""),
			'PK_INSTA_NUMBER' => (Configuration::get('PK_INSTA_NUMBER') ? Configuration::get('PK_INSTA_NUMBER'): ""),
			'PK_INSTA_NUMBER_VIS' => (Configuration::get('PK_INSTA_NUMBER_VIS') ? Configuration::get('PK_INSTA_NUMBER_VIS'): ""),
			'PK_INSTA_LINKS' => (Configuration::get('PK_INSTA_LINKS') ? Configuration::get('PK_INSTA_LINKS'): ""),
			'PK_INSTA_LIKES' => (Configuration::get('PK_INSTA_LIKES') ? Configuration::get('PK_INSTA_LIKES'): ""),
			'PK_INSTA_COMMENTS' => (Configuration::get('PK_INSTA_COMMENTS') ? Configuration::get('PK_INSTA_COMMENTS'): ""),
			'PK_INSTA_CAPTION' => (Configuration::get('PK_INSTA_CAPTION') ? Configuration::get('PK_INSTA_CAPTION'): ""),
			'PK_INSTA_CAROUSEL' => (Configuration::get('PK_INSTA_CAROUSEL') ? Configuration::get('PK_INSTA_CAROUSEL'): ""),
			'PK_INSTA_BACKGROUND' => (Configuration::get('PK_INSTA_BACKGROUND') ? Configuration::get('PK_INSTA_BACKGROUND'): 0),
			'PK_INSTA_AUTOSCROLL' => (Configuration::get('PK_INSTA_AUTOSCROLL') ? Configuration::get('PK_INSTA_AUTOSCROLL'): ""),
			'PK_INSTA_COLOR' => (Configuration::get('PK_INSTA_COLOR') ? Configuration::get('PK_INSTA_COLOR'): ""),
			'PK_INSTA_USERID' => $this->getuserid()	
		);
	}

	public function getuserid() {		

		$at = Configuration::get('PK_INSTA_AT');
		if (empty($at)) {
			return 0;
		} else {
			$explode = explode('.', $at);
			if (is_numeric($explode[0])) {
				return $explode[0];
			} else {
				return 0;
			}
		}

	}

	public function get_verification_code($client_id, $redirect_uri) {
		header('Location: https://api.instagram.com/oauth/authorize/?' . http_build_query(array(
	        'client_id' => $client_id,
	        'redirect_uri' => $redirect_uri,
	        'response_type' => 'code',
	        'scope' => 'basic public_content'
	    )));
	    exit;	
	}

	public function instagram_authorize($redirect_uri, $client_id, $code, $client_secret) {

		$apiData = array(
		  'client_id'       => $client_id,
		  'client_secret'   => $client_secret,
		  'grant_type'      => 'authorization_code',
		  'redirect_uri'    => $redirect_uri,
		  'code'            => $code
		);

		$apiHost = 'https://api.instagram.com/oauth/access_token';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $apiHost);
		curl_setopt($ch, CURLOPT_POST, count($apiData));
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($apiData));
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$jsonData = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($jsonData);
		return $response;
		
	}

	public function getModuleState($hook)	{  // get options from database

		if (!$sett = Db::getInstance()->ExecuteS('SELECT value FROM `'._DB_PREFIX_.'pk_theme_settings_hooks` WHERE hook = "'.$hook.'" AND module = "'.$this->name.'" AND id_shop = '.(int)$this->context->shop->id.';')) 
			return false;		
		return $sett[0]["value"];

	}

}