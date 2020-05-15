<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
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
    <header class="header-section header-normal">
        <div class="container-fluid">
            <div class="logo">
                <a href=<?php the_permalink(); ?>>
                    <img src=<?php echo esc_html(get_template_directory_uri() . "/img/logo.png"); ?> alt="">
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
                                    'theme_location' => 'secondary',
                                    'container' => 'nav',
                                    'container_class' => 'mainmenu mobile-menu'
                                )
                            );
                        ?>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg spad" data-setbg=<?php echo esc_html(get_template_directory_uri() . "/img/about-bread.jpg");?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2><?php the_title() ?></h2>
                        <div class="breadcrumb-controls">
                            <a href='#'><i class="fa fa-home"></i> Home</a>
                            <span><?php the_title() ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->