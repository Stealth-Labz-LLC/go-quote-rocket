<?php

namespace App\Models;

/**
 * Brand Model
 *
 * Handles loading and accessing brand configuration.
 * Brand configs are stored in config/brands/{brand_name}.php
 */
class Brand
{
    /**
     * Cached active brand configuration
     */
    private static ?array $activeBrand = null;

    /**
     * Get the active brand configuration
     *
     * @return array Brand configuration array
     */
    public static function getActiveBrand(): array
    {
        if (self::$activeBrand === null) {
            self::$activeBrand = self::load(ACTIVE_BRAND);
        }
        return self::$activeBrand;
    }

    /**
     * Load a specific brand configuration
     *
     * @param string $brandName The brand identifier
     * @return array Brand configuration array
     */
    public static function load(string $brandName): array
    {
        $brandFile = __DIR__ . '/../../config/brands/' . $brandName . '.php';

        if (file_exists($brandFile)) {
            return require $brandFile;
        }

        // Return minimal default brand if config not found
        return [
            'company_name' => 'GoQuoteRocket',
            'tagline' => 'Compare. Save. Protect.',
            'phone' => '(904) 942-5529',
            'email' => 'support@goquoterocket.com',
            'colors' => [
                'primary' => '#002e6a',
                'secondary' => '#FF6100',
            ],
            'fonts' => [
                'primary' => 'DM Sans',
                'secondary' => 'Manrope',
            ],
            'legal' => [
                'company_legal_name' => 'GoQuoteRocket LLC',
            ]
        ];
    }

    /**
     * Get a specific value from the active brand config
     *
     * @param string $key Dot notation key (e.g., 'colors.primary')
     * @param mixed $default Default value if key not found
     * @return mixed The config value or default
     */
    public static function get(string $key, $default = null)
    {
        $brand = self::getActiveBrand();

        // Support dot notation for nested values
        $keys = explode('.', $key);
        $value = $brand;

        foreach ($keys as $k) {
            if (!isset($value[$k])) {
                return $default;
            }
            $value = $value[$k];
        }

        return $value;
    }

    /**
     * Get all available brand names
     *
     * @return array List of brand identifiers
     */
    public static function getAll(): array
    {
        $brandsDir = __DIR__ . '/../../config/brands/';
        $brands = [];

        if (is_dir($brandsDir)) {
            foreach (glob($brandsDir . '*.php') as $file) {
                $brands[] = basename($file, '.php');
            }
        }

        return $brands;
    }

    /**
     * Check if a brand exists
     *
     * @param string $brandName The brand identifier
     * @return bool Whether the brand config exists
     */
    public static function exists(string $brandName): bool
    {
        $brandFile = __DIR__ . '/../../config/brands/' . $brandName . '.php';
        return file_exists($brandFile);
    }

    /**
     * Clear the cached brand (useful for testing)
     */
    public static function clearCache(): void
    {
        self::$activeBrand = null;
    }
}
