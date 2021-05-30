
    // cache container
    var $container = $('#container');
    // initialize isotope
    $container.isotope({
        // options...
    });

    // filter items when filter link is clicked
    $('#filters a').click(function(){
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector });
        return false;
    });



    $(window).load(function () {
        $('#owl-carousels').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            margin: 30,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    loop: true
                },
                600: {
                    items: 1,
                    loop: true
                },
                1000: {
                    items: 4,
                    loop: true
                }
            }
        });
    });
    $(window).load(function () {
        $('.owl-carousel').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            margin: 30,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    loop: true
                },
                600: {
                    items: 1,
                    loop: true
                },
                1000: {
                    items: 1,
                    loop: true
                }
            }
        });
    });
    $(window).load(function () {
        $('#hightlight_cover-slider').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            margin: 30,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    loop: true
                },
                600: {
                    items: 1,
                    loop: true
                },
                1000: {
                    items: 1,
                    loop: true
                }
            }
        });
    });
