<?php include('includes/header.php'); ?>

<h1 class="pager">Catalogue</h1>
<form class="form-group">
	<input type='text' class="form-control box-q" id='queryName' placeholder='Name'>
	<input type="text" class="form-control is-empty box-q" id='queryYear' placeholder="Year">
	<button class="btn btn-primary" type="button" id="button">Search</button>
	<div class="row">
		<div class="col-xs-2">
			<label><input type="radio" name="select" value="movie" checked='' id="radioMovie"> Movie</label>
		</div>
		<div class="col-xs-2">
			<label><input type="radio" name="select" value="series" id="radioSeries"> TV Series</label>
		</div>
	</div>
</form>
<div id='result'>
	<h3>Results: </h3>
	<div id='name'></div>
	<div id='genre'></div>
	<div id='year'></div>
	<div id='releaseDate'></div>
	<div id='runtime'></div>
	<div id='rating'></div>
	<div id='plot'></div>
</div>

<?php include('includes/footer.php'); ?>
