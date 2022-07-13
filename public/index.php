<?php

declare(strict_types=1);

use App\Controller\MainController;

require_once dirname(__DIR__).'/vendor/autoload.php';

$controller = new MainController();
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $uri) {
    echo $controller->index();
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}
