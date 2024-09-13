<?php

namespace Controller;

use Model\HomeModel;

include_once "./models/HomeModel.php";

class HomeController
{
    public function index()
    {
        $welcome = new HomeModel();
        $data = $welcome->getData();
        $username = $welcome->getUser();
        include __DIR__ . '/../templates/pages/Homepage/Homepage.php';
    }
    public function contactUs()
    {
        $welcome = new HomeModel();
        $data = $welcome->getData();
        $username = $welcome->getUser();
        include __DIR__ . '/../templates/pages/Contactus/Contactus.php';
    }
    public function notFound()
    {
        include __DIR__ . '/../templates/pages/NotFoundPage/NotFoundPage.php';
    }
}
