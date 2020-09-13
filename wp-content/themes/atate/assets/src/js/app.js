$(window).scroll(function() {
    scrollNav();
});

function scrollNav() {
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
        $("header").addClass("white");
        $(".logo").attr("src","./wp-content/themes/atate/assets/build/img/atate-logo-black.png");
    } else {
        $("header").removeClass("white");
        $(".logo").attr("src","./wp-content/themes/atate/assets/build/img/atate-logo-clear.png");
    }
}

//Nav scrolling
$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top - 60
    }, 500);
    return false;
});

function hideNav() {
    $('.main-nav').toggleClass("visible");
    $('header .menu-ros').toggleClass("visible");
}

$(document).ready(function(){
    scrollNav();
    $("#menu-toggle").click(function(){
        $("body").toggleClass("mobile-menu-open"),
        $(this).toggleClass("open"),
        $(".navbar__menu").slideToggle(),
        $("header").toggleClass("mobile-nav-open");
    }
    );

    //Nav menu
    $('.mob-menu .fa').click(function () {
        $(".main-nav").toggleClass("visible");
        $('header .menu-ros').toggleClass("visible");

        if ( $('nav').hasClass('visible') ) {
            $('nav ul li a').click(function () {
                if ( $('nav').hasClass('visible') ) {
                    $("nav").toggleClass("visible");
                    $('header .menu-ros').toggleClass("visible");
                }
            });
        }
    });

});



$(function(){

    window.sr = ScrollReveal();

    if ($(window).width() < 768) {

        if ($('.timeline-content').hasClass('js--fadeInLeft')) {
            $('.timeline-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
        }

        sr.reveal('.js--fadeInRight', {
            origin: 'right',
            distance: '300px',
            easing: 'ease-in-out',
            duration: 800,
        });

    } else {

        sr.reveal('.js--fadeInLeft', {
            origin: 'left',
            distance: '300px',
            easing: 'ease-in-out',
            duration: 800,
        });

        sr.reveal('.js--fadeInRight', {
            origin: 'right',
            distance: '300px',
            easing: 'ease-in-out',
            duration: 800,
        });

    }

    sr.reveal('.js--fadeInLeft', {
        origin: 'left',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
    });

    sr.reveal('.js--fadeInRight', {
        origin: 'right',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
    });


});




