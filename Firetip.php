<?php
//FIRETIP OFFICIAL SDK-PHP
//CREATED BY FRANKIE MILLER 06/17/2026
//EXAMPLE SDK PROVING PURE SOVERIGN FUNCTIONALITY FOR PROFESSIONAL OUTREACH.
//V2.01




////IF you have any remomendations or 
//suggestions please follow here https://firetip.pro/sdk#comment



//
//GLOBAL OUTREACH ENGINE FIRETIP PHP-SDK
namespace Firetip\SDK;


class FiretipException extends \Exception {
    private $errorCode;

    public function __construct($message, $code = 0, \Throwable $previous = null) {
        $this->errorCode = $code;
        parent::__construct($message, $code, $previous);
    }

    public function getFiretipCode() {
        return $this->errorCode;
    }
}

class Firetip {
    private $apiKey;
    private $campaignId;
    private $domainKey;
    private $baseUrl = 'https://firetip.pro/api';//Firetip base API URL.

    // --- FIRETIP SYSTEM ERROR CODES ---
    public const ERR_UNKNOWN            = 1000;
    public const ERR_UNAUTHORIZED       = 1001; 
    public const ERR_MALFORMED_JSON     = 1002; 
    public const ERR_MISSING_PARAMS     = 1003; 
    public const ERR_INVALID_EMAIL      = 1004; 
    public const ERR_CAMPAIGN_NOT_FOUND = 1005; 
    public const ERR_INVALID_DOMAIN     = 1006; 
    public const ERR_SC01_NODE_OFFLINE  = 2001; 
    public const ERR_QUEUE_SATURATED    = 2002; 
    public const ERR_REPUTATION_DROP    = 2003; 

    public static function getErrorMessage($code) {
        $map = [
            self::ERR_UNKNOWN            => 'An unmapped ecosystem error has occurred.',
            self::ERR_UNAUTHORIZED       => 'Authentication failed. Check your Firetip API key credentials.',
            self::ERR_MALFORMED_JSON     => 'The payload parsing node rejected the request structure.',
            self::ERR_MISSING_PARAMS     => 'Required parameters were missing from your implementation call.',
            self::ERR_INVALID_EMAIL      => 'The recipient email address failed format verification.',
            self::ERR_CAMPAIGN_NOT_FOUND => 'The specified campaign identifier could not be validated.',
            self::ERR_INVALID_DOMAIN     => 'The specified domain key is invalid or unauthorized for this profile.',
            self::ERR_SC01_NODE_OFFLINE  => 'Critical hardware layer failure: sc01 node is unreachable.',
            self::ERR_QUEUE_SATURATED    => 'Transmission throttle breached. Node outbound storage is full.',
            self::ERR_REPUTATION_DROP    => 'Delivery halted. Node IP reputation drop or blocklist match detected.'
        ];
        return isset($map[$code]) ? $map[$code] : 'Unspecified System Status Code.';
    }

    public function __construct($apiKey, $campaignId = '', $domainKey = '') {
        $this->apiKey = $apiKey;
        $this->campaignId = $campaignId;
        $this->domainKey = $domainKey;
    }

    public function setDomainKey($domainKey) {
        $this->domainKey = $domainKey;
        return $this;
    }

private function executeRequest($endpoint, array $payload, $expectedResponseCode = 200) {
    $url = rtrim($this->baseUrl, '/') . '/' . ltrim($endpoint, '/');
    $timestamp = time();
    $signature = $this->generateSignature($payload, $timestamp);
    $jsonPayload = json_encode($payload, JSON_UNESCAPED_SLASHES);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);

    // Environment condition configuration bypass for local testing setups
   if (strpos($url, 'localhost') !== false || strpos($url, '127.0.0.1') !== false || strpos($url, 'firetip.pro') !== false) {
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    }

    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'X-SC01-Signature: ' . $signature,
        'X-SC01-Timestamp: ' . $timestamp
    ]);


    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
