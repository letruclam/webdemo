var menu = [];
jQuery('.royal_watch_storeswiper-slide').each( function(index){
    menu.push( jQuery(this).find('.royal_watch_storeslide-inner').attr("data-text") );
});
var interleaveOffset = 0.5;
var swiperOptions = {
    loop: true,
    speed: 1000,
    parallax: true,
    autoplay: {
        delay: 6500,
        disableOnInteraction: false,
    },
    watchSlidesProgress: true,
    pagination: {
        el: '.royal_watch_storeswiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.royal_watch_storeswiper-button-next',
        prevEl: '.royal_watch_storeswiper-button-prev',
    },
    on: {
        progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
                var slideProgress = swiper.slides[i].progress;
                var innerOffset = swiper.width * interleaveOffset;
                var innerTranslate = slideProgress * innerOffset;
                swiper.slides[i].querySelector(".royal_watch_storeslide-inner").style.transform =
                "translate3d(" + innerTranslate + "px, 0, 0)";
            }      
        },

        touchStart: function() {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },

        setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = speed + "ms";
                swiper.slides[i].querySelector(".royal_watch_storeslide-inner").style.transition =
                speed + "ms";
            }
        }
    }
};
var swiper = new Swiper(".royal_watch_storeswiper-container", swiperOptions);






