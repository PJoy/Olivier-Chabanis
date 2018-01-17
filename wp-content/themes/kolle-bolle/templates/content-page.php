<?php $blocks = get_field("blocs"); ?>
<div class="page <?php echo 'page-'.$post->post_name; ?>">
	<?php if ($blocks != false) {
		?>

		<div class="content-blocks-wrapper grid">
			<?php foreach ( $blocks as $key => $block ) {
				$hasImage = ( strcmp( $block["type"], "bloc image" ) == 0 );
				$hasText  = ( strcmp( $block["texte"], '' ) != 0 );
				$hasLink  = ( strcmp( $block["lien"], '' ) != 0 );
				$hasHover = ( strcmp( $block["image_roll"], '' ) != 0 );

				$classes = '';
				$classes .= ( $hasImage ? 'image-block ' : 'text-block ' );
				$classes .= ( $hasText ? seoUrl( $block["gabarit"] ) . ' ' : '' );


				$classes .= 'block-x-3-' . $block["taille_x_3"] . ' ';
				$classes .= 'block-y-3-' . $block["taille_y_3"] . ' ';

				$data = '';

				$outerClasses = "grid-item--width" . $block["taille_x_3"] . ' ';

				?>
				<div class="content-block-outer grid-item <?php echo $outerClasses; ?>" <?php echo $data; ?>>
					<?php if ( $hasLink ) {
						echo '<a href="'.$block['lien'].'">';
					} ?>
					<div id="<?php echo 'block-' . $key; ?>" class="content-block <?php echo $classes; ?>">
						<?php if ( $hasImage ) {
							$pinImageUrl = (!$block["image_roll"]) ? $block["image"] : $block["image_roll"];
							echo '<span style="display:none;"><img src="' . $pinImageUrl . '"/></span>';
							echo '<div class="background-image" style="background: url(' . $block["image"] . ') no-repeat"></div>';
						}?>
						<?php if ( $hasText ){
							$clear = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags(
								$block["texte"]
							))))));

							if (strcmp($clear, "Menu") == 0){
								replaceMenu();
							} else {
								echo $block["texte"];
							}
						} ?>
					</div>

					<?php if ($hasHover) { ?>
						<style>
							<?php echo '#block-'.$key.':hover .background-image'; ?> {
								background-image: url("<?php echo $block["image_roll"] ?>")!important;
							}
						</style>
					<?php } ?>

					<?php if ( $hasLink ) {
						echo '<div class="color-hover"></div>';
					} ?>
				</div>
				<?php
			} ?>
		</div>

		<script>
			if (window.innerWidth < 1023) {
				jQuery('.grid').isotope(
					{
						itemSelector: '.grid-item',
						masonry: {
							columnWidth: 300,
							gutter: 30
						}
					});
			} else if (window.innerWidth < 1620) {
				jQuery('.grid').isotope(
					{
						itemSelector: '.grid-item',
						masonry: {
							columnWidth: 190,
							gutter: 15
						}
					});
			} else {
				jQuery('.grid').isotope(
					{
						itemSelector: '.grid-item',
						masonry: {
							columnWidth: 300,
							gutter: 30
						}
					});
			}

		</script>

		<?php
	}
	?>
</div>
