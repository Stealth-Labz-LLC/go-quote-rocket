<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\View;
use App\Models\Vertical;

/**
 * Landing Controller
 *
 * Handles landing pages for all verticals
 */
class LandingController extends Controller {

    /**
     * Show landing page for a specific vertical
     *
     * @param string $vertical Vertical ID
     * @return void
     */
    public function show($vertical) {
        // Load vertical configuration
        $verticalConfig = Vertical::load($vertical);

        if (!$verticalConfig) {
            $this->error404("Vertical not found: {$vertical}");
        }

        // Load brand and tracking configurations
        $brand = $this->getBrandConfig();
        $tracking = $this->getTrackingConfig();

        // Get tracking parameters from URL
        $trackingParams = $this->getTrackingParams();

        // Build query string for CTA button
        $queryString = $this->buildTrackingQueryString();

        // Render the landing template
        View::render('templates/landing', [
            'vertical' => $verticalConfig,
            'brand' => $brand,
            'tracking' => $tracking,
            'trackingParams' => $trackingParams,
            'queryString' => $queryString
        ]);
    }
}
