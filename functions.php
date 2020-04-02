<?php 
// Incluir outros arquivos/functions
require get_template_directory().'/include/setup.php';


// Hooks
add_action('wp_enqueue_scripts', 'g_theme_styles');
add_action('after_setup_theme', 'g_after_setup');
add_action('widgets_init', 'g_widgets');



/* Function which displays your post date in time ago format */
function meks_time_ago() {
	return human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'atrás' );
}
?>