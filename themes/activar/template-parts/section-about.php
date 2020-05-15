    <?php 
        /*
        Template Name : about 
        */
    ?>
    
    <!-- About Section Begin -->
    <section class="home-about spad">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-6">
                    <div class="about-text">
                        <h2>WELCOME TO CROSSFIT</h2>
                        <p class="short-details">CrossFit is a cutting-edge functional fitness system that can help
                            everyday men.</p>
                        <p class="long-details">Success isn’t really that difficult. There is a significant portion of
                            the population here in North America, that actually want and need success to be hard! For
                            those of you who are serious about having more, doing more, giving more and being more.</p>
                        <a href="#" class="primary-btn about-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src=<?php echo esc_html(get_template_directory_uri() . "/img/home-about.jpg")?> alt="">
                    </div>
                </div> -->
                <?php
                $args = array(
                    'posts_per_page' => 1,
                    'category_name' => 'whoami',
	                'post_status' => array( 'publish' ),
                );
                
                $query = new WP_Query( $args );
                if($query->have_posts()):
                    
                    while($query->have_posts()):
                    $query->the_post();?>
                        
                       <?php the_content()?>

                <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <!-- About Section End -->