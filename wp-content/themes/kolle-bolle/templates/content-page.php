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
						<?php if ($post->post_name == "presse") { echo '<a href="'.$block["image"].'" data-toggle="lightbox" data-gallery="presse">'; } ?>
						<div id="<?php echo 'block-' . $key; ?>" class="content-block <?php echo $classes; ?>">
							<?php if ( $hasImage )
								/*echo '<div class="background-image lazy" data-src="' . $block["image"] . '" no-repeat"></div>' ?>*/
								echo '<div class="background-image" style="background: url(' . $block["image"] . ') no-repeat"></div>' ?>
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
						<?php if ( $hasLink || $post->post_name == "presse") {
							echo '</a>';
						} ?>
					</div>
					<?php
				} ?>
			</div>
			<script src="<?php echo get_template_directory_uri()."/bower_components/vanilla-lazyload/dist/lazyload.js" ?>"></script>

			<script>
				if (window.innerWidth < 650) {
					jQuery('.grid').isotope(
						{
							itemSelector: '.grid-item',
							masonry: {
								columnWidth: 300,
								gutter: 30
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
								gutter: 30
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
								gutter: 30
							},
							getSortData: {
								order3: '[data-pos3] parseInt',
								order2: '[data-pos2] parseInt',
								order1: '[data-pos1] parseInt'
							},
							sortBy: 'order3'
						});
				}

				var myLazyLoad = new LazyLoad({
					elements_selector: ".lazy"
				});

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

} elseif ($post->post_name == "newsletter") {
	include ("pages/newsletter.php");
} elseif ($post->post_name == "catalogue") {
	include ("pages/catalogue.php");
}elseif ($post->post_name == "accessoires") {
	include ("pages/catalogue.php");
}elseif ($post->post_name == "bureau") {

}elseif ($post->post_name == "canapes") {
	include ("pages/catalogue.php");
}elseif ($post->post_name == "chambre") {
	include ("pages/catalogue.php");
}elseif ($post->post_name == "luminaires") {
	include ("pages/catalogue.php");
}elseif ($post->post_name == "sejour") {
	include ("pages/catalogue.php");
}elseif ($post->post_name == "tables-chaises") {
	include ("pages/catalogue.php");
}elseif ($post->post_name == "terrasse") {
	include ("pages/catalogue.php");
}elseif ($post->post_name == "recherche") {
	$search = str_replace(' ', '+', $_GET["term"]);
	include( "pages/catalogue.php" );
}
