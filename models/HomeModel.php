<?php

namespace hrproject_fe\Model;

use hrproject_fe\db\db_conn; // Correct namespace

include "./includes/db.php";

class HomeModel
{
    private $db;

    public function __construct()
    {
        $database = new db_conn();
        $this->db = $database->connect();
    }

    public function getData()
    {
        return "Welcome to Human Resources Information System";
    }
}
