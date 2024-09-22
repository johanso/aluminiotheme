<?php
function render_services_section($title, $subtitle, $services) {
  ?>
    <section id="servicios" class="py-8 md:py-12 bg-gradient-to-b from-[#EAEEFE] to-[#D2DCFF] overflow-x-clip scroll-mt-20">
      <div class="container">
        <div class="max-w-[540px] mx-auto">
          <h2 class="title-heading"><?php echo esc_html($title); ?></h2>
          <p class="subtitle-heading"><?php echo esc_html($subtitle); ?></p>
        </div>
        <div class="relative mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php foreach ($services as $service) : ?>
            <a href="<?php echo esc_url($service['url']); ?>">
              <div class="card bg-white p-8 shadow-none border-none max-w-none hover:scale-105 hover:bg-[#f8f8f8] transition-all">
                <h2 class="text-[#003366] text-lg text-center font-bold leading-6"><?php echo esc_html($service['title']); ?></h2>
                <div class="p-2 flex justify-center my-4">
                  <img src="<?php echo esc_url($service['image']); ?>" alt="<?php echo esc_attr($service['title']); ?>" width="220" height="220" class="max-w-20" />
                </div>
                <p class="text-center text-sm"><?php echo esc_html($service['description']); ?></p>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php
}
?>
