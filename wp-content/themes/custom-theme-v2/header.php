<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>

<body <?php body_class(); ?>>

    <header>

        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="contact-info ">
                            <a href="tel:<?php echo $options['phone_number'];?>" class="me-4"><i
                                    class="far fa-phone me-1"></i><?php echo $options['phone_number'];?></a>
                            <a href="mailto:<?php echo $options['email'];?>"><i
                                    class="fa-light fa-envelope me-1"></i><?php echo $options['email'];?> </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-end">
                        <div class="social-icons">
                            <a href="<?php echo $options['facebook'];?>" target="_blank" class="me-2"><i
                                    class="fa-brands fa-facebook"></i></a>
                            <a href="<?php echo $options['instagram'];?>" target="_blank" class="me-2"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="<?php echo $options['linkedin'];?>" target="_blank" class="me-2"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="<?php echo $options['whatsapp'];?>" target="_blank"><i class="fab fa-whatsapp"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header">
            <div class="container">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4 text-left">
                        <a href="<?php echo site_url();?>" class="logo text-dark">
                            <img src="<?php echo $options['logo'];?>" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8 text-end">
                        <div class="menuWrap">
                        
                            <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu' ) ); ?>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <main>

        <?php if(is_home() || is_front_page() ){?>


        <?php } else{?>
          <?php $banner_section = get_field('banner_section'); ?>

        <div class="inner-banner"
            style="background-image: url(<?php echo $banner_section['image'];?>), linear-gradient(128deg, #000 1%, rgba(0, 0, 0, 0) 68%), linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="content">
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $banner_section['heading'];?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>