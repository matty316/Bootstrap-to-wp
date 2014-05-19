<?php

/*
Template Name: Full Width Template
*/

get_header(); ?>



<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="page-header">
          <h1><?php the_title(); ?></h1>
        </div>

        <?php the_content(); ?>

      <?php endwhile; else : ?>
        <div class="page-header">
          <h1>Oh, snap!</h1>
        </div>
        <p>
          There is no content to display;
        </p>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
