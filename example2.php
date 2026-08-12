<?php
// 1. Include the SDK file
require_once 'Firetip.php';

use Firetip\SDK\Firetip;
use Firetip\SDK\FiretipException;

// 3. Define credentials
$apiKey     = '0d4a4ce97a6e0fe1806aacf5a8caaf32';
$campaignId = '300';
//$domainKey  = 'example.com';

try {
    // 4. Initialize the Firetip Outreach Engine
    $firetip = new Firetip($apiKey);
    //firetip.pro
    $firetip->setDomainKey("accounts.scloud.live");//set domain here thats set in your Firetip account
 
    echo "<h2>Firetip Engine Initialization Successful</h2>";


//new task her lets get this etup so it all works..


    // --- TASK 2: SEND A DIRECT TRANSACTIONAL EMAIL ---
    echo "<h3>2. Dispatching Direct Email...</h3>";
    
   // $htmlContent = "<h1>System Alert</h1><p>Your sc01 node cluster architecture has successfully completed verification syncing.</p>";
    // Read the raw header and fallback to 'en' if it is empty
$browser_lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en';

// Extract the first two characters
$user_lang ='en';// substr($browser_lang, 0, 2);
    
    
   
$verificationLink = 'https://scloud.live';
$browser_lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
//$user_lang = substr($browser_lang, 0, 2);
$subject = "Lost Password Helps";
      $emailOptions = [
        'sender_alias' => 'sCloud Accounts',
        'priority'     => 'High',
        'reply_to'     => 'noreply@accounts.scloud.live',
        'country'      =>$user_lang ,
        'list_id'      =>34,
        'template_id'  =>16,
        'main_cta'     =>$verificationLink
//SIMPLIFIED FUNCTION USAGE.
//sendDirectEmail($sento,$subject,$htmlBody,$emailOptions);

];
//$emailResult = $firetip->sendDirectEmail('test-7cfc35c6@firetip.pro', $subject, '1','Frankie Miller', $emailOptions);
    echo "Email dispatched via transmission routing! Message ID: " . ($emailResult['message_id'] ?? 'Dispatched') . "<br>";
    print_r($emailResult);
//


//to get delivery status eus returned message id from  $firetip->sendDirectEmail() and pass to getDeliveryStatus($messageId)


print_r($firetip->getDeliveryStatus(44411));
//$getdelivery=$firetip->getDeliveryStatus(44857);
//echo 'Delivery status here:'.$getdelivery['delivery_status'];






    // --- TASK 1: CAPTURE A LEAD ---
    echo "<h3>1. Capturing Lead...</h3>";
    
    $payload='Hi I want to invest in your company :)';//extra data from signups or lead generation landing pages a user might add a note on form submision
    $leadMetadata = [
        'full_name' => 'Frankie Miller',
        'phone'     => '+15550199222',
        'username'  => 'fmiller26',
        'country'   => 'US',
        'extra'  => $payload
    ];
    
    // Executes payload delivery against collector.php
   // $leadResult = $firetip->captureLead('contact@scloud.live',$leadMetadata, $campaignId);
   // echo "Lead captured! Server Response Lead ID: " . ($leadResult['lead_id'] ?? 'Success') . "<br>";
   // print_r($leadResult);


    // --- TASK 3: DIAGNOSTIC HARDWARE HEALTH CHECK ---
    echo "<h3>3. Checking sc01 Node Cluster Diagnostics...</h3>";
    //$health = $firetip->checkNodeHealth();
   // echo "Node Cluster Status: " . ($health['status'] ?? 'ONLINE') . "<br>";

} catch (FiretipException $e) {
    echo "<div style='color: #D32F2F; font-weight: bold; margin-top: 15px;'>";
    echo "Firetip Exception Caught [Code " . $e->getFiretipCode() . "]: " . $e->getMessage() . "<br>";
    echo "</div>";
    
    // DIAGNOSTIC CHECKPOINT: Let's manually poke the endpoint using standard PHP 
    // to see exactly what collector.php is screaming about.
 // DIAGNOSTIC CHECKPOINT: Fixed to pass the domain key matching configuration parameters
echo "<h3>--- RUNNING LIVE SERVER DIAGNOSTIC ---</h3>";
$testPayload = [
    'api_key'     => $apiKey,
    'campaign_id' => $campaignId,
    'domain_key'  => 'firetip.pro', // ADDED THIS LINE
    'email'       => 'diagnostic_test@scloud.live'
];

$options = [
    'http' => [
        'header'  => "Content-Type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($testPayload),
        'ignore_errors' => true 
    ]
];

/////$context     = stream_context_create($options);
/////$rawResponse = file_get_contents('https://firetip.pro/api/collector.php', false, $context);

echo "<pre style='background: #1E1E1E; color: #00FF00; padding: 15px; border-radius: 5px;'>";
//echo "RAW SERVER OUTPUT:\n" . htmlspecialchars($rawResponse);
echo "</pre>";
}