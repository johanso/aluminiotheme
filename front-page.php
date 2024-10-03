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
      'url' => '#',
    ],
    [
      'id' => 'service6',
      'title' => 'Vidrio Templado y Laminado',
      'description' => 'Soluciones en vidrio templado y laminado, seguras y elegantes.',
      'image' => get_template_directory_uri() . '/assets/vidrio-templado.png',
      'url' => '#',
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
  $gallery_images = [
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1727951925/proyectosnelson/diviones-oficina-03_wfyqcr.jpg', 'alt' =>  'Diviones de Oficinas 03' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1727951990/proyectosnelson/diviones-oficina-02_wqppip.jpg', 'alt' =>  'Diviones de Oficinas 02' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1727951808/proyectosnelson/diviones-oficina-01_h21zpo.jpg', 'alt' =>  'Diviones de Oficinas 01' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1727951773/proyectosnelson/diviones-bano2_tqiwwa.jpg', 'alt' =>  'Diviones de Baño 2' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1727951709/proyectosnelson/diviones-bano_qpbk26.jpg', 'alt' =>  'Diviones de Baño' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1727951854/proyectosnelson/gabinetes-acrilico-cocina_icylqa.jpg', 'alt' =>  'Gabinetes de Cocina PVC Alumnio' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1727952036/proyectosnelson/cerramientos-alumnio-01_p6f5ra.jpg', 'alt' =>  'Cerramientos Alumnio' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188174/proyectosnelson/kihsp8fizrvs7heldtpf.jpg', 'alt' =>  'Image 1' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188175/proyectosnelson/svvyuxykczfjrdaepjhe.jpg', 'alt' =>  'Image 2' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188174/proyectosnelson/snvwpczeted9k0xfx9zw.jpg', 'alt' =>  'Image 3' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188175/proyectosnelson/mezk59wd9nrino0bgz8d.jpg', 'alt' =>  'Image 4' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188173/proyectosnelson/k7jfvalrfgdjivhixkki.jpg', 'alt' =>  'Image 5' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188175/proyectosnelson/g08z5vuw0dxo5ybgss2r.jpg', 'alt' =>  'Image 6' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188173/proyectosnelson/sdpxkflwbaffmlydfr7w.jpg', 'alt' =>  'Image 7' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188176/proyectosnelson/vs94yae1vnscsz9gzlsx.jpg', 'alt' =>  'Image 8' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188176/proyectosnelson/qcf2lkx4blipa4ok2eeu.jpg', 'alt' =>  'Image 9' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188173/proyectosnelson/hsdyvvzmpxwhllvpcwql.jpg', 'alt' =>  'Image 10' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188175/proyectosnelson/g08z5vuw0dxo5ybgss2r.jpg', 'alt' =>  'Image 11' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188175/proyectosnelson/rsamcoyplo0jxtfx3kk0.jpg', 'alt' =>  'Image 12' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188175/proyectosnelson/bonfxe5ioyklouhghptu.jpg', 'alt' =>  'Image 13' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188175/proyectosnelson/mm6uwayiaonbqzuzw4cl.jpg', 'alt' =>  'Image 14' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188174/proyectosnelson/xiokgy1bjqgkggmisms2.jpg', 'alt' =>  'Image 15' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188176/proyectosnelson/gs2s76dkbl0lle5ut9dl.jpg', 'alt' =>  'Image 16' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188174/proyectosnelson/uog0oli2aox0h0mdeiww.jpg', 'alt' =>  'Image 17' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188174/proyectosnelson/er3x2mfkrwj1tludd9rx.jpg', 'alt' =>  'Image 18' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188174/proyectosnelson/fiifdnlvilfziaucwvy7.jpg', 'alt' =>  'Image 19' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188173/proyectosnelson/a29w1x6sncc3xsrwyxdc.jpg', 'alt' =>  'Image 20' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188173/proyectosnelson/u7egwgzxxsekep3icx08.jpg', 'alt' =>  'Image 21' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188172/proyectosnelson/bia2xv26ska5hubl6th2.jpg', 'alt' =>  'Image 22' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188172/proyectosnelson/vdipajwv2b46gedszpvh.jpg', 'alt' =>  'Image 23' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188172/proyectosnelson/v6ulvqnmzb0tmgeb65qe.jpg', 'alt' =>  'Image 24' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188172/proyectosnelson/dvrwkolbkwqa1izpdful.jpg', 'alt' =>  'Image 25' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188172/proyectosnelson/edwec8ufilh372xtmnx9.jpg', 'alt' =>  'Image 26' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188172/proyectosnelson/xnwha9zusxlwn6itqhki.jpg', 'alt' =>  'Image 27' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188172/proyectosnelson/eh6yuxrj5ctvihtroz70.jpg', 'alt' =>  'Image 28' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188172/proyectosnelson/tnop0sloigatiijinvd8.jpg', 'alt' =>  'Image 29' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188172/proyectosnelson/ej1dfmeiuia7t9o9nhwp.jpg', 'alt' =>  'Image 30' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188172/proyectosnelson/w1j1fknwmg0zl7yxrbug.jpg', 'alt' =>  'Image 31' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188171/proyectosnelson/eh0km0uuhr0bxepnncgy.jpg', 'alt' =>  'Image 32' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188171/proyectosnelson/db41vllem0fwfr8ptybe.jpg', 'alt' =>  'Image 33' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188171/proyectosnelson/cumnfmo1og7q6dg0m9wl.jpg', 'alt' =>  'Image 34' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188171/proyectosnelson/gv0ecm64pldvcrmxt6zm.jpg', 'alt' =>  'Image 35' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188171/proyectosnelson/ltyf4ii8w4b4jvjkz6te.jpg', 'alt' =>  'Image 36' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188171/proyectosnelson/nqjvu276z4pojramadrs.jpg', 'alt' =>  'Image 37' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188171/proyectosnelson/tihdfkuffozhdak0mikd.jpg', 'alt' =>  'Image 38' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188171/proyectosnelson/jf5u2brmtor4napgrcmj.jpg', 'alt' =>  'Image 39' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188171/proyectosnelson/btayqrlqniipgnoxb0ge.jpg', 'alt' =>  'Image 40' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188170/proyectosnelson/agyerziuy1g3fqodyzd2.jpg', 'alt' =>  'Image 41' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188170/proyectosnelson/jxqy2jkpuoj1fmocv2sn.jpg', 'alt' =>  'Image 42' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188170/proyectosnelson/h8c2cwuc7pav4orrpe0w.jpg', 'alt' =>  'Image 43' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188170/proyectosnelson/jr0vphzulxksi5txrphe.jpg', 'alt' =>  'Image 44' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188170/proyectosnelson/wrsdo7rsvq1qdqnnomsf.jpg', 'alt' =>  'Image 45' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188170/proyectosnelson/szq3he2p3wtucepz93ix.jpg', 'alt' =>  'Image 46' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188170/proyectosnelson/k1tof0psnhqqijvbful5.jpg', 'alt' =>  'Image 47' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188170/proyectosnelson/gpf4y5hv175aovjq7vqk.jpg', 'alt' =>  'Image 48' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188170/proyectosnelson/wmxju590gabfmwtew1ss.jpg', 'alt' =>  'Image 49' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188170/proyectosnelson/snishif5cfydy54wyqjn.jpg', 'alt' =>  'Image 50' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188169/proyectosnelson/prjefunb1gpqt4ejeznb.jpg', 'alt' =>  'Image 51' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188169/proyectosnelson/lquj6lui5nrul8muljhq.jpg', 'alt' =>  'Image 52' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188169/proyectosnelson/fnkds6dcrxkij2bqft2a.jpg', 'alt' =>  'Image 53' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188169/proyectosnelson/ywocig7wy5kullwj90ko.jpg', 'alt' =>  'Image 54' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188169/proyectosnelson/nxdsgl9xb8thjwnphpfy.jpg', 'alt' =>  'Image 55' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1724188169/proyectosnelson/tzymi1n3f9maeoxx4ozv.jpg', 'alt' =>  'Image 56' ],
    [ 'url' => 'https://res.cloudinary.com/dcplixyte/image/upload/v1727180862/proyectosnelson/57_drn33q.jpg', 'alt' =>  'Instalación de vidrio templado a pantallas led' ],
  ];

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
  ];

  if ( locate_template( 'template-parts/banner-contact.php', true, false ) ) {
    render_banner_contact_section($title, $services);
  }
?>

<?php get_footer(); ?>
