<?php
namespace App\Core;

/**
 * Base Controller Class
 *
 * All controllers extend this class
 */
class Controller {

    /**
     * Load a configuration file
     *
     * @param string $name Configuration name (without .php extension)
     * @return array Configuration array
     */
    protected function loadConfig($name) {
        $configPath = __DIR__ . '/../../config/' . $name . '.php';

        if (!file_exists($configPath)) {
            return [];
        }

        return require $configPath;
    }

    /**
     * Get brand configuration
     *
     * @return array Brand configuration
     */
    protected function getBrandConfig() {
        $brandFile = __DIR__ . '/../../config/brands/' . ACTIVE_BRAND . '.php';

        if (!file_exists($brandFile)) {
            throw new \Exception("Brand config not found: " . ACTIVE_BRAND);
        }

        return require $brandFile;
    }

    /**
     * Get tracking configuration
     *
     * @return array Tracking configuration
     */
    protected function getTrackingConfig() {
        return $this->loadConfig('tracking');
    }

    /**
     * Get integrations configuration
     *
     * @return array Integrations configuration
     */
    protected function getIntegrationsConfig() {
        return $this->loadConfig('integrations');
    }

    /**
     * Show error page
     *
     * @param string $message Error message
     * @param int $code HTTP status code
     * @return void
     */
    protected function error($message, $code = 500) {
        http_response_code($code);
        echo $message;
        exit;
    }

    /**
     * Show 404 error page
     *
     * @param string $message Error message
     * @return void
     */
    protected function error404($message = 'Page Not Found') {
        Router::error404($message);
    }

    /**
     * Redirect to URL
     *
     * @param string $url URL to redirect to
     * @param int $code HTTP status code
     * @return void
     */
    protected function redirect($url, $code = 302) {
        Router::redirect($url, $code);
    }

    /**
     * Get URL tracking parameters from request
     *
     * @return array Tracking parameters
     */
    protected function getTrackingParams() {
        return [
            'aff_id' => $_GET['aff_id'] ?? '',
            'offer_id' => $_GET['offer_id'] ?? '',
            'aff_sub' => $_GET['aff_sub'] ?? '',
            'aff_sub2' => $_GET['aff_sub2'] ?? '',
            'aff_sub3' => $_GET['aff_sub3'] ?? '',
            'transaction_id' => $_GET['transaction_id'] ?? '',
        ];
    }

    /**
     * Build tracking query string
     *
     * @param array $additionalParams Additional parameters to include
     * @return string Query string
     */
    protected function buildTrackingQueryString($additionalParams = []) {
        $params = array_merge($this->getTrackingParams(), $additionalParams);
        $params = array_filter($params); // Remove empty values
        return http_build_query($params);
    }
}
