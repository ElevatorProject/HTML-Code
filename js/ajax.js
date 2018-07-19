$(setInterval(function (){
	$.ajax({                                      
		url: 'php/floor.php',                  //the script to call to get data          
		data: "",                        //you can insert url argumnets here to pass to api.php
		dataType: 'json',                //data format      
		success: function(data)          //on recieve of reply
		{
			$('#output').html(" <p> " + data[0]['currentFloor'] + "</p>" ); //Set output element html

			var width = 0;
			if(data[0]['currentFloor'] === "1"){
				width="33.3%";
			}if(data[0]['currentFloor'] === "2"){
				width="66.6%";
			}if(data[0]['currentFloor'] === "3"){
				width="100%";
			}
			$('#output').attr("style","width:"+width);
		}
	});

}),1000); 
