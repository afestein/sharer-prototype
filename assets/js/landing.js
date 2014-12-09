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
        $(element).css('transform', 'rotateY(90deg)').css('opacity','0');
//        $(element).css('width', '1000px').css('height','1000px').css('opacity','0');
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
        if ($(window).scrollTop() >= (viewportHeight*2)) {
            morph('.promo1 img');
            unMorph('.promo2 img');
        }
        if ($(window).scrollTop() < (viewportHeight*2)) {
            unMorph('.promo1 img');
            morph('.promo2 img');
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
        if ($(window).scrollTop() >= (viewportHeight*3)) {
            morph('.promo2 img');
            unMorph('.promo3 img');
        }
        if ($(window).scrollTop() < (viewportHeight*3)) {
//            unMorph('.promo2 img');
            morph('.promo3 img');
        }

        // Sticky image
//        if ($(window).scrollTop() >= viewportHeight*3) {
//            glue('.promo3 img');
//        }
//        if ($(window).scrollTop() < viewportHeight*3) {
//            unGlue('.promo3 img');
//        }

    });

});