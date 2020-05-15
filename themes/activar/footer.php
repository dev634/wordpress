<footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-logo-item">
                        <div class="f-logo">
                            <a href=<?php the_permalink(); ?>>
                                <?php the_custom_logo() ?>
                            </a>
                        </div>
                        <p>Despite growth of the Internet over the past seven years, the use of toll-free phone numbers
                            in television advertising continues.</p>
            <?php
                wp_nav_menu(
                    array(
                         'menu'            => '',
                         'container'       => false,
                         'container_class' => '',
                         'container_id'    => '',
                         'menu_class'      => 'social-links',
                         'menu_id'         => '',
                         'echo'            => true,
                         'fallback_cb'     => 'wp_page_menu',
                         'before'          => '',
                         'after'           => '',
                         'link_before'     => '',
                         'link_after'      => '',
                         'items_wrap'      => '<div class="%2$s"><h6>FOLLOW US</h6>%3$s</div>',
                         'item_spacing'    => 'preserve',
                         'depth' => 1,
                         'theme_location'  => 'social',
                         'walker' => new Custom_walker
                    )
                );
            ?>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Our Blog</h5>
                        <div class="footer-blog">
                            <a href="#" class="fb-item">
                                <h6>Most people who work</h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                            <a href="#" class="fb-item">
                                <h6>Freelance Design Tricks How </h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                            <a href="#" class="fb-item">
                                <h6>have a computer at home have had </h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Program</h5>
                        <ul class="workout-program">
                            <li><a href="#">Bodybuilding</a></li>
                            <li><a href="#">Running</a></li>
                            <li><a href="#">Streching</a></li>
                            <li><a href="#">Weight Loss</a></li>
                            <li><a href="#">Gym Fitness</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h5>Get Info</h5>
                        <ul class="footer-info">
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>Phone:</span>
                                <?php echo get_option('info_tel'); ?>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <span>Email:</span>
                                <?php bloginfo('admin_email')?>
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Address</span>
                                <?php echo get_option('info_adress');?></br>
                                <?php echo get_option('info_zip') . ' ' . get_option('info_city');?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ct-inside"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <?php wp_footer();?>
</body>

</html>