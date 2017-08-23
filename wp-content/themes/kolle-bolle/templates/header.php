<header class="banner">
    <div class="container">
        <nav class="nav-primary text-center">
			<?php
            $menu_elems = wp_get_nav_menu_items('Main');
            foreach ($menu_elems as $menu_elem) {
                echo '<a href="'.$menu_elem->url.'">'.$menu_elem->title.'</a>';
            }
			?>
        </nav>
    </div>
</header>
