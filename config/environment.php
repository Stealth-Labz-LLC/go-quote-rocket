<?php
/**
 * Environment Configuration
 *
 * Change ENVIRONMENT to 'production' when deploying to live server
 */
// Auto-detect environment based on domain and path
$host = $_SERVER['HTTP_HOST'] ?? '';
$requestUri = $_SERVER['REQUEST_URI'] ?? '';

$isLocal = strpos($host, '.local') !== false ||
           strpos($host, 'localhost') !== false ||
           strpos($host, '127.0.0.1') !== false;

$isStaging = strpos($requestUri, '/staging/') === 0 || strpos($host, 'staging.') === 0;

// Detect staging path structure (e.g., /staging/public/)
$stagingBasePath = '';
if ($isStaging && strpos($requestUri, '/staging/public') === 0) {
    $stagingBasePath = '/staging/public';
} elseif ($isStaging && strpos($requestUri, '/staging/') === 0) {
    $stagingBasePath = '/staging';
}

define('ENVIRONMENT', $isLocal ? 'local' : ($isStaging ? 'staging' : 'production'));

// WHITE-LABEL SYSTEM: Set active brand
// Change this to switch entire platform branding instantly
// Brand config files are in: config/brands/{BRAND_NAME}.php
define('ACTIVE_BRAND', 'goquoterocket');

// Environment-specific settings
if (ENVIRONMENT === 'local') {
    // Local development
    define('BASE_DOMAIN', strpos($host, 'quoterocket.local') !== false ? 'quoterocket.local' : 'goquoterocket.local');
    define('USE_HTTPS', false);
    define('DEBUG_MODE', true);
    define('BASE_PATH', '/goquoterocket/public');
} elseif (ENVIRONMENT === 'staging') {
    // Staging environment (goquoterocket.com/staging/public/)
    define('BASE_DOMAIN', 'goquoterocket.com');
    define('USE_HTTPS', true);
    define('DEBUG_MODE', true);
    define('BASE_PATH', $stagingBasePath); // Dynamic based on URL structure
} else {
    // Production
    define('BASE_DOMAIN', 'goquoterocket.com');
    define('USE_HTTPS', true);
    define('DEBUG_MODE', false);
    define('BASE_PATH', '');
}
/**
 * Build URLs for the application
 *
 * Local/Staging: Uses path-based routing (BASE_PATH + path)
 * Production: Uses subdomain-based routing (subdomain.domain.com)
 *
 * @param string $subdomain 'www', 'cdn', 'api', or vertical subdomain
 * @param string $path The path to append (e.g., '/flow?vertical=auto')
 * @return string The full URL
 *
 * @version 2.1 - Fixed staging URL generation with proper path handling
 */
function buildUrl($subdomain = 'www', $path = '') {
    // For local and staging: ignore subdomain, use path-based routing
    if (ENVIRONMENT === 'local' || ENVIRONMENT === 'staging') {
        $url = '';

        if ($subdomain === 'cdn') {
            $url = BASE_PATH . '/cdn' . $path;
        } elseif ($subdomain === 'api') {
            // API is at sibling level to public: /staging/api/
            $url = str_replace('/public', '/api', BASE_PATH) . $path;
        } else {
            // For www and vertical subdomains, use base path + path
            $url = BASE_PATH . $path;
        }

        // Debug logging for staging environment
        if (DEBUG_MODE && ENVIRONMENT === 'staging') {
            error_log("buildUrl() called - subdomain: $subdomain, path: $path, result: $url");
        }

        return $url;
    }

    // Production: use actual subdomains
    $protocol = USE_HTTPS ? 'https://' : 'http://';
    $domain = ($subdomain && $subdomain !== 'www')
        ? $subdomain . '.' . BASE_DOMAIN
        : BASE_DOMAIN;
    return $protocol . $domain . $path;
}
