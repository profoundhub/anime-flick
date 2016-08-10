<?php
  include('includes/analyticstracking.php');
  include('includes/arrays.php');
  include('includes/version.php');
?>
<html>
  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?>Anime Flick</title>
    <!--          //Make sure not to insert the http or https protocol within the CDN as HerokuApp might break! -->
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/material-kit.css" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="css/main.css">
    <script type="text/javascript">
      var key='75949cf5078ca46d2330f51fb2221e0f';
    </script>
  </head>
  <body>
		<div class="wrapper">
	    <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	      <div class="container-fluid">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="index.php"><center>Anime Flick</center></a>
	        </div>
	        <div class="collapse navbar-collapse" id="navCollapse">
	          <ul class="nav navbar-nav">
	            <?php foreach($pages as $page){ ?>
	            <li id="<?php echo $page[address]; ?>"><a href="<?php echo $page[address]; ?>.php"><?php echo $page[title]; ?></a></li>
	            <?php } ?>
	            <li class="divider"></li>
	            <li><a class="typeform-share link" href="https://khaleelsyed.typeform.com/to/GhwM0o" data-mode="2" target="_blank">User feedback form</a></li>
	          </ul>
	          <ul class="nav navbar-nav navbar-right">
							<li class="label label-info"><a class='navbar-link' href='<?php echo($versionlink); ?>' target='_blank'><?php echo("v".$version." "); ?><i class="fa fa-3x fa-github" aria-hidden="true"></i></a></li>
						</ul>
	        </div>
	      </div>
	    </nav>
			<div class="header header-filter" id='headr' style='background-color: #9C27B0;'>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-2">
							<div class="brand" id="main_header">
								<h1>Anime Flick</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
	    <div class="main main-raised">
	      <div class="section section-basic">
	        <div class="container">
	          <script> /*               //Typeform User feedback script code  */
	            (function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typeform',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()
	          </script>
