 $(document).ready(function () {

                var menu = $('.carousel');
                var origOffsetY = menu.offset().bottom;
                scroll();
                function scroll() {
                    if ($(window).scrollTop() >= 50) {
                        $('.menu').removeClass('nosticky');
                        $('.menu').addClass('sticky');

                    } else if ($(window).scrollTop() <= 50) {
                        $('.menu').addClass('nosticky');

                        $('.menu').removeClass('sticky');

                    }


                }

                document.onscroll = scroll;

            });
            $('#recipeCarousel').carousel({
                interval: 10000
            })

            $('.carousel .carousel-item').each(function () {
                var minPerSlide = 3;
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i = 0; i < minPerSlide; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    next.children(':first-child').clone().appendTo($(this));
                }
            });
            $(document).ready(function () {
                $(".owl-carousel").owlCarousel({
                    nav: true,
                    loop: true,
                    dots: false,
                    margin: 10,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 3,
                            nav: true
                        },
                        1000: {
                            items: 5,
                            nav: true,

                        }
                    }

                });

            });
