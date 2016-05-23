$(function () {

        $('.js-next').click(function () {
            var active_slide = $('.js-slide:visible');

            var next_slide = active_slide.next();
            if (!next_slide.length) {
                next_slide = $('.js-slide:first');
            }

            active_slide.fadeOut();
            next_slide.fadeIn();
        });

        $('.js-prev').click(function () {
            var active_slide = $('.js-slide:visible');

            var prev_slide = active_slide.prev();
            if (!prev_slide.length) {
                prev_slide = $('.js-slide:last');
            }

            active_slide.fadeOut();
            prev_slide.fadeIn();
        });
        
        
        
    setInterval(function () {
        $('.js-next').click();
    }, 4000);
});



