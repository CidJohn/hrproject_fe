<?php

use hrproject_fe\db\db_conn;

include_once __DIR__ . "/db.php";

class testFunction
{
    private $username;
    private $db;

    public function __construct()
    {
        $database = new db_conn();
        $this->db = $database->connect();
    }

    public function getUser()
    {
        $query = 'SELECT username FROM tbluserdata'; // Use single quotes
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $this->username = $result["username"];
            return $this->username;
        } else {
            return null;
        }
    }
}
