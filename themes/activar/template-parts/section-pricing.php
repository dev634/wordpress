<?php
    /*
    Template Name : pricing
    */
?>

    <!-- Price Plan Section Begin -->
    <section class="price-section spad set-bg" data-setbg=<?php echo get_field('background_pricing') ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2><?php echo get_field('title_pricing')?></h2>
                        <p><?php echo get_field('paragraph_pricing')?></p>
                    </div>
                    <div class="toggle-option">
                        <ul>
                            <li>Mensuel</li>
                            <li>
                                <label id="mySwitch"class="switch">
                                    <input id="mySwitch-checkbox" class="checkbox" type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li>Annuel</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center justify-content-sm-center justify-content-md-start">
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

                <div class="col-8 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                    <div class="single-price-plan">
                        <h4><?php the_title() ?></h4>
                        <div class="price-plan">
                            <h2><?php echo get_field('price', get_the_ID())?><span>€</span></h2>
                        </div>
                        <ul>
                            <?php 
                                for($i = 0;$i <= 4; $i++ ){
                                    echo '<li>' . get_field('avantage_' . $i, get_the_ID()) . '</li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>        

                <?php endwhile;
                endif;
                wp_reset_postdata();
        ?>
            </div>
        </div>
    </section>
    <!-- Price Plan Section End -->