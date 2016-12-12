<?php

namespace AppBundle\Persistence;


class db_connection
{


    protected $db_name = 'ministry_of_education';
    protected $db_user = 'root';
    protected $db_pass = '';
    protected $db_host = 'localhost';

    // Open a connect to the database.
    // Make sure this is called on every page that needs to use the database.

    public function connect()
    {

        $connect_db = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if (mysqli_connect_errno()) {
            printf("Connection failed: ", mysqli_connect_error());
            exit();
        }

        $sql = "INSERT INTO ministry_of_education.user(user_name,password,user_type)
VALUES ('John', '11Doe', 'admin')";

        if ($connect_db->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connect_db->error;
        }

        $connect_db->close();
        return true;
    }
}











