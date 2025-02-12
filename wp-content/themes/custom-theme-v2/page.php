<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<section class="DefaultPage">
  <div class="container">
    <div class="Title">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="Content">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php else: ?>
<section class="DefaultPage">
  <div class="container">
    <article>
      <h2><?php _e('Sorry, nothing to display.', 'wp-blank'); ?></h2>
    </article>
  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
