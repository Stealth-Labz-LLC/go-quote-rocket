<?php
namespace App\Controllers;

use App\Core\View;
use App\Models\Brand;

/**
 * Legal Controller
 *
 * Handles legal pages (Terms, Privacy, About, Contact)
 */
class LegalController {

    /**
     * Show Terms of Service page
     */
    public function terms() {
        $this->renderLegalPage('terms');
    }

    /**
     * Show Privacy Policy page
     */
    public function privacy() {
        $this->renderLegalPage('privacy');
    }

    /**
     * Show About page
     */
    public function about() {
        $this->renderLegalPage('about');
    }

    /**
     * Show Contact page
     */
    public function contact() {
        $this->renderLegalPage('contact');
    }

    /**
     * Render a legal page
     *
     * @param string $page Page name
     */
    private function renderLegalPage($page) {
        // Get brand configuration
        $brand = Brand::getActiveBrand();

        // Include legal page CSS
        $brand['additional_css'] = [buildUrl('cdn', '/css/pages/legal.css')];

        // Render the legal page
        View::render("legal/{$page}", compact('brand'));
    }
}
