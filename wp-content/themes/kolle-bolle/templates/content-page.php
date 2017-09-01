<?php $blocks = get_field("blocs"); ?>

	<div class="content-blocks-wrapper grid">
		<?php foreach ($blocks as $key=>$block){
			$hasImage = (strcmp($block["type"],"bloc image") == 0);
			$hasText = (strcmp($block["texte"],'') != 0);
			$hasLink = (strcmp($block["lien"],'') != 0);

			$classes = '';
			$classes .= ($hasImage ? 'image-block ' : 'text-block ');
			$classes .= ($hasText ? seoUrl($block["gabarit"]).' ' : '');

			$classes .= 'block-x-3-'.$block["taille_x_3"].' ';
			$classes .= 'block-y-3-'.$block["taille_y_3"].' ';
			$classes .= 'block-x-2-'.$block["taille_x_2"].' ';
			$classes .= 'block-y-2-'.$block["taille_y_2"].' ';
			$classes .= 'block-x-1-'.$block["taille_x_1"].' ';
			$classes .= 'block-y-1-'.$block["taille_y_1"].' ';

			$doInvert = $block["inversion"];

			$outerClasses = "grid-item--width".$block["taille_x_3"].' ';
			if ($doInvert) $outerClasses .= "invert invert-".$block["invert_index"];

			?>
			<div class="content-block-outer grid-item <?php echo $outerClasses; ?>">
				<?php if ($hasLink) {
					echo '<a href="">';
				} ?>
				<div id="<?php echo 'block-'.$key; ?>" class="content-block <?php echo $classes; ?>"
					<?php if ($hasImage) echo 'style="background: url('.$block["image"].')"'?>>
					<?php if ($hasText) echo $block["texte"] ?>
				</div>
				<?php if ($hasLink) {
					echo '<div class="color-hover"></div>';
					echo '</a>';
				} ?>
			</div>
			<?php
		} ?>
	</div>

	<script>
		jQuery('.grid').masonry({
			// options
			itemSelector: '.grid-item',
			columnWidth: 300,
			gutter: 15,
		});
	</script>

<?php
//TODO passer en template
if (is_front_page()) {
	?>
	<script>
		var rand = Math.random();
		var i = 1;
		var $inverts = jQuery('.invert-'+i);
		if ( rand > 0.5){
			while ($inverts.length != 0){
				i++;

				console.log($inverts);

				$inverts.first().append($inverts.last().find("div"));
				$inverts.last().append($inverts.first().find("div").first());

				$inverts = jQuery('.invert-'+i);
			}
		}
	</script>
	<?php
}
