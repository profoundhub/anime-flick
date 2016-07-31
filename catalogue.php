<?php include('includes/header.php'); ?>

<script type="text/javascript">
  $("#catalogue").attr('class','active');
</script>
<script type="text/javascript" src="catalogue.js"></script>

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
<h7 id='page'></h7>
<div class='pager' id='result'></div>

<!-- Navigation buttons for between results  -->
<ul class="pager" id='navig'>
		<li><button class='btn btn-info' id='previous'>← Previous</button></li>
		<li><button class="btn btn-info" id='next'>Next →</button></li>
</ul>

<!-- Modal -->
<div id="modal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id='modalTitle'></h4>
      </div>
      <div class="modal-body" id='modalBody'>
        <p>Modal Body over here in a <code>p</code> tag</p>
      </div>
      <div class="modal-footer" id='modalFooter'></div>
    </div>

  </div>
</div>

<?php include('includes/footer.php'); ?>
