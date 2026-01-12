<?php
/**
 * Universal API Submit Handler
 *
 * Sends all form submissions to StealthLabz portal
 * Portal handles routing internally based on vertical
 */
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Load environment config
require_once __DIR__ . '/../config/environment.php';

// CORS headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

try {
    // Collect all form data (POST and GET)
    $formData = array_merge($_POST, $_GET);

    // Get vertical for response
    $vertical = $formData['vertical'] ?? 'unknown';

    // Load integrations config
    $integrations = require __DIR__ . '/../config/integrations.php';

    // Send to StealthLabz
    $result = sendToStealthLabz($formData, $integrations);

    // Return response
    echo json_encode([
        'success' => $result['success'],
        'vertical' => $vertical,
        'result' => $result,
        'redirect_url' => '/thank-you.php'
    ]);

} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}

/**
 * Send lead data to StealthLabz portal
 */
function sendToStealthLabz($formData, $integrations) {
    $webhookId = $integrations['stealthlabz']['webhook_id'];
    $url = $integrations['stealthlabz']['base_url'] . $webhookId;

    // Send all form data as JSON - portal handles field mapping
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($formData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_TIMEOUT, $integrations['stealthlabz']['timeout']);

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
