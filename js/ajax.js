$(setInterval(function (){
	$.ajax({                                      
		url: 'php/floor.php',                  //the script to call to get data          
		data: "",                        //you can insert url argumnets here to pass to api.php
		dataType: 'json',                //data format      
		success: function(data)          //on recieve of reply
		{
			$('#output').html( "current floor: "+ data[0]['currentFloor']); //Set output element html
		}
	});

}), 3000); 
