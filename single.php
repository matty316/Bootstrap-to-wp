<?php get_header(); ?>



<div class="container">
  <div class="row">
    <div class="col-md-9">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="page-header">
          <h1><?php the_title(); ?></h1>
          <p><em>By <?php the_author(); ?> on <?php echo the_time('l, F, jS, Y'); ?> in <?php the_category(', '); ?>.
            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
          </em>
        </div>

        <?php the_content(); ?>
        <hr>
        <?php comments_template(); ?>

      <?php endwhile; else : ?>
        <div class="page-header">
          <h1>Oh, snap!</h1>
        </div>
        <p>
          There is no content to display;
        </p>
      <?php endif; ?>
    </div>
    <?php get_sidebar( 'blog' ); ?>
  </div>
</div>

<?php get_footer(); ?>
