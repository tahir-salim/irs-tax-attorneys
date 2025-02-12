<?php /** * Template Name: Home Template */ ?>
<?php global $options; ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>
<?php $third_section = get_field('third_section');?>
<?php $fourth_section = get_field('fourth_section');?>
<?php $fifth_section = get_field('fifth_section');?>
<?php $sixth_section = get_field('sixth_section');?>



<?php get_header(); ?>
<div class="mainBanner" style="background-image: url(<?php echo $banner_section['image'];?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="hero-content">
                    <h6 class="sub-heading wow fadeInUp" data-wow-delay="0.2s"><?php echo $banner_section['heading'];?>
                    </h6>
                    <h1 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $banner_section['sub_heading'];?></h1>
                    <p class=" wow fadeInUp" data-wow-delay="0.2s"><?php echo $banner_section['content'];?></p>
                    <div class="btns">
                        <a class="btn btn-primary wow fadeInUp" data-wow-delay="0.2s"
                            href="<?php echo $banner_section['button_link'];?>"><?php echo $banner_section['button_text'];?></a>
                        <a class="btn btn-secondary wow fadeInUp" data-wow-delay="0.3s"
                            href="tel:<?php echo $options['phone_number'];?>"><i
                                class="far fa-phone me-1"></i><?php echo $options['phone_number'];?></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="content mt-2">
                    <h6 class="sub-heading wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['heading'];?>
                    </h6>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['sub_heading'];?></h2>
                    <p class="para-one wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['content'];?></p>
                    <p class="para-two wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['content_2'];?></p>
                    <a class="btn btn-primary wow fadeInUp" data-wow-delay="0.2s"
                        href="<?php echo $first_section['button_link'];?>"><?php echo $first_section['button_text'];?></a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-img wow fadeInUp" data-wow-delay="0.2s">
                    <img src="<?php echo $first_section['image'];?>" class="w-100" alt="">
                    <div class="about-img-content">
                        <h2><?php echo $first_section['h_1'];?></h2>
                        <h4><?php echo $first_section['h_2'];?></h4>
                        <h5><?php echo $first_section['h_3'];?></h5>
                    </div>
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="work">
    <div class="container">
        <div class="row align-items-center gx-5">

            <div class="col-lg-6">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="img-box">
                        <a href="<?php echo $second_section['link'];?>" data-fancybox="media"><i
                                class="fas fa-play"></i></a>
                        <img src="<?php echo $second_section['image'];?>" class="w-100" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="content wow fadeInRight" data-wow-delay="0.2s">
                    <h6 class="sub-heading"><?php echo $second_section['heading'];?></h6>
                    <h2><?php echo $second_section['sub_heading'];?></h2>
                    <p class="para"><?php echo $second_section['content'];?></p>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="services">
    <div class="container">
        <div class="top-sec">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <h6 class="sub-heading wow fadeInUp" data-wow-delay="0.2s"><?php echo $third_section['heading'];?>
                    </h6>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="0.2s">
                        <?php echo $third_section['sub_heading'];?></h2>
                </div>

                <div class="col-lg-6 text-end">
                    <a class="btn btn-primary wow fadeInUp" data-wow-delay="0.2s"
                        href="<?php echo $third_section['button_link'];?>"><?php echo $third_section['button_text'];?></a>
                </div>

            </div>
        </div>

        <div class="row gx-5 pb-5">
            <?php $box_list = $third_section['box_list'];?>
            <?php $x=1; foreach ($box_list as $boxlist) {?>
            <?php if ($x<7) {?>
            <div class="col-lg-4">
                <div class="services-card wow zoomIn" data-wow-delay="0.2s">
                    <img src="<?php echo $boxlist['image']; ?>" alt="">
                    <h4><?php echo $boxlist['heading']; ?></h4>
                    <p><?php echo $boxlist['content']; ?>
                    </p>
                </div>
            </div> 
            <?php $x++; }}?>

        </div>
    </div>

</section>


<section class="testimonials">
    <div class="container">

        <div class="row gx-5 align-items-center">

            <div class="col-lg-6">
                <div class="testimonials-card wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="index-slider-testimonials">
                        <?php $box_list = $fourth_section['box_list'];?>
                        <?php  foreach ($box_list as $boxlist) {?>
                        <div>
                            <div class="testimonials-content">
                                <img src="<?php echo $boxlist['image']; ?>" alt="">
                                <p class="para"><?php echo $boxlist['content']; ?></p>
                                <div class="user">
                                    <img src="<?php echo $boxlist['image_2']; ?>" alt="">
                                    <h6 class=""><?php echo $boxlist['heading']; ?></h6>
                                    <p class="designation"><?php echo $boxlist['para']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="content">
                    <h6 class="sub-heading wow fadeInUp" data-wow-delay="0.2s"><?php echo $fourth_section['heading'];?>
                    </h6>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $fourth_section['sub_heading'];?></h2>
                    <p class="para wow fadeInUp" data-wow-delay="0.2s"><?php echo $fourth_section['content'];?></p>
                </div>
            </div>

        </div>
    </div>

</section>


<section class="team">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h6 class="sub-heading wow fadeInUp" data-wow-delay="0.2s"><?php echo $fifth_section['heading'];?></h6>
                <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $fifth_section['sub_heading'];?></h2>
            </div>
        </div>

        <div class="row">
            <?php $box_list = $fifth_section['box_list'];?>
            <?php  foreach ($box_list as $boxlist) {?>
            <div class="col-lg-4">
                <div class="team-card wow fadeInUp" data-wow-delay="0.2s">
                    <img class="w-100" src="<?php echo $boxlist['image']; ?>" alt="">
                    <div class="content">
                        <h5><?php echo $boxlist['heading']; ?></h5>
                        <p><?php echo $boxlist['para']; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

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
<?php get_footer(); ?>