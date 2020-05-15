<?php
/*
Template Name: feature
*/    
?>

<section class="feature-section">

           <!-- <div class="col-md-4">
               <div class="feature-item set-bg" data-setbg="">
                   <h3>GROUP CLASSES</h3>
                   <p>The Sopranos manages to address the biases<br /> and benefits of therapy</p>
                   <a href="#" class="primary-btn f-btn">Read More</a>
               </div>
           </div>
           <div class="col-md-4">
               <div class="feature-item set-bg" data-setbg="">
                   <h3>PERSONAL TRAINING</h3>
                   <p>Strep throat is very common during the flu<br /> seasons and it can be preceded</p>
                   <a href="#" class="primary-btn f-btn">Read More</a>
               </div>
           </div>
           <div class="col-md-4">
               <div class="feature-item set-bg" data-setbg="">
                   <h3>Sports Nutrition</h3>
                   <p>A Human Being’s right to life implies his right to<br /> have the free and unrestricted</p>
                   <a href="#" class="primary-btn f-btn">Read More</a>
               </div>
           </div> -->
        <div class="container-fluid p-0 m-0">
           <div class="row p-0">

           <?php
                $args = array(
                    'posts_per_page' => 3,
                    'category_name' => 'features',
	                'post_status' => array( 'publish' ),
                );
                
                $query = new WP_Query( $args );
                if($query->have_posts()):
                    
                    while($query->have_posts()):
                    $query->the_post();?>
                <div class="col-md-4 p-0">
                       <?php the_content();?>
                </div>
                <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
       </div>
   </div>
</section>
