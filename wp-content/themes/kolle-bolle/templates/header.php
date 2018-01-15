<?php $post_title = get_the_title(); ?>
<header class="banner">
	<div class="container desktop">
		<a href="<?php echo get_home_url() ?>">
			<div class="logo" style="background:
				url('<?php echo get_template_directory_uri()."/assets/images/header-logo.png"; ?>') no-repeat">
			</div>
		</a>
		<nav class="nav-primary">
			<?php
			$menu_elems = wp_get_nav_menu_items('Main');
			foreach ($menu_elems as $menu_elem) {
				if ($post_title == $menu_elem->title) {
					echo '<a class="menu-elem active" href="' . $menu_elem->url . '"><span>' . $menu_elem->title . '</span></a>';
				} else {
					echo '<a class="menu-elem" href="' . $menu_elem->url . '"><span>' . $menu_elem->title . '</span></a>';
				}
			}
			?>
			<a href="https://www.instagram.com/olivier.chabanis/">
				<div class="social-link" style="background:
					url('<?php echo get_template_directory_uri()."/assets/images/instagram.png"; ?>') no-repeat">
				</div>
			</a>

			<a href="https://www.pinterest.fr/ochabanis/">
				<div class="social-link" style="background:
					url('<?php echo get_template_directory_uri()."/assets/images/pinterest.png"; ?>') no-repeat">
				</div>
			</a>

		</nav>


	</div>

	<div class="container mobile">
		<a href="<?php echo get_home_url(); ?>">
			<div class="logo" style="background:
				url('<?php echo get_template_directory_uri()."/assets/images/header-logo.png"; ?>') no-repeat">
			</div>
		</a>

		<?php if (isset(get_post_ancestors($post)[0]) && get_post_ancestors($post)[0]==59) { ?>
			<div class="menu-btn" style="background:url('<?php echo get_template_directory_uri() . "/assets/images/back-arrow.png"; ?>') no-repeat"
			     onclick="location.href='<?php echo get_page_by_path("notre-catalogue")->guid?>'">
			</div>
		<?php } else { ?>
			<div class="menu-btn" style="background:url('<?php echo get_template_directory_uri() . "/assets/images/ham-menu.png"; ?>') no-repeat"
			     onclick="jQuery('.container.mobile .nav-primary').slideToggle()">
			</div>
		<?php } ?>

		<nav class="nav-primary">
			<?php
			$menu_elems = wp_get_nav_menu_items('Main');
			foreach ($menu_elems as $menu_elem) {
				if ($post_title == $menu_elem->title) {
					echo '<a class="menu-elem active" href="' . $menu_elem->url . '"><span>' . $menu_elem->title . '</span></a>';
				} else {
					echo '<a class="menu-elem" href="' . $menu_elem->url . '"><span>' . $menu_elem->title . '</span></a>';
				}
			}
			?>
		</nav>

	</div>
</header>

<script>
	jQuery('.menu-elem').on('touchstart click', function () {
		jQuery('.menu-elem').removeClass('active');
		jQuery(this).addClass('active');
	})
</script>