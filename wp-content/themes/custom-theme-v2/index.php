<?php get_header(); ?>

  <main role="main" aria-label="Content" class="Index">
    <section>
      <h1><?php _e('Latest posts', 'wp-blank'); ?></h1>
      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>
    </section>
  </main>

<?php get_footer(); ?>
