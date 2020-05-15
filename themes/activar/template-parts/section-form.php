<?php

    /*
    Template Name : Form
    */

?>

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact-info">
                        <h4>Information</h4>
                        <ul>
                            <li><i class="fa fa-phone"></i><?php echo get_option('info_tel'); ?></li>
                            <li><i class="fa fa-envelope"></i><?php bloginfo('admin_email')?></li>
                        </ul>
                    </div>
                    <div class="contact-address">
                        <h4>Addresse</h4>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i><?php echo get_option('info_adress');?>
                            </li>
                            </br>
                            <li>
                                <?php echo get_option('info_zip') . " " . get_option('info_city');?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="contact-form">
                        <h4>Contactez moi</h4>
                        <form id="contact-form" action="#" method="post" data-url=<?php echo esc_attr(admin_url('admin-ajax.php'));?>>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Nom" id="Nom" name="Nom" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Prenom" id="Prenom" name="Prenom" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Sujet" id="Sujet" name="Sujet" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Email" id="Email" name="Email" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message" id="Message" name="Message" required></textarea>
                                    <button type="submit" class="c-btn">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->