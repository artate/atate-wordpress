$(window).scroll(function() {
    scrollNav();
});

function scrollNav() {
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
        $("header").addClass("white");
        $(".logo").attr("src","/wp-content/themes/atate/assets/build/img/atate-logo-black.png");
    } else {
        $("header").removeClass("white");
        $(".logo").attr("src","/wp-content/themes/atate/assets/build/img/atate-logo-clear.png");
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







