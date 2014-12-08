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

    /** Animated Stat Counter **/

    var statVals = new Array();
    var stopStatsAnimation = 0;
    var stopIconAnimation = 0;

    $('.statBits span').each(function () {
        statVals.push(parseInt($(this).text()));
        $(this).empty().append('0');
    });

    function numberScrollTimeOut(i, element, num) {
        setTimeout(function () {
            element.empty().append(i);
        }, i * (1000 / num));
    }

    function numberScroll(element, index) {
        element.empty().append('0');
        for (var i = 1; i <= statVals[index]; ++i) {
            numberScrollTimeOut(i, element, statVals[index]);
        }
    }

    function fireNumberScroll() {
        $('.statBits span').each(function (index) {
            numberScroll($(this), index);
        });
        stopStatsAnimation = 1;
    }

    // Fire animations when scrolled into position
    $(window).scroll(function () {
        if (stopStatsAnimation == 0 && ($(window).scrollTop() + $(window).height()) > $('.statBits').offset().top) {
            fireNumberScroll();
        }

        if (stopIconAnimation == 0 && ($(window).scrollTop() + $(window).height()) > $('.iconBits b').offset().top) {
            $('.iconRadar, .iconShare, .iconGroups').addClass('activated');
            stopIconAnimation = 1;
        }

    });

    // Fire stats if the page is reloaded at the bottom
    if (($(window).scrollTop() + $(window).height()) > $('.statBits').offset().top) {
        fireNumberScroll();
    }

});