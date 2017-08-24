<?php $blocks = get_field("contenu"); ?>

<div class="page-content col-12 col-md-10 m-auto row">
	<?php foreach ($blocks as $block) {
		$bg = $block["image"]["url"];
		$link = ($block["lien_interne"] != '')
			? $block["lien_interne"]
			: $block["lien_externe"];
		$class = ($bg != '')
			? 'image-block'
			: (($link != '')
				? 'color-block'
				: 'simple-block' );
		$font = ($block["type"] == "Lien")
            ? 'bigger-lighter'
            : ($block["type"] == "Texte court"
                ? 'big-regular'
                : 'small-light' );
		?>
		<div class="outer-content-block col-lg-6 col-xl-4">
			<div class="content-block <?php echo $class.' font-'.$font; ?>" <?php if ($bg != '') echo 'style="background: url('.$bg.')"'?>>
				<?php if ($link != '') echo '<a href="'.$link.'">'; ?>
				<?php echo $block["texte"]?>
				<?php if ($link != '') echo '</a>'; ?>
				<?php if ($bg != '') echo '<div class="bg-color"></div>' ?>
			</div>
		</div>
	<?php } ?>
</div>

<script>

</script>