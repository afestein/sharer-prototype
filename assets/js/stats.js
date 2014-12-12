$(document).ready(function () {

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