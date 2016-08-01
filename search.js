$(document).ready(function(){
	$('#queryName').val('Batman');
	var page,maxPage,i,url;				//Initialise the variables
	$('#navig').hide();				//Hides the Next/Prev buttons at start
	$("#button").click(function(){
		page=1;
		maxPage=1;
		url='';
		search();
	});
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
		if($("#radioMovie").prop("checked")){				//Code to search for Movies
			url+='http://api.themoviedb.org/3/search/movie?query=';
			url+=$('#queryName').val();
			url+='&page=';
			url+=page;
			url+='&api_key=';
			url+=key;
			$.getJSON(url,function(data){
				maxPage=data.total_pages;
				for(i=0;i<data.results.length;i++){
					$('#result').append("<div class='panel panel-default'><div class='panel-heading'>"+data.results[i].original_title+" ("+data.results[i].release_date.substring(0,4)+")</div>");
					$('#result').append('<div class="panel-body"><img id="mov'+data.results[i].id+'" src="http://image.tmdb.org/t/p/w500/'+data.results[i].poster_path+'&api_key='+key+'"></div></div>');
					$('#mov'+data.results[i].id).wrap($('<div>').attr('data-toggle','modal').attr('data-target','#modal'+data.results[i].id));
					$('#result').append('<div id="modal'+data.results[i].id+'" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h2 class="modal-title">'+data.results[i].original_title+' ('+data.results[i].release_date.substring(0,4)+')</h2></div><div class="modal-body"><img src="http://image.tmdb.org/t/p/w150/'+data.results[i].poster_path+'&api_key='+key+'"><hr><p>'+data.results[i].overview+'</p><br><p><em>Release date: '+data.results[i].release_date);
					$('#result').append('</em></p></div></div>');
					$("#result").append("<hr>");
					$('#navig').show();			//Shows the Next/Prev buttons at start
				}
			});
		}
		if($("#radioSeries").prop("checked")){				//Code to search for TV Series
			url+='http://api.themoviedb.org/3/search/tv?query=';
			url+=$('#queryName').val();
			url+='&page=';
			url+=page;
			url+='&api_key=';
			url+=key;
			$.getJSON(url,function(data){
				maxPage=data.total_pages;
				for(i=0;i<data.results.length;i++){
					$('#result').append("<div class='panel panel-default'><div class='panel-heading'>"+data.results[i].original_name+" ("+data.results[i].first_air_date.substring(0,4)+")</div>");
					$('#result').append('<div class="panel-body"><img src="http://image.tmdb.org/t/p/w500/'+data.results[i].poster_path+'&api_key='+key+'"></div></div>');
					$("#result").append("<hr>");
					$('#navig').show();			//Shows the Next/Prev buttons at start
				}
			});
		}
	}
});
