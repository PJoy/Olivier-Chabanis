<?php $blocks = get_field("blocs"); ?>
	<div class="page <?php echo 'page-'.$post->post_name; ?>">
		<?php if ($blocks != false) {
			?>

			<div class="content-blocks-wrapper grid">
				<?php foreach ( $blocks as $key => $block ) {
					$hasImage = ( strcmp( $block["type"], "bloc image" ) == 0 );
					$hasText  = ( strcmp( $block["texte"], '' ) != 0 );
					$hasLink  = ( strcmp( $block["lien"], '' ) != 0 );

					$classes = '';
					$classes .= ( $hasImage ? 'image-block ' : 'text-block ' );
					$classes .= ( $hasText ? seoUrl( $block["gabarit"] ) . ' ' : '' );

					$classes .= 'block-x-3-' . $block["taille_x_3"] . ' ';
					$classes .= 'block-y-3-' . $block["taille_y_3"] . ' ';
					$classes .= 'block-x-2-' . $block["taille_x_2"] . ' ';
					$classes .= 'block-y-2-' . $block["taille_y_2"] . ' ';
					$classes .= 'block-x-1-' . $block["taille_x_1"] . ' ';
					$classes .= 'block-y-1-' . $block["taille_y_1"] . ' ';

					$data = '';
					$data .= 'data-pos3 = "' . $block["position_3"] . '" ';
					$data .= 'data-pos2 = "' . $block["position_2"] . '" ';
					$data .= 'data-pos1 = "' . $block["position_1"] . '" ';

					$doInvert = $block["inversion"];

					$outerClasses = "grid-item--width" . $block["taille_x_3"] . ' ';
					if ( $doInvert ) {
						$outerClasses .= "invert invert-" . $block["invert_index"];
					}

					?>
					<div class="content-block-outer grid-item <?php echo $outerClasses; ?>" <?php echo $data; ?>>
						<?php if ( $hasLink ) {
							echo '<a href="">';
						} ?>
						<?php if ($post->post_name == "presse") { echo '<a href="'.$block["image"].'" data-toggle="lightbox" data-gallery="presse">'; } ?>
							<div id="<?php echo 'block-' . $key; ?>" class="content-block <?php echo $classes; ?>">
								<?php if ( $hasImage )
									echo '<div class="background-image" style="background: url(' . $block["image"] . ') no-repeat"></div>' ?>
								<?php if ( $hasText )
									echo $block["texte"] ?>
							</div>
						<?php if ( $hasLink ) {
							echo '<div class="color-hover"></div>';
						} ?>
						<?php if ( $hasLink || $post->post_name == "presse") {
							echo '</a>';
						} ?>
					</div>
					<?php
				} ?>
			</div>

			<script>
				if (window.innerWidth < 650) {
					jQuery('.grid').isotope(
						{
							itemSelector: '.grid-item',
							masonry: {
								columnWidth: 300,
								gutter: 15
							},
							getSortData: {
								order3: '[data-pos3] parseInt',
								order2: '[data-pos2] parseInt',
								order1: '[data-pos1] parseInt'
							},
							sortBy: 'order1'
						});
				} else if (window.innerWidth < 990) {
					jQuery('.grid').isotope(
						{
							itemSelector: '.grid-item',
							masonry: {
								columnWidth: 300,
								gutter: 15
							},
							getSortData: {
								order3: '[data-pos3] parseInt',
								order2: '[data-pos2] parseInt',
								order1: '[data-pos1] parseInt'
							},
							sortBy: 'order2'
						});
				} else {
					jQuery('.grid').isotope(
						{
							itemSelector: '.grid-item',
							masonry: {
								columnWidth: 300,
								gutter: 15
							},
							getSortData: {
								order3: '[data-pos3] parseInt',
								order2: '[data-pos2] parseInt',
								order1: '[data-pos1] parseInt'
							},
							sortBy: 'order3'
						});
				}
			</script>

			<?php
		}
		?>
	</div>
<?php if (is_front_page()) {
	include("pages/home.php");
} elseif ($post->post_name == "nous-contacter") {
	include ("pages/contact.php");
} elseif ($post->post_name == "presse") {
	include ("pages/presse.php");
} elseif ($post->post_name == "notre-catalogue") {

} elseif ($post->post_name == "catalogue") {
	include ("pages/catalogue.php");
}