// --- TEMPORARY DEBUGGING BLOCK ---
    if ($httpCode !== $expectedResponseCode) {
        echo "<h3>--- REAL ERROR DEBUG ---</h3>";
        echo "<strong>HTTP Status Code:</strong> " . $httpCode . "<br>";
        echo "<strong>Raw Response Body:</strong><pre>" . htmlspecialchars($response) . "</pre>";
        echo "<strong>JSON Decode Error (if any):</strong> " . json_last_error_msg() . "<br>";
        echo "<strong>cURL Info:</strong><pre>"; print_r(curl_getinfo($ch)); echo "</pre>";
        exit; // Stop execution here to inspect the output
    }
    // ---------------------------------
    if (curl_errno($ch)) {
        $errorMsg = curl_error($ch);
        curl_close($ch);
        throw new FiretipException('Network Node Timeout: ' . $errorMsg, self::ERR_SC01_NODE_OFFLINE);
    }

    curl_close($ch);
    $decoded = json_decode($response, true);

   if ($httpCode !== $expectedResponseCode) {
        $firetipErrorCode = $decoded['error_code'] ?? 1000; 
        
        // FIXED: Re-structured error string normalization and safely removed the blocking exit statement
        $serverMessage = 'Unknown network anomaly.';
        if (is_array($decoded)) {
            $serverMessage = $decoded['error'] ?? ($decoded['message'] ?? 'Unknown network anomaly.');
        } elseif (!empty($response)) {
            $serverMessage = strip_tags($response); // Use raw response string if not valid JSON
        }

        throw new FiretipException("API Error [Code {$firetipErrorCode}]: {$serverMessage}", $firetipErrorCode);
    }

    return $decoded ?: [];
}
    private function generateSignature(array $payload, int $timestamp) {
        $jsonPayload = json_encode($payload, JSON_UNESCAPED_SLASHES);
        $canonical = $timestamp . "\n" . $jsonPayload;
        return hash_hmac('sha256', $canonical, $this->apiKey);
    }



/////////////CORE FIRETIP SDK FUNCTIONS/////////////////////

//MAIN OUTBOUND ENGINE.

//capture leads and send email by default
   public function captureLead($email, array $metadata = [], $campaignId = null) {
    // Fall back to instance property context if a specific campaign ID isn't passed directly
    $targetCampaignId = !is_null($campaignId) ? $campaignId : $this->campaignId;

    if (empty($targetCampaignId)) {
        throw new FiretipException('Campaign ID context required.', self::ERR_MISSING_PARAMS);
    }

    $payload = [
        //'api_key'     => $this->apiKey,
        'campaign_id' => $targetCampaignId,
        'domain_key'  => $this->domainKey, 
        'email'       => $email,
        'full_name'   => isset($metadata['full_name']) ? $metadata['full_name'] : 'test',
        'phone'       => isset($metadata['phone']) ? $metadata['phone'] : 'test',
        'username'    => isset($metadata['username']) ? $metadata['username'] : 'test',
        'country'     => isset($metadata['country']) ? $metadata['country'] : 'test',
        'extra'    => isset($metadata['extra']) ? $metadata['extra'] : 'extra'
    ];

    return $this->executeRequest('collector.php', $payload, 201);
}


//complete.
//TRANSACTIONAL FUNCTION NOT YET USED FR MRKETING EMAILS. Useful for system emails like password reset, signup emails ect...
  public function sendDirectEmail($toEmail, $subject, $htmlContent,$recipientName=null, array $options = []) {
    if (!filter_var($toEmail, FILTER_VALIDATE_EMAIL)) {
        throw new FiretipException("Invalid tracking target: '$toEmail'", self::ERR_INVALID_EMAIL);
    }


//also add user email signature as a optional feature.
    $payload = [
       // 'api_key'      => $this->apiKey,
        'domain_key'   => $this->domainKey, 
        'recipient'    => $toEmail,
        'recipientName'    => $recipientName,
        'subject'      => $subject,
        'html_body'    => $htmlContent, // If this is 1, the remote API resolves the template on its end
        'display_name' => isset($options['sender_alias']) ? $options['sender_alias'] : $this->domainKey,//DEFAULTS TO DOMAIN NAME IF NOT SET USING ($this->domainKey)
        'reply_to'     => isset($options['reply_to']) ? $options['reply_to'] : '',
        'priority'     => isset($options['priority']) ? $options['priority'] : 'normal',
        'country'     => isset($options['country']) ? $options['country'] : 'en',//defaut to english
        'list_id' => isset($options['list_id']) ? $options['list_id'] :0,//optional
        'interest'      =>isset($options['interest']) ? $options['interest'] :'None',
        // Add the attachments array here
    'attachments'   => isset($options['attachments']) ? $options['attachments'] : [],
    // Additional tracking and control fields
        'tracking_enabled' => isset($options['tracking']) ? $options['tracking'] : true,
        'campaign_id'      => isset($options['campaign_id']) ? $options['campaign_id'] : null,
        'tags'             => isset($options['tags']) ? $options['tags'] : [],
        'scheduled_at'     => isset($options['scheduled_at']) ? $options['scheduled_at'] : time(),
// System Specific Additions
    'message_id'       => $options['message_id'] ?? bin2hex(random_bytes(8)),
    'retry_policy'     => $options['retry_policy'] ?? 'standard',
    'webhook'          => $options['webhook'] ?? null // Changed from 'None' to null
];
    // If an explicit template reference ID is passed in the options array, forward it along
    if (isset($options['template_id'])) {
        $payload['template_id'] = (int)$options['template_id'];
    }

   // If an explicit min call of action link is needed then, forward it along
    if (isset($options['main_cta'])) {
        $payload['main_cta'] = $options['main_cta'];
    }

// HTML TEMPLATE PLACEHOLDER REPLACERS - Check if extra dynamic metadata/payload was provided in options

    if (isset($options['metadata'])) {
        // If it's an object, cast or convert it to an array, otherwise keep as is
        $payload['metadata'] = is_object($options['metadata']) 
            ? get_object_vars($options['metadata']) 
            : $options['metadata'];
    }
    // Your cURL transport layer execution continues below...
     return $this->executeRequest('email/send', $payload, 200);
     //RETURN RESPONSES CAN BE....ADD THM HERE FOR REFERENCE.
}

       //deprecated for now.
public function sendOTPSMS($number, $otp_code, array $options = []) {
        $payload = [
            'domain_key' => $this->domainKey, 
            'number'     => $number,
            'otpcode'    => $otp_code,
            'list_id'    => $options['list_id'] ?? 0
        ];
        
        return $this->executeRequest('sms/otp_send', $payload, 200);
    }


//deprecated for now.
    public function sendDirectSMS($number, $message, array $options = []) {
        $payload = [
            'domain_key' => $this->domainKey, 
            'recipient'  => $number, // Assuming the API expects the phone number here
            'message'    => $message,
            'priority'   => $options['priority'] ?? 'high',
            'list_id'    => $options['list_id'] ?? 0
        ];

        return $this->executeRequest('sms/send', $payload, 200);
    }

   
   
   //complete.
    public function getDeliveryStatus($messageId) {
        return $this->executeRequest('email/delivery', [
            'api_key'    => $this->apiKey,
             'domain_key'   => $this->domainKey, 
            'message_id' => $messageId
        ], 200);
    }


    public function fetchLogs($limit = 100, $logType = 'all') {
        return $this->executeRequest('system_logs.php', [
            'api_key'    => $this->apiKey,
            'domain_key' => $this->domainKey, 
            'limit'      => $limit,
            'log_type'   => $logType
        ], 200);
    }



  /***
  public function checkNodeHealth() {
        return $this->executeRequest('node_health.php', [
            'api_key' => $this->apiKey
        ], 200);
} ***/
    
    
    //PRVOSIONIONG A DOMAIN WILL RETURN DKIM KEYS TO ADD TO YOUR DOMAINS DNS.
    public function provisionDomain($domain, $routingPath = 'primary') {
        if (empty($domain)) {
            throw new FiretipException('Target domain is required.', self::ERR_MISSING_PARAMS);
        }

        $payload = [
            'target_domain' => $domain,
            'routing_path'  => $routingPath
        ];

        return $this->executeRequest('v1/bridge/provision', $payload, 200);
    }
    
    
    //USER ACCOUNT FUNCTIONS FOR FETCHNIG THINGS LIKE USAGE LIMITS, BILLING ETC... 
    
    //TOOLS
    
    
    
    
    //INBOUND ENGINE
    
    
    
    
    
}
?>