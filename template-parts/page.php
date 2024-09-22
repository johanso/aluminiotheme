<?php while( have_posts() ) : the_post(); ?>  

  <div class="mb-6">
    <h2 class="title-heading text-left"><?php the_title(); ?></h2>
  </div>
    
  <div class="contant-page">
    <?php the_content(); ?>
  </div>

<?php endwhile; ?>


