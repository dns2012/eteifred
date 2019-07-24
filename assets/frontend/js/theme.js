// Header Scroll Add Class

$(window).on('scroll',function() {    
    var scroll = $(window).scrollTop();
    if (scroll < 10) {
        $(".header_area").removeClass("fixed-white");
    }else{
        $(".header_area").addClass("fixed-white");
    }
});

$(document).on('click', '.btn_topup', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});


// BACK TO TOP
let backToTop = $(".back-to-top");

$(window).on('scroll',function() {    
var scroll = $(window).scrollTop();

if (scroll < 750) {
    backToTop.removeClass('in');
} else{
    backToTop.addClass('in');
}
});

backToTop.click(function () {
    //1 second of animation time
    //html works for FFX but not Chrome
    //body works for Chrome but not FFX
    //This strange selector seems to work universally
    $("html, body").animate({scrollTop: 0}, 1000);
});

$('#slider-1').owlCarousel({
    autoplay:true,
    loop: true,
    margin: 0,
    nav: true,
    animateOut: 'fadeOut',
    navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$('#products').owlCarousel({
    autoplay:true,
    loop: true,
    margin: 20,
    nav: false,
    autoplay: true,
    // animateOut: 'fadeOut',
    // navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

$('#testimonial-slider').owlCarousel({
    autoplay:true,
    loop: true,
    margin: 10,
    nav: true,
    dots: true,
    navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});