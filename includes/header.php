<?php
  include('includes/analyticstracking.php');
  include('includes/arrays.php');
  include('includes/version.php');
?>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?>Anime Flick</title>
    <!--          //Make sure not to insert the http or https protocol within the CDN as HerokuApp might break! -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.material-design/0.5.10/css/ripples.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.material-design/0.5.10/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type='text/css' href="main.css">
    <link rel="stylesheet" href="owl.carousel.2.1.0/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl.carousel.2.1.0/assets/owl.theme.default.min.css">
    <script src="//code.jquery.com/jquery-2.2.4.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.material-design/0.5.10/js/material.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.material-design/0.5.10/js/ripples.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>
    <script type='text/javascript' src="main.js"></script>
    <script src="owl.carousel.2.1.0/owl.carousel.min.js"></script>
    <script type="text/javascript">
      var key='75949cf5078ca46d2330f51fb2221e0f';
    </script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navcollapse">
            <span class="icon-bar">ll</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" id="header"><center>Anime Flick</center></a>
        </div>
        <div class="collapse navbar-collapse" id="navCollapse">
          <ul class="nav navbar-nav">
            <?php foreach($pages as $page){ ?>
            <li id="<?php echo $page[address]; ?>"><a href="<?php echo $page[address]; ?>.php"><?php echo $page[title]; ?></a></li>
            <?php } ?>
            <li><a class="typeform-share link" href="https://khaleelsyed.typeform.com/to/GhwM0o" data-mode="2" target="_blank">User feedback form</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
						<li class="label label-info"><a class='navbar-link' href='<?php echo($versionlink); ?>' target='_blank'><?php echo("v".$version." "); ?><i class="fa fa-3x fa-github" aria-hidden="true"></i></a></li>
					</ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row" style="padding: 30px 0px 0px 0px">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
          <div class="well well-lg" id='well_main'>
            <script> /*               //Typeform User feedback script code  */
              (function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()
            </script>
