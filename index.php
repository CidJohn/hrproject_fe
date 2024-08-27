<?php

require_once './vendor/autoload.php';
include_once "./controllers/HomeController.php";

use hrproject_fe\Controller\HomeController;


$routes = [];

route('/', function () {
    $homepage = new HomeController();
    $homepage->index();
});

route('/contactus', function () {
    $contactus = new HomeController();
    $contactus->contactUs();
});

route('/about-us', function () {
    echo "About Us";
});

route('/404', function () {
    echo "Page not found";
});

function route(string $path, callable $callback)
{
    global $routes;
    $routes[$path] = $callback;
}

run();

function run()
{
    global $routes;
    $uri = $_SERVER['REQUEST_URI'];
    $found = false;
    foreach ($routes as $path => $callback) {
        if ($path !== $uri) continue;

        $found = true;
        $callback();
        break; // Stop after finding the first matching route
    }

    if (!$found) {
        $notFoundCallback = $routes['/404'];
        $notFoundCallback();
    }
}
