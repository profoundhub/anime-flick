<?php
  define("TITLE", "");
  include('includes/header.php');
?>

<script type="text/javascript">
  $('#index').attr('class','active');
</script>
<script src='index.js'></script>

<h1 class="text-center">Anime Flick</h1>
<br>
<p class='text-info'>
  There’s been a problem with users that “binge watch” movies, the problem at hand is that users struggle to keep up with the vast amount of stuff that they’ve seen. Most binge watchers would forget a movie that they’ve seen a year ago, Anime Flick was created as a solution to help users keep track of both movies, anime &amp; TV series.
</p>
<p class='text-info'>
  Anime Flick solves this problem by using the MyAnimeList and <a href='https://www.themoviedb.org/documentation/api'>TheMovieDb</a> API. Our data is securely stored on their respective servers.
</p>
<p class='text-info'>
  While we’re fully aware that there are more than enough solutions out in the market, this was a project that we wanted to take on as a challenge.
</p>
<br>
<p class='text-warning text_big'>
  Anime Flick is still under development, but in the meantime you can use our Movie/TV series <a href='search.php'><strong>search</strong></a> functionality.
</p>
<br>
<p class='text_large'>
  Anime Flick is in <code>pre-alpha</code> and we'd love any <a class="typeform-share link" href="https://khaleelsyed.typeform.com/to/GhwM0o" data-mode="2" target="_blank">feedback</a> that you'd be able to give. Please fill in this <a class="typeform-share link" href="https://khaleelsyed.typeform.com/to/GhwM0o" data-mode="2" target="_blank"> user feedback form</a> to help improve Anime Flick.
</p>
<hr>
<h2 class='text-center'>Recent Releases</h2>
<div class="owl-carousel" id='carousel'>
  <div id='divimg_0'><img id='img_0'></div>
  <div id='divimg_1'><img id='img_1'></div>
  <div id='divimg_2'><img id='img_2'></div>
  <div id='divimg_3'><img id='img_3'></div>
  <div id='divimg_4'><img id='img_4'></div>
  <div id='divimg_5'><img id='img_5'></div>
  <div id='divimg_6'><img id='img_6'></div>
  <div id='divimg_7'><img id='img_7'></div>
  <div id='divimg_8'><img id='img_8'></div>
  <div id='divimg_9'><img id='img_9'></div>
</div>

<?php include('includes/footer.php'); ?>
