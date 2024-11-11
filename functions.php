<?php

  // includes
  // require get_template_directory() . '/includes/shortcodes.php';

  // add scripts and styles
  function theme_styles() {

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');
    wp_enqueue_style( 'output', get_template_directory_uri() . '/src/output.css', array() );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap', false );

    // wp_enqueue_style('icons', get_template_directory_uri() . '/icons/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);

  }
  add_action('wp_enqueue_scripts', 'theme_styles');


  // add menus  
  function theme_menus() {
    register_nav_menus(
      array(
        'main-menu' => __('Main Menu'),
      )
    );
  }
  add_action('init', 'theme_menus');


  // add theme support
  function theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme', 'theme_support');

  class Tailwind_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
      $classes = 'relative text-black hover:text-black/85 cursor-pointer md:text-sm lg:text-base';
      $output .= sprintf(
        '<a href="%s" class="%s">%s</a>',
        esc_url($item->url),
        esc_attr($classes),
        esc_html($item->title)
      );
    }
  }

  class Tailwind_NavMobile_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
      $classes = 'relative text-black hover:text-black/85 cursor-pointer md:text-sm lg:text-base after:content-[""] after:absolute after:left-0 after:w-full after:h-px after:top-9 after:bg-[#f1f1f1]';
      $output .= sprintf(
        '<a href="%s" class="%s">%s</a>',
        esc_url($item->url),
        esc_attr($classes),
        esc_html($item->title)
      );
    }
  }


  function custom_gallery_post_type() {
    register_post_type('gallery_image', [
        'labels' => [
            'name' => __('Galería'),
            'singular_name' => __('Imagen de Galería'),
        ],
        'public' => true,
        'supports' => ['title', 'thumbnail'], // Habilitar imágenes destacadas
        'menu_icon' => 'dashicons-format-gallery',
    ]);
  }
  add_action('init', 'custom_gallery_post_type');


  add_theme_support('post-thumbnails', ['gallery_image']);

