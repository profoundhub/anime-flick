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
					$('#result').append("<div class='panel panel-default'><div class='panel-heading'>"+data.results[i].original_title+" ("+data.results[i].release_date+")</div>");
					$('#result').append('<div class="panel-body"><img id="mov'+data.results[i].id+'" src="http://image.tmdb.org/t/p/w500/'+data.results[i].poster_path+'&api_key='+key+'"></div></div>');
					$('#mov'+data.results[i].id).wrap($('<div>').attr('data-toggle','modal').attr('data-target','#modal'+data.results[i].id));
					//Make an attempt to wrap /*<div data-toggle="modal" data-target="#modal'+data.results[i].id+'"></div>*/ around the image
					$('#result').append('<div id="modal'+data.results[i].id+'" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content">');
					$('#result').append('<div class="modal-body">');	//Start typing Modal content in next line
					$('#result').append("<p>Get video posted to internet for chasing red dot leave fur on owners clothes so paw at beetle and eat it before it gets away for purr for no reason spread kitty litter all over house, if it smells like fish eat as much as you wish and chirp at birds. Plan steps for world domination instantly break out into full speed gallop across the house for no reason mew. Fall over dead (not really but gets sypathy) need to chase tail give attitude cat snacks, yet climb leg, or knock dish off table head butt cant eat out of my own dish. Hiss at vacuum cleaner fall over dead (not really but gets sypathy) sleep in the bathroom sink but sit in window and stare ooo, a bird! yum but nap all day. All of a sudden cat goes crazy kitty power! or all of a sudden cat goes crazy. Run outside as soon as door open shove bum in owner's face like camera lens poop on grasses for leave dead animals as gifts, for you call this cat food? hate dog. Sleep on keyboard massacre a bird in the living room and then look like the cutest and most innocent animal on the planet so poop in litter box, scratch the walls knock over christmas tree. Chase mice then cats take over the world. </p>");
					$('#result').append('</div></div></div></div>');	//Close the enitre modal div
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
					$('#result').append("<div class='panel panel-default'><div class='panel-heading'>"+data.results[i].original_name+" ("+data.results[i].first_air_date+")</div>");
					$('#result').append('<div class="panel-body"><img src="http://image.tmdb.org/t/p/w500/'+data.results[i].poster_path+'&api_key='+key+'"></div></div>');
					$("#result").append("<hr>");
					$('#navig').show();			//Shows the Next/Prev buttons at start
				}
			});
		}
	}
});
