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
<!--
	<hr>
	<h2 class='text-center'>Recent Releases</h2>
	<div class='carousel'>
	</div>
-->
<?php include('includes/scriptcall.php'); ?>
<script type="text/javascript">
  $('#index').attr('class','active');
</script>
<script src='js/index.js'></script>
<?php include('includes/footer.php'); ?>
