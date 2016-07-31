$(document).ready(function(){
	var page,i,url='';				//Initialise the variables
	$('#navig').hide();				//Hides the Next/Prev buttons at start
	$("#button").click(function(){
		page=1;
		maxPage=1;
		url='';
		search();
	});
											//Temporarily block the functions of the buttons
	$('#previous').click(function(){
		if(page>1){
			page--;
			search();
		}else{
			alert("Can't list any further previous results.");
		}
	});
	$('#next').click(function(){
		if(page<maxPage){
			page++;
		search();
		}else{
			alert("You've reached the last page.");
		}
	});
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
			$.getJSON(url,function(data){
				maxPage=data.total_pages;
				for(i=0;i<data.results.length;i++){
					$('#result').append("<div class='panel panel-default'><div class='panel-heading'>"+data.results[i].original_title+" ("+data.results[i].release_date+")</div>");
					$('#result').append('<div class="panel-body"><img src="http://image.tmdb.org/t/p/w500/'+data.results[i].poster_path+'&api_key='+key+'"></div></div>');
					$("#result").append("<hr>");
					$('#navig').show();
				}
			});
		}
		/*						Warning to inform that TV series is not ready as of now*/
		if($("#radioSeries").prop("checked")){
			$('#result').html('<div class="alert alert-warning"><strong>Sorry!</strong> You can\'t search for TV Series just yet.</div>');
		}
	}
});
