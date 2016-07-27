<?php include('includes/header.php'); ?>

<h1 class="pager">Catalogue</h1>
<form class="form-group">
	<div class="input-group">
		<input type='text' class="form-control box-q" id='queryName' placeholder='Name'>
		<input type="text" class="form-control is-empty box-q" id='queryYear' placeholder="Year">
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
</form>
<h4>Results: </h4>
<div class='pager' id='result'></div>
<ul class="pager" id='navig'>
		<li class="previous"><a class='withripple' href="javascript:void(0)">← Older</a></li>
		<li><---------- I still need to get these buttons to work ----------></li>
		<li class="next"><a class="withripple" href="javascript:void(0)">Newer →</a></li>
</ul>

<?php include('includes/footer.php'); ?>
