jQuery(document).ready(function($) {
    if ($(window).width() > 768) {
        $('.nav li.dropdown').hover(function() {
            $(this).addClass('open');
        }, function() {
            $(this).removeClass('open');
        });
        $('.nav li.dropdown-menu').hover(function() {
            $(this).addClass('open');
        }, function() {
            $(this).removeClass('open');
        });
    }

    $('.nav li.dropdown').find('.caret').each(function() {
        $(this).on('click', function() {
            if ($(window).width() < 768) {
                $(this).parent().next().slideToggle();
            }
            return false;
        });
    });


    $(window).scroll(function() {
        if ($(window).width() > 768) {
            if ($(this).scrollTop() > 100) {
                $('header').addClass('sticky-head');
            } else {
                $('header').removeClass('sticky-head');
            }
        } else {
            if ($(this).scrollTop() > 100) {
                $('header').addClass('sticky-head');
            } else {
                $('header').removeClass('sticky-head');
            }
        }
    });

    /* Slider */

    var swiper = new Swiper('.swiper1', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        // autoplay:4000,
        loop: true
    });

    /* Client */
    
    var swiper = new Swiper('.swiper2', {
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween: 10,
        autoplay:3000,
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 10
            }
        }
    });
    
    /* Related */   
    var swiper = new Swiper('.swiper3', {
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween: 20,
        autoplay:3000,
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 10
            }
        }
    });

});
new WOW().init();

jQuery(document).ready(function($) {
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('#masthead').outerHeight();

    $(window).scroll(function(event) {
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $('#masthead').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('#masthead').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }


});


(function($) {
    /* Lignt Box*/
    var gallery = $('.lightbox_a').simpleLightbox();
})(jQuery);
