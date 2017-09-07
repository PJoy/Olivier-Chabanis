<?php use Roots\Sage\Titles; ?>

<?php
$thumb = get_the_post_thumbnail_url();
if ($thumb != '') {?>
	<div class="page-header" style="background: url('<?php echo get_the_post_thumbnail_url() ?>')">
		<h1><?= get_field("sous-titre") ?></h1>
	</div>
<?php } ?>