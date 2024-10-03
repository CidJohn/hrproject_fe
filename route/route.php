<?php

require './vendor/autoload.php';
include_once "./controllers/HomeController.php";
include_once './controllers/AuthController.php';

use Controller\AuthController;
use Controller\HomeController;

$jsonFilePath =  './assets/content/object.json';
$routes = [];


route('/', function () use ($jsonFilePath) {
    $homepage = new HomeController($jsonFilePath);
    $homepage->index();
});

route('/contactus', function () use ($jsonFilePath) {
    $contactus = new HomeController($jsonFilePath);
    $contactus->contactUs();
});

route('/about-us', function () {
    echo "About Us";
});

route('/404', function () use ($jsonFilePath) {
    $notfound = new HomeController($jsonFilePath);
    $notfound->notFound();
});

route('/signin', function () {
    $auth = new AuthController();
    $auth->signinAuth();
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
