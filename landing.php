<?php include('inc/header.php'); ?>

  <video autoplay loop id="bgVideo">
    <source src="assets/video/background.mp4" type="video/mp4">
    <source src="assets/video/background.ogv" type="video/ogg">
  </video>

  <div id="landingVisible">
    <div class="container landingWrapper">
      <div class="row">
        <div class="col-md-12 landingHeader">
          <img src="assets/img/logo-white.png" alt="yesHEis" width="131" height="38"/>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 landingHeadline">
          <span>THE</span><br/>GREAT<br/>COMMISSION
        </div>
      </div>
      <div class="row" style="height: 34%;">
        <div class="col-md-4"><!-- Nothing to see here, move along --></div>
        <div class="col-md-4 landingPlay">
          <a href="index.php"><img src="assets/img/play.png" alt="play" width="92" height="92"/></a>
        </div>
        <div class="col-md-4 getInvolved">
          <span>yes<span>HE</span>is</span> exists to put a positive dent in the digital world we live in<br/>
          <a href="index.php">Log in</a>
        </div>
      </div>
    </div>
    <div id="redDivider"></div>
  </div>

  <div id="landingContent">
    <div id="opacityMask"></div>

    <div id="landingContent1">
      <div class="container">
        <div class="row promo promo1">
          <div class="col-md-4 vcenter">
            <div class="promoImg">
              <img src="assets/img/promo/promo1a.png" alt="heart icon" width="182" height="169" class="heart"/>
              <img src="assets/img/promo/promo1b.png" alt="heart icon" width="182" height="169"/>
            </div>
          </div>
          <div class="col-md-8 vcenter">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut velit nec justo faucibus maximus.</p>
            <h2><span>HUMANITY'S</span><br/>NEEDS</h2>
          </div>
        </div>
      </div>
    </div>

    <div id="landingContent2">
      <div class="container">
        <div class="row promo promo2">
          <div class="col-md-4 vcenter">
            <div class="promoImg">
              <img src="assets/img/promo/promo2a.png" alt="jigsaw icon" width="182" height="169"/>
              <img src="assets/img/promo/promo2b.png" alt="jigsaw icon" width="182" height="169" class="jigsaw undone"/>
            </div>
          </div>
          <div class="col-md-8 vcenter">
            <h2>WE ARE<br/><span>CALLED</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut velit nec justo faucibus maximus.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="landingContent3">
      <div class="container">
        <div class="row promo promo3">
          <div class="col-md-4 vcenter">
            <div class="promoImg">
              <img src="assets/img/promo/promo3a.png" alt="people icon" width="182" height="169" class="people1"/>
              <img src="assets/img/promo/promo3b.png" alt="people icon" width="182" height="169" class="people2"/>
              <img src="assets/img/promo/promo3c.png" alt="people icon" width="182" height="169" class="people3"/>
            </div>
          </div>
          <div class="col-md-8 vcenter">
            <h2>YES<span>HE</span>IS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut velit nec justo faucibus maximus.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="landingContent4">
      <div class="container">
        <div class="row vidThumbs">
          <div class="col-md-12">
            <div class="row">
              <?php
              $count = 1;
              $vidArray = getVideos('yesheis', 8);
              foreach ($vidArray as $vid) {
                print '<div class="col-xs-3">';
                print '<span class="glyphicon glyphicon-heart-empty"></span>';
                print '<span class="glyphicon glyphicon-heart"></span>';
                print '<a class="vidLink" target="blank" href="http://www.youtube.com/watch/' . $vid['id'] . '">';
                print '<div class="vidThumb"><div class="overlay"></div><img src="http://img.youtube.com/vi/' . $vid['id'] . '/0.jpg"/>';
                print '</div><div class="vidInfo">';
                print '<div class="vidTag">';
                print '<span class="length">' . $count . ':12</span></div>';
                print '<div class="inner">';
                print '<p class="tag">' . $vid['category'] . '</p><h4>' . $vid['title'] . '</h4><p class="info">' . $vid['content'] . '</p></div></div></div>';
                print '</a>';
                $count++;
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include('inc/footer.php'); ?>