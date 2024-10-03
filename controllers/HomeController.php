<?php

namespace Controller;

use Model\HomeModel;

include_once "./models/HomeModel.php";

class HomeController
{
    private $home;

    public function __construct($filePath)
    {
        $this->home = new HomeModel($filePath);
    }

    public function index()
    {
        $title = $this->home->getData();
        $username = $this->home->getUser();
        $data = $this->home->getCard();
        include __DIR__ . '/../templates/pages/Homepage/Homepage.php';
    }
    public function contactUs()
    {
        $data = $this->home->getData();
        $username = $this->home->getUser();
        include __DIR__ . '/../templates/pages/Contactus/Contactus.php';
    }
    public function notFound()
    {
        include __DIR__ . '/../templates/pages/NotFoundPage/NotFoundPage.php';
    }
}
