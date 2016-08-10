$(document).ready(function(){
	var posterPath=[];
	$.getJSON("http://api.themoviedb.org/3/movie/now_playing?api_key="+key,function(data){
		for(var i=0;i<10;i++){
			posterPath[i]="http://image.tmdb.org/t/p/w500/"+data.results[i].poster_path+"&api_key="+key;
			$('#img_'+i).attr("src",posterPath[i]);
		}
	});
});
