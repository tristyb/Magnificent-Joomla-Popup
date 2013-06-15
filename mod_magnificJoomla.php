<?php

/* MAGNIFICENT POPUP */

defined('_JEXEC') or die;

//add magnificent popup css
$doc =& JFactory::getDocument();
$doc->addStyleSheet(JURI::base(true).'/modules/mod_magnificJoomla/assets/css/magnific-popup.css', 'text/css');

//add scripts
$doc->addScript(JURI::base(true).'/modules/mod_magnificJoomla/assets/js/jquery.magnific-popup.min.js');

//include the class of the helper
require_once(dirname(__FILE__).'/helper.php');

//call the class
$items = mod_magnificJoomlaHelper::getItems($params);

//keeps class suffix
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require(JModuleHelper::getLayoutPath('mod_magnificJoomla'));