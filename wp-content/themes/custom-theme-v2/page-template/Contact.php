<?php /** * Template Name: Contact Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="top-sec">
                    <h6 class="sub-heading wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['heading_1'];?>
                    </h6>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['heading_2'];?></h2>
                </div>
                <div class="contact-info">
                    <div class="content wow fadeInUp" data-wow-delay="0.2s">
                        <h5>Address:</h5>
                        <p><?php echo $options['address'];?></p>
                    </div>

                    <div class="content wow fadeInUp" data-wow-delay="0.3s">
                        <h5>Phone: </h5>
                        <a href="tel: <?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?>
                        </a>
                    </div>

                    <div class="content wow fadeInUp" data-wow-delay="0.4s">
                        <h5>Email: </h5>
                        <a href="mailto: <?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="top-sec">
                    <h6 class="sub-heading wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['heading_3'];?>
                    </h6>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['heading_4'];?></h2>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="af75a9d" title="Contact form 1"]');?>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <iframe
                    src="<?php echo $first_section['link'];?>"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>