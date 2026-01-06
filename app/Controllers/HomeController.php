<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\View;
use App\Models\Vertical;

/**
 * Home Controller
 *
 * Handles the main homepage (vertical selector)
 */
class HomeController extends Controller {

    /**
     * Show homepage with all verticals
     *
     * @return void
     */
    public function index() {
        // Get all enabled verticals
        $verticals = Vertical::getAll();

        // Load brand configuration
        $brand = $this->getBrandConfig();
        $tracking = $this->getTrackingConfig();

        // Render homepage template
        View::render('templates/home', [
            'verticals' => $verticals,
            'brand' => $brand,
            'tracking' => $tracking
        ]);
    }
}
