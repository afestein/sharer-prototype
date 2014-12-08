$(document).ready(function () {

    var viewportHeight = $(window).height();

    var promoImgHeight = $('.promo1 img').attr('height');

    var imgOffset = (viewportHeight -  promoImgHeight) / 2;

    $('.promo > div').css('height', viewportHeight);

    // Fire animations when scrolled into position
    $(window).scroll(function () {

        if ($(window).scrollTop() >= viewportHeight) {
            $('.promo1 img').css('position', 'fixed').css('top', imgOffset);
        }

        if ($(window).scrollTop() >= viewportHeight*2) {
            $('.promo2 img').css('position', 'fixed').css('top', imgOffset);
        }

        if ($(window).scrollTop() >= viewportHeight*3) {
            $('.promo3 img').css('position', 'fixed').css('top', imgOffset);
        }

    });

});