<?php $sixth_section = get_field('sixth_section',9);?>
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="top-sec">
                    <h6 class="sub-heading wow fadeInUp" data-wow-delay="0.2s"><?php echo $sixth_section['heading'];?>
                    </h6>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $sixth_section['sub_heading'];?></h2>
                </div>
            </div>

            <div class="col-lg-6 text-end">
                <a class="btn btn-primary wow fadeInUp" data-wow-delay="0.2s"
                    href="<?php echo $sixth_section['button_link'];?>"><?php echo $sixth_section['button_text'];?></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="index-slider-news wow fadeInUp" data-wow-delay="0.4s">
                    <?php    $x=1;  $args = array( 'post_type' => 'blog' , 'posts_per_page' => '4','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
                    <a href="#">
                        <div>
                            <div class="news-card">
                                <img src="<?php the_post_thumbnail_url() ;?>" class="w-100" alt="">
                                <div class="content">
                                    <h5><?php the_title() ;?></h5>
                                    <p class="date"><?php echo get_the_date('F d, Y');?>
                                        <?php $comments_count = wp_count_comments( get_the_ID() ); echo $comments_count->total_comments; ?>
                                        comments</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php $x++; endwhile; wp_reset_query(); ?>
                </div>

            </div>
        </div>
    </div>

</section>