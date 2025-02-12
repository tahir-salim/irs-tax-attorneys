<?php /** * Template Name: Blog Template */ ?>
<?php $sixth_section = get_field('sixth_section',9);?>
<?php get_header(); ?>

<section class="news news-inner">
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <div class="top-sec text-center">
                    <h6 class="sub-heading wow fadeInUp" data-wow-delay="0.2s"><?php echo $sixth_section['heading'];?>
                    </h6>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $sixth_section['sub_heading'];?></h2>
                </div>
            </div>
        </div>

        <div class="row">

            <?php    $x=1;  $args = array( 'post_type' => 'blog' , 'posts_per_page' => '-1','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
            <div class="col-lg-4">
                <a href="#">
                    <div class="news-card wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?php the_post_thumbnail_url() ;?>" class="w-100" alt="">
                        <div class="content">
                            <h5><?php the_title() ;?></h5>
                            <p class="date"><?php echo get_the_date('F d, Y');?>
                                <?php $comments_count = wp_count_comments( get_the_ID() ); echo $comments_count->total_comments; ?>
                                comments</p>
                        </div>
                    </div>
                </a>
            </div>

            <?php $x++; endwhile; wp_reset_query(); ?>
        </div>

</section>
<?php get_footer(); ?>