<?php

if(isset($_POST['submit'])){

   /* $phone = '91'.$_POST['number'];
    $message = $_POST['message'];
    $data = [
        'phone' => $phone, // Receivers phone
        'body' => $message, // Message
    ];
    $json = json_encode($data); // Encode data to JSON
    // URL for request POST /message
    $token = '83763g87x';   //create account on https://chat-api.com  and paste it from there 
    $instanceId = '777';
    $url = 'https://api.chat-api.com/instance'.$instanceId.'/message?token='.$token;
    // Make a POST request
    $options = stream_context_create(['http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $json
        ]
    ]);
    
    // Send a request
    $result = file_get_contents($url, false, $options);*/
    echo '<script>alert("trial period over please purchase the subscription")</script>';
}
?>
