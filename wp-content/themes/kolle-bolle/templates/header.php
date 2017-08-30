<header class="banner">
	<div class="container">
		<a href="<?php get_home_url(); ?>">
			<div class="logo" style="background:
				url('<?php echo get_template_directory_uri()."/assets/images/header-logo.png"; ?>') no-repeat">

			</div>
		</a>
		<nav class="nav-primary">
			<?php
			$menu_elems = wp_get_nav_menu_items('Main');
			foreach ($menu_elems as $menu_elem) {
				echo '<a class="menu-elem" href="'.$menu_elem->url.'"><span>'.$menu_elem->title.'</span></a>';
			}
			?>
		</nav>
	</div>
</header>
