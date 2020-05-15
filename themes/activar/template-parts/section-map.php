<?php

    /*
    Template Name : Map
    */
?>
<?php 
    $address = str_replace(' ', '+', get_option('info_adress'));
    $city = get_option('info_city');
    $country = get_option('info_country');
    $city_country = $city . '+' . $country;
    $array_address = array($address,$city_country);
    $address = join(',',$array_address);
?>
    <!-- Map Section Begin -->
    <div class="contact-map">
            <iframe src=<?php echo esc_attr('https://www.google.com/maps/embed/v1/place?key=AIzaSyCUAUQbRx1EgP36-clxalET6oUxUJP537o&zoom=14&q=' . $address);?>  height="530" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <!-- <div class="map-hover">
            <h5><?php echo get_option('info_city')?></h5>
            <ul>
                <li>Weekdays: 10.00 - 23.00</li>
                <li>Saturday: 10.00 - 23.00</li>
                <li>Sunday: Close</li>
            </ul>
            <i class="icon_pin"></i>
        </div> -->
        
    </div>
    <!-- Map Section End -->