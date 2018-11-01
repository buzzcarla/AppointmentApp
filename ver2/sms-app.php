<!-- FILE WHERE SMS SENDING FUNCTION IS LOCATED. THE AJAX CALL'S RESPONSE (OBTAINED NUMBERS) WILL BE SENT TO THE URL. -->
<!-- If numbers are successfully sent, function(res) will be triggered -->

<html>
    <body>
        <H1>SMS SENDER RUNNING</H1>
       <script src="js/jquery-2.2.4.min.js"></script>
    </body>

    <script>
        $( document ).ready(function() {
            var jsonobj = [["639159831386","name","eqw"]];
        });
        var ajax_call = function(){
                $.ajax({
                    url: "requests/getNumbersToSend.php",
                    dataType: 'text json',
                    type: 'POST',
                    success: function(res) {
                        // For each number obtained (numbers where the sms message will be sent to)
                        $(res).each(function(key,val){
                            $.ajax({
                                url: "https://rest.nexmo.com/sms/json",
                                type: 'POST',
                                data: {
                                    api_key:'c65f2141 (Master)',
                                    api_secret:'r8Ou1cr1iTIaU0tT',
                                    to:val[0],
                                    from:"NEXMO",
                                    text:"In 1 hour you have a scheduled appointment of Dr."+val[1]+" "+val[2] // the message that will be sent to the users
                                },
                                success: function(res) {
                                    console.log(res);   // check to see if the message with the values are successfullty obtained and sms is sent
                                }
                            });
                        });
                    }
                });
        }
        var interval = 1000 * 60 * 1; // interval for sending message
        setInterval(ajax_call, interval);   // set the time to send the message
    </script>
</html>