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
          <?php if ($hasButton) : ?>
            <div class="items-center gap-1 mt-8">
              <a href="#contacto" class="btn-primary">Solicita tu cotización</a>
            </div>
          <?php endif; ?>
        </div>

        <div class="mt-2 md:mt-0 md:flex-1 relative <?php echo $heroPage ? 'md:h-[80vh]' : 'md:h-[50vh]'; ?>">
        </div>

      </div>
    </div>
  </section>
  <?php
}
