<?php
namespace App\Models;

/**
 * Vertical Model
 *
 * Handles detection and loading of vertical configurations
 */
class Vertical {

    /**
     * Detect vertical from subdomain or query parameter
     *
     * @return string|null Vertical ID (auto, life, health, etc.)
     */
    public static function detect() {
        // First check query parameter
        if (isset($_GET['vertical'])) {
            $vertical = strtolower(trim($_GET['vertical']));
            if (self::exists($vertical)) {
                return $vertical;
            }
        }

        // Then check subdomain
        $host = $_SERVER['HTTP_HOST'] ?? '';
        $parts = explode('.', $host);

        // Check for multi-level subdomains (e.g., auto.funnel.quoterocket.local)
        if (count($parts) >= 3) {
            $firstLevel = $parts[0];
            $secondLevel = $parts[1];

            // If second level is 'funnel', check first level for vertical
            if ($secondLevel === 'funnel') {
                if (self::exists($firstLevel)) {
                    return $firstLevel;
                }
            }
        }

        // Check single subdomain (e.g., auto.goquoterocket.local)
        if (count($parts) >= 2) {
            $subdomain = $parts[0];

            // Skip 'www', 'api', 'cdn', 'funnel'
            if (!in_array($subdomain, ['www', 'api', 'cdn', 'funnel'])) {
                if (self::exists($subdomain)) {
                    return $subdomain;
                }
            }
        }

        return null;
    }

    /**
     * Check if vertical configuration exists
     *
     * @param string $vertical Vertical ID
     * @return bool
     */
    public static function exists($vertical) {
        $configPath = __DIR__ . '/../../config/verticals/' . $vertical . '.php';
        return file_exists($configPath);
    }

    /**
     * Load vertical configuration
     *
     * @param string $vertical Vertical ID
     * @return array|null Configuration array or null if not found
     */
    public static function load($vertical) {
        $configPath = __DIR__ . '/../../config/verticals/' . $vertical . '.php';

        if (!file_exists($configPath)) {
            return null;
        }

        $config = require $configPath;

        // Check if vertical is enabled
        if (isset($config['enabled']) && !$config['enabled']) {
            return null;
        }

        return $config;
    }

    /**
     * Get all available verticals
     *
     * @return array Array of vertical configurations
     */
    public static function getAll() {
        $verticalsDir = __DIR__ . '/../../config/verticals/';
        $verticals = [];

        if (!is_dir($verticalsDir)) {
            return $verticals;
        }

        $files = scandir($verticalsDir);

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                $verticalId = pathinfo($file, PATHINFO_FILENAME);
                $config = self::load($verticalId);

                if ($config && isset($config['enabled']) && $config['enabled']) {
                    $verticals[$verticalId] = $config;
                }
            }
        }

        return $verticals;
    }

    /**
     * Get carriers for a specific vertical
     *
     * @param string $vertical Vertical ID
     * @return array Array of carrier configurations
     */
    public static function getCarriers($vertical) {
        $config = self::load($vertical);

        if (!$config || !isset($config['carriers'])) {
            return [];
        }

        // Filter enabled carriers and sort by priority
        $carriers = array_filter($config['carriers'], function($carrier) {
            return isset($carrier['enabled']) && $carrier['enabled'];
        });

        usort($carriers, function($a, $b) {
            $priorityA = $a['priority'] ?? 999;
            $priorityB = $b['priority'] ?? 999;
            return $priorityA - $priorityB;
        });

        return $carriers;
    }

    /**
     * Get carrier URL with tracking parameters
     *
     * @param string $vertical Vertical ID
     * @param string $carrierUrlKey Carrier URL key
     * @param array $params Additional URL parameters
     * @return string|null Carrier URL or null if not found
     */
    public static function getCarrierUrl($vertical, $carrierUrlKey, $params = []) {
        $config = self::load($vertical);

        if (!$config || !isset($config['carrier_urls'][$carrierUrlKey])) {
            return null;
        }

        $baseUrl = $config['carrier_urls'][$carrierUrlKey];

        // Append additional parameters
        if (!empty($params)) {
            $separator = strpos($baseUrl, '?') !== false ? '&' : '?';
            $baseUrl .= $separator . http_build_query($params);
        }

        return $baseUrl;
    }

    /**
     * Filter carriers by eligibility criteria
     *
     * @param array $carriers Array of carriers
     * @param array $userData User form data
     * @return array Filtered carriers
     */
    public static function filterCarriersByEligibility($carriers, $userData) {
        return array_filter($carriers, function($carrier) use ($userData) {
            // If no eligibility rules, always show
            if (!isset($carrier['eligibility'])) {
                return true;
            }

            // Check each eligibility rule
            foreach ($carrier['eligibility'] as $field => $requiredValue) {
                if (!isset($userData[$field]) || $userData[$field] !== $requiredValue) {
                    return false;
                }
            }

            return true;
        });
    }
}
