$(document).ready(function(){
	var posterPath=[];
	$.getJSON("http://api.themoviedb.org/3/movie/now_playing?api_key="+key,function(data){
		for(var i=0;i<10;i++){
			posterPath[i]="http://image.tmdb.org/t/p/w500/"+data.results[i].poster_path+"&api_key="+key;
			$('#img_'+i).attr("src",posterPath[i]);
		}
	});
	$('.owl-carousel').owlCarousel({
    loop:false,
    margin:15,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        400:{
            items:2,
            nav:true
        },
				800:{
            items:3,
            nav:true
        }

    }
	});
	//$('#img_'+i).wrap($('<div>').attr('data-toggle','modal').attr('data-target','#movie'+data.results[i].id));
	//$('#result').append('<div id="movie'+data.results[i].id+'" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h2 class="modal-title">'+data.results[i].original_title+' ('+data.results[i].release_date.substring(0,4)+')</h2></div><div class="modal-body"><img src="'+posterPath[i]+'"><hr><p>'+data.results[i].overview+'</p></div><div class="modal-footer"><em>Release date: '+data.results[i].release_date);
	//$('#result').append('</em>');
	//$('#result').append('</div></div></div></div>');
});
