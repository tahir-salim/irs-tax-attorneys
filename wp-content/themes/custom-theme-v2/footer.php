<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>

    <section class="subscribe-newsletter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content">
                        <h4>Subscribe Newsletter</h4>
                        <p>Contact us 24 hours a day, 7 days a week</p>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <div class="subscription">
                    <?php echo do_shortcode('[email-subscribers-form id="1"]');?>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="col-content">
                        <a class="f-logo" href="<?php echo site_url();?>"><img
                                src="<?php echo $options['footer-logo'];?>" alt=""></a>
                        <p class="f-logo-content"><?php echo $options['footer_about'];?></p>
                        <ul class="footer-social-icons">
                            <li> <a href="<?php echo $options['facebook'];?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li> <a href="<?php echo $options['instagram'];?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li> <a href="<?php echo $options['linkedin'];?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li><a href="<?php echo $options['whatsapp'];?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 ps-5">
                    <h6> Useful Links</h6>
                    <!-- <ul class="f-menu quick-links">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about-us.php">About</a>
                        </li>
                        <li>
                            <a href="services.php">Service</a>
                        </li>
                        <li>
                            <a href="javascript:;">Calender</a>
                        </li>
                        <li>
                            <a href="blog.php">Blog</a>
                        </li>
                        <li>
                            <a href="contact-us.php">Contact</a>
                        </li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> 'f-menu quick-links' ) ); ?>
                </div>



                <div class="col-lg-3">
                    <div class="contact-footer">
                        <h6>Business Hours</h6>
                        <ul class="footer-social quick-links">
                            <?php echo $options['timing'];?>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-3">
                    <h6>Contact</h6>
                    <div class="contact-icons">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/location-icon.png" alt="">
                            <p><?php echo $options['address'];?></p>
                        </div>
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/phone-icon.png" alt="">
                            <a
                                href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                        </div>
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/mail-icon.png" alt="">
                            <a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <div class="copyright">
        <div class="container">
            <div class="copyright-content">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-6">
                        <p class="text-white">Copyright @ <script>
                            var CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                            </script><?php echo $options['copyright'];?></p>
                    </div>


                    <div class="col-lg-6 text-end">
                        <div class="footer-link">
                            <a href="javascript:;">Terms and Conditions</a> |
                            <a href="javascript:;">Privacy Policy</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</footer>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
<?php wp_footer(); ?>
</main>
</body>

</html>