$(document).ready(function() {
    // Set dynamic height of hero.
    if ($('.js-hero').length > 0) {
       var heroResizeTimer;
        setHeroHeight();

        // Limit the amount of times the function is called.
        $(window).on('resize', function() {
            clearTimeout(heroResizeTimer);
            heroResizeTimer = setTimeout(function() {
                setHeroHeight();
            }, 100);
        });

        // Resize height of hero.
        function setHeroHeight() {
            var _this = $('.js-hero'),
                width = window.innerWidth,
                height = window.innerHeight;

            if (width > 768) {
                _this.css("height", (height - 175));
            }
            if (width <= 768) {
                _this.css("height", (height - 400));
            }
            if (width <= 650 && height >= 600) {
                _this.css("height", (height - 175));
            }
        }
    }

    // Glide to target
    if ($('[data-slide-target]').length > 0) {
        $('[data-slide-target]').on('click', function() {
            var _this = $(this).data('slide-target');

            $('html, body').animate({
                scrollTop: $(_this).offset().top
            }, 500);
        });
    }
});