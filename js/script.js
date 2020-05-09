
let app = {

    sliders: function () {
        if($('.swiper-mainBanner').length){
            var mainSlider = new Swiper('.swiper-mainBanner', {
                autoplay: true,
                navigation: {
                    nextEl: '.swiper-mainBanner .swiper-button-next',
                    prevEl: '.swiper-mainBanner .swiper-button-prev',
                },
            });
        }

        if ($('.movie-slider').length) {
            var movieSlider = new Swiper('.movie-slider', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                autoplay:true,
                initialSlide: 2,
                coverflowEffect: {
                    rotate: 0,
                    stretch: 20,
                    depth: 300,
                    modifier: 1,
                    slideShadows : false,
                }
            });
        }

        if ($('.swiper-team').length) {
            var mainSlider = new Swiper('.swiper-team', {
                speed: 1000,
                slidesPerView: 5,
                spaceBetween: 30,
                autoplay: true,
                breakpoints: {
                    1400:{
                        slidesPerView: 5,
                        spaceBetween: 30,
                    },
                    900: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    600: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    360: {
                        slidesPerView: 2
                    }
                },
                navigation: {
                    nextEl: '.team-nav.swiper-button-next',
                    prevEl: '.team-nav.swiper-button-prev',
                },
            });
        }

        if ($('.swiper-clients').length) {
            var mainSlider = new Swiper('.swiper-clients', {
                speed: 1000,
                slidesPerView: 5,
                spaceBetween: 30,
                autoplay: true,
                breakpoints: {
                    1200:{
                        slidesPerView: 5,
                        spaceBetween: 30,
                    },
                    900: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    600: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    360: {
                        slidesPerView: 2
                    }
                },
                navigation: {
                    nextEl: '.clients-nav.swiper-button-next',
                    prevEl: '.clients-nav.swiper-button-prev',
                },
            });
        }
    },

    img_parallax:function () {
        if ($('.img-parallax').length) {
            $('.img-parallax').parallax();
        }  
    },
    serviceHover:function () {
        if ($('.services-area .service-single').length) {
            $('.services-area .service-single').on('mouseenter touchstart',function (e) {
                $('.services-area .service-single').removeClass('active');
                $(this).addClass('active');
            });
        }
    },

    init: function () {
        this.sliders();
        this.serviceHover();
    }
}

app.init();
jQuery(window).trigger('resize').trigger('scroll');