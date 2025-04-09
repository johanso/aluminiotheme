<?php
function render_hero($title, $subtitle, $location, $hasButton = false, $heroPage = false) {
  ?>
  <section 
    id="inicio" 
    class="bg-[0_0] md:bg-[right_center] bg-cover pt-8 pb-20 md:pt-5 md:pb-10 bg-[radial-gradient(ellipse_200%_100%_at_bottom_left,#183EC2,#EAEEFE_100%)] overflow-x-clip" 
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/bg2.jpg');">
    <div class="container">
      <div class="md:flex items-center">

        <div class="md:w-[520px] text-center md:text-left">
          <div class="text-tag inline-flex items-center gap-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/location.svg" alt="Location Icon" class="inline-block h-5 w-5">
            <?php echo esc_html($location); ?>
          </div>
          <h1 class="text-4xl md:text-6xl font-bold tracking-tighter bg-gradient-to-b from-black to-[#001E80] text-transparent bg-clip-text mt-6">
            <?php echo esc_html($title); ?>
          </h1>
          <p class="text-xl text-[#010D3E] tracking-tight mt-6">
            <?php echo esc_html($subtitle); ?>
          </p>

          <button class="btn-primary rounded-full px-6 mt-6" type="button" onclick="scrollToAnchorGallery()" style="background: #8BC34A;">
            <div class="flex gap-2 justify-center items-center">
              <span class="text-lg">Ver últimos trabajos</span>
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z"/>
                </svg>
              </span>
            </div>
          </button>

          <?php if ($hasButton) : ?>
            <div class="items-center gap-1 mt-8">
              <a href="#contacto" class="btn-primary">Solicita tu cotización</a>
            </div>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </section>
  <?php
}