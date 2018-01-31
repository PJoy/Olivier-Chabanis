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

<script src="https://use.fontawesome.com/1f0ceada91.js"></script>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i>
</button>

<style>
	#myBtn {
		display: none; /* Hidden by default */
		position: fixed; /* Fixed/sticky position */
		bottom: 20px; /* Place the button at the bottom of the page */
		right: 30px; /* Place the button 30px from the right */
		z-index: 99; /* Make sure it does not overlap */
		border: none; /* Remove borders */
		outline: none; /* Remove outline */
		background-color: blue; /* Set a background color */
		color: white; /* Text color */
		cursor: pointer; /* Add a mouse pointer on hover */
		padding: 3px 7px; /* Some padding */
	}

	#myBtn:hover {
		background-color: #555; /* Add a dark-grey background on hover */
	}
</style>

<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
		if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
			document.getElementById("myBtn").style.display = "block";
		} else {
			document.getElementById("myBtn").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0; // For Safari
		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	}
</script>
