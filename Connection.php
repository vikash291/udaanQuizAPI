<?php

class Connection {

    public $conn = null;
    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root","", "quizapp");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
    }
}

?>