# API Documentation

This document covers the GoQuoteRocket API layer, including form submission handling, third-party integrations, and lead routing.

## Table of Contents

- [Overview](#overview)
- [Form Submission Endpoint](#form-submission-endpoint)
- [Lead Routing](#lead-routing)
- [StealthLabz Integration](#stealthlabz-integration)
- [Waypoint Integration](#waypoint-integration)
- [Field Mapping](#field-mapping)
- [Error Handling](#error-handling)
- [Testing the API](#testing-the-api)

---

## Overview

The GoQuoteRocket API handles:

1. **Form submission** from funnel questionnaires
2. **Lead routing** to multiple buyers (StealthLabz, Waypoint)
3. **Response handling** with redirect URLs

### API Architecture

```
┌─────────────────────────────────────────────────────────────┐
│                     FunnelEngine.js                          │
│                    (Browser Client)                          │
└─────────────────────────────────────────────────────────────┘
                              │
                         POST /api/submit.php
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                      api/submit.php                          │
│                    (Form Handler)                            │
└─────────────────────────────────────────────────────────────┘
                              │
              ┌───────────────┴───────────────┐
              ▼                               ▼
┌─────────────────────────┐     ┌─────────────────────────┐
│       StealthLabz        │     │        Waypoint          │
│    (Lead Distribution)   │     │    (Lead Capture)        │
└─────────────────────────┘     └─────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                      JSON Response                           │
│              (Success, Redirect URL, Results)                │
└─────────────────────────────────────────────────────────────┘
```

---

## Form Submission Endpoint

### Endpoint

```
POST /api/submit.php
```

### Request Format

**Content-Type**: `application/x-www-form-urlencoded`

**Required Fields**:

| Field | Type | Description |
|-------|------|-------------|
| `vertical` | string | Vertical ID (auto, life, etc.) |
| `given-name` | string | First name |
| `family-name` | string | Last name |
| `email` | string | Email address |

**Common Optional Fields**:

| Field | Type | Description |
|-------|------|-------------|
| `tel` | string | Phone number |
| `zip` | string | ZIP code |
| `aff_id` | string | Affiliate ID |
| `transaction_id` | string | Transaction ID |
| `xxTrustedFormCertUrl` | string | TrustedForm certificate URL |
| `newsletter_optin` | string | Newsletter opt-in (on/off) |

**Vertical-Specific Fields** (examples):

| Vertical | Fields |
|----------|--------|
| Auto | `homeowner`, `currently_insured`, `multiple_vehicles`, `age_range`, `military` |
| Life | `coverage_amount`, `tobacco_use`, `health_rating` |
| Medicare | `age_range`, `has_part_ab`, `plan_type`, `prescription_drugs`, `gender` |
| Credit Card | `credit_score`, `primary_interest`, `annual_income`, `employment_status` |

### Example Request

```bash
curl -X POST http://api.goquoterocket.local/submit.php \
  -H "Content-Type: application/x-www-form-urlencoded" \
  -d "vertical=auto" \
  -d "given-name=John" \
  -d "family-name=Smith" \
  -d "email=john@example.com" \
  -d "tel=5555551234" \
  -d "zip=75001" \
  -d "homeowner=yes" \
  -d "currently_insured=yes" \
  -d "age_range=25-49" \
  -d "military=no" \
  -d "aff_id=AFF123" \
  -d "xxTrustedFormCertUrl=https://cert.trustedform.com/..."
```

### Response Format

**Success Response**:

```json
{
    "success": true,
    "vertical": "auto",
    "results": {
        "stealthlabz": {
            "success": true,
            "http_code": 200,
            "response": "{\"status\":\"success\",\"lead_id\":\"12345\"}"
        },
        "waypoint": {
            "success": true,
            "http_code": 200,
            "response": "OK"
        }
    },
    "redirect_url": "http://auto.goquoterocket.local/owl?transaction_id=abc123"
}
```

**Error Response**:

```json
{
    "success": false,
    "error": "Vertical not specified",
    "code": "MISSING_VERTICAL"
}
```

### Response Fields

| Field | Type | Description |
|-------|------|-------------|
| `success` | boolean | Overall submission success |
| `vertical` | string | Vertical that was processed |
| `results` | object | Results from each buyer |
| `results.{buyer}.success` | boolean | Individual buyer success |
| `results.{buyer}.http_code` | integer | HTTP response code |
| `results.{buyer}.response` | string | Raw response body |
| `redirect_url` | string | Where to redirect the user |
| `error` | string | Error message (if failed) |
| `code` | string | Error code (if failed) |

---

## Lead Routing

### Routing Flow

```php
// api/submit.php - Simplified flow

// 1. Get vertical from request
$vertical = $_POST['vertical'] ?? $_GET['vertical'] ?? null;

if (!$vertical) {
    jsonResponse(['success' => false, 'error' => 'Vertical not specified']);
    exit;
}

// 2. Load vertical configuration
$verticalConfig = Vertical::load($vertical);

if (!$verticalConfig) {
    jsonResponse(['success' => false, 'error' => 'Invalid vertical']);
    exit;
}

// 3. Collect form data
$formData = $_POST;

// 4. Load integrations config
$integrations = require __DIR__ . '/../config/integrations.php';

// 5. Initialize results
$results = [];

// 6. Route to StealthLabz (if enabled)
if ($verticalConfig['routing']['stealthlabz']['enabled'] ?? false) {
    $results['stealthlabz'] = routeToStealthLabz(
        $verticalConfig,
        $formData,
        $integrations
    );
}

// 7. Route to Waypoint (if enabled)
if ($verticalConfig['routing']['waypoint']['enabled'] ?? false) {
    $results['waypoint'] = routeToWaypoint(
        $verticalConfig,
        $formData,
        $integrations
    );
}

// 8. Determine redirect URL
$redirectType = $verticalConfig['flow']['redirect_type'] ?? 'owl';
$redirectUrl = buildUrl($vertical, '/' . $redirectType);

// 9. Return response
jsonResponse([
    'success' => true,
    'vertical' => $vertical,
    'results' => $results,
    'redirect_url' => $redirectUrl
]);
```

### Routing Decision Logic

```php
// Determine if buyer routing is enabled
$stealthlabzEnabled = $verticalConfig['routing']['stealthlabz']['enabled']
                   && $integrations['stealthlabz']['enabled'];

$waypointEnabled = $verticalConfig['routing']['waypoint']['enabled']
                && $integrations['waypoint']['enabled'];
```

---

## StealthLabz Integration

### Overview

StealthLabz is a lead distribution platform that receives leads via webhooks.

### Configuration

**In `config/integrations.php`**:

```php
'stealthlabz' => [
    'enabled' => true,
    'base_url' => 'https://portal.stealthlabz.com/webhook/unify/',

    // Webhook IDs per vertical
    'webhooks' => [
        'auto' => 'c10ebcce-f22e-4e48-a633-e7de9529f46c',
        'life' => 'LIFE-WEBHOOK-ID',
        'medicare' => 'MEDICARE-WEBHOOK-ID',
        'creditcard' => 'CREDITCARD-WEBHOOK-ID'
    ],

    'timeout' => 30,
    'retry_attempts' => 2,
    'retry_delay' => 1000
]
```

**In `config/verticals/{vertical}.php`**:

```php
'routing' => [
    'stealthlabz' => [
        'enabled' => true,
        'webhook_key' => 'auto',  // Maps to webhooks array
        'field_mapping' => [
            // Static values
            'c1' => ['value' => 'GoQuoteRocket'],
            'c4' => ['value' => 47],

            // Form field mappings
            'first_name' => ['field' => 'given-name'],
            'last_name' => ['field' => 'family-name'],
            'email' => ['field' => 'email'],
            'phone' => ['field' => 'tel'],
            'zip' => ['field' => 'zip'],

            // Tracking fields
            'c2' => ['field' => 'aff_id'],
            'transaction_id' => ['field' => 'transaction_id'],
            'xxTrustedFormCertUrl' => ['field' => 'xxTrustedFormCertUrl']
        ]
    ]
]
```

### Routing Function

```php
function routeToStealthLabz($verticalConfig, $formData, $integrations) {
    $routing = $verticalConfig['routing']['stealthlabz'];
    $webhookKey = $routing['webhook_key'];
    $webhookId = $integrations['stealthlabz']['webhooks'][$webhookKey] ?? null;

    if (!$webhookId) {
        return [
            'success' => false,
            'error' => 'Webhook ID not configured'
        ];
    }

    // Build payload from field mapping
    $payload = [];
    foreach ($routing['field_mapping'] as $buyerField => $source) {
        if (isset($source['value'])) {
            // Static value
            $payload[$buyerField] = $source['value'];
        } elseif (isset($source['field'])) {
            // Map from form data
            $payload[$buyerField] = $formData[$source['field']] ?? '';
        }
    }

    // Build URL
    $url = $integrations['stealthlabz']['base_url'] . $webhookId;

    // Send request
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => $integrations['stealthlabz']['timeout']
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    curl_close($ch);

    return [
        'success' => $httpCode >= 200 && $httpCode < 300,
        'http_code' => $httpCode,
        'response' => $response,
        'error' => $error ?: null
    ];
}
```

### StealthLabz Payload Example

```json
{
    "c1": "GoQuoteRocket",
    "c2": "AFF123",
    "c4": 47,
    "c7": "75001",
    "c10": "auto",
    "first_name": "John",
    "last_name": "Smith",
    "email": "john@example.com",
    "phone": "5555551234",
    "homeowner": "yes",
    "currently_insured": "yes",
    "age_range": "25-49",
    "military": "no",
    "transaction_id": "TXN-ABC123",
    "xxTrustedFormCertUrl": "https://cert.trustedform.com/..."
}
```

---

## Waypoint Integration

### Overview

Waypoint is a lead capture system that receives form-encoded POST data.

### Configuration

**In `config/integrations.php`**:

```php
'waypoint' => [
    'enabled' => true,
    'endpoint' => 'https://mass1ve.waypointsoftware.io/capture.php',
    'timeout' => 30,
    'content_type' => 'application/x-www-form-urlencoded'
]
```

**In `config/verticals/{vertical}.php`**:

```php
'routing' => [
    'waypoint' => [
        'enabled' => true,
        'field_mapping' => [
            'vertical' => ['field' => 'vertical'],
            'first_name' => ['field' => 'given-name'],
            'last_name' => ['field' => 'family-name'],
            'email' => ['field' => 'email'],
            'phone' => ['field' => 'tel'],
            'zip' => ['field' => 'zip']
        ]
    ]
]
```

### Routing Function

```php
function routeToWaypoint($verticalConfig, $formData, $integrations) {
    $routing = $verticalConfig['routing']['waypoint'];

    // Build payload from field mapping
    $payload = [];
    foreach ($routing['field_mapping'] as $buyerField => $source) {
        if (isset($source['value'])) {
            $payload[$buyerField] = $source['value'];
        } elseif (isset($source['field'])) {
            $payload[$buyerField] = $formData[$source['field']] ?? '';
        }
    }

    // Send as form-encoded POST
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $integrations['waypoint']['endpoint'],
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($payload),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/x-www-form-urlencoded'
        ],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => $integrations['waypoint']['timeout']
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    curl_close($ch);

    return [
        'success' => $httpCode >= 200 && $httpCode < 300,
        'http_code' => $httpCode,
        'response' => $response,
        'error' => $error ?: null
    ];
}
```

---

## Field Mapping

Field mapping translates form field names to buyer field names.

### Mapping Types

#### Static Value

Always send a fixed value:

```php
'c1' => ['value' => 'GoQuoteRocket']

// Result: payload['c1'] = 'GoQuoteRocket'
```

#### Direct Field Mapping

Map a form field to a buyer field:

```php
'first_name' => ['field' => 'given-name']

// Form: given-name=John
// Result: payload['first_name'] = 'John'
```

#### Same-Name Mapping

When form and buyer field names match:

```php
'email' => ['field' => 'email']

// Form: email=john@example.com
// Result: payload['email'] = 'john@example.com'
```

### Complete Mapping Example

```php
'field_mapping' => [
    // Static values
    'c1' => ['value' => 'GoQuoteRocket'],      // Source name
    'c4' => ['value' => 47],                    // Offer ID
    'c10' => ['value' => 'auto'],               // Vertical

    // Contact info
    'first_name' => ['field' => 'given-name'],
    'last_name' => ['field' => 'family-name'],
    'email' => ['field' => 'email'],
    'phone' => ['field' => 'tel'],
    'zip' => ['field' => 'zip'],

    // Vertical-specific
    'homeowner' => ['field' => 'homeowner'],
    'currently_insured' => ['field' => 'currently_insured'],
    'age_range' => ['field' => 'age_range'],
    'military' => ['field' => 'military'],

    // Tracking
    'c2' => ['field' => 'aff_id'],
    'transaction_id' => ['field' => 'transaction_id'],
    'xxTrustedFormCertUrl' => ['field' => 'xxTrustedFormCertUrl']
]
```

### Mapping Function

```php
function mapFields(array $mapping, array $formData): array
{
    $payload = [];

    foreach ($mapping as $targetField => $source) {
        if (isset($source['value'])) {
            // Static value
            $payload[$targetField] = $source['value'];
        } elseif (isset($source['field'])) {
            // Map from form data
            $sourceField = $source['field'];
            $payload[$targetField] = $formData[$sourceField] ?? '';
        }
    }

    return $payload;
}
```

---

## Error Handling

### Error Codes

| Code | Description |
|------|-------------|
| `MISSING_VERTICAL` | Vertical not specified in request |
| `INVALID_VERTICAL` | Vertical config not found |
| `STEALTHLABZ_ERROR` | StealthLabz API error |
| `WAYPOINT_ERROR` | Waypoint API error |
| `CURL_ERROR` | Network/connection error |
| `TIMEOUT` | Request timed out |

### Error Response Format

```json
{
    "success": false,
    "error": "Human-readable error message",
    "code": "ERROR_CODE",
    "details": {
        "buyer": "stealthlabz",
        "http_code": 500,
        "response": "Internal Server Error"
    }
}
```

### Partial Success Handling

If one buyer fails but another succeeds:

```json
{
    "success": true,
    "vertical": "auto",
    "results": {
        "stealthlabz": {
            "success": true,
            "http_code": 200
        },
        "waypoint": {
            "success": false,
            "http_code": 500,
            "error": "Connection timeout"
        }
    },
    "redirect_url": "http://auto.goquoterocket.local/owl",
    "warnings": ["Waypoint submission failed"]
}
```

### Retry Logic

```php
function sendWithRetry($url, $payload, $options, $maxRetries = 2) {
    $attempts = 0;

    while ($attempts <= $maxRetries) {
        $result = sendRequest($url, $payload, $options);

        if ($result['success']) {
            return $result;
        }

        $attempts++;

        if ($attempts <= $maxRetries) {
            usleep($options['retry_delay'] * 1000);  // ms to μs
        }
    }

    return $result;
}
```

---

## Testing the API

### Local Testing with cURL

**Basic Submission**:

```bash
curl -X POST http://api.goquoterocket.local/submit.php \
  -d "vertical=auto" \
  -d "given-name=Test" \
  -d "family-name=User" \
  -d "email=test@example.com" \
  -d "zip=12345"
```

**With All Fields**:

```bash
curl -X POST http://api.goquoterocket.local/submit.php \
  -d "vertical=auto" \
  -d "given-name=John" \
  -d "family-name=Smith" \
  -d "email=john@example.com" \
  -d "tel=5555551234" \
  -d "zip=75001" \
  -d "homeowner=yes" \
  -d "currently_insured=yes" \
  -d "multiple_vehicles=no" \
  -d "age_range=25-49" \
  -d "military=no" \
  -d "newsletter_optin=on" \
  -d "aff_id=TEST123"
```

### Testing in Browser DevTools

1. Open DevTools (F12)
2. Go to Network tab
3. Complete the funnel form
4. Find the `submit.php` request
5. Check:
   - Request payload (Form Data)
   - Response (Preview tab)
   - Status code

### Debug Mode

Enable debug mode in `config/environment.php`:

```php
define('DEBUG_MODE', true);
```

Debug response includes:

```json
{
    "success": true,
    "debug": {
        "vertical_config": "loaded",
        "stealthlabz_payload": {...},
        "waypoint_payload": {...},
        "timing": {
            "stealthlabz_ms": 245,
            "waypoint_ms": 189,
            "total_ms": 434
        }
    }
}
```

### Webhook Testing with RequestBin

1. Create bin at [requestbin.com](https://requestbin.com)
2. Temporarily update webhook URL in `config/integrations.php`
3. Submit test form
4. Inspect payload in RequestBin

---

## Adding a New Buyer

### Step 1: Add Integration Config

In `config/integrations.php`:

```php
'newbuyer' => [
    'enabled' => true,
    'endpoint' => 'https://api.newbuyer.com/leads',
    'api_key' => 'YOUR_API_KEY',
    'timeout' => 30
]
```

### Step 2: Add Routing Config to Vertical

In `config/verticals/{vertical}.php`:

```php
'routing' => [
    // ... existing buyers ...

    'newbuyer' => [
        'enabled' => true,
        'field_mapping' => [
            'source' => ['value' => 'GoQuoteRocket'],
            'firstName' => ['field' => 'given-name'],
            'lastName' => ['field' => 'family-name'],
            'emailAddress' => ['field' => 'email'],
            'phoneNumber' => ['field' => 'tel']
        ]
    ]
]
```

### Step 3: Add Routing Function

In `api/submit.php`:

```php
function routeToNewBuyer($verticalConfig, $formData, $integrations) {
    $routing = $verticalConfig['routing']['newbuyer'];

    $payload = mapFields($routing['field_mapping'], $formData);

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $integrations['newbuyer']['endpoint'],
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $integrations['newbuyer']['api_key']
        ],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => $integrations['newbuyer']['timeout']
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return [
        'success' => $httpCode >= 200 && $httpCode < 300,
        'http_code' => $httpCode,
        'response' => $response
    ];
}
```

### Step 4: Call in Main Flow

```php
// In main submission logic
if ($verticalConfig['routing']['newbuyer']['enabled'] ?? false) {
    $results['newbuyer'] = routeToNewBuyer(
        $verticalConfig,
        $formData,
        $integrations
    );
}
```
