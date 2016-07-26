<?php
  include('includes/arrays.php');
  $version='0.2.0';
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Anime Flick</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.material-design/0.5.10/css/ripples.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.material-design/0.5.10/css/bootstrap-material-design.min.css">
    <script src="https://cdn.jsdelivr.net/bootstrap.material-design/0.5.10/js/material.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.material-design/0.5.10/js/ripples.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="main.css">
    <script src="index.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php" id="header"><center>movieDb</center></a>
        </div>
          <ul class="nav navbar-nav" id='nav'>
            <?php foreach($pages as $page){ ?>
            <li><a href="<?php echo $page[address]; ?>"><?php echo $page[title]; ?></a></li>
            <?php } ?>
            <form class="navbar-form navbar-left">
              <div class="form-group is-empty">
                <input type="text" class="form-control col-md-8" placeholder="<ADD CODE HERE>">
              </div>
            </form>
          </ul>
          <ul class="nav navbar-nav navbar-right">
						<li><a class='navbar-link' href='https://github.com/khaleelsyed/moviedb/tree/v<?php echo($version); ?>'><?php echo($version); ?></a></li>
					</ul>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row" style="padding: 30px 0px 0px 0px">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
          <div class="well well-lg" id='well_main'>
