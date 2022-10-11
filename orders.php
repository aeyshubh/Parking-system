<?php
$url = "https://api.razorpay.com/v1/orders ";
$ch = curl_init();
$key ="rzp_test_X56tq3llyVrAVG";
$token = "3Inli9IUXbs9V8LDQBIyNA0z";
$rec = "KTT".date('Y,'m','d','H'.'i'.'s');
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_USERPWD,$key.":".$token);
curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type:application/json'));
$data =<<< JSON
  {
    "amount": 500,
    "currency": "INR",
    "receipt": "$rec",
    "partial_payment": true,
    "first_payment_min_amount": 230
}
JSON;
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$response = curl_exec($ch);
echo $response;
?>
