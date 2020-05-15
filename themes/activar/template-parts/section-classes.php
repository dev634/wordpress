    <?php
        /*
        Template Name : classes
        */
    ?>
    
    <!-- Classes Section Begin -->
    <section class="classes-section">
        <div class="banniere-classes-section" style="background-image:url('<?= get_field('image_banniere');?>');">
            <h2><?= get_field('title');?></h2>
            <p><?= get_field('paragraphe');?></p>
        </div>
        <div class="container-fluid">
            <div class="row">
            <?php
                $args = array(
                    'posts_per_page' => 4,
                    'post_status' => array( 'publish' ),
                    'post_type' => 'formation'
                    
                );
                
                $query = new WP_Query( $args );
                if($query->have_posts()):
                    
                    while($query->have_posts()):
                    $query->the_post();?>        
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="classes-item" style=<?php  echo "background-image:url(". get_the_post_thumbnail_url() . ")";?>>
                            <h4><?php the_title();?></h4>
                            <?php the_content();?>
                            <div class="wp-block-button">
                                <a class="wp-block-button__link primary-btn" href=<?php echo get_field('btn_link');?>><?php echo get_field('btn_text');?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                endif;
                wp_reset_postdata();
        ?>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->
