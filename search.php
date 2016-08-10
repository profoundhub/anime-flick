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
<!-- Button trigger modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>
<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info btn-simple">Save</button>
      </div>
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
