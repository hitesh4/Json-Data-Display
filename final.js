$(document).ready(function(){
	var file1 = $('.json1').val();
	
	console.log(file1);

});

// function ParseHilabsJSON(string y, string x){
// 	$.getJSON("sample.json", function(json) {
// 	    console.log(json);
// 	    console.log(json.data[0].stats.stats_fields.C21_L.facets);
// 	    x = json.data[0].stats.stats_fields.C21_L.facets.C7_S;
// 	    countx = 0;
// 	    k=0;
// 	    $.each(x,function(i,val){
// 	    	countx++;
// 	    });
// 	    $('.container').append('x:[');
// 	    $.each(x,function(i,val){
// 				$('.container').append(i);
				
// 				if(k != countx-1){
// 					$('.container').append(', ');
// 					k++;
// 				}
// 		});
// 		$('.container').append(']');
// 	    y = json.data[0].stats.stats_fields.C21_L.facets.C7_S;
// 	    alert(json);
// 	    county = 0;
// 	    k=0;
// 	    $.each(y,function(i,val){
// 	    	county++;
// 	    });
// 	    $('.container').append('y:[');
// 	    $.each(y,function(i,vals){
// 				$('.container').append(y[i].mean);
				
// 				if(k != county-1){
// 					$('.container').append(', ');
// 					k++;
// 				}
// 		});
// 		$('.container').append(']');
// 	});
// }