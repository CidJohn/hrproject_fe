<?php

namespace hrproject_fe\Model;

use testFunction;

include "./includes/testFunction.php";

class HomeModel
{
    private $username;


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
}
