<?php include('includes/header.php'); ?>
							<h1 class="pager">Catalogue</h1>
							<!-- <div class="form-group"> -->
								<input type='text' class="form-control is-empty" id='query' placeholder='Search'>
								<button class='btn btn-info' id='submit'>Submit</button>
								<div class="row">
									<div class="col-xs-2">
										<label><input type="radio" name="select" value="movie" checked=''> Movie</label>
									</div>
									<div class="col-xs-2">
										<label><input type="radio" name="select" value="anime"> Anime</label>
									</div>
								</div>
							<!-- </div> -->
							<h3>Results: </h3>
							<p id='result'>
								Result will populate over here
							</p>
						</div>
					</div>
				</div>
		</div>
	</body>
</html>
