  </main>
    <footer class="bg-black text-[#EAEAEA] text-sm pt-6 pb-4 text-center">
      <div class="container">
        <div class="inline-flex relative">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-white.png" alt="Logo" class="w-[40px] md:w-[60px]" class="relative" />
        </div>
        <div class="flex justify-center gap-6 mt-4">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/social-x.svg" alt="Logo X" class="h-8 w-8 contrast-0" />
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/social-insta.svg" alt="Logo instagram" class="h-8 w-8 contrast-0" />
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/social-youtube.svg" alt="logo youtube" class="h-8 w-8 contrast-0">
          </a>
        </div>
        <p class="mt-4 text-xs">&copy; 2024 Conceptos en Alumnio. Todos los derechs reservados</p>
      </div>

      <div class="fixed bottom-4 right-4 cursor-pointer z-10" id="whatsapp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/whatsapp-icon.svg" class="h-10 w-10" />
      </div>

    </footer>

    <?php wp_footer(); ?>

    <div id="popup" class="fixed z-[99] invisible opacity-0 transition-all duration-[0.2s] ease-[ease-in] inset-0">
      <div id="popupContent" class="bg-white absolute h-[calc(100vh_-_6rem)] bottom-[-64vh] transition-all duration-[0.2s] ease-[ease-in] p-4 rounded-[0.75rem_0.75rem_0_0] md:w-[32rem] md:h-screen md:right-[-32rem] md:top-0 md:rounded-none md:bottom-0">
        
        <div class="overflow-y-auto h-full px-4 py-4 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
          <div class='section-heading relative'>
            <h2 class="title-heading mt-2 md:text-left">Contáctanos</h2>
            <p class="subtitle-heading my-2 md:text-left">¿Listo para transformar tu espacio?</p>
          </div>

          <p class="text-gray-700 mb-6 text-center md:text-left"><strong>Estamos aquí para ayudarte</strong>. Comunícate con nosotros para una cotización o para obtener más información sobre nuestros servicios.</p>

          <?php echo do_shortcode('[contact-form-7 id="e8a15b4" title="Formulario de contacto 1"]'); ?>
          <p class="text-xs">Estamos comprometidos con tu privacidad. conceptosenalumnio utiliza la información que usted nos proporciona para contactarlo sobre nuestro contenido, productos y servicios relevantes. Podrá darse de baja de estas comunicaciones en cualquier momento. Para obtener más información, consulta nuestra <a href="<?php bloginfo('url') ?>/politicas-privacidad/" target="_blank">Política de Privacidad</a>.</p>
        </div>

        <span class="absolute cursor-pointer w-6 text-center text-2xl leading-none right-2 top-2">
          <svg id="btnClosePopup" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
          </svg>
        </span>
      </div>
      <div id="backdropPopup" class="h-full w-full bg-black/70"></div>
    </div>

  </body>
</html>
