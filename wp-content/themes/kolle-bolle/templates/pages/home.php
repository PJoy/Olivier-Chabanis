<?php
/**
 * Created by PhpStorm.
 * User: pierreportejoie
 * Date: 01/09/2017
 * Time: 11:30
 */
?>
	<script>
		var rand = Math.random();
		var i = 1;
		var $inverts = jQuery('.invert-'+i);
		if ( rand > 0.5 ){
			while ($inverts.length != 0){
				i++;

				$inverts.first().append($inverts.last().children("div"));
				$inverts.last().append($inverts.first().children("div").first());

				$inverts = jQuery('.invert-'+i);
			}
		}
	</script>
<?php

