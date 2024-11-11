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
      
    <div class="contant-page relative lg:flex gap-8">
      <div class="flex-1">
        <?php the_content(); ?>
      </div>
      <aside class="mt-10 lg:mt-0 relative lg:flex lg:basis-80">
        <div class="lg:sticky lg:top-20">
          <h3 class="flex items-baseline gap-2 text-xxl uppercase font-bold">
            <span class="relative -top-0.5 text-xxl uppercase font-regular font-serif">::</span> Otros servicios
          </h3>
          <div class="border-b border-gray-300 py-4">
            <a href='<?= get_site_url() . "/ventaneria-en-aluminio" ?>' class="flex items-center gap-2">
              <img src='<?= get_template_directory_uri() . "/assets/ventana.png" ?>' class="w-8 h-8" alt="Ventanería Aluminio">
              <span class="ml-4 text-lg font-semibold">Ventanería en Aluminio</span>
            </a>
          </div>
          <div class="border-b border-gray-300 py-4">
            <a href='<?= get_site_url() . "/puertas-en-aluminio" ?>' class="flex items-center gap-2">
              <img src='<?= get_template_directory_uri() . "/assets/puertas.png" ?>' class="w-8 h-8"  alt="Puertas Aluminio">
              <span class="ml-4 text-lg font-semibold">Puertas en Aluminio</span>
            </a>
          </div>
          <div class="border-b border-gray-300 py-4">
            <a href='<?= get_site_url() . "/barandas-en-acero-aluminio" ?>' class="flex items-center gap-2">
              <img src='<?= get_template_directory_uri() . "/assets/barandas.png" ?>' class="w-8 h-8"  alt="Barandas Aluminio">
              <span class="ml-4 text-lg font-semibold">Barandas en Acero y Aluminio</span>
            </a>
          </div>
          <div class="border-b border-gray-300 py-4">
            <a href='<?= get_site_url() . "/divisiones-de-bano-oficina-vidrio-acrilico" ?>' class="flex items-center gap-2">
              <img src='<?= get_template_directory_uri() . "/assets/divisiones-bano.png" ?>' class="w-8 h-8"  alt="Divisiones Oficina">
              <span class="ml-4 text-lg font-semibold">Divisiones de Baño y Oficina</span>
            </a>
          </div>
          <div class="border-b border-gray-300 py-4">
            <a href='<?= get_site_url() . "/portones-y-cerramientos" ?>' class="flex items-center gap-2">
              <img src='<?= get_template_directory_uri() . "/assets/portones.png" ?>' class="w-8 h-8"  alt="Portones Aluminio">
              <span class="ml-4 text-lg font-semibold">Portones y Cerramientos en Aluminio</span>
            </a>
          </div>
          <div class="border-b border-gray-300 py-4">
            <a href='<?= get_site_url() . "/vidrio-templado-laminado" ?>' class="flex items-center gap-2">
              <img src='<?= get_template_directory_uri() . "/assets/vidrio-templado.png" ?>' class="w-8 h-8"  alt="Vidrio Templado">
              <span class="ml-4 text-lg font-semibold">Vidrio Templado y Laminado</span>
            </a>
          </div>
          <div class="flex items-center gap-2 border-b border-gray-300 py-4">
            <img src='<?= get_template_directory_uri() . "/assets/building.png" ?>' class="w-8 h-8"  alt="Fachadas Flotantes">
            <span class="ml-4 text-lg font-semibold">Fachadas Flotantes</span>
          </div>
        </div>
      </aside>
    </div>

    <?php endwhile; ?>
  </div>

  <?php
    $title = "Galería de Proyectos";
    $subtitle = "Nuestros Proyectos Hablan por Sí Mismos";
    $description = "Aquí te presentamos una selección de nuestros trabajos recientes, donde cada proyecto refleja nuestra dedicación a la calidad y el detalle.";

    // Obtener las imágenes desde el CPT
    function get_gallery_images() {
      $args = [
          'post_type' => 'gallery_image',
          'posts_per_page' => -1, // Obtener todas las imágenes
      ];

      $query = new WP_Query($args);
      $gallery_images = [];

      if ($query->have_posts()) {
          while ($query->have_posts()) {
              $query->the_post();
              $gallery_images[] = [
                  'url' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                  'alt' => get_the_title(),
              ];
          }
      }

      wp_reset_postdata();
      return $gallery_images;
    }

    // Llamar la función para obtener las imágenes
    $gallery_images = get_gallery_images();

    // Enviar los datos a la plantilla
    if ( locate_template( 'template-parts/gallery.php', true, false ) ) {
        render_gallery_section($title, $subtitle, $description, $gallery_images);
    }
  ?>

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
      ['text' => 'Pérgolas en aluminio'],
      ['text' => 'Techos corredizo policarbonato'],
      ['text' => 'Espejos flotados'],
    ];

    if ( locate_template( 'template-parts/banner-contact.php', true, false ) ) {
      render_banner_contact_section($title, $services);
    }
  ?>

<?php get_footer(); ?>