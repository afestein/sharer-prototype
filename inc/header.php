<?php // Grab some random YouTube stuff
function getVideos($term, $limit)
{
  $vids = simplexml_load_file('https://gdata.youtube.com/feeds/api/videos?q=' . $term);
  $vidArray = array();
  $count = 0;
  foreach ($vids->entry as $vid) {
    $id = explode("/", $vid->id);
    $vidArray[$count]['id'] = $id[6];
    $vidArray[$count]['title'] = $vid->title;
    $vidArray[$count]['content'] = $vid->content;
    $vidArray[$count]['category'] = strtoupper($vid->category[1]->attributes()->term);
    $count++;
  }
  shuffle($vidArray);
  $vidArray = array_slice($vidArray, 0, $limit);
  return $vidArray;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>yesHEis</title>

    <!-- CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body<?php if ($_SERVER['REQUEST_URI'] == "/index.php" || $_SERVER['REQUEST_URI'] == "/") {print " class='home'";}?>>