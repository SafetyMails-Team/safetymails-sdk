<?php
// Simple SafetyMails real-time validation example

$api_key = 'YOUR_API_KEY';
$email = 'test@example.com';

$endpoint = 'https://api.safetymails.com/v2/validation/email';

$data = array(
  'email' => $email
);

$headers = array(
  'Content-Type: application/json',
  'apikey: ' . $api_key
);

$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
