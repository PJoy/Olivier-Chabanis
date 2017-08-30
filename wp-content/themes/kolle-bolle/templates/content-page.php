<?php $blocks = get_field("blocs"); ?>

<div class="content-blocks-wrapper">
	<?php foreach ($blocks as $block){
		$hasImage = (strcmp($block["type"],"bloc image") == 0);

		$classes = '';
		$classes .= ($hasImage ? 'image-block ' : 'text-block ');
		$classes .= 'block-x-3-'.$block["taille_x_3"].' ';
		$classes .= 'block-y-3-'.$block["taille_y_3"].' ';
		$classes .= 'block-x-2-'.$block["taille_x_2"].' ';
		$classes .= 'block-y-2-'.$block["taille_y_2"].' ';
		$classes .= 'block-x-1-'.$block["taille_x_1"].' ';
		$classes .= 'block-y-1-'.$block["taille_y_1"].' ';

		?>
		<div class="content-block <?php echo $classes; ?>" <?php if ($hasImage) echo 'style="background: url('.$block["image"].')"'?>>

		</div>
		<?php
	} ?>
</div>
