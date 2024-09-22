<?php
function render_banner_contact_section($title, $services) {
  ?>
    <section class="relative pt-16 pb-16 bg-white overflow-hidden bg-cover bg-[center] md:bg-[top_right]" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/bg1.jpg');">
      <div class="relative z-10 container px-4 mx-auto">
        <div class="text-center max-w-2xl mx-auto">
          
          <h2 class="title-heading mb-10"><?php echo esc_html($title); ?></h2>

          <ul class="mb-8 grid grid-cols-[repeat(auto-fit,minmax(12rem,1fr))] gap-2">
            <?php foreach ($services as $service) : ?>
              <li class="flex flex-wrap items-center">
                <div class="text-tag inline-flex items-center gap-1 w-full">
                  <svg class="mr-2.5" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.75 9.75L6.75 12.75L14.25 5.25" stroke="#4F46E5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <span class="font-medium leading-relaxed"><?php echo esc_html($service['text']); ?></span>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>

          <button class="btn-primary contact-btn w-full py-4 text-lg" type="button">
            Solicita una cotización
          </button>

        </div>
      </div>
    </section>
  <?php
}
?>