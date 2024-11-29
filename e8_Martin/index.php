<?php get_header(); ?>
<div class="container mt-5">
  <h1 class="mb-4">Senaste Nyheterna</h1>
  <div class="row">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <div class="col-md-4">
          <div class="card mb-4">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Läs mer</a>
            </div>
          </div>
        </div>
    <?php endwhile;
    endif;
    ?>
  </div>
</div>
<?php get_footer(); ?>
