$(setInterval(function (){
	$.ajax({                                      
		url: 'php/floor.php',                  //the script to call to get data          
		data: "",                        //you can insert url argumnets here to pass to api.php
		dataType: 'json',                //data format      
		success: function(data)          //on recieve of reply
		{
			$('#output').html(" <p> data[0]['currentFloor'] </p>"); //Set output element html
		}
	});

}), 1000); 
