$(setInterval(function (){
	$.ajax({                                      
		url: 'php/floor.php',                  //the script to call to get data          
		data: "",                        //you can insert url argumnets here to pass to api.php
		dataType: 'json',                //data format      
		success: function(data)          //on recieve of reply
		{
			$('#output').html("<p>" + "Floor number:" + data[0]['currentFloor'] +  "<br>" + data[0]['date'] + " " + data[0]['time'] + "</p>" ); //Set output element html
		}
		
	});
})); 
