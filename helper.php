<?php

defined('_JEXEC') or die;

class mod_magnificJoomlaHelper{

	public function getItems(&$params){

		$i = 1;
		$max = 10;
		$items = array();

		while( $i <= 10 ):

			if( $params->get( 'thumb'.$i ) != null && $params->get( 'large'.$i ) !=null ){
				
				$thumbnail = $params->get( 'thumb'.$i );
				$large = $params->get('large'.$i);

				if($params->get( 'caption'.$i ) ){
					
					$caption = $params->get( 'caption'.$i );

				} else {
					
					$caption = '';

				}

				$item = "<a class='thumbnail-linker' href='/".$large."' title='".$caption."'><img src='/".$thumbnail."' class='thumbnail'></a>";

				array_push( $items, $item );

			} 

			$i++;

		endwhile;

		return $items;

	}

	public function usejquery(&$params){

		if($params->get('use_jquery')){
			
			JLoader::import( 'joomla.version' );
			$version = new JVersion();
			
			if (version_compare( $version->RELEASE, '2.5', '<=')) {
				
				$doc = &JFactory::getDocument();
				$app = &JFactory::getApplication();
				$file='//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
				$file2='<script type="text/javascript">jQuery.noConflict();</script>';
				$doc->addScript($file);
				$doc->addScript($file2);

			} else {
				
				JHtml::_('jquery.framework');

			}	
		
		}

	}

}