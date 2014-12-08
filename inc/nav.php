<div class="navbar navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li<?php if ($page == "index.php") {
          print " class='active'";
        } ?>><a href="index.php">Home</a></li>
        <li<?php if ($page == "library.php") {
          print " class='active'";
        } ?>><a href="library.php">Library</a></li>
        <li><a href="landing.php">(Landing)</a></li>
      </ul>
    </div>
    <img src="assets/img/profile.jpg" class="profileimg"/>
    <img src="assets/img/search.jpg" class="searchimg"/>
  </div>
</div>

<div class="clearfix"></div>