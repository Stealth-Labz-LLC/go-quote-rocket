<?php
/**
 * GoQuoteRocket Universal Funnel Platform
 *
 * Single entry point for ALL verticals
 */

// Load environment configuration
require_once __DIR__ . '/../config/environment.php';

// Autoloader for classes
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

use App\Core\Router;
use App\Models\Vertical;

// Detect vertical from subdomain or query param
$vertical = Vertical::detect();

// Get the current path
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove the base path (for localhost/goquoterocket/public access)
$scriptName = dirname($_SERVER['SCRIPT_NAME']);
if ($scriptName !== '/') {
    $requestUri = str_replace($scriptName, '', $requestUri);
}

$path = trim($requestUri, '/');

// Remove .php extension if present
$path = preg_replace('/\.php$/', '', $path);

// Route based on path and vertical
if (!$vertical) {
    // No vertical detected - show homepage (vertical selector)
    Router::route('home', 'index');
    exit;
}

// Vertical detected - route to appropriate page
switch ($path) {
    case '':
    case 'index':
        // Landing page for this vertical
        Router::route('landing', 'show', [$vertical]);
        break;

    case 'flow':
        // Funnel flow page
        Router::route('flow', 'show', [$vertical]);
        break;

    case 'owl':
        // Offer wall (multiple offers)
        Router::route('offerWall', 'show', [$vertical, 'multiple']);
        break;

    case 'sow':
        // Single offer wall
        Router::route('offerWall', 'show', [$vertical, 'single']);
        break;

    // Legal Pages
    case 'terms':
    case 'privacy':
    case 'about':
    case 'contact':
        Router::route('legal', $path);
        break;

    default:
        // 404 for unknown paths
        Router::error404();
        break;
}
