<?php
function render_gallery_section($title, $subtitle, $description, $gallery_images) {
  ?>
    <section id="galeria" class="py-8 md:py-12 scroll-mt-20 bg-gradient-to-b from-[#EAEEFE] to-[#D2DCFF]">

      <div class="container">
        <div class="max-w-[540px] mx-auto mb-6">
          <h2 class="title-heading"><?php echo esc_html($title); ?></h2>
          <p class="subtitle-heading"><?php echo esc_html($subtitle); ?></p>
        </div>
        <p class='text-gray-700 mb-6 text-center md:text-left'><?php echo wp_kses_post($description); ?></p>

        <div class="relative inline-flex gap-2 snap-start w-full flex-wrap">
          <button
            type="button"
            id="action-button--previous"
            class="cursor-pointer flex items-center justify-center w-8 h-8 rounded-[50%] border-[none] bg-[#003366] hover:bg-[#000566] transition-all outline-none -rotate-90 ml-auto">
            <svg width="16" height="16" fill="#fff" focusable="false" viewBox="0 0 24 24">
              <path d="M12.771 7.115a.829.829 0 0 0-1.2 0L3 15.686l1.2 1.2 7.971-7.971 7.972 7.971 1.2-1.2-8.572-8.571Z"></path>
            </svg>
          </button>
          <button
            type="button"
            id="action-button--next"
            class="cursor-pointer flex items-center justify-center w-8 h-8 rounded-[50%] border-[none] bg-[#003366] hover:bg-[#000566] transition-all outline-none rotate-90">
            <svg width="16" height="16" fill="#fff" focusable="false" viewBox="0 0 24 24">
              <path d="M12.771 7.115a.829.829 0 0 0-1.2 0L3 15.686l1.2 1.2 7.971-7.971 7.972 7.971 1.2-1.2-8.572-8.571Z"></path>
            </svg>
          </button>
        </div>
      </div>
      
      <section class="relative w-full min-w-[20rem] mx-auto">
        <div class="flex gap-4 w-full flex-row overflow-x-auto overflow-y-hidden ps-8 lg:ps-40 pe-8 px-0 py-4 cursor-grab no-scrollbar" id="container-gallery">
          <?php foreach ($gallery_images as $image) : ?>
            <div class="overflow-hidden appearance-none no-underline relative h-52 transition-all duration-[0.2s] ease-[ease-in-out] w-52 flex flex-[0_0_10rem] cursor-pointer flex-col justify-between snap-start rounded-2xl" onclick="openLightbox('<?php echo esc_url($image['url']); ?>', '<?php echo esc_attr($image['alt']); ?>')">
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="object-cover aspect-[4_/_6]" />
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- Lightbox Modal -->
      <div id="lightbox" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-80 z-50 hidden">
        <div class="relative p-4">
          <button onclick="closeLightbox()" class="absolute right-4 top-[-1rem]">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff" class="bi bi-x-lg" viewBox="0 0 16 16">
              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
            </svg>
          </button>
          
          <button id="lightbox-prev" onclick="showPrevImage()" class="absolute left-4 md:left-[2rem] top-1/2 transform -translate-y-1/2 cursor-pointer flex items-center justify-center w-8 h-8 rounded-[50%] border-[none] bg-[#003366] hover:bg-[#000566] transition-all outline-none -rotate-90">
            <svg width="16" height="16" fill="#fff" viewBox="0 0 24 24"><path d="M12.771 7.115a.829.829 0 0 0-1.2 0L3 15.686l1.2 1.2 7.971-7.971 7.972 7.971 1.2-1.2-8.572-8.571Z"></path></svg>
          </button>

          <img id="lightbox-image" src="" alt="" class="max-h-[85vh] w-auto rounded-xl" />

          <button id="lightbox-next" onclick="showNextImage()" class="absolute right-4 md:right-[2rem] top-1/2 transform -translate-y-1/2 cursor-pointer flex items-center justify-center w-8 h-8 rounded-[50%] border-[none] bg-[#003366] hover:bg-[#000566] transition-all outline-none rotate-90">
            <svg width="16" height="16" fill="#fff" viewBox="0 0 24 24"><path d="M12.771 7.115a.829.829 0 0 0-1.2 0L3 15.686l1.2 1.2 7.971-7.971 7.972 7.971 1.2-1.2-8.572-8.571Z"></path></svg>
          </button>
        </div>
        <div onclick="closeLightbox()" class="absolute inset-0 -z-10"></div>
      </div>

      <script>
        const galleryImages = <?php echo json_encode($gallery_images); ?>;
        let currentImageIndex = null;

        function openLightbox(url, alt) {
          document.getElementById('lightbox').classList.remove('hidden');
          document.getElementById('lightbox-image').src = url;
          document.getElementById('lightbox-image').alt = alt;
          currentImageIndex = galleryImages.findIndex(image => image.url === url);
          updateLightboxButtonState();
        }

        function closeLightbox() {
          document.getElementById('lightbox').classList.add('hidden');
        }

        function showPrevImage() {
          if (currentImageIndex > 0) {
            currentImageIndex--;
            updateLightboxImage();
            updateLightboxButtonState();  // Actualizar el estado de los botones
          }
        }

        function showNextImage() {
          if (currentImageIndex < galleryImages.length - 1) {
            currentImageIndex++;
            updateLightboxImage();
            updateLightboxButtonState();  // Actualizar el estado de los botones
          }
        }

        function updateLightboxImage() {
          const { url, alt } = galleryImages[currentImageIndex];
          document.getElementById('lightbox-image').src = url;
          document.getElementById('lightbox-image').alt = alt;
        }

        function updateLightboxButtonState() {
          const prevButton = document.getElementById('lightbox-prev');
          const nextButton = document.getElementById('lightbox-next');

          // Si estamos en la primera imagen, desactivar el botón "prev"
          if (currentImageIndex === 0) {
            prevButton.classList.add('disabled-button');
          } else {
            prevButton.classList.remove('disabled-button');
          }

          // Si estamos en la última imagen, desactivar el botón "next"
          if (currentImageIndex === galleryImages.length - 1) {
            nextButton.classList.add('disabled-button');
          } else {
            nextButton.classList.remove('disabled-button');
          }
        }

        function updateButtonState() {
          const container = document.getElementById('container-gallery');
          const prevButton = document.getElementById('action-button--previous');
          const nextButton = document.getElementById('action-button--next');

          // Si no se puede desplazar más a la izquierda
          if (container.scrollLeft === 0) {
            prevButton.classList.add('disabled-button');
          } else {
            prevButton.classList.remove('disabled-button');
          }

          // Si no se puede desplazar más a la derecha
          if (container.scrollLeft + container.clientWidth >= container.scrollWidth) {
            nextButton.classList.add('disabled-button');
          } else {
            nextButton.classList.remove('disabled-button');
          }
        }

        document.getElementById('action-button--previous').addEventListener('click', function() {
          const container = document.getElementById('container-gallery');
          container.scrollBy({
            left: -200,
            behavior: 'smooth'
          });
          setTimeout(updateButtonState, 300); // Asegúrate de actualizar el estado después del scroll
        });

        document.getElementById('action-button--next').addEventListener('click', function() {
          const container = document.getElementById('container-gallery');
          container.scrollBy({
            left: 200,
            behavior: 'smooth'
          });
          setTimeout(updateButtonState, 300); // Asegúrate de actualizar el estado después del scroll
        });

        window.addEventListener('load', updateButtonState);
    
      </script>
    </section>
  <?php
}
?>
