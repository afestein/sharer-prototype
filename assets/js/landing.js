$(document).ready(function () {

    var viewportHeight = $(window).height();

    var promoImgHeight = $('.promo1 img').attr('height');

    var imgOffset = (viewportHeight -  promoImgHeight) / 2;

    $('.promo > div').css('height', viewportHeight);

    function glue(element) {
        $(element).css('position', 'fixed').css('top', imgOffset);
    }

    function unGlue(element) {
        $(element).css('position', 'static');
    }

    function morph(element) {
        $(element).css('opacity','0');
//        $(element).css('transform', 'rotateY(90deg)').css('opacity','0');
    }

    function unMorph(element) {
        $(element).css('transform', 'none').css('opacity','1');
    }

    // Fire animations when scrolled into position
    $(window).scroll(function () {

        /** First promo **/

        // Sticky image
        if ($(window).scrollTop() >= viewportHeight) {
            glue('.promo1 img');
        }
        if ($(window).scrollTop() < viewportHeight) {
            unGlue('.promo1 img');
        }

        /** Second promo **/

        // Morph image
        if ($(window).scrollTop() >= (viewportHeight*1.5)) {
            morph('.promo1 img');
        }
        if ($(window).scrollTop() < (viewportHeight*1.5)) {
            unMorph('.promo1 img');
        }

        // Sticky image
        if ($(window).scrollTop() >= viewportHeight*2) {
            glue('.promo2 img');
        }
        if ($(window).scrollTop() < viewportHeight*2) {
            unGlue('.promo2 img');
        }

        /** Third promo **/

        // Morph image
        if ($(window).scrollTop() >= (viewportHeight*2.5)) {
            morph('.promo2 img');
        }
        if ($(window).scrollTop() < (viewportHeight*2.5)) {
            unMorph('.promo2 img');
        }

    });

});