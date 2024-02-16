(function($) {
    'use strict';

    // Preloader js    
    $(window).on('load', function() {
        $('.preloader').fadeOut(700);
    });

    // Sticky Menu
    $(window).scroll(function() {
        var height = $('.top-header').innerHeight();
        if ($('header').offset().top > 10) {
            $('.top-header').addClass('hide');
            $('.navigation').addClass('nav-bg');
            $('.navigation').css('margin-top', '-' + height + 'px');
        } else {
            $('.top-header').removeClass('hide');
            $('.navigation').removeClass('nav-bg');
            $('.navigation').css('margin-top', '-' + 0 + 'px');
        }
    });
    // navbarDropdown
    if ($(window).width() < 992) {
        $('.navigation .dropdown-toggle').on('click', function() {
            $(this).siblings('.dropdown-menu').animate({
                height: 'toggle'
            }, 300);
        });
    }

    // Background-images
    $('[data-background]').each(function() {
        $(this).css({
            'background-image': 'url(' + $(this).data('background') + ')'
        });
    });

    //Hero Slider
    $('.hero-slider').slick({
        autoplay: true,
        autoplaySpeed: 7500,
        pauseOnFocus: false,
        pauseOnHover: false,
        infinite: true,
        arrows: true,
        fade: true,
        prevArrow: '<button type=\'button\' class=\'prevArrow\'><i class=\'ti-angle-left\'></i></button>',
        nextArrow: '<button type=\'button\' class=\'nextArrow\'><i class=\'ti-angle-right\'></i></button>',
        dots: true
    });
    $('.hero-slider').slickAnimation();

    // venobox popup
    $(document).ready(function() {
        $('.venobox').venobox();
    });


    // filter
    $(document).ready(function() {
        var containerEl = document.querySelector('.filtr-container');
        var filterizd;
        if (containerEl) {
            filterizd = $('.filtr-container').filterizr({});
        }
        //Active changer
        $('.filter-controls li').on('click', function() {
            $('.filter-controls li').removeClass('active');
            $(this).addClass('active');
        });
    });

    //  Count Up
    function counter() {
        var oTop;
        if ($('.count').length !== 0) {
            oTop = $('.count').offset().top - window.innerHeight;
        }
        if ($(window).scrollTop() > oTop) {
            $('.count').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 1000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            });
        }
    }
    $(window).on('scroll', function() {
        counter();
    });

})(jQuery);

$(".ba-we-love-subscribers-fab").click(function() {
    $('.ba-we-love-subscribers-fab .wrap').toggleClass("ani");
    $('.ba-we-love-subscribers').toggleClass("open");
    $('.img-fab.img').toggleClass("close");
});

//** tables **/
const tables = document.querySelectorAll("table");
if (tables) {
    tables.forEach((table) => {
        const headerRow = table.querySelector("thead tr");
        const thElements = headerRow.querySelectorAll("th");
        const tdElements = table.querySelectorAll("tbody tr td");
        const tr = table.querySelectorAll("tbody tr");

        let mainIndex = 0;
        tdElements.forEach((td) => {
            let index = mainIndex / tdElements.length;
            td.setAttribute("data-label", thElements[mainIndex].innerHTML);

            if (mainIndex == thElements.length - 1) {
                mainIndex = 0;
            } else {
                mainIndex += 1;
            }
        });
    });
}