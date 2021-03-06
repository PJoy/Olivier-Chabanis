<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
	'lib/assets.php',    // Scripts and stylesheets
	'lib/extras.php',    // Custom functions
	'lib/setup.php',     // Theme setup
	'lib/titles.php',    // Page titles
	'lib/wrapper.php',   // Theme wrapper class
	'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
	if (!$filepath = locate_template($file)) {
		trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
	}

	require_once $filepath;
}
unset($file, $filepath);

function replaceMenu(){
	?>
	<div class="search-form">
		<div class="search-text">
			<p>- Recherche -</p>
		</div>
		<div class="input-group">
			<input type="text" class="form-control" placeholder="">
			<span class="input-group-btn">
        <button class="btn btn-secondary" type="button"
                onclick="doSearch()"><i class="fa fa-search" aria-hidden="true"></i></button>
      </span>
		</div>
	</div>

	<script>
		function doSearch(){
			var term = jQuery('#block-0 > div > div.input-group > input').val();

			if (term != ''){
				location.href = "<?php echo get_page_by_path("notre-catalogue/recherche")->guid?>&term="+term;
			}
		}
	</script>

	<?php
}



function outpre($var) {
	echo'<pre>';
	var_dump($var);
	echo'</pre>';
}

function seoUrl($string) {
	//Lower case everything
	$string = strtolower($string);
	//Make alphanumeric (removes all other characters)
	$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
	//Clean up multiple dashes or whitespaces
	$string = preg_replace("/[\s-]+/", " ", $string);
	//Convert whitespaces and underscore to dash
	$string = preg_replace("/[\s_]/", "-", $string);
	return $string;
}