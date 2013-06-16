<?php

defined('_JEXEC') or die;

echo "<div class='thumb-container'>";

foreach( $items as $item ):

	echo $item;

endforeach;

echo "</div>";

?>

<script type="text/javascript">
	jQuery(document).ready(function() {
  		jQuery('.thumb-container').magnificPopup({
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

<?php

