<?php

/**
 * Created by PhpStorm.
 * User: Saarrah I  Isthikar
 * Date: 12/13/2016
 * Time: 1:06 AM
 */


namespace AppBundle\Persistence;

class CustomConnection
{
    public function db_connect()

    {
        $server_name = "localhost";
        $username = "root";
        $password = "";
        $db = "ministry_of_education";
        $conn = new \mysqli($server_name, $username, $password, $db);


// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;

//echo "Connected successfully";

//mysqli_query($conn,"INSERT INTO ministry_of_education.user(user_name,password,user_type) VALUES ('sdsds','efe','admin')");
    }
}

