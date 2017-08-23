<?php $blocks = get_field("contenu"); ?>

<div class="page-content col-12 col-md-10 m-auto row">
	<?php foreach ($blocks as $block) {
		$bg = $block["image"]["url"];
		$link = ($block["lien_interne"] != '')
			? $block["lien_interne"]
			: $block["lien_externe"];
		?>
		<div class="col-md-4 text-center" <?php if ($bg != '') echo 'style="background: url('.$bg.')"'?>>
			<?php if ($link != '') echo '<a href="'.$link.'">'; ?>
			<p>
				<?php echo $block["texte"]?>
			</p>
			<?php if ($link != '') echo '</a>'; ?>
		</div>
	<?php } ?>
</div>
