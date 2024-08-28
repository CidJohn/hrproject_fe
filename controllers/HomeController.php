<?php

namespace hrproject_fe\Controller;

use hrproject_fe\Model\HomeModel;

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
        include __DIR__ . '/../templates/pages/Contactus/Contactus.php';
    }
}
