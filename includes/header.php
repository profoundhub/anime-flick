<?php
  include('includes/arrays.php');
  $version='0.3.4';
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Anime Flick</title>
    <script src="//code.jquery.com/jquery-2.2.4.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.material-design/0.5.10/css/ripples.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.material-design/0.5.10/css/bootstrap-material-design.min.css">
    <script src="//cdn.jsdelivr.net/bootstrap.material-design/0.5.10/js/material.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.material-design/0.5.10/js/ripples.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <script src="main.js"></script>
    <script type="text/javascript">
      var key='75949cf5078ca46d2330f51fb2221e0f';
    </script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php" id="header"><center>Anime Flick</center></a>
        </div>
          <ul class="nav navbar-nav" id='nav'>
            <?php foreach($pages as $page){ ?>
            <li id="<?php echo $page[address]; ?>"><a href="<?php echo $page[address]; ?>.php"><?php echo $page[title]; ?></a></li>
            <?php } ?>
            <form class="navbar-form navbar-left">
              <div class="form-group is-empty">
                <input type="text" class="form-control col-md-8" placeholder="<ADD CODE HERE>">
              </div>
            </form>
          </ul>
          <ul class="nav navbar-nav navbar-right">
						<li class="label label-info"><a class='navbar-link' href='https://github.com/khaleelsyed/moviedb/tree/v<?php echo($version); ?>'>v<?php echo($version); ?></a></li>
					</ul>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row" style="padding: 30px 0px 0px 0px">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
          <div class="well well-lg" id='well_main'>
