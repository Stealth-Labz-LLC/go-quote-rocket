<?php
namespace App\Core;

/**
 * Router Class
 *
 * Handles routing requests to appropriate controllers
 */
class Router {

    /**
     * Route a request to a controller action
     *
     * @param string $controller Controller name (without 'Controller' suffix)
     * @param string $action Action/method name
     * @param array $params Parameters to pass to the action
     * @return void
     */
    public static function route($controller, $action, $params = []) {
        $controllerClass = "App\\Controllers\\" . ucfirst($controller) . "Controller";

        if (!class_exists($controllerClass)) {
            self::error404("Controller not found: {$controllerClass}");
            return;
        }

        $controllerInstance = new $controllerClass();

        if (!method_exists($controllerInstance, $action)) {
            self::error404("Action not found: {$action}");
            return;
        }

        // Call the action with parameters
        call_user_func_array([$controllerInstance, $action], $params);
    }

    /**
     * Show 404 error page
     *
     * @param string $message Error message
     * @return void
     */
    public static function error404($message = '404 - Page Not Found') {
        http_response_code(404);
        echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background: #f9fafb;
            color: #1f2937;
        }
        .error-container {
            text-align: center;
            padding: 2rem;
        }
        h1 {
            font-size: 6rem;
            margin: 0;
            color: #1e40af;
        }
        p {
            font-size: 1.25rem;
            color: #6b7280;
        }
        a {
            color: #1e40af;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class='error-container'>
        <h1>404</h1>
        <p>{$message}</p>
        <p><a href='/'>← Go back home</a></p>
    </div>
</body>
</html>";
        exit;
    }

    /**
     * Parse URL path and return segments
     *
     * @return array URL segments
     */
    public static function getUrlSegments() {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = trim($path, '/');
        return $path ? explode('/', $path) : [];
    }

    /**
     * Get query parameters
     *
     * @return array Query parameters
     */
    public static function getQueryParams() {
        return $_GET;
    }

    /**
     * Redirect to URL
     *
     * @param string $url URL to redirect to
     * @param int $code HTTP status code (301 or 302)
     * @return void
     */
    public static function redirect($url, $code = 302) {
        http_response_code($code);
        header("Location: {$url}");
        exit;
    }
}
