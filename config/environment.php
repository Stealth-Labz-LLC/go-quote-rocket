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
    // Staging environment (staging.goquoterocket.com subdomain)
    define('BASE_DOMAIN', 'goquoterocket.com');
    define('USE_HTTPS', true);
    define('DEBUG_MODE', true);
    define('BASE_PATH', ''); // Subdomain serves from root
} else {
    // Production
    define('BASE_DOMAIN', 'goquoterocket.com');
    define('USE_HTTPS', true);
    define('DEBUG_MODE', false);
    define('BASE_PATH', '');
}
// Helper function to build URLs
function buildUrl($subdomain = 'www', $path = '') {
    if (ENVIRONMENT === 'local') {
        // Local: use localhost paths instead of subdomains
        if ($subdomain === 'cdn') {
            return BASE_PATH . '/cdn' . $path;
        } elseif ($subdomain === 'api') {
            return str_replace('/public', '/api', BASE_PATH) . $path;
        } else {
            return BASE_PATH . $path;
        }
    } elseif (ENVIRONMENT === 'staging') {
        // Staging: subdomain staging.goquoterocket.com - serve assets from same domain
        if ($subdomain === 'cdn') {
            // Serve CDN assets from /images, /css, /js folders on staging subdomain
            return $path;
        } elseif ($subdomain === 'api') {
            return '/api' . $path;
        } else {
            return $path;
        }
    } else {
        // Production: use actual subdomains
        $protocol = USE_HTTPS ? 'https://' : 'http://';
        $domain = $subdomain ? $subdomain . '.' . BASE_DOMAIN : BASE_DOMAIN;
        return $protocol . $domain . $path;
    }
}
