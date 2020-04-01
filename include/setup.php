<?php 

function g_theme_styles() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap-4-grid@3.4.0/css/grid.min.css');
    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css');
    wp_enqueue_style('theme-css', get_template_directory_uri().'/assets/css/custom.css', array('bootstrap-css'));
    
    
    wp_enqueue_script( 'jquery-js', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), false, true );
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('theme-js', get_template_directory_uri().'/assets/js/scripts.js', array('jquery', 'bootstrap-js'), false, true);
}

function g_after_setup() {
    add_theme_support('menus'); //nas versoes novas não precisa deste código, só o de baixo.

    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('post-formats', array('video', 'audio'));
    
    register_nav_menu('primary', 'Menu Primário');
    register_nav_menu('footer', 'Menu Rodapé');
}

function g_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar Lateral',
        'id' => 'bm_sidebar',
        'description' => 'Sidebar Lateral',
        // 'before_widget' => '<div id="%1$s" class="%2$s">',
        // 'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));


    register_sidebar(array(
        'name' => 'Sidebar Rodapé',
        'id' => 'bm_footersidebar',
        'description' => 'Sidebar Rodapé',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));
    
}

?>