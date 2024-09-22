<?php
function render_sliderservice_section($images = []) {
  if (empty($images)) return;
  ?>
  <div class="slider">
    <div class="slide-track">
      <?php foreach (array_merge($images, $images) as $image): ?>
        <div class="slide">
          <img 
            src="<?php echo esc_url($image['src']); ?>" 
            alt="<?php echo esc_attr($image['alt']); ?>" 
            height="<?php echo esc_attr($image['height']); ?>" 
            width="<?php echo esc_attr($image['width']); ?>" 
            loading="lazy"
          />
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <style>
    @keyframes scroll {
      0% {
        -webkit-transform: translateX(0);
                transform: translateX(0);
      }
      100% {
        -webkit-transform: translateX(calc(-250px * 7));
                transform: translateX(calc(-250px * 7));
      }
    }
    .slider {
      background: white;
      height: 150px;
      margin: .25rem auto;
      overflow: hidden;
      position: relative;
      width: 100%;
    }
    .slider::before, .slider::after {
      background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
      content: "";
      height: 151px;
      position: absolute;
      width: 75px;
      z-index: 2;
    }
    .slider::after {
      right: 0;
      top: 0;
      transform: rotateZ(180deg);
    }
    .slider::before {
      left: 0;
      top: 0;
    }
    .slider .slide-track {
      animation: scroll 100s linear infinite;
      display: flex;
      width: calc(250px * 14);
      gap: .25rem;
    }
    .slider .slide {
      height: 50px;
      width: 250px;
    }
  </style>
  <?php
}
