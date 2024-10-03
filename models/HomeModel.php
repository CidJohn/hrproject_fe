<?php

namespace Model;

use testFunction;

include "./includes/testFunction.php";

class HomeModel
{
    private $username;
    private $jsonFile;

    public function __construct($filePath)
    {
        $this->jsonFile = $filePath;
    }

    public function getData()
    {
        return "Welcome to Human Resources Information System";
    }

    public function getUser()
    {
        $getData = new testFunction();
        $this->username = $getData->getUser();
        return $this->username;
    }

    public function getCard()
    {
        if (file_exists($this->jsonFile)) {
            $jsonContent = file_get_contents($this->jsonFile);
            return json_decode($jsonContent, true);
        } else {
            return ['error', 'File not Found'];
        }
    }
}
