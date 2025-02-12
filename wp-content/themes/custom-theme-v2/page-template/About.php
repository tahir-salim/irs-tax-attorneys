<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>


<section class="about about-inner">
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


<section class="team team-inner">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h6 class="sub-heading wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['heading_2'];?>
                </h6>
                <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['heading_3'];?></h2>
            </div>
        </div>

        <div class="row">
            <?php $box_list = $first_section['box_list'];?>
            <?php  foreach ($box_list as $boxlist) {?>
            <div class="col-lg-6">
                <div class="team-card wow fadeInUp" data-wow-delay="0.2s">
                    <img class="w-100" src="<?php echo $boxlist['image']; ?>" alt="">
                    <div class="content">
                        <h5><?php echo $boxlist['heading']; ?></h5>
                        <p><?php echo $boxlist['sub_heading']; ?></p>
                    </div>
                    <p class="para">
                        <?php echo $boxlist['content']; ?>
                    </p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

</section>


<?php get_template_part("includes/news"); ?>

<?php get_footer(); ?>