<?php


/************ After Setup Theme ************/
function minimalist_setup_theme(){
   
    // Title tag
   add_theme_support('title-tag');

   // Post Thumbnails
  if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('thumbnail', 150,150);
    add_image_size('medium', 300,300);
    add_image_size('medium_large', 768);
    add_image_size('large', 1024, 1024);
    add_image_size('full', 1920, 1080);
  }

    // Require Navwalker
    require_once get_template_directory(). '/template-parts/header/content-navbarwalker.php';

  // Custom Logos
  $defaults = array(
    'width'       => 200,
    'height' => 50,
    'flex-height' => true,
    );
    add_theme_support( 'custom-logo', $defaults );

}
add_action('after_setup_theme', 'minimalist_setup_theme');

/****************** Style & Scripts *****************/
function minimalist_style_script(){
    // Style
    wp_enqueue_style('style', get_stylesheet_directory_uri());
    wp_enqueue_style('bootstrapCss', get_template_directory_uri(). '/css/bootstrap.min.css', array('style'), time(), 'all');
    wp_enqueue_style('footer', get_template_directory_uri(). '/css/footer.css', array('bootstrapCss'), time(), 'all');
    wp_enqueue_style('general', get_template_directory_uri(). '/css/general.css', array('footer'), time(), 'all');
    wp_enqueue_style('home', get_template_directory_uri(). '/css/home.css', array('general'), time(), 'all');
    wp_enqueue_style('menu', get_template_directory_uri(). '/css/menu.css', array('home'), time(), 'all');
    wp_enqueue_style('page', get_template_directory_uri(). '/css/page.css', array('menu'), time(), 'all');
    wp_enqueue_style('search', get_template_directory_uri(). '/css/search.css', array('page'), time(), 'all');
    wp_enqueue_style('single', get_template_directory_uri(). '/css/single.css', array('search'), time(), 'all');
    wp_enqueue_style('widget', get_template_directory_uri(). '/css/widget.css', array('single'), time(), 'all');
    wp_enqueue_style('woocommerce', get_template_directory_uri(). '/css/woocommerce.css', array('widget'), time(), 'all');

    // Scripts
    wp_enqueue_script('font', 'https://kit.fontawesome.com/35db202371.js');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrapJs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js');
    wp_enqueue_script('app', get_template_directory_uri(). '/js/app.js', array('bootstrapJs'), '', true);

}
add_action('wp_enqueue_scripts', 'minimalist_style_script');

/******** Navbar ********/
register_nav_menus(array(
    'primary' => __('Principal Menu', 'minimalist')
));

/******************** Widgets *********************/
function minimalist_register_sidebar(){
  
    register_sidebar(array(
      'id' => 'first_footer',
      'name'          => __( 'Primer Sidebar | Footer' ),
      'description'   => __( 'Primera columna de sidebar footer' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));
  
    register_sidebar(array(
      'id' => 'second_footer',
      'name'          => __( 'Segundo Sidebar | Footer' ),
      'description'   => __( 'Segunda columna de sidebar footer' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));
  
    register_sidebar(array(
      'id' => 'third_footer',
      'name'          => __( 'Tercer Sidebar | Footer' ),
      'description'   => __( 'Tercera columna de sidebar footer' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));
  
}
add_action('widgets_init', 'minimalist_register_sidebar');

/********** Woocommerce ***********/
include('template-parts/content/content-woocommerce.php');

