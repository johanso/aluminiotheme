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
  // Obtener las 7 imágenes de los campos personalizados ACF
  $images = [
    get_field('imagen_1'),
    get_field('imagen_2'),
    get_field('imagen_3'),
    get_field('imagen_4'),
    get_field('imagen_5'),
    get_field('imagen_6'),
    get_field('imagen_7'),
  ];

  // Verificar si se cargaron todas las imágenes
  $carousel_images = [];
  foreach ($images as $image) {
    if ($image) {
      $carousel_images[] = [
        'src' => $image['url'], // URL de la imagen
        'alt' => $image['alt'], // Texto alternativo
        'width' => $image['width'], // Ancho de la imagen
        'height' => $image['height'], // Altura de la imagen
      ];
    }
  }

  // Verificar si hay imágenes y mostrar el carrusel
  if (!empty($carousel_images) && locate_template('template-parts/slider-services.php', true, false)) {
    // Pasar las imágenes a la plantilla del slider
    render_sliderservice_section($carousel_images);
  } else {
    echo '<p>No se han encontrado imágenes para el carrusel.</p>';
  }
?>




<?php
  $title = "Sobre Nosotros";
  $subtitle = "Expertos en Soluciones Arquitectónicas en Vidrio y Aluminio";
  $content = [
    [
      'text' => 'En <strong>Conceptos en Aluminio</strong>, somos líderes en la creación de soluciones arquitectónicas en vidrio y aluminio, con una trayectoria de más de 10 años en Barranquilla y la región Caribe. Nuestro enfoque está en ofrecer productos de alta calidad que combinan durabilidad, estilo y precisión, adaptados a las necesidades específicas de cada cliente.',
      'classes' => 'text-gray-700 mb-6'
    ],
    [
      'text' => 'Nos especializamos en una amplia gama de servicios, incluyendo <strong>ventanería en aluminio, puertas, barandas en acero y aluminio, divisiones de baño y oficina, portones y cerramientos en aluminio, vidrio templado y laminado, y fachadas flotantes.</strong> Cada proyecto que emprendemos es una oportunidad para demostrar nuestra pasión por la excelencia y el detalle.',
      'classes' => 'text-gray-700 mb-6'
    ]
  ];

  $points = [
    [
      'icon' => get_template_directory_uri() . '/assets/check.png',
      'title' => 'Calidad',
      'description' => 'Nos comprometemos a utilizar materiales de primera calidad para garantizar la durabilidad y estética de nuestros productos.'
    ],
    [
      'icon' => get_template_directory_uri() . '/assets/check.png',
      'title' => 'Innovación',
      'description' => 'Nos mantenemos al día con las últimas tendencias y tecnologías en arquitectura de vidrio y aluminio.'
    ],
    [
      'icon' => get_template_directory_uri() . '/assets/check.png',
      'title' => 'Servicio al Cliente',
      'description' => 'Nos esforzamos por ofrecer un servicio personalizado, entendiendo y atendiendo las necesidades específicas de cada cliente.'
    ],
    [
      'icon' => get_template_directory_uri() . '/assets/check.png',
      'title' => 'Compromiso',
      'description' => 'Cada proyecto es una promesa de excelencia que honramos con dedicación y profesionalismo.'
    ],
  ];

  $image_url = get_template_directory_uri() . '/assets/imagen-trabajador-alumnio.jpg';

  if ( locate_template( 'template-parts/about-us.php', true, false ) ) {
    render_about_us_section($title, $subtitle, $content, $points, $image_url);
  }
?>

