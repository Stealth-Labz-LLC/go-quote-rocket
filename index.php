<?php
/**
 * Root Redirect
 *
 * This file redirects all root-level access to the public/ directory
 * Needed for staging deployment where entire project is in /public_html/staging/
 */

// Get the current request URI
$requestUri = $_SERVER['REQUEST_URI'];

// If we're already in /public/, don't redirect (prevents loops)
if (strpos($requestUri, '/public/') !== false) {
    // This shouldn't happen, but just in case
    http_response_code(404);
    echo '404 - Not Found';
    exit;
}

// Build the redirect URL to /public/
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];

// Extract just the path after the current directory
// For example: /staging/ becomes /staging/public/
// Get the base path (e.g., /staging/)
$scriptName = dirname($_SERVER['SCRIPT_NAME']);
$newPath = rtrim($scriptName, '/') . '/public/';

// Redirect to public/
header("Location: {$protocol}://{$host}{$newPath}");
exit;
