$(document).ready(function () {

    $('.jigsaw').click(function () {
        $(this).addClass('animate');
    });

    var viewportHeight = $(window).height();
    var promoImgHeight = $('.promo1 img').attr('height');
    var ghostNav = $('#ghostNav');
    var ghostHeight = parseInt(ghostNav.css('height'));
    var imgOffset = (viewportHeight - promoImgHeight) / 2;
    var ghostActivated = 0;
    var ghostDeactivated = 0;

    ghostNav.css('top', ghostHeight * -1);
    $('.promo > div').css('height', viewportHeight);

    function glue(element) {
        $(element).css({'position': 'fixed', 'top': imgOffset});
    }

    function unGlue(element) {
        $(element).css({'position': 'relative', 'top': '0'});
    }

    // Tiles animation

    var tilesActivated = 0;

    function tileAnimationTimeOut(element, i) {
        setTimeout(function () {
            element.addClass('activatedTile');
        }, i * 70);
    }

    function fireTileAnimation() {
        $('.landing .vidLink').each(function (index) {
            tileAnimationTimeOut($(this), index);
        });
    }


    // Fire animations when scrolled into position
    $(window).scroll(function () {

        var scrollPos = $(window).scrollTop();

        /** Ghost header **/

        if (ghostActivated == 0 && scrollPos > viewportHeight / 2) {
            ghostActivated = 1;
            ghostDeactivated = 0;
            ghostNav.animate({
                top: 0
            }, 200);
        }

        if (ghostDeactivated == 0 && ghostActivated == 1 && scrollPos < viewportHeight / 2) {
            ghostDeactivated = 1;
            ghostActivated = 0;
            ghostNav.animate({
                top: (ghostHeight * -1)
            }, 200);
        }

        /** First promo **/

        if (scrollPos >= viewportHeight * 0.75) {
            $('.heart').addClass('animate');
        }
        if (scrollPos < viewportHeight * 0.75) {
            $('.heart').removeClass('animate');
        }
        if (scrollPos >= viewportHeight) {
            glue('.promo1 .promoImg');
        }
        if (scrollPos < viewportHeight) {
            unGlue('.promo1 .promoImg');
        }

        /** Second promo **/

        if (scrollPos >= (viewportHeight * 1.5)) {
            $('.promo1 .promoImg').fadeOut(500);
        }
        if (scrollPos < (viewportHeight * 1.5)) {
            $('.promo1 .promoImg').fadeIn(500);
        }
        if (scrollPos >= viewportHeight * 1.75) {
            $('.jigsaw').addClass('animate');
        }
        if (scrollPos < viewportHeight * 1.75) {
            $('.promo2 img').removeClass('animate');
        }
        if (scrollPos >= viewportHeight * 2) {
            glue('.promo2 .promoImg');
        }
        if (scrollPos < viewportHeight * 2) {
            unGlue('.promo2 .promoImg');
        }

        /** Third promo **/

        if (scrollPos >= (viewportHeight * 2.5)) {
            $('.promo2 .promoImg').fadeOut(500);
        }
        if (scrollPos < (viewportHeight * 2.5)) {
            $('.promo2 .promoImg').fadeIn(500);
        }
        if (scrollPos >= (viewportHeight * 2.75)) {
            $('.promo3 img').addClass('animate');
        }
        if (scrollPos < (viewportHeight * 2.75)) {
            $('.promo3 img').removeClass('animate');
        }

        /** Video Tiles **/

        if (tilesActivated == 0 && (scrollPos >= (viewportHeight * 3.25))) {
            tilesActivated = 1;
            fireTileAnimation();
        }

    });
})
;