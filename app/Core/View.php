<?php
namespace App\Core;

/**
 * View Class
 *
 * Handles rendering of templates
 */
class View {

    /**
     * Render a template file
     *
     * @param string $template Template path (relative to views/)
     * @param array $data Data to pass to the template
     * @return void
     */
    public static function render($template, $data = []) {
        $templatePath = __DIR__ . '/../../views/' . $template . '.php';

        if (!file_exists($templatePath)) {
            http_response_code(500);
            echo "Template not found: {$template}";
            exit;
        }

        // Extract data to variables
        extract($data);

        // Start output buffering
        ob_start();

        // Include the template
        require $templatePath;

        // Get the buffered content and clean buffer
        $content = ob_get_clean();

        // Output the content
        echo $content;
    }

    /**
     * Render a component
     *
     * @param string $component Component name
     * @param array $data Data to pass to the component
     * @return void
     */
    public static function component($component, $data = []) {
        $componentPath = __DIR__ . '/../../views/components/' . $component . '.php';

        if (!file_exists($componentPath)) {
            echo "<!-- Component not found: {$component} -->";
            return;
        }

        // Extract data to variables
        extract($data);

        // Include the component
        require $componentPath;
    }
    /**
     * Escape HTML for safe output
     *
     * @param string $string String to escape
     * @return string Escaped string
     */
    public static function escape($string) {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Build asset URL (for CDN)
     *
     * @param string $path Asset path
     * @return string Full asset URL
     */
    public static function asset($path) {
        $protocol = USE_HTTPS ? 'https://' : 'http://';
        return $protocol . 'cdn.' . BASE_DOMAIN . '/' . ltrim($path, '/');
    }
}
