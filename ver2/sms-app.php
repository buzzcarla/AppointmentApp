<html>
<head>

</head>
<body>
    <H1>SMS SENDER RUNNING</H1>

   <script src="js/jquery-2.2.4.min.js"></script> 
</body>
<script>
$( document ).ready(function() {
    console.log( "ready!" );
    var jsonobj = [["639159831386","name","eqw"]];
    
    console.log(jsonobj[0][0]);
    // $.ajax({
	// 		url: "https://rest.nexmo.com/sms/json",
	// 		type: 'POST',
	// 		data: {
	// 			api_key:'2bbe7446',
    //             api_secret:'OCiFdzeNX7hPIsx9',
    //             to:639159831386,
    //             from:"NEXMO",
    //             text:"Hello"
	// 		},
	// 		success: function(res) {
	// 			alert(res);
	// 		}
    // });
				
});
var ajax_call = function(){
        $.ajax({
            url: "requests/getNumbersToSend.php",
            dataType: 'text json',
            type: 'POST',
            success: function(res) {
                $(res).each(function(key,val){
                    $.ajax({
                        url: "https://rest.nexmo.com/sms/json",
                        type: 'POST',
                        data: {
                            api_key:'2bbe7446',
                            api_secret:'OCiFdzeNX7hPIsx9',
                            to:val[0],
                            from:"NEXMO",
                            text:"In 1 hour you have a scheduled appointment of Dr."+val[1]+" "+val[2]
                        },
                        success: function(res) {
                            console.log(res);
                        }
                    });
                });
            }
        });
}
var interval = 1000 * 60 * 1; // where X is your every X minutes

setInterval(ajax_call, interval);
    
</script>
</html>