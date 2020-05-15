/*  ---------------------------------------------------
  Template Name: Activitar
  Description:  Activitar Fitness HTML Template
  Author: Colorlib
  Author URI: https://colorlib.com
  Version: 1.0
  Created: Colorlib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        /*------------------
            Gallery filter
        --------------------*/
        $('.gallery-controls ul li').on('click', function() {
            $('.gallery-controls ul li').removeClass('active');
            $(this).addClass('active');
        });
        if($('.gallery-filter').length > 0 ) {
            var containerEl = document.querySelector('.gallery-filter');
            var mixer = mixitup(containerEl);
        }

        $('.blog-gird').masonry({
			itemSelector: '.grid-item',
			columnWidth: '.grid-sizer',
		});

    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg-header').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'linear-gradient(rgba(20,20,20,.8),rgba(20,20,20,.8)),url('+ bg +')');
    });

    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url('+ bg +')');
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
		Menu Hover
	--------------------*/
    $(".header-section .nav-menu .mainmenu ul li").on('mousehover', function() {
        $(this).addClass('active');
    });
    $(".header-section .nav-menu .mainmenu ul li").on('mouseleave', function() {
        $('.header-section .nav-menu .mainmenu ul li').removeClass('active');
    });

    /*------------------
        Carousel Slider
    --------------------*/
    $(".hero-items").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        items: 1,
        dots: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: ['<i class="arrow_carrot-left"></i>', '<i class="arrow_carrot-right"></i>'],
        smartSpeed: 1200,
        autoHeight: false,
    });

    /*------------------
        Testimonial Slider
    --------------------*/
   $(".testimonial-slider").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1,
        dots: true,
        navText: ['<i class="arrow_carrot-left"></i>', '<i class="arrow_carrot-right"></i>'],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
    });

    /*------------------
        Magnific Popup
    --------------------*/
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

    $('.image-popup').magnificPopup({
        type: 'image'
    });

    /*------------------
        Magnific Popup
    --------------------*/
    $('.show-result-select').niceSelect();

    /*------------------
       Timetable Filter
    --------------------*/
    $('.timetable-controls ul li').on('click', function() {
        var tsfilter = $(this).data('tsfilter');
        $('.timetable-controls ul li').removeClass('active');
        $(this).addClass('active');
        
        if(tsfilter == 'all') {
            $('.classtime-table').removeClass('filtering');
            $('.ts-item').removeClass('show');
        } else {
            $('.classtime-table').addClass('filtering');
        }
        $('.ts-item').each(function(){
            $(this).removeClass('show');
            if($(this).data('tsmeta') == tsfilter) {
                $(this).addClass('show');
            }
        });
    });

    $('#contact-form').on('submit',function(e){
        e.preventDefault();
        let form = $(this),nom = form.find('#Nom').val(),
            prenom = form.find('#Prenom').val(),
            email = form.find('#Email').val(),
            message = form.find('#Message').val(),
            sujet = form.find('#Sujet').val(),
            ajaxurl = form.data('url')

        if(prenom == '' || nom == '' || email == '' || message == ''){
            console.log('Please enter a value in these fields ...');
            return;
        }

        $.ajax({
            url : ajaxurl,
            method :'POST',
            data : {
                prenom : prenom,
                nom : nom,
                email : email,
                message : message,
                sujet : sujet,
                action : 'mytheme_save_post'
            },

            error : function(res){
                console.log("Error : ", res);
            },

            success : function(res){
                console.log(res);
            }
        });

    });

    $('span.slider').on('click',function(e){
        e.preventDefault();
        $('span.slider').toggleClass('is-monthly');

            if($('span.slider').hasClass('is-monthly')){
                
            }

    });

})(jQuery);