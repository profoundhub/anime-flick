$.material.init();
$(document).ready(function(){
	page=1;
	$('#navig').hide();
	$("#button").click(function(){
		$('#result').html('');
		if($("#radioMovie").prop("checked")){
			if($(queryYear).val()===""){
				url='http://www.omdbapi.com/?&type=movie&s='+$("#queryName").val()+'&page='+page;
				$.getJSON(url,function(data){
					if(data.Response==="True"){
						for(i=0;i<10;i++){
							$('#result').append("<div class='panel panel-default'><div class='panel-heading'>"+data.Search[i].Title+" ("+data.Search[i].Year+")</div>");
							$('#result').append('<div class="panel-body"><img src='+data.Search[i].Poster+'></div></div>');
							$("#result").append("<hr>");
						}
						$('#navig').show();
					}else{
						$('#result').html('<div class="alert alert-warning"><strong>Oh snap!</strong> We couldn\'t find any search results. Please try using a different search term.</div>');
					}
				});
			}else{
				url='http://www.omdbapi.com/?type=movie&s='+$("#queryName").val()+'&y='+$("#queryYear").val();
				$.getJSON(url,function(data){
					if(data.Response==="True"){
						for(i=0;i<10;i++){
							$('#result').append("<div class='panel panel-default'><div class='panel-heading'>"+data.Search[i].Title+" ("+data.Search[i].Year+")</div>");
							$('#result').append('<div class="panel-body"><img src='+data.Search[i].Poster+'></div></div>');
							$("#result").append("<hr>");
						}
						$('#navig').show();
					}else{
						$('#result').html('<div class="alert alert-warning"><strong>Oh snap!</strong> We couldn\'t find any search results. Please try using a different search term.</div>');
					}
				});
			}
		}
		if($("#radioSeries").prop("checked")){
			$('#result').html('<div class="alert alert-warning"><strong>Sorry!</strong> You can\'t search for TV Series just yet.</div>');
		}
	});
});
