<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\View;
use App\Models\Vertical;

/**
 * Offer Wall Controller
 *
 * Handles offer wall pages (OWL and SOW) for all verticals
 */
class OfferWallController extends Controller {

    /**
     * Show offer wall for a specific vertical
     *
     * @param string $vertical Vertical ID
     * @param string $type 'multiple' or 'single'
     * @return void
     */
    public function show($vertical, $type = 'multiple') {
        // Load vertical configuration
        $verticalConfig = Vertical::load($vertical);

        if (!$verticalConfig) {
            $this->error404("Vertical not found: {$vertical}");
        }

        // Load carriers for this vertical
        $carriers = Vertical::getCarriers($vertical);

        // Get user data from localStorage (will be accessed via JavaScript)
        // Or from query parameters if passed
        $userData = $_GET;

        // Filter carriers by eligibility if user data available
        if (!empty($userData)) {
            $carriers = Vertical::filterCarriersByEligibility($carriers, $userData);
        }

        // Load brand and tracking configurations
        $brand = $this->getBrandConfig();
        $tracking = $this->getTrackingConfig();

        // Get tracking parameters
        $trackingParams = $this->getTrackingParams();

        // Determine template based on type
        $template = $type === 'single' ? 'templates/single-offer' : 'templates/offer-wall';

        // Render the appropriate template
        View::render($template, [
            'vertical' => $verticalConfig,
            'carriers' => $carriers,
            'brand' => $brand,
            'tracking' => $tracking,
            'trackingParams' => $trackingParams,
            'offerType' => $type
        ]);
    }
}
