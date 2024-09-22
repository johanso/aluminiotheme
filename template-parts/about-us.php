<?php
function render_about_us_section($title, $subtitle, $content, $points, $image_url) {
  ?>
    <section id="nosotros" class="py-8 md:py-12 bg-white border border-solid border-[#222]/10 scroll-mt-20">
      <div class="container">
        <div class="section-heading mb-6">
          <h2 class="title-heading"><?php echo esc_html($title); ?></h2>
          <p class="subtitle-heading"><?php echo esc_html($subtitle); ?></p>
        </div>

          <!-- Renderizar cada párrafo con sus clases -->
        <?php foreach ($content as $paragraph) : ?>
          <p class="<?php echo esc_attr($paragraph['classes']); ?>"><?php echo wp_kses_post($paragraph['text']); ?></p>
        <?php endforeach; ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
          <p style="margin-bottom: 1.5rem;">Nuestra misión es ofrecer soluciones que no solo cumplan con los estándares más altos de calidad, sino que también reflejen la visión única de cada cliente. Para esto contamos con los siguientes puntos de valores:</p>
            <ul>
              <?php foreach ($points as $point) : ?>
                <li class="mb-4 flex items-start gap-4">
                  <img src="<?php echo esc_url($point['icon']); ?>" alt="check" width="38" height="38" />
                  <span><strong><?php echo esc_html($point['title']); ?>:</strong> <?php echo esc_html($point['description']); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="flex justify-center items-center">
            <img src="<?php echo esc_url($image_url); ?>" alt="trabajador" width="400" height="400" class="md:mt-6 rounded-full" />
          </div>
        </div>
      </div>
    </section>
  <?php
}

