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
                var minPerSlide = 2;
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
                if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
                    $(".owl-carousel").owlCarousel({
                        nav: true,
                        loop: true,
                        dots: false,
                        margin: 1,
                        responsiveClass: true,
                        autoplay: true,
                        autoplayTimeout: 8000,
                        responsive: {
                            0: {
                                
                                items: 2,
                                nav: true
                            }
                        }
    
                    });

                }else{
                    $(".owl-carousel").owlCarousel({
                        nav: true,
                        loop: true,
                        dots: false,
                        margin: 1,
                        responsiveClass: true,
                        autoplay: true,
                        autoplayTimeout: 8000,
                        responsive: {
                            0: {
                                
                                items: 4,
                                nav: true
                            }
                        }
    
                    });

                }

            });
