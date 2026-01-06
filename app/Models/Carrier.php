<?php

namespace App\Models;

/**
 * Carrier Model
 *
 * Provides access to central carriers database
 * Filters carriers by vertical and formats for display
 */
class Carrier
{
    private static $carriers = null;

    /**
     * Load carriers from config file
     *
     * @return array
     */
    private static function loadCarriers(): array
    {
        if (self::$carriers === null) {
            self::$carriers = require __DIR__ . '/../../config/carriers.php';
        }
        return self::$carriers;
    }

    /**
     * Get all carriers for a specific vertical
     *
     * @param string $verticalId Vertical ID (auto, life, medicare, etc.)
     * @param int|null $limit Optional limit on number of carriers
     * @return array Array of carriers
     */
    public static function getForVertical(string $verticalId, ?int $limit = null): array
    {
        $carriers = self::loadCarriers();
        $filtered = [];

        foreach ($carriers as $id => $carrier) {
            if (in_array($verticalId, $carrier['verticals'])) {
                $filtered[$id] = array_merge($carrier, ['id' => $id]);
            }
        }

        if ($limit !== null) {
            $filtered = array_slice($filtered, 0, $limit);
        }

        return $filtered;
    }

    /**
     * Get a single carrier by ID
     *
     * @param string $carrierId Carrier ID
     * @return array|null Carrier data or null if not found
     */
    public static function getById(string $carrierId): ?array
    {
        $carriers = self::loadCarriers();

        if (isset($carriers[$carrierId])) {
            return array_merge($carriers[$carrierId], ['id' => $carrierId]);
        }

        return null;
    }

    /**
     * Get all carriers
     *
     * @return array All carriers
     */
    public static function getAll(): array
    {
        $carriers = self::loadCarriers();
        $result = [];

        foreach ($carriers as $id => $carrier) {
            $result[$id] = array_merge($carrier, ['id' => $id]);
        }

        return $result;
    }

    /**
     * Get carrier logo URL
     *
     * @param string $carrierId Carrier ID
     * @param string $type 'color' or 'white' (default: color)
     * @return string|null Logo URL or null if not found
     */
    public static function getLogoUrl(string $carrierId, string $type = 'color'): ?string
    {
        $carrier = self::getById($carrierId);

        if (!$carrier) {
            return null;
        }

        // Use logo_white if available and requested
        if ($type === 'white' && isset($carrier['logo_white'])) {
            $logo = $carrier['logo_white'];
        } else {
            $logo = $carrier['logo'];
        }

        return buildUrl('cdn', '/images/carriers/' . $logo);
    }
}
