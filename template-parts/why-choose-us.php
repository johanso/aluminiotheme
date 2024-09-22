<?php
function render_why_choose_us_section($title, $subtitle, $description, $reasons, $check_icon_url) {
  ?>
    <div id="elegirnos" class="py-8 md:py-12 bg-white scroll-mt-20">
      <div class="container">
        <div class="max-w-[540px] mx-auto mb-6">
          <h2 class="title-heading"><?php echo esc_html($title); ?></h2>
          <p class="subtitle-heading"><?php echo esc_html($subtitle); ?></p>
        </div>
        <p class='text-gray-700 mb-6 text-center md:text-left'><?php echo wp_kses_post($description); ?></p>
        <div class="relative mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php foreach ($reasons as $reason) : ?>
            <div class="card bg-white px-6 py-4 shadow-none max-w-none">
              <div class="p-2 flex justify-center mb-2">
                <img src="<?php echo esc_url($check_icon_url); ?>" alt="check" width="80" height="80" class="max-w-12" />
              </div>
              <h2 class="text-[#003366] text-lg text-center font-bold leading-6 mb-4"><?php echo esc_html($reason['title']); ?></h2>
              <p class="text-center"><?php echo esc_html($reason['description']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  <?php
}
?>
