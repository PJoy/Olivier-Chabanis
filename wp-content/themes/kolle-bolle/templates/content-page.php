<?php $blocks = get_field("blocs"); ?>

<div class="content-blocks-wrapper grid">
	<?php foreach ($blocks as $key=>$block){
		$hasImage = (strcmp($block["type"],"bloc image") == 0);
		$hasText = (strcmp($block["texte"],'') != 0);
		$hasLink = (strcmp($block["lien"],'') != 0);

		$classes = '';
		$classes .= ($hasImage ? 'image-block ' : 'text-block ');

		$classes .= 'block-x-3-'.$block["taille_x_3"].' ';
		$classes .= 'block-y-3-'.$block["taille_y_3"].' ';
		$classes .= 'block-x-2-'.$block["taille_x_2"].' ';
		$classes .= 'block-y-2-'.$block["taille_y_2"].' ';
		$classes .= 'block-x-1-'.$block["taille_x_1"].' ';
		$classes .= 'block-y-1-'.$block["taille_y_1"].' ';
		?>
		<div class="content-block-outer grid-item <?php echo "grid-item--width".$block["taille_x_3"]; ?>">
			<?php if ($hasLink) echo '<a href="">'; ?>
			<div id="<?php echo 'block-'.$key; ?>" class="content-block <?php echo $classes; ?>"
				<?php if ($hasImage) echo 'style="background: url('.$block["image"].')"'?>>
				<?php if ($hasText) echo $block["texte"] ?>
			</div>
			<?php if ($hasLink) echo '</a>'; ?>
		</div>
		<?php
	} ?>
</div>
