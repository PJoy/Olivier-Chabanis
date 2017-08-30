<?php $blocks = get_field("contenu"); ?>

<div class="page-content col-12 col-md-10 m-auto row">
	<?php foreach ($blocks as $block) {
		$bg = $block["image"]["url"];
		$link = ($block["lien_interne"] != '')
			? $block["lien_interne"]
			: $block["lien_externe"];

		//CLASSES
		$mainClass = ($bg != '')
			? 'image-block'
			: (($link != '')
				? 'color-block'
				: 'simple-block' );
		$fontClass = ($block["type"] == "Lien")
            ? 'bigger-lighter'
            : ($block["type"] == "Texte court"
                ? 'big-regular'
                : 'small-light' );

		switch ($block["dimensions"]){
            case '1x1':
                $widthClass = 'col-4';
                $heightClass = "y-1";
                break;
            case '1x2':
                $widthClass = 'col-8';
                $heightClass = "y-1";
                break;
            case '1x3':
                $widthClass = 'col-12';
                $heightClass = "y-1";
                break;
            case '2x1':
                $widthClass = 'col-4';
                $heightClass = "y-2";
                break;
            case '2x2':
                $widthClass = 'col-8';
                $heightClass = "y-2";
                break;
            case '2x3':
                $widthClass = 'col-12';
                $heightClass = "y-2";
                break;
            case '3x1':
                $widthClass = 'col-4';
                $heightClass = "y-3";
                break;
            case '3x2':
                $widthClass = 'col-8';
                $heightClass = "y-3";
                break;
            case '3x3':
                $widthClass = 'col-12';
                $heightClass = "y-3";
                break;
        } ?>

		<div class="outer-content-block <?php echo $widthClass.' '.$heightClass; ?>">
			<div class="content-block <?php echo $mainClass.' font-'.$fontClass; ?>" <?php if ($bg != '') echo 'style="background: url('.$bg.')"'?>>
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