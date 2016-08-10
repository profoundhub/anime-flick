<?php
  define("TITLE", "");
  include('includes/header.php');
?>
<p class='text-info text_big'>
  Anime Flick is under development, in the meantime please use our Movie/TV series <a href='search.php'>search</a> functionality.
</p>
<br>
<p class='text_large'>
	Anime Flick is in pre-alpha. Your <aa class="typeform-share link" href="https://khaleelsyed.typeform.com/to/GhwM0o" data-mode="2" target="_blank">feedback</a> will be appreciated.
</p>
<hr>
<h2 class='text-center'>Recent Releases</h2>
<div class="row">
  <div class="col-xs-8 col-xs-offset-2 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
    <div class="card card-raised card-carousel">
      <div class="carousel slide" data-ride="carousel" id="carousel-example-generic">
        <div class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators hidden-xs">
            <li class="active" data-slide-to="0" data-target="#carousel-example-generic"></li>
						<?php for($i=1;$i<10;$i++){ ?>
						<li data-slide-to="<?php echo($i); ?>" data-target="#carousel-example-generic"></li>
						<?php } ?>
          </ol>
          <div class="carousel-inner">
						<div class="item active">
              <img src="" id='img_0'>
            </div>
						<?php
							for($i=1;$i<10;$i++){
						?>
								<div class="item">
		            	<img src="" id="img_<?php echo($i); ?>">
		            </div>
						<?php
							}
						?>
						<!--
							<div class="item active">
	              <img src="" id='img_0'>
	              <div class="carousel-caption"></div>
	            </div>
						-->
          </div>
           <a class="left carousel-control" data-slide="prev" href="#carousel-example-generic"><i class="material-icons">keyboard_arrow_left</i></a> <a class="right carousel-control" data-slide="next" href="#carousel-example-generic"><i class="material-icons">keyboard_arrow_right</i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/scriptcall.php'); ?>
<script type="text/javascript">
  $('#index').attr('class','active');
</script>
<script src='js/index.js'></script>
<?php include('includes/footer.php'); ?>
