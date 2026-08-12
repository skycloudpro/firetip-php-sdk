# firetip-php-sdk

Official Firetip PHP SDK v2.01. Secure, sovereign outreach with HMAC-SC01 cryptographic hardware validation. Zero plaintext API keys, robust exception mapping (codes 1000-2003), direct lead collection, and custom domain bridging. Install via `composer require firetip/sdk`. Built for high-performance sovereign infrastructure control.

---

## Documentation

### Quick Navigation
* [Overview & Architecture](#overview--architecture)
* [Requirements](#requirements)
* [Installation](#installation)
* [Section 1: Installation & Initialization](#section-1-installation--initialization)
* [Section 2: Authentication Model (HMAC-SC01)](#section-2-authentication-model-hmac-sc01)
* [Section 3: Error Handling & Exceptions](#section-3-error-handling--exceptions)
* [Section 4: Core SDK Methods](#section-4-core-sdk-methods)
* [Section 5: Provision a Domain Bridge](#section-5-provision-a-domain-bridge)
* [Section 6: Multi-Tenant Routing & Architecture](#section-6-multi-tenant-routing--architecture)
* [Section 7: Firetip REST API Index](#section-7-firetip-rest-api-index)

---

### Overview & Architecture

<a id="overview--architecture"></a>
The **Firetip PHP SDK v2.01** and REST API provide a secure, hardware-aligned interface for Firetip users to execute high-performance sovereign outreach, manage automated email and SMS campaigns, capture leads, and interface directly with your **SC01** infrastructure using the **HMAC‑SC01 Signature System** for zero API key exposure, payload integrity, and replay protection.

* **HMAC-SC01 Pipeline:** Active & Secure. Headers `X-SC01-Signature` and `X-SC01-Timestamp` are automatically generated using `hash_hmac('sha256', ...)` with zero plaintext API key transmission over transport layers.
* **Core Endpoints Mapped:** `collector.php` (Lead Capture), `email/send` (Direct Dispatch), `sms/send` & `otp_send` (SMS/OTP), and `v1/bridge/provision` (DKIM/DNS).
* **Sovereign Architecture v2.01:** Ready for deployment on your `sc01` node infrastructure.

---

### Requirements

<a id="requirements"></a>
* **PHP:** `^8.1` or higher
* **Extensions:** `ext-curl`, `ext-json`, `ext-hash`
* **Node Target:** `sc01` hardware validation layer enabled

---

### Installation

<a id="installation"></a>
Install the package into your project via Composer:

composer require firetip/sdk

---

### Section 1: Installation & Initialization

<a id="section-1-installation--initialization"></a>
Require the SDK via Composer:
composer require firetip/sdk

Initialize the client in your application:
<?php
use Firetip\SDK\Firetip;

$client = new Firetip('FT_LIVE_xxxxxxxx', '123', 'example.com');
?>

| Parameter | Description |
| :--- | :--- |
| **apiKey** | Your Firetip API key (used only to generate signatures). |
| **campaignId** | Default campaign context for lead capture and dispatch. |
| **domainKey** | Optional domain routing identifier for multi‑tenant systems. |

---

### Section 2: Authentication Model (HMAC-SC01)

<a id="section-2-authentication-model-hmac-sc01"></a>
Firetip no longer uses `Authorization: Bearer`. All requests must include the following headers to bind the SDK to your SC01 hardware node:

X-SC01-Signature: <hmac_signature>
X-SC01-Timestamp: <unix_epoch>

#### Signature Generation Steps:
1. Convert the payload to JSON.
2. Generate a timestamp nonce.
3. Build the canonical string: <timestamp>\n<json_payload>
4. Compute: HMAC_SHA256(api_key, canonical_string)
5. Send the hex‑encoded signature in the header.

> For the full specification, see the Firetip Signature Spec.

---

### Section 3: Error Handling & Exceptions

<a id="section-3-error-handling--exceptions"></a>
<?php
try {
    $client->sendDirectEmail(...);
} catch (FiretipException $e) {
    echo $e->getMessage();
    echo $e->getFiretipCode();
}
?>

| Error Code | Description |
| :--- | :--- |
| **1001** | Unauthorized — invalid signature or API key. |
| **1002** | Malformed JSON payload. |
| **1003** | Missing required parameters. |
| **1004** | Invalid email format. |
| **1005** | Campaign not found. |
| **1006** | Domain key invalid or unprovisioned. |
| **2001** | SC01 hardware node offline. |
| **2002** | Queue saturation — outbound cluster full. |
| **2003** | Reputation drop — warmup or blocklist issue. |

---

### Section 4: Core SDK Methods

<a id="section-4-core-sdk-methods"></a>

#### 4.1 Capture Lead
Captures a subscriber into the active campaign.
$client->captureLead('user@example.com', [
    'full_name' => 'John Doe',
    'country'   => 'UK'
]);

#### 4.2 Send Direct Email
Required for transactional dispatch. Authentication is handled via `X-SC01-Signature` and `X-SC01-Timestamp` headers generated from your API key.

$client->sendDirectEmail(
    $toEmail,       // string: Target address
    $subject,       // string: Email subject
    $htmlContent,   // string|int: Raw HTML or Template ID
    $recipientName, // string: Display name
    $options        // array: Configuration & routing
);

#### Extended `$options` Configuration:
| Key | Type | Description |
| :--- | :--- | :--- |
| `sender_alias` | string | Custom sender display name. |
| `reply_to` | string | Custom reply-to address. |
| `list_id` | int | Target list ID (triggers list-based routing). |
| `tracking` | int | `1` = Enabled, `0` = Disabled. |
| `country` | string | ISO 2-letter code (en/fr/etc). |
| `interest` | string | Subscriber niche tagging. |
| `metadata` | array | JSON-serializable custom data. |
| `priority` | string | `normal` or `high`. |
| `scheduled_at` | int | Unix timestamp for delayed dispatch. |
| `message_id` | string | Custom 16-char hex ID for tracking. |
| `retry_policy` | string | `standard` (default) or `persistent`. |
| `template_id` | int | Explicit template ID override. |
| `main_cta` | string | Primary Call-to-Action link injection. |
| `attachments` | array | Array of file paths for outbound payload. |

#### Implementation Example:
$options = [
    'sender_alias' => 'bithotel.com', // Your domain name
    'reply_to'     => 'contact@bithotel.com', // Reply to
    'list_id'      => 34, // user list id
    'tracking'     => 1,  // (OPTIONAL) enable tracking
    'country'      => 'en',
    'interest'     => 'Hotel Guest',
    'metadata'     => ['user_id' => 123, 'node_id' => 'sc01'], // (OPTIONAL) Payload as array
    'main_cta'     => 'https://bithotel.com?uid=876543&campaignid=123' // Example CTA link
];

$firetip->sendDirectEmail(
    'rocketman@gmail.com', 
    'Bit Hotels', 
    '1', // 1 uses your html template from firetip account, otherwise inject HTML direct
    'John Joe', 
    $options
);

#### 4.3 Delivery Status
$status = $client->getDeliveryStatus('MSG_8842');

#### 4.4 Fetch Logs
$logs = $client->fetchLogs(50, 'errors');

#### 4.5 Node Health Check
$health = $client->checkNodeHealth();

---

### Section 5: Provision a Domain Bridge

<a id="section-5-provision-a-domain-bridge"></a>
The PHP SDK allows you to provision a domain directly from your backend. This operation binds the domain to Firetip’s sovereign routing layer using the Domain Bridge Handshake.

$client->provisionDomain('example.com', 'primary');

This performs the following actions automatically via `POST /api/v1/bridge/provision`:
* Validates domain ownership
* Assigns a sovereign routing path
* Creates a hardware‑anchored trust binding
* Enables outbound dispatch for the domain

| Parameter | Description |
| :--- | :--- |
| **target_domain** | The domain to provision. |
| **routing_path** | Routing lane: `primary`, `redundant`, or `high-throughput`. |

> For the full handshake specification, see: Domain Bridge Handshake.

---

### Section 6: Multi-Tenant Routing & Architecture

<a id="section-6-multi-tenant-routing--architecture"></a>
The PHP SDK is synchronized with the Firetip sovereign dispatch engine, SC01 hardware trust layer, and sCloud routing matrices. This ensures deterministic routing, hardware‑anchored identity, and zero shared‑cloud dependencies. Each domain maintains independent warmup, reputation, and routing lanes.

$dispatcher = new Firetip($apiKey, '123');

// Switch context to Domain A
$dispatcher->setDomainKey('alpha-marketing.com');
$dispatcher->sendDirectEmail(...);

// Switch context to Domain B
$dispatcher->setDomainKey('faigen-media.net');
$dispatcher->sendDirectEmail(...);

#### Complete Flow Example:
<?php
use Firetip\SDK\Firetip;

$client = new Firetip('FT_LIVE_998x81723acb', '123', 'scloud.xyz');

$client->sendDirectEmail(
    'user@test.com',
    'Welcome to sCloud',
    '<p>Hello!</p>'
);
?>

---

### Section 7: Firetip REST API Index

<a id="section-7-firetip-rest-api-index"></a>
Complete reference for all REST endpoints powering Firetip’s sovereign dispatch engine. Includes provisioning, routing, dispatch control, telemetry, and administrative cluster operations.

#### 7.1 Identity & Domain Provisioning
Endpoints responsible for domain authority, routing identity, and sc01 hardware binding.
* `POST /api/v1/bridge/provision` — Provision domain identity and assign routing authority.
* `GET /api/v1/bridge/status` — Retrieve provisioning state, authority level, and DNS validation status.
* `DELETE /api/v1/bridge/revoke` — Revoke domain authority and detach routing identity.

#### 7.2 Outbound Dispatch Endpoints
REST endpoints for transactional messages, batch dispatching, and queue management.
* `POST /api/v1/email/send` — Send a single transactional email via sc01 routing.
* `POST /api/v1/sms/send` — Send SMS messages through Firetip’s GSM‑linked dispatch engine.
* `POST /api/v1/otp/generate` — Generate and dispatch OTP codes with hardware‑bound identity.
* `POST /api/v1/otp/verify` — Verify OTP codes using Firetip’s cryptographic validation engine.

#### 7.3 Telemetry & Verification
Endpoints for message status, open tracking, and real‑time verification.
* `POST /api/v1/webhook/verification` — Receive open, click, and validation events.
* `GET /api/v1/message/status` — Query delivery, open, and verification state for any message.

#### 7.4 Cluster Control & System Operations
Administrative endpoints for managing dispatch clusters, queues, and node health.
* `PUT /api/v1/cluster/triage` — Pause queues, flush relays, or isolate nodes.
* `GET /api/v1/cluster/health` — Retrieve node health, latency metrics, and cluster load.
* `POST /api/v1/cluster/restart` — Restart a node or cluster segment.

#### 7.5 Utility & Diagnostic Endpoints
Supporting endpoints for logs, diagnostics, and system metadata.
* `GET /api/v1/logs/recent` — Retrieve recent dispatch logs for debugging.
* `GET /api/v1/system/info` — Return system metadata, versioning, and hardware identity.
