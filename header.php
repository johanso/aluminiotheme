<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth font-sans">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/mstile-150x150.png">
  <meta name="msapplication-TileColor" content="#002f70">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="sticky top-0 p-0 z-50 transition-all bg-white shadow-sm">
  <div class="py-2">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="cursor-pointer after:content-none">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/logoblue.png" alt="Logo" class="w-[120px] md:w-[160px] lg:w-[220px]" />
        </a>

        <!-- Menú móvil -->
        <div class="flex items-center gap-4 flex-row-reverse md:hidden">
          <button id="open-menu" class="cursor-pointer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/menu.svg" alt="Menu Icon" class="h-5 w-5" />
          </button>
          <button class="btn-primary contact-btn">Contáctanos</button>
        </div>

        <!-- Menú de escritorio -->
        <nav class="hidden md:flex md:gap-4 lg:gap-6 text-black/60 items-center">
          <?php
            wp_nav_menu(array(
              'theme_location' => 'main-menu',
              'container' => false,
              'items_wrap' => '%3$s',
              'walker' => new Tailwind_Nav_Walker(),
            ));
          ?>
          <button class="btn-primary contact-btn">Contáctanos</button>
        </nav>

        <!-- Menú desplegable móvil -->
        <div id="mobile-menu" class="fixed flex -left-full top-0 bottom-0 py-4 px-6 flex-col bg-white w-10/12 z-10 transition-all shadow-sm">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="cursor-pointer flex justify-center mb-8 after:content-none">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logoblue.png" alt="Logo" class="w-[180px] md:w-[220px]" />
          </a>
          <nav class="flex flex-col gap-6">
            <?php
              wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'items_wrap' => '%3$s',
                'walker' => new Tailwind_NavMobile_Walker(),
              ));
            ?>
            <button class="btn-primary contact-btn">Contáctanos</button>
          </nav>
          <div class="mt-auto flex justify-center gap-6">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/social-x.svg" class="h-10 w-10 opacity-70" />
            </a>
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/social-insta.svg" class="h-10 w-10 opacity-70" />
            </a>
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/social-youtube.svg" class="h-10 w-10 opacity-70" />
            </a>
          </div>
        </div>

        <!-- Botón cerrar menú móvil -->
        <button id="close-menu" class="absolute right-6 z-10 hidden">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/close.svg" class="w-6 h-6" alt="Close Icon" />
        </button>

        <div id="overlay-menu" class="fixed top-0 bottom-0 left-0 right-0 bg-black/70 z-9 hidden"></div>

      </div>
    </div>
  </div>
</header>

<main>