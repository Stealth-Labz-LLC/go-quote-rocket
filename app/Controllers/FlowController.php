<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\View;
use App\Models\Vertical;
/**
 * Flow Controller
 *
 * Handles funnel flow pages for all verticals
 */
class FlowController extends Controller {

    /**
     * Show funnel flow for a specific vertical
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

        // Render the flow template
        View::render('templates/flow', [
            'vertical' => $verticalConfig,
            'brand' => $brand,
            'tracking' => $tracking,
            'trackingParams' => $trackingParams
        ]);
    }
}