<?php
  $title = "Nuestros Servicios";
  $subtitle = "Diseño y fabricación para transformar tus espacios";
  $services = [
    [
      'id' => 'service1',
      'title' => 'Ventanería en Aluminio',
      'description' => 'Fabricamos ventanas de aluminio duraderas y modernas, adaptadas a tus necesidades.',
      'image' => get_template_directory_uri() . '/assets/ventana.png',
      'url' => get_site_url() . '/ventaneria-en-aluminio',
    ],
    [
      'id' => 'service2',
      'title' => 'Puertas en Aluminio',
      'description' => 'Diseñamos puertas de aluminio seguras y con estilo para cualquier entrada.',
      'image' => get_template_directory_uri() . '/assets/puertas.png',
      'url' => get_site_url() . '/puertas-en-aluminio',
    ],
    [
      'id' => 'service3',
      'title' => 'Barandas en Acero y Aluminio',
      'description' => 'Barandas resistentes y elegantes en acero y aluminio para escaleras y balcones.',
      'image' => get_template_directory_uri() . '/assets/barandas.png',
      'url' => get_site_url() . '/barandas-en-acero-aluminio',
    ],
    [
      'id' => 'service4',
      'title' => 'Divisiones de Baño y Oficina',
      'description' => 'Divisiones en vidrio y aluminio que optimizan y embellecen tus espacios.',
      'image' => get_template_directory_uri() . '/assets/divisiones-bano.png',
      'url' => get_site_url() . '/divisiones-de-bano-oficina-vidrio-acrilico',
    ],
    [
      'id' => 'service5',
      'title' => 'Portones y Cerramientos en Aluminio',
      'description' => 'Fabricamos portones y cerramientos seguros y personalizados en aluminio.',
      'image' => get_template_directory_uri() . '/assets/portones.png',
      'url' => get_site_url() . '/portones-y-cerramientos',
    ],
    [
      'id' => 'service6',
      'title' => 'Vidrio Templado y Laminado',
      'description' => 'Soluciones en vidrio templado y laminado, seguras y elegantes.',
      'image' => get_template_directory_uri() . '/assets/vidrio-templado.png',
      'url' => get_site_url() . '/vidrio-templado-laminado',
    ],
    [
      'id' => 'service7',
      'title' => 'Fachadas Flotantes',
      'description' => 'Fachadas modernas en vidrio y aluminio que destacan por su estilo y eficiencia.',
      'image' => get_template_directory_uri() . '/assets/building.png',
      'url' => '#',
    ],
  ];

  if ( locate_template( 'template-parts/services.php', true, false ) ) {
    render_services_section($title, $subtitle, $services);
  }
?>

<?php
  $title = "¿Por Qué Elegirnos?";
  $subtitle = "Calidad comprobada en cada proyecto";
  $description = "En Conceptos en Aluminio, la calidad, la precisión y el diseño son los pilares de nuestro trabajo. A continuación, te mostramos algunas de las razones por las cuales nuestros clientes confían en nosotros para transformar sus espacios:";
  $reasons = [
    [
      'title' => 'Experiencia y Conocimiento',
      'description' => 'Con años de experiencia en la industria, sabemos cómo entregar soluciones que no solo cumplen, sino que superan las expectativas.'
    ],
    [
      'title' => 'Fabricación Propia',
      'description' => 'Como fabricantes, controlamos cada paso del proceso, garantizando productos personalizados y de alta calidad.'
    ],
    [
      'title' => 'Innovación en Diseño',
      'description' => 'Nuestros proyectos reflejan las últimas tendencias en arquitectura y diseño, adaptadas a las necesidades específicas de cada cliente.'
    ]
  ];
  $check_icon_url = get_template_directory_uri() . '/assets/check.png';

  if ( locate_template( 'template-parts/why-choose-us.php', true, false ) ) {
    render_why_choose_us_section($title, $subtitle, $description, $reasons, $check_icon_url);
  }

?>

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
          'alt' => get_the_title() ? get_the_title() : 'Imagen de galería',
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
  $title = "Testimonios de Clientes";
  $subtitle = "Lo que Dicen Nuestros Clientes";
  if ( locate_template( 'template-parts/testimonials.php', true, false ) ) {
    render_testimonials_section($title, $subtitle);
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
