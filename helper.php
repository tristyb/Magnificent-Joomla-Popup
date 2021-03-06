<?php

#@license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

defined('_JEXEC') or die;

class mod_magnificjoomlaHelper{

	public static function getItems(&$params){

		if($params->get('module_mode') == 'images'){

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

					$item = "<a class='thumbnail-linker' href='".JURI::root().$large."' title='".$caption."'><img src='".JURI::root().$thumbnail."' class='thumbnail'></a>";

					array_push( $items, $item );

				}

				$i++;

			endwhile;

			return $items;

		} else if ($params->get('module_mode') == 'video'){

			$video = $params->get('url');
			$items = array();

			// if no thumbnail
			if ($params->get('vidthumbnail') == 0){

				$linktext = $params->get('textnail');
				$item = "<a class='thumbnail-linker video' href='".$video."'>".$linktext."</a>";
				array_push( $items, $item );

			// if thumbnail
			} else if ($params->get('vidthumbnail') == 1){

				$linkthumb = $params->get('videothumb');
				$item = "<a class='thumbnail-linker video' href='".$video."'><img src='".JURI::root().$linkthumb."' class='thumbnail'></a>";
				array_push( $items, $item );

			}

			return $items;

		}

	}

  public static function getModuleId($module){
    return $module->id;
  }
}
