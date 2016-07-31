$(document).ready(function(){
	var page,i,url='';				//Initialise the variables
	$('#navig').hide();				//Hides the Next/Prev buttons at start
	$("#button").click(function(){
		page=1;
		url='';
		search();
	});
											//Temporarily block the functions of the buttons
	/*$('#previous').click(function(){
		if(page>1){
			page--;
			search();
		}else{
			alert("Can't list any further previous results.");
		}
	});
	$('#next').click(function(){
		page++;
		search();
	});
	*/
	/*												//Find a way to check if user has reached the last page */
	function search(){
		$('#result').html('');
		$('#page').html("Page: "+page);
		if($("#radioMovie").prop("checked")){
			url+='http://api.themoviedb.org/3/search/movie?query='
			url+=$('#queryName').val();
			url+='&page=';
			url+=page;
			url+='&api_key=';
			url+=key;
			$.getJSON(function(data){
				if(data.total_results>0){
					alert('valid');
				}else{
					alert('Invalid');
				}
			});
		}
		/*						Warning to inform that TV series is not ready as of now*/
		if($("#radioSeries").prop("checked")){
			$('#result').html('<div class="alert alert-warning"><strong>Sorry!</strong> You can\'t search for TV Series just yet.</div>');
		}
	}
});
