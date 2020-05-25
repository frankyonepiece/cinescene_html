
"use strict"
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

        if ($('.swiper-about_gallery').length) {
            var mainSlider = new Swiper('.swiper-about_gallery', {
                speed: 1000,
                slidesPerView: 5,
                autoplay: true,
                loop:true,
                breakpoints: {
                    1000:{
                        slidesPerView: 5,
                    },
                    900: {
                        slidesPerView: 3,
                    },
                    600: {
                        slidesPerView: 1,
                    },
                    360: {
                        slidesPerView: 1
                    }
                }
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
    gellery: function () {
        if ($('.app-gallery').length) {
            
            $('.app-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                closeOnContentClick: false,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
                image: {
                    verticalFit: true,
                    titleSrc: function(item) {
                        return item.el.attr('title');
                        // return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
                    }
                },
                gallery: {
                    enabled: true
                }      
            });
        }
    },
    filter: function(){
        if ($('.filter-item').length) {

            // onload hash
            if (window.location.hash) {
                let _hash = window.location.hash.replace('#','').toString();
                let e_filter = $(`.filter-item[data-filter="${_hash}"]`);
                if (e_filter.length){
                    setTimeout(() => {
                        e_filter.click();
                    }, 20);
                }
            }
            
            $('.filter-item').on('click', function (e) {
                e.preventDefault();
                
                // select element
                $('.filter-item').removeClass('active');
                $(this).addClass('active');

                let filter = $(this).data('filter');
                if (filter == 'all') {
                    $('.filter-block').fadeIn();
                    return true;
                }
                $('.filter-block').each( function (key, elem) {
                    if (!$(elem).hasClass(filter)) {
                        if ($(elem).css('display') != 'none') {
                            $(elem).fadeOut();
                        }
                    }else{
                        $(elem).fadeIn();
                    }
                })
            })
        }
    },
    gotoSection: function(){
        /*-----------------scrolling script------------------------------*/
        $(document).on('click', 'a[href^="#"]', function(event){
            event.preventDefault();
            let section = $( $.attr(this, 'href') );

            if(section.offset() === undefined){
                let parentDropdown = $(this).closest('.dropdown').find('a.dropdown-toggle');
                window.location.href = $(parentDropdown).data('href')+$.attr(this, 'href');
            }else {
                $('html, body').animate({
                    scrollTop: $($.attr(this, 'href')).offset().top - 100
                }, 500);
            }
        });

        if( window.location.hash ){
            $(window).scrollTop(0);
            setTimeout(()=>{
                $('html, body').animate({
                    scrollTop: $(window.location.hash).offset().top - 100
                }, 800);
            }, 500)
        }
    },
    init: function () {
        this.sliders();
        this.serviceHover();
        this.gellery();
        this.filter();
        this.gotoSection();

        return true;
    }
}

$(document).ready(function (e) {
    app.init();
});
    
jQuery(window).trigger('resize').trigger('scroll');