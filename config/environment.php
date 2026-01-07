<?php
/**
 * Environment Configuration
 *
 * Change ENVIRONMENT to 'production' when deploying to live server
 */

// Auto-detect environment based on domain
$host = $_SERVER['HTTP_HOST'] ?? '';
$isLocal = strpos($host, '.local') !== false ||
           strpos($host, 'localhost') !== false ||
           strpos($host, '127.0.0.1') !== false;

define('ENVIRONMENT', $isLocal ? 'local' : 'production');

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
} else {
    // Production
    define('BASE_DOMAIN', 'goquoterocket.com');
    define('USE_HTTPS', true);
    define('DEBUG_MODE', false);
}

// Helper function to build URLs
function buildUrl($subdomain = 'www', $path = '') {
    // Detect if we're running on localhost
    $host = $_SERVER['HTTP_HOST'] ?? '';
    $isLocalhost = strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false;

    if ($isLocalhost) {
        // Use localhost paths instead of subdomains
        if ($subdomain === 'cdn') {
            return '/goquoterocket/public/cdn' . $path;
        } elseif ($subdomain === 'api') {
            return '/goquoterocket/api' . $path;
        } else {
            return '/goquoterocket/public' . $path;
        }
    }

    // Production: use subdomains
    $protocol = USE_HTTPS ? 'https://' : 'http://';
    $domain = $subdomain ? $subdomain . '.' . BASE_DOMAIN : BASE_DOMAIN;
    return $protocol . $domain . $path;
}
