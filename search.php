<?php
  define("TITLE", "Search|");
  include('includes/header.php');
?>

<script type="text/javascript">
  $("#search").attr('class','active');
</script>
<script type="text/javascript" src="search.js"></script>

<h1 class="pager">Search</h1>
<div>
	<div class="form-group input-group">
		<input type='text' class="form-control textBox" id='queryName' placeholder='Name'>
  </div>
  <div class="form-group input-group">
		<input type="text" class="form-control is-empty textBox" id='queryYear' placeholder="Year">
	</div>
	<button class="btn btn-primary" type="button" id="button">Search</button>
  <div class="row">
	  <div class="col-xs-2">
			<label><input type="radio" name="select" value="movie" checked='' id="radioMovie"> Movie</label>
		</div>
		<div class="col-xs-4">
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

<?php include('includes/footer.php'); ?>
