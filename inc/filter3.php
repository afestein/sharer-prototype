<div class="container">
  <div class="row vidThumbs filter filter1 filter-vertical">
    <div class="col-md-6">
      <div class="row">
        <?php
        $count = 1;
        $vidArray = getVideos('the gospel', 10);
        foreach ($vidArray as $vid) {
          if ($count == 1 || $count == 8) {
            print '<div class="col-xs-12 featureVid">';
          }
          else {
            print '<div class="col-xs-6">';
          }
          print '<a class="vidLink" target="blank" href="http://www.youtube.com/watch/' . $vid['id'] . '">';
          print '<span class="glyphicon glyphicon-heart-empty"></span>';
          print '<div class="vidThumb"><img src="http://img.youtube.com/vi/' . $vid['id'] . '/0.jpg"/>';
          print '</div><div class="vidInfo">';
          print '<div class="vidTag">';
          if ($count == 1 || $count == 3 || $count == 7) {
            print '<span class="banner">NEW TODAY</span>';
          }
          print '<span class="length">' . $count . ':12</span></div>';
          print '<div class="inner">';
          print '<p class="tag">' . $vid['category'] . '</p><h4>' . $vid['title'] . '</h4><p class="info">' . $vid['content'] . '</p></div></div></div>';
          print '</a>';
          if ($count == 5) {
            print '</div></div><div class="col-md-6"><div class="row">';
          }
          if ($count == 3) {
            print "<div class='clearfix'></div>";
          }
          $count++;
        }
        ?>
      </div>
    </div>
  </div>
</div>