$(document).ready(function(){
	var page,maxPage,i,url,posterPath=[];				//Initialise the variables
	$('#navig').hide();				//Hides the Next/Prev buttons at start
	$("#button").click(function(){			//Initialises search on click of SEARCH
		page=1;
		maxPage=1;
		url='';
		search();
	});
	$('#queryName').keypress(function(e){			//Initialises search as NAME is being entered
		page=1;
		maxPage=1;
		url='';
		if($('#queryName').val!==null){
			search();
		}
	});
	$('#queryYear').keypress(function(e){			//Initialises search as YEAR is being entered
		page=1;
		maxPage=1;
		url='';
		if($('#queryName').val!==null){
			search();
		}
	});
	$('#previous').click(function(){		//Previous Button
		if(page>1){
			page--;
			search();
		}else{
			alert("Can't list any further previous results.");
		}
	});
	$('#next').click(function(){		//Next Button
		if(page<maxPage){
			page++;
		search();
		}else{
			alert("You've reached the last page.");
		}
	});
	function imageCheck(data){
		if(data.results[i].poster_path!==null){
			posterPath[i]='http://image.tmdb.org/t/p/w300/'+data.results[i].poster_path+'&api_key='+key;
		}else{
			posterPath[i]='http://placehold.it/400x450?text=Image+not+available';
		}
	}
	function yearCatch(){
		url+='&year=';
		url+=$('#queryYear').val();
	}
	function search(){
		function valueCatch(){
			url+=$('#queryName').val();
			url+='&page=';
			url+=page;
			url+='&api_key=';
			url+=key;
		}
		$('#result').html('');
		if($("#radioMovie").prop("checked")){
			$('#queryYear').show();
			if($("#queryYear").val()===""){				//If MOVIE year IS empty
				url+='http://api.themoviedb.org/3/search/movie?query=';
				valueCatch();
				$.getJSON(url,function(data){
					maxPage=data.total_pages;
					$('#page').html("Page: "+page+" of "+maxPage);
					for(i=0;i<data.results.length;i++){
						imageCheck(data);
						$('#result').append("<div class='panel panel-default'><div class='panel-heading'>"+data.results[i].original_title+" ("+data.results[i].release_date.substring(0,4)+")</div>");
						$('#result').append('<div class="panel-body"><img class="img-responsive center-block" id="mov'+data.results[i].id+'" src="'+posterPath[i]+'"></div></div>');
						$('#mov'+data.results[i].id).wrap($('<div>').attr('data-toggle','modal').attr('data-target','#movie'+data.results[i].id));
						$('#result').append('<div id="movie'+data.results[i].id+'" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h2 class="modal-title">'+data.results[i].original_title+' ('+data.results[i].release_date.substring(0,4)+')</h2></div><div class="modal-body"><img src="'+posterPath[i]+'"><hr><p>'+data.results[i].overview+'</p></div><div class="modal-footer"><em>Release date: '+data.results[i].release_date);
						$('#result').append('</em>');
						$('#result').append('</div></div></div></div>');
						$("#result").append("<hr>");
						$('#navig').show();			//Shows the Next/Prev buttons at start
					}
				});
			}
			if($("#queryYear").val()!==""){				//If MOVIE year is NOT empty
				url+='http://api.themoviedb.org/3/search/movie?query=';
				valueCatch();
				yearCatch();
				$.getJSON(url,function(data){
					imageCatch(data);
					maxPage=data.total_pages;
					$('#page').html("Page: "+page+" of "+maxPage);
					for(i=0;i<data.results.length;i++){
						$('#result').append("<div class='panel panel-default'><div class='panel-heading'>"+data.results[i].original_title+" ("+data.results[i].release_date.substring(0,4)+")</div>");
						$('#result').append('<div class="panel-body"><img id="mov'+data.results[i].id+'" src="'+posterPath[i]+'"></div></div>');
						$('#mov'+data.results[i].id).wrap($('<div>').attr('data-toggle','modal').attr('data-target','#movie'+data.results[i].id));
						$('#result').append('<div id="movie'+data.results[i].id+'" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h2 class="modal-title">'+data.results[i].original_title+' ('+data.results[i].release_date.substring(0,4)+')</h2></div><div class="modal-body"><img src="'+posterPath[i]+'"><hr><p>'+data.results[i].overview+'</p></div><div class="modal-footer"><em>Release date: '+data.results[i].release_date);
						$('#result').append('</em>');
						$('#result').append('</div></div></div></div>');
						$("#result").append("<hr>");
						$('#navig').show();			//Shows the Next/Prev buttons at start
					}
				});
			}
		}
		if($("#radioSeries").prop("checked")){				//Code to search for TV Series
			$('#queryYear').hide();
			if($("#queryYear").val()===""){				//If SERIES year IS empty
				url+='http://api.themoviedb.org/3/search/tv?query=';
				valueCatch();
				$.getJSON(url,function(data){
					maxPage=data.total_pages;
					for(i=0;i<data.results.length;i++){
						imageCheck(data);
						$('#result').append("<div class='panel panel-default' id='"+tv+data.results[i].id+"'><div class='panel-heading'>"+data.results[i].original_name+" ("+data.results[i].first_air_date.substring(0,4)+")</div>");
						$('#result').append('<div class="panel-body"><img class="img-responsive center-block" src="'+posterPath[i]+'"></div></div>');
						$('#tv'+data.results[i].id).wrap($('<div>').attr('data-toggle','modal').attr('data-target','#series'+data.results[i].id));
						$('#result').append('<div id="series'+data.results[i].id+'" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h2 class="modal-title">'+data.results[i].original_name+'</h2></div><div class="modal-body"><img src="'+posterPath[i]+'"><hr><p>'+data.results[i].overview+'</p></div><div class="modal-footer"><em>Initial Air Date: '+data.results[i].first_air_date);
						$('#result').append('</em>');
						$('#result').append('</div></div></div></div>');
						$("#result").append("<hr>");
						$('#navig').show();			//Shows the Next/Prev buttons at start
					}
				});
			}
			if($("#queryYear").val()!==""){
				alert('Querying for a TV Series with year is temporarily blocked off');
			}
		}
	}
});
