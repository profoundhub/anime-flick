<?php
  define("TITLE", "FAQ|");
  include('includes/header.php');
?>

<h1 class="text-center">FAQ</h1>
<br>

<h3>Q: What does Anime Flick aim to do?</h3>
      Anime Flick is meant to be an alternative solution to keeping a record of a user's anime, movies and TV series seen.
<hr>
<h3>Q: What technology does Anime Flick use?</h3>
      Anime Flick <a href="#" data-toggle="tooltip" data-placement="bottom" title="Or plan to!">uses</a> the following API's:
      <ul>
        <li><a href='https://www.themoviedb.org/documentation/api' target='_blank'>TheMovieDb</a></li>
        <li><a href='http://myanimelist.net/modules.php?go=api' target='_blank' data-toggle="tooltip" data-placement="right" title="Still needs to be implemented!">MyAnimeList</a></li>
      </ul>

<hr>
<h3>Q: Why can't I store my movies yet?</h3>
      Because the Back-End has yet to be developed.
<hr>
<h3>Q: Why can't I search my anime?</h3>
      The API hasn't been implemented yet.
<hr>
<h3>Q: Where can I see the progress of your development?</h3>
      We're open sourcing the code of our web app on a <a href=''>GitHub repository</a>. We also have a public <a href='https://trello.com/b/O9I2YLuO/anime-flick' target='_blank'>Trello Board</a>.

<?php include('includes/scriptcall.php'); ?>
<script type="text/javascript">
  $("#faq").attr('class','active');
</script>
<?php include('includes/footer.php'); ?>
