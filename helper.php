<?php

defined('_JEXEC') or die;

class _mod_magnificJoomlaHelper{

	public function getItems(&$params){


	}

	public function usejquery(&$params){

		if($params->get('use_jquery')){
			
			JLoader::import( 'joomla.version' );
			$version = new JVersion();
			
			if (version_compare( $version->RELEASE, '2.5', '<=')) {
				
				$doc = &JFactory::getDocument();
				$app = &JFactory::getApplication();
				$file=JURI::root(true).'/modules/mod_reslider/assets/js/jquery-1.7.2.min.js';
				$file2=JURI::root(true).'/modules/mod_reslider/assets/js/noconflict.js';
				$doc->addScript($file);
				$doc->addScript($file2);

			} else {
				
				JHtml::_('jquery.framework');

			}	
		
		}

	}

}