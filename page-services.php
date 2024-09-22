<?php
/**
* Template Name: Services Page
*/
?>


<?php get_header(); ?>

  <?php
  
    $title = get_the_title(); 
    $subtitle = get_field('subtitulo_hero') ?: 'Subtítulo por defecto si no está definido';
    $location = get_field('locaciones') ?: 'Barranquilla y la Región Caribe';
    $hasButton = get_field('boton_de_accion') ? true : false;
    $heroPage = get_field('homepage') ? true : false;;

    if ( locate_template( 'template-parts/hero.php', true, false ) ) {
      render_hero($title, $subtitle, $location, $hasButton, $heroPage);
    }
  ?>

  <?php
    $images = [
      ['src' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1726133918/proyectosnelson/ventanas/ventana-alumnio-3_ojuixo.jpg', 'alt' => 'vantana alumnio 1', 'width' => 600, 'height' => 400 ],
      ['src' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1726133917/proyectosnelson/ventanas/ventana-alumnio-6_uuzosf.jpg', 'alt' => 'vantana alumnio 2', 'width' => 600, 'height' => 400 ],
      ['src' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1726133917/proyectosnelson/ventanas/ventana-alumnio-5_ovgzst.jpg', 'alt' => 'vantana alumnio 3', 'width' => 600, 'height' => 400 ],
      ['src' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1726133917/proyectosnelson/ventanas/ventana-alumnio-1_jrhihs.jpg', 'alt' => 'vantana alumnio 4', 'width' => 600, 'height' => 400 ],
      ['src' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1726133917/proyectosnelson/ventanas/ventana-alumnio-7_crlzfp.jpg', 'alt' => 'vantana alumnio 5', 'width' => 600, 'height' => 400 ],
      ['src' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1726133917/proyectosnelson/ventanas/ventana-alumnio-4_ba0xa4.jpg', 'alt' => 'vantana alumnio 6', 'width' => 600, 'height' => 400 ],
      ['src' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1726133917/proyectosnelson/ventanas/ventana-alumnio-2_wntfgz.jpg', 'alt' => 'vantana alumnio 7', 'width' => 600, 'height' => 400 ],
    ];

    if (locate_template('template-parts/slider-services.php', true, false)) {
      render_sliderservice_section($images);
    }
  ?>

  <div class="container mt-10 mb-16">
    <?php while( have_posts() ) : the_post(); ?>  
      
    <div class="contant-page">
      <?php the_content(); ?>
    </div>

    <?php endwhile; ?>
  </div>

  <?php
    $title = "¿Necesitas ayuda?";
    $services = [
      ['text' => 'Ventanas de aluminio'],
      ['text' => 'Puertas de vidrio'],
      ['text' => 'Barandas de acero'],
      ['text' => 'Divisiones de baño'],
      ['text' => 'Fachadas de vidrio'],
      ['text' => 'Cerramientos'],
      ['text' => 'Vidrio templado'],
      ['text' => 'Barandillas'],
      ['text' => 'Diseños en vidrio'],
    ];

    if ( locate_template( 'template-parts/banner-contact.php', true, false ) ) {
      render_banner_contact_section($title, $services);
    }
  ?>

<?php get_footer(); ?>