$(document).ready(function () {
    $('.navbar li').click(function () {
        $('.navbar li.active').toggleClass('active');
        $(this).toggleClass('active');
    });

    /** Animated thumbnail hover **/

    var infoBox = null;
    var tag = null;
    var height = null;
    var containerHeight = null;
    var containerWidth = null;
    var offset = 64;
    var speed = 200;
    var zoomRatio = 1.25;

    $('.vidThumbs .row > div').hover(
        function () {
            infoBox = $(this).find('.inner');
            tag = $(this).find('.banner');
            height = $(this).find('.vidInfo').height();
            containerHeight = $(this).find('.vidThumb').height();
            containerWidth = $(this).find('.vidThumb').width();

            tag.animate({
                top: -offset
            }, speed);

            infoBox.animate({
                    top: -offset
                }, speed
            );

            $(this).find('img').animate({
                width: containerWidth * zoomRatio,
                height: containerHeight * zoomRatio,
                top: containerHeight * (zoomRatio - 1) / 2 * -1,
                left: containerWidth * (zoomRatio - 1) / 2 * -1
            }, 50);

        },
        function () {

            tag.animate({
                top: 0
            }, speed);

            infoBox.animate({
                top: 0
            }, speed);

            $(this).find('img').animate({
                top: 0,
                height: containerHeight,
                left: 0,
                width: containerWidth
            }, 50);

        }
    );

    /** Animated Heart Icon **/

    var on = $('.vidThumbs .glyphicon-heart');
    var off = $('.vidThumbs .glyphicon-heart-empty');
    var iconSize = new Array(on.css('font-size'), off.css('font-size'));
    var iconTop = new Array(on.css('top'), off.css('top'));
    var iconRight = new Array(on.css('right'), off.css('right'));

    on.click(function () {
        var whichState = 1;
        if ($(this).hasClass('on')) {
            whichState = 0;
        }
        $(this).animate({
            fontSize: iconSize[whichState],
            top: iconTop[whichState],
            right: iconRight[whichState],
            opacity: whichState
        }, speed);
        $(this).toggleClass('on');
    });

});