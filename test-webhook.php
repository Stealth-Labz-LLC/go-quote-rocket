<?php
/**
 * Webhook Test Script for GoQuoteRocket
 * Run: php test-webhook.php
 */

echo "=== GoQuoteRocket Webhook Test ===\n\n";

$webhookUrl = 'https://portal.stealthlabz.com/source/leadgen/aa919ce5-e028-11f0-a113-861da8dd4c12';

echo "Webhook URL: $webhookUrl\n\n";

$testPayload = [
    'url' => 'https://goquoterocket.com/test-page',
    'first_name' => 'Test',
    'last_name' => 'User',
    'phone' => '+15551234567',
    'email' => 'test@example.com',
    'country' => 'US',
    'zip_code' => '12345',
    'interest_tags' => ['test'],
    'preferred_contact' => 'both',
    'language' => 'en',
    'timezone' => 'America/New_York',
    'signup_date' => date('c'),
    'consent' => true,
    'consent_timestamp' => date('c'),
    'consent_source' => 'signup_form',
    'consent_text' => 'By clicking "Get My Quotes", I agree to receive calls and texts about insurance plans, including via automated technology, at the number provided. Consent is not required to purchase.',
    'ip_address' => '127.0.0.1',
    'user_agent' => 'Webhook Test Script',
    'referrer' => 'https://goquoterocket.com',
    'notes' => 'Product: test; This is a TEST submission - please ignore'
];

echo "Sending test payload...\n";
echo "Payload:\n" . json_encode($testPayload, JSON_PRETTY_PRINT) . "\n\n";

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $webhookUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($testPayload),
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Accept: application/json'
    ],
]);

$response = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$error = curl_error($curl);
curl_close($curl);

echo "=== RESULT ===\n";
echo "HTTP Code: $httpCode\n";

if ($error) {
    echo "cURL Error: $error\n";
}

echo "Response: $response\n\n";

if ($httpCode >= 200 && $httpCode < 300) {
    echo "SUCCESS! Webhook returned $httpCode\n";
} else {
    echo "FAILED! Expected 2xx, got $httpCode\n";
}
