jQuery(document).ready(function() {

    jQuery(window).scroll(function() {
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 150) {
            jQuery("header").addClass("headerFixed");

        } else {
            jQuery("header").removeClass("headerFixed");
        }
    });

    jQuery('.testimonialWrapper').slick({
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 2,
        dots: true,
        arrows: false,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
            }
        }]
    });

    jQuery('.banner-slider').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        arrows: true,
        autoplaySpeed: 4000,
        speed: 800,
        slidesToShow: 1
    });

    jQuery('.project-slider').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        arrows: true,
        autoplaySpeed: 4000,
        speed: 800,
        slidesToShow: 3,
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 768,
              settings: {
                dots: true,
                arrows: false,
                slidesToShow: 1,
              }
            }
          ]
    });

});