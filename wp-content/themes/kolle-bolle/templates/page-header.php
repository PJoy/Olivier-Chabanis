<?php use Roots\Sage\Titles; ?>


<?php
$thumb = get_the_post_thumbnail_url();
if ($thumb != '') {?>

	<div class="page-header">

		<h1><?php echo get_field("sous-titre") ?></h1>

		<div class="slick-container">
			<?php
			$slider = get_field("slider");
			if ($slider != NULL) {
				foreach ( $slider as $singleSlide ) { ?>
					<div class="slide">
						<div class="page-header-bg" style="background: url('<?php echo $singleSlide["image"]["url"]; ?>')">
						</div>
					</div>
				<?php }
			}?>
		</div>
	</div>
	<script>
		jQuery(document).ready(function(){
			jQuery('.slick-container').slick({
				infinite: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				arrows: false
			});
		});
	</script>
<?php } ?>