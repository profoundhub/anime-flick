$.material.init();
$(document).ready(function(){
	//console.log("Works");
	$("#button").click(function(){
		if($("#radioMovie").prop("checked")){
			url='http://www.omdbapi.com/?type=movie&plot=full&t='+$("#queryName").val();
			if($(queryYear).val()===""){
				$.getJSON(url,function(data){
					$('#name').html("<h5>Movie: </h5><p>"+data.Title+"</p>");
					$('#genre').html("<h5>Genre: </h5><p>"+data.Genre+"</p>");
					$('#year').html("<h5>Year: </h5><p>"+data.Year+"</p>");
					$('#releaseDate').html("<h5>Release Year: </h5><p>"+data.Released+"</p>");
					$('#runtime').html("<h5>Runtime: </h5><p>"+data.Runtime+"</p>");
					$('#rating').html("<h5>imDB Rating: </h5><p>"+data.imdbRating+"</p>");
					$('#plot').html("<h5>imDB Rating: </h5><p>"+data.Plot+"</p>");
				});
			}else{
				url='http://www.omdbapi.com/?type=movie&plot=full&t='+$("#queryName").val()+"&y="+$("#queryYear").val();
				$.getJSON(url,function(data){
					$('#name').html("<h5>Movie: </h5><p>"+data.Title+"</p>");
					$('#genre').html("<h5>Genre: </h5><p>"+data.Genre+"</p>");
					$('#year').html("<h5>Year: </h5><p>"+data.Year+"</p>");
					$('#releaseDate').html("<h5>Release Year: </h5><p>"+data.Released+"</p>");
					$('#runtime').html("<h5>Runtime: </h5><p>"+data.Runtime+"</p>");
					$('#rating').html("<h5>imDB Rating: </h5><p>"+data.imdbRating+"</p>");
					$('#plot').html("<h5>imDB Rating: </h5><p>"+data.Plot+"</p>");
				});
			}
		}
		if($("#radioSeries").prop("checked")){
			alert("Search is not currently available for TV Series");
		}
	});
});
