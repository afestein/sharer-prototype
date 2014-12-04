<div id="submit">
  <div class="container">
    <h4 style="margin-top:70px;">Found a video to help you share Jesus online? Add it to the library here:</h4>

    <div class="input-group" style="margin:0 25%;">
      <input type="text" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
  </div>
</div>

<div class="container footerBits">
  <h1>Blog</h1>

  <div class="row blogBits">
    <div class="col-md-3 col-sm-6">
      Blog entry
    </div>
    <div class="col-md-3 col-sm-6">
      Blog entry
    </div>
    <div class="col-md-3 col-sm-6">
      Blog entry
    </div>
    <div class="col-md-3 col-sm-6">
      Blog entry
    </div>
  </div>

  <h1>About yesHEis</h1>

  <p>
    <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non quam ut sapien tincidunt dictum. Nullam
      mattis tortor at dui accumsan, efficitur interdum elit pharetra. Pellentesque ac erat nulla. Proin venenatis
      ligula non auctor hendrerit. Integer nec mi viverra, venenatis ex luctus, ullamcorper neque. Donec eu dui
      quis ligula lobortis convallis. Aenean eu suscipit metus, et sollicitudin sem. Mauris facilisis efficitur
      efficitur. Nullam porttitor ligula eget sem molestie consectetur. Suspendisse nec leo faucibus, sagittis
      erat id, auctor orci. Nulla vitae augue et odio lobortis lacinia. Donec a arcu id dui consectetur
      elementum.</b>
  </p>

  <div class="row iconBits">
    <div class="col-sm-4">
      <div class="icon iconRadar">
        <div></div>
      </div>
      <b>Discover</b><br/>interdum elit pharetra efficitur interdum elit pharetra interdum elit
    </div>
    <div class="col-sm-4">
      <div class="icon iconShare">
        <div class="shareArrow"></div>
        <div class="sharePlay"></div>
      </div>
      <b>Share</b><br/>efficitur interdum elit pharetra efficitur interdum elit pharetra interdum elit interdum elit
    </div>
    <div class="col-sm-4">
      <div class="icon iconGroups">
        <div class="iconGroupsIcon"></div>
        <div class="iconHead leftHead"></div>
        <div class="iconHead rightHead"></div>
      </div>
      <b>Groups</b><br/>elit pharetra efficitur interdum elit pharetra interdum elit interdum elit interdum elit
    </div>
  </div>

  <hr style="margin:100px 0"/>

  <div class="row statBits">
    <div class="col-sm-3">
      <div>+<span>7</span>k</div>
      <p>Videos available on yesHEis</p>
    </div>
    <div class="col-sm-3">
      <div><span>199</span>k</div>
      <p>People shared their faith online</p>
    </div>
    <div class="col-sm-3">
      <div><span>8</span>M</div>
      <p>Shared YesHEis videos viewed</p>
    </div>
    <div class="col-sm-3">
      <div><span>23</span>k</div>
      <p>Have responded to the gospel</p>
    </div>
  </div>

</div>

<div id="footer" class="container">
  <div class="container">
    <ul class="list-inline" style="float:left;">
      <li>Cras justo odio</li>
      <li>Dapibus ac</li>
      <li>Facilisis in</li>
      <li>Morbi leo risus</li>
    </ul>
    <ul class="list-inline" style="float:right;">
      <li>Morbi leo risus</li>
      <li>Porta ac consectetur ac</li>
      <li>Vestibulum at eros</li>
    </ul>
  </div>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
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
</script>

</body>
</html>