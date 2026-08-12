





<?php
//USAGE
require_once 'Firetip.php';

use Firetip\SDK\Firetip;
use Firetip\SDK\FiretipException;

$apiKey = '0d4a4ce97a6e0fe1806aacf5a8caaf32';
$client = new Firetip($apiKey, "123");

try {
    //echo "Initiating transaction push via sc01 hardware node...\n";
    // OR update it explicitly on the fly before calling dispatch functions:
$client->setDomainKey("firetip.pro");
    // Deliberately triggering code validation by inserting a corrupted email address
  $metadata = [
    'username'  => 'John Doe',
    'email'     => 'nxjxjxjckcjdkf@gmail.com',
    'country'   => 'US',
    'full_name' => 'John Doe'
];





















$response = $client->sendDirectEmail(
    'nxjxjxjckcjdkf@gmail.com', 
    'Firetip new Broadcast', 
    '<!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @media only screen and (max-width: 600px) {
                .container { width: 100% !important; border-radius: 0 !important; }
                .hero-text { font-size: 24px !important; }
            }
        </style>
    </head>
    <body style="margin: 0; padding: 0; background-color: #050505; font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #050505;">
            <tr>
                <td align="center" style="padding: 20px 0;">
                    
                    <table class="container" border="0" cellpadding="0" cellspacing="0" width="600" style="background-color: #0a0a0a; border: 1px solid #222; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(255, 61, 61, 0.1);">
                        
                        <tr>
                            <td height="4" style="background: linear-gradient(90deg, #ff3d3d, #800000);"></td>
                        </tr>

                        <tr>
                            <td align="center" style="padding: 40px 40px 20px 40px;">
                                <div style="background: rgba(255, 61, 61, 0.1); width: 60px; height: 60px; border-radius: 12px; line-height: 60px; margin-bottom: 20px; border: 1px solid rgba(255, 61, 61, 0.3);">
                                    <span style="color: #ff3d3d; font-size: 24px; font-weight: bold;">&#128293;</span>
                                </div>
                                <h1 class="hero-text" style="color: #ffffff; margin: 0; font-size: 28px; letter-spacing: -1px; font-weight: 900; text-transform: uppercase;">Aura_Firetip_Broadcast</h1>
                                <p style="color: #ff3d3d; font-family: monospace; font-size: 12px; margin-top: 5px; letter-spacing: 2px;">NODE_ID: SC01_DISPATCH</p>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 0 40px 40px 40px; color: #aaaaaa; font-size: 16px; line-height: 1.6;">
                                <p style="border-left: 3px solid #ff3d3d; padding-left: 15px; color: #ffffff;">Hello <strong>[username]</strong>,</p>
                                
                                <p>This transmission is being routed through the high-frequency <strong>Aura Hybrid Engine</strong>. We have updated your account parameters to include real-time pulse tracking and external API bridge support.</p>
                                
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #111; border-radius: 12px; margin: 30px 0; border: 1px solid #1a1a1a;">
                                    <tr>
                                        <td style="padding: 20px; text-align: center;">
                                            <p style="color: #ffffff; margin: 0 0 15px 0; font-size: 14px; font-weight: bold;">SECURE_ACCESS_LINK</p>
                                            <a href="https://firetip.pro" style="background-color: #ff3d3d; color: #ffffff; padding: 12px 30px; text-decoration: none; border-radius: 8px; font-weight: bold; display: inline-block; box-shadow: 0 4px 15px rgba(255, 61, 61, 0.3);">INTIATE_SYNC_NODE</a>
                                        </td>
                                    </tr>
                                </table>

                                <p style="font-size: 14px; opacity: 0.8;">If you did not request this sync, please ignore this system-generated alert. Your node security remains active.</p>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 30px; background-color: #080808; border-top: 1px solid #151515; text-align: center;">
                                <p style="color: #444; font-size: 11px; margin: 0; font-family: monospace;">
                                    SYSTEM_STATUS: STABLE_SINCE_2016<br>
                                    REGISTERED_EMAIL: [email] | TIMESTAMP: [date]
                                </p>
                                <div style="margin-top: 20px;">
                                    <a href="[unsubscribe_url]" style="color: #ff3d3d; text-decoration: none; font-size: 11px; font-weight: bold;">UNSUBSCRIBE</a>
                                    <span style="color: #222; margin: 0 10px;">|</span>
                                    <a href="#" style="color: #ff3d3d; text-decoration: none; font-size: 11px; font-weight: bold;">NODE_SECURITY</a>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <p style="color: #222; font-size: 10px; margin-top: 20px;">
                        Powered by Aura Firetip Engine v2.6 | sc01 Node Cluster
                    </p>
                </td>
            </tr>
        </table>
    </body>
    </html>',
    $metadata
);
    print_r($response);

} catch (FiretipException $e) {
    // 1. Get the precise, numerical internal error code
    $errCode = $e->getFiretipCode();
    
    // 2. Fetch the developer troubleshooting explanation
    $friendlyExplanation = Firetip::getErrorMessage($errCode);

    echo "--------------------------------------------------------\n";
    echo "FIRETIP EXECUTION FAULT DETECTED\n";
    echo "--------------------------------------------------------\n";
    echo "Thrown Message: " . $e->getMessage() . "\n";
    echo "Internal Code:  " . $errCode . "\n";
    echo "Explanation:    " . $friendlyExplanation . "\n";
    echo "--------------------------------------------------------\n";

    // 3. Drive smart architecture logic depending on what broke
    if ($errCode === Firetip::ERR_SC01_NODE_OFFLINE) {
        error_log("CRITICALALERT: Hardware module dropped connections. Deploy secondary fallback routing.");
    } elseif ($errCode === Firetip::ERR_INVALID_EMAIL) {
        echo "Action Item: Please reject this user submit field and prompt correction.\n";
    }
}
?>