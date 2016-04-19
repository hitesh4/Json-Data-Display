<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript">
	$(document).ready(function(){
		ParseHilabsJSON('sample.json', 'sample2.json');  // Please enter the names of the files and place them in the same folder as the index1.php
	
	function ParseHilabsJSON(j1, j2){
		$.getJSON(j1, function(json) {
		    //console.log(json);
		    //console.log(json.data[0].stats.stats_fields.C21_L.facets);
		    x = json.data[0].stats.stats_fields.C21_L.facets.C7_S;
		    countx = 0;
		    k=0;
		    $.each(x,function(i,val){
		    	countx++;
		    });
		    $('.container').append('x:[');
		    $.each(x,function(i,val){
					$('.container').append(i);
					
					if(k != countx-1){
						$('.container').append(', ');
						k++;
					}
			});
			$('.container').append(']<br /><br />');
		    y = json.data[0].stats.stats_fields.C21_L.facets.C7_S;
		    //alert(json);
		    county = 0;
		    k=0;
		    $.each(y,function(i,val){
		    	county++;
		    });
		    $('.container').append('y:[');
		    $.each(y,function(i,vals){
					$('.container').append(y[i].mean);
					
					if(k != county-1){
						$('.container').append(', ');
						k++;
					}
			});
			$('.container').append('] <br /><br /><br />');
		});
		$.getJSON(j2, function(json) {
		    //console.log(json);
		    //console.log(json.data[0].stats.stats_fields.C21_L.facets);
		    x = json.data[0].stats.stats_fields.C21_L.facets.C71_S;
		    countx = 0;
		    k=0;
		    $.each(x,function(i,val){
		    	countx++;
		    });
		    $('.container').append('x:[');
		    $.each(x,function(i,val){
					$('.container').append(i);
					
					if(k != countx-1){
						$('.container').append(', ');
						k++;
					}
			});
			$('.container').append(']<br><br />');
		    y = json.data[0].stats.stats_fields.C21_L.facets.C71_S;
		    //alert(json);
		    county = 0;
		    k=0;
		    $.each(y,function(i,val){
		    	county++;
		    });
		    $('.container').append('y:[');
		    $.each(y,function(i,vals){
					$('.container').append(y[i].mean);
					
					if(k != county-1){
						$('.container').append(', ');
						k++;
					}
			});
			$('.container').append(']');
		});
	}	
	});
</script>
</head>
<body>
	<div class="container">
		
	</div>
</body>
</html>

