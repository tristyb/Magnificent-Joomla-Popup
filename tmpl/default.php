<?php

#@license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

defined('_JEXEC') or die;

$module_mode = $params->get('module_mode');

if($module_mode == 'images'){
    echo "<div class='thumb-container' data-module='".$module_id."'>";
} else if ($module_mode == 'video'){
    echo "<div class='video-container' data-module='".$module_id."'>";
}

foreach( $items as $item ):

	 echo $item;

endforeach;

echo "</div>";

?>

<?php if ($module_mode == 'images'){ ?>
  <script type="text/javascript">
  	jQuery(document).ready(function() {
    		jQuery('[data-module="<?php echo $module_id; ?>"]').magnificPopup({
    			type:'image',
    			delegate: 'a',
    			gallery: {
    				enabled: true
    			},
    			image: {
    				titleSrc: "title"
    			}
    		});
  	});
  </script>

<?php } else if ($module_mode == 'video'){ ?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('[data-module="<?php echo $module_id; ?>"]').magnificPopup({
                delegate:'a',
                type:'iframe'
            });
        });
    </script>
<?php }
