<?php
/**
 * Universal API Submit Handler
 *
 * Handles form submissions for ALL verticals
 */
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 0);
error_log('API submit called');

// Load environment config
require_once __DIR__ . '/../config/environment.php';

// CORS - restrict to known origins in production
$allowedOrigins = [
    'https://goquoterocket.com',
    'https://auto.goquoterocket.com',
    'https://life.goquoterocket.com',
    'https://medicare.goquoterocket.com',
    'https://creditcard.goquoterocket.com',
    'https://staging.goquoterocket.com',
];

// Allow all origins in local/staging for easier testing
if (ENVIRONMENT === 'local' || ENVIRONMENT === 'staging') {
    header('Access-Control-Allow-Origin: *');
} else {
    $origin = $_SERVER['HTTP_ORIGIN'] ?? '';
    if (in_array($origin, $allowedOrigins)) {
        header('Access-Control-Allow-Origin: ' . $origin);
    }
}

header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Autoloader
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/../app/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

use App\Models\Vertical;

try {
    // Get form data
    $vertical = $_POST['vertical'] ?? $_GET['vertical'] ?? null;

    if (!$vertical) {
        throw new Exception('Vertical not specified');
    }

    // Load vertical config
    $config = Vertical::load($vertical);
    if (!$config) {
        throw new Exception('Invalid vertical');
    }

    // Collect all form data
    $formData = array_merge($_POST, $_GET);

    // Load integrations config
    $integrations = require __DIR__ . '/../config/integrations.php';

    $results = [];

    // Route to StealthLabz
    if (isset($config['routing']['stealthlabz']) && $config['routing']['stealthlabz']['enabled']) {
        $stealthLabzResult = routeToStealthLabz($config, $formData, $integrations);
        $results['stealthlabz'] = $stealthLabzResult;
    }

    // Determine redirect URL
    $redirectPath = $config['flow']['redirect_type'] === 'sow' ? '/sow' : '/owl';
    $redirectUrl = buildUrl($config['subdomain'], $redirectPath);

    // Return success response
    echo json_encode([
        'success' => true,
        'vertical' => $vertical,
        'results' => $results,
        'redirect_url' => $redirectUrl
    ]);

} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}

/**
 * Route lead to StealthLabz
 */
function routeToStealthLabz($config, $formData, $integrations) {
    $routing = $config['routing']['stealthlabz'];
    $webhookKey = $routing['webhook_key'];
    $webhookId = $integrations['stealthlabz']['webhooks'][$webhookKey] ?? null;

    if (!$webhookId) {
        return ['success' => false, 'error' => 'Webhook ID not found'];
    }

    // Map fields
    $payload = [];
    foreach ($routing['field_mapping'] as $targetField => $mapping) {
        if (isset($mapping['value'])) {
            $payload[$targetField] = $mapping['value'];
        } elseif (isset($mapping['field']) && isset($formData[$mapping['field']])) {
            $payload[$targetField] = $formData[$mapping['field']];
        }
    }

    // Send to StealthLabz
    $url = $integrations['stealthlabz']['base_url'] . $webhookId;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_TIMEOUT, $integrations['stealthlabz']['timeout']);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return [
        'success' => $httpCode >= 200 && $httpCode < 300,
        'http_code' => $httpCode,
        'response' => $response
    ];
}

