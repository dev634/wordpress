<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="description" content="Activitar Template">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">  
    <?php wp_head();?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="logo">
                <a href=<?php the_permalink(); ?>>
                    <?php the_custom_logo() ?>
                </a>
            </div>
            
            <?php
                wp_nav_menu(
                    array(
                         'menu'            => '',
                         'container'       => false,
                         'container_class' => '',
                         'container_id'    => '',
                         'menu_class'      => 'top-social',
                         'menu_id'         => '',
                         'echo'            => true,
                         'fallback_cb'     => 'wp_page_menu',
                         'before'          => '',
                         'after'           => '',
                         'link_before'     => '',
                         'link_after'      => '',
                         'items_wrap'      => '<div class="%2$s">%3$s</div>',
                         'item_spacing'    => 'preserve',
                         'depth' => 1,
                         'theme_location'  => 'social',
                         'walker' => new Custom_walker
                    )
                );
            ?>
            <div class="container">
                <div class="nav-menu">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'container' => 'nav',
                                    'container_class' => 'mainmenu mobile-menu',
                                )
                            );
                        ?>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

        <!-- Hero Section Begin -->
       
                <?php
                $args = array(
	                'post_type' => array( 'header' ),
	                'post_status' => array( 'publish' ),
                );
                
                $query = new WP_Query( $args );
                if($query->have_posts()):?>
                    <section class="hero-section">
                    <div class="hero-items owl-carousel">  
                <?php while($query->have_posts()):
                    $query->the_post();?>
                                    <?php 
                                    $images = get_the_content();
                                    $image = array_filter(preg_split('/<img.*?src=\"(.*?)\".*?\/>/mi', $images,-1, PREG_SPLIT_DELIM_CAPTURE));
                                    foreach($image as $value){?>
                                    <div class="single-hero-item set-bg-header" data-setbg=<?php echo esc_attr($value); ?>>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="hero-text">
                                                        <h2><?php bloginfo('description')?></h2>
                                                        <h1><?php bloginfo( 'name' ); ?></h1>
                                                        <a href="#" class="primary-btn">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                 <?php   }; ?>
                            <?php  endwhile;
                            endif;
                            wp_reset_postdata(); ?>    
                        </div>
                    </section>
    <!-- Hero End -->