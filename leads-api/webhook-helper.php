<?php
/**
 * Webhook Helper for Go Quote Rocket Lead Submission (US Market)
 * Sends leads to Stealth Labz portal
 */

define('WEBHOOK_URL', 'https://portal.stealthlabz.com/source/quote_rocket/aa919ce5-e028-11f0-a113-861da8dd4c12');

/**
 * Format phone number to E.164 format for United States
 * @param string $phone - Raw phone number
 * @return string - Formatted phone number (+1...)
 */
function formatPhoneE164($phone) {
    // Remove all non-numeric characters
    $phone = preg_replace('/[^0-9]/', '', $phone);

    // If starts with 1 and is 11 digits, it's already correct
    if (strlen($phone) === 11 && substr($phone, 0, 1) === '1') {
        return '+' . $phone;
    }

    // If 10 digits, prepend 1
    if (strlen($phone) === 10) {
        $phone = '1' . $phone;
    }

    // If doesn't start with 1, prepend it
    if (substr($phone, 0, 1) !== '1') {
        $phone = '1' . $phone;
    }

    return '+' . $phone;
}

/**
 * Format date to ISO 8601 format
 * @param string $date - Date string
 * @return string - ISO 8601 formatted date
 */
function formatDateISO8601($date = null) {
    if ($date) {
        $dateTime = new DateTime($date);
    } else {
        $dateTime = new DateTime();
    }
    return $dateTime->format('c'); // ISO 8601 format
}

/**
 * Send lead to webhook
 * @param array $data - Form data
 * @param string $leadType - Type of lead (car-insurance, life-cover, etc.)
 * @param array $productSpecificFields - Product-specific fields to include in notes
 * @return array - Response from webhook
 */
function sendToWebhook($data, $leadType, $productSpecificFields = []) {
    // Build notes from product-specific fields
    $notesArray = ["Lead Type: " . $leadType, "Market: US"];
    foreach ($productSpecificFields as $key => $value) {
        if (!empty($value) && $value !== 'N/A' && $value !== 'null' && $value !== 'false') {
            $notesArray[] = ucfirst(str_replace('_', ' ', $key)) . ": " . $value;
        }
    }

    // Add affiliate tracking to notes
    if (!empty($data['aff_id'])) {
        $notesArray[] = "Affiliate ID: " . $data['aff_id'];
    }
    if (!empty($data['aff_sub'])) {
        $notesArray[] = "Aff Sub: " . $data['aff_sub'];
    }
    if (!empty($data['aff_sub2'])) {
        $notesArray[] = "Aff Sub2: " . $data['aff_sub2'];
    }
    if (!empty($data['aff_sub3'])) {
        $notesArray[] = "Aff Sub3: " . $data['aff_sub3'];
    }
    if (!empty($data['offer_id'])) {
        $notesArray[] = "Offer ID: " . $data['offer_id'];
    }

    $notes = implode("; ", $notesArray);

    // Build the webhook payload
    $payload = [
        'url' => !empty($data['optinurl']) ? $data['optinurl'] : $_SERVER['HTTP_REFERER'],
        'first_name' => trim($data['given-name'] ?? $data['firstname'] ?? ''),
        'last_name' => trim($data['family-name'] ?? $data['lastname'] ?? ''),
        'phone' => formatPhoneE164($data['phone'] ?? $data['phone1'] ?? ''),
        'email' => trim($data['email'] ?? ''),
        'country' => 'US',
        'city' => $data['shippingCity'] ?? $data['city'] ?? '',
        'interest_tags' => [$leadType],
        'preferred_contact' => 'both',
        'language' => 'en',
        'timezone' => 'America/New_York',
        'signup_date' => formatDateISO8601(),
        'utm_campaign' => $data['aff_sub'] ?? '',
        'consent' => true,
        'consent_timestamp' => formatDateISO8601(),
        'consent_source' => 'signup_form',
        'ip_address' => $_SERVER['REMOTE_ADDR'] ?? '',
        'referrer' => $_SERVER['HTTP_REFERER'] ?? '',
        'notes' => $notes
    ];

    // Remove empty values (except required fields)
    $requiredFields = ['url', 'first_name', 'last_name', 'phone', 'email', 'country', 'consent'];
    foreach ($payload as $key => $value) {
        if (empty($value) && !in_array($key, $requiredFields)) {
            unset($payload[$key]);
        }
    }

    // Send to webhook
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => WEBHOOK_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Accept: application/json'
        ],
    ]);

    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $error = curl_error($curl);
    curl_close($curl);

    return [
        'success' => ($httpCode >= 200 && $httpCode < 300),
        'http_code' => $httpCode,
        'response' => $response,
        'error' => $error,
        'payload' => $payload
    ];
}

/**
 * Validate required fields before sending
 * @param array $data - Form data
 * @return array - Validation result with 'valid' boolean and 'errors' array
 */
function validateRequiredFields($data) {
    $errors = [];

    $firstName = trim($data['given-name'] ?? $data['firstname'] ?? '');
    $lastName = trim($data['family-name'] ?? $data['lastname'] ?? '');
    $phone = $data['phone'] ?? $data['phone1'] ?? '';
    $email = trim($data['email'] ?? '');

    if (empty($firstName)) {
        $errors[] = 'First name is required';
    }
    if (empty($lastName)) {
        $errors[] = 'Last name is required';
    }
    if (empty($phone)) {
        $errors[] = 'Phone number is required';
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required';
    }

    return [
        'valid' => empty($errors),
        'errors' => $errors
    ];
}
