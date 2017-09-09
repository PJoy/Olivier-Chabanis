<?php $post_title = get_the_title(); ?>
<header class="banner">
	<div class="container desktop">
		<a href="/">
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
		</nav>
	</div>

	<div class="container mobile">
		<a href="<?php get_home_url(); ?>">
			<div class="logo" style="background:
				url('<?php echo get_template_directory_uri()."/assets/images/header-logo.png"; ?>') no-repeat">
			</div>
		</a>

		<div class="menu-btn" style="background:
			url('<?php echo get_template_directory_uri()."/assets/images/ham-menu.png"; ?>') no-repeat"
		     onclick="jQuery('.container.mobile .nav-primary').slideToggle()">
		</div>

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