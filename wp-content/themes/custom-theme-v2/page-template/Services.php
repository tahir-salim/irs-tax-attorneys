<?php /** * Template Name: Services Template */ ?>
<?php $third_section = get_field('third_section',9);?>
<?php $box_list = $third_section['box_list'];?>
<?php get_header(); ?>

<section class="services services-inner">
    <div class="container">
        <div class="top-sec">
            <div class="row align-items-center">

                <div class="col-lg-12 text-center">
                    <h6 class="sub-heading wow fadeInUp" data-wow-delay="0.2s"><?php echo $third_section['heading'];?>
                    </h6>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="0.2s">
                        <?php echo $third_section['sub_heading'];?></h2>
                </div>
            </div>
        </div>

        <div class="row gx-5">
            <?php $box_list = $third_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>
            <div class="col-lg-4">
                <div class="services-card wow zoomIn" data-wow-delay="0.2s">
                    <img src="<?php echo $boxlist['image']; ?>" alt="">
                    <h4><?php echo $boxlist['heading']; ?></h4>
                    <p><?php echo $boxlist['content']; ?></p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

</section>
<?php get_footer(); ?>