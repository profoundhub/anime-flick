<?php
  define("TITLE", "About |");
  include('includes/header.php');
?>

<h1 class='text-center'>About</h1>
<br>
<p>
  “Binge watchers” often struggle to keep up with what they watch. Most would forget a movie they’ve seen a year ago. Anime Flick was created as a solution to this problem.
</p>
<p>
  Anime Flick uses API's from <a href='http://myanimelist.net'>MyAnimeList</a> and <a href='https://www.themoviedb.org/documentation/api'>TheMovieDb</a>.
</p>
<p>
  We hope that this would be a useful addition to a wide range of services available out there.
</p>
<?php include('includes/scriptcall.php'); ?>
<script type="text/javascript">
  $("#about").attr('class','active');
</script>
<?php include('includes/footer.php'); ?>
