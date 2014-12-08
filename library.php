<?php include('inc/header.php'); ?>
<?php include('inc/nav.php'); ?>

  <div id="filters">
    <div class="container">
      <div style="float:left;">
        <b>Filter by </b>

        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                  data-toggle="dropdown">
            All Topics
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a>
            </li>
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                  data-toggle="dropdown">
            All Languages
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a>
            </li>
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                  data-toggle="dropdown">
            All Locations
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a>
            </li>
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
          </ul>
        </div>
      </div>
      <div style="float:right;">
        <b>Sort by </b>

        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                  data-toggle="dropdown">
            Most Effective
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a>
            </li>
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container library">

    <div class="row">
      <div class="col-md-12 content">
        <h1><b>5,000+ videos</b> to help you share the gospel</h1>
      </div>
    </div>

    <div class="row vidThumbs">

      <?php
      $vidArray = getVideos('who is jesus', 24);
      $count = 0;
      foreach ($vidArray as $vid) {
        print '<div class="col-xs-6 col-sm-4 col-md-3"><div class="vidThumb"><img width="260" height="197" src="http://img.youtube.com/vi/' . $vid['id'] . '/0.jpg"/></div><p class="tag">' . $vid['category'] . '</p><h4>' . $vid['title'] . '</h4></div>';
        $count++;
        if ($count % 2 == 0) {
          print '<div class="clearfix visible-xs-block"></div>';
        }
        if ($count % 3 == 0) {
          print '<div class="clearfix visible-sm-block"></div>';
        }
        if ($count % 4 == 0) {
          print '<div class="clearfix visible-md-block visible-lg-block"></div>';
        }
      }
      ?>

    </div>

    <nav>
      <ul class="pagination">
        <li><a href="#">Previous</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">Next</a></li>
      </ul>
    </nav>

  </div>

<?php include('inc/footerBlocks.php'); ?>
<?php include('inc/footer.php'); ?>