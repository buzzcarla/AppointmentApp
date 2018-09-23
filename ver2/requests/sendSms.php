<?php
    $service_url = 'https://rest.nexmo.com/sms/json';
    $curl = curl_init($service_url);
    $curl_post_data = array(
            'api_key' => '2bbe7446',
            'api_secret' => 'OCiFdzeNX7hPIsx9',
            'to' => 639159831386,
            'from' => 'Nexmo',
            'text' => 'Hello',
            'to' => 639159831386
    );
    
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
    $curl_response = curl_exec($curl);
    if ($curl_response === false) {
        $info = curl_getinfo($curl);
        curl_close($curl);
        die('error occured during curl exec. Additioanl info: ' . var_export($info));
    }
    curl_close($curl);
    $decoded = json_decode($curl_response);
    if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
        die('error occured: ' . $decoded->response->errormessage);
    }
    echo 'response ok!';
    var_export($decoded->response);
?>