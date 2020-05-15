<?php
    /*
    Template Name : classestime
    */
?>
            <?php
                $args = array(
                    'posts_per_page' => 1,
                    'post_type' => 'planning',
                    'post_status' => array( 'publish' ),
                );
                
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    
                    while ($query->have_posts()):
                    $query->the_post();?>
                    
<section class="classtime-section class-time-table spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2><?php the_title()?></h2>
                    </div>
                </div>
            </div>
                    <div class="classtime-table">
                    <table>
                        <?php
                            $jours = get_field('jours');
                            $formations = get_field('choix');
                            if ($jours) {
                                echo '<thead><tr><th></th>';
                                foreach ($jours as $jour) {
                                    echo '<th>'. $jour .'</th>';
                                }
                                echo '</tr></thead>';
                            }
                            if($formations){
                                echo '<tbody>';
                                    foreach($formations as $value){
                                        echo '<tr>';
                                        echo '<td class="workout-time">' . $value . '</td>';
                                        foreach ($jours as $jour) {
                                            $planning = get_field($jour.'_'.sanitize_title($value));
                                            echo '<td><h6>'.$planning.'</h6></td>';
                                        }
                                        echo '</tr>';
                                    }
                                echo '</tbody>';
                            }

                        ?>
                    </table>
                    </div>
                <?php endwhile;
                endif;
                wp_reset_postdata();
        ?>
        </div>
    </section>
    <!-- Class Time Section End -->