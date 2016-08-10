<?php
  define("TITLE", "Search|");
  include('includes/header.php');
?>


<h1 class="text-center">Search</h1>
<div>
	<div class="form-group input-group">
		<input type='text' class="form-control textBox" id='queryName' placeholder='Name'>
  </div>
  <div class="form-group input-group">
		<input type="text" class="form-control is-empty textBox" id='queryYear' placeholder="Year">
	</div>
	<button class="btn btn-primary" type="button" id="button">Search</button>
  <div class="row">
	  <div class="radio">
			<label><input type="radio" name="select" value="movie" checked="true" id="radioMovie"> Movie</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="select" value="series" id="radioSeries"> TV Series</label>
		</div>
	</div>
</div>
<h4>Results: </h4>
<h7 id='page'></h7>
<div class='pager' id='result'></div>

<!-- Navigation buttons for between results  -->
<ul class="pager" id='navig'>
		<li><button class='btn btn-info' id='previous'>← Previous</button></li>
		<li><button class="btn btn-info" id='next'>Next →</button></li>
</ul>

<?php include('includes/scriptcall.php'); ?>
<script type="text/javascript">
  $("#search").attr('class','active');
</script>
<script type="text/javascript" src="js/search.js"></script>
<?php include('includes/footer.php'); ?>
