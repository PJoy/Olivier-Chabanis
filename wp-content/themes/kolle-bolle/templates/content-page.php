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
		?>
		<div class="outer-content-block col-lg-6 col-xl-4 text-center">
			<div class="content-block <?php echo $class ?>" <?php if ($bg != '') echo 'style="background: url('.$bg.')"'?>>
				<?php if ($link != '') echo '<a href="'.$link.'">'; ?>
				<?php echo $block["texte"]?>
				<?php if ($link != '') echo '</a>'; ?>
				<?php if ($bg != '') echo '<div class="bg-color"></div>' ?>
			</div>
		</div>
	<?php } ?>
</div>
