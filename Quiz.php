<?php
require_once './Connection.php';
require_once './Questions.php';

class Quiz {

    public $conn = null;

    public function __construct() {
//        echo "i am here";
        $connection = new Connection();
        $this->conn = $connection->conn;

    }
    
    public function createQuizQuestions($page, $limit) {
        $questions = new Questions($this->conn);
        return $questions->getQuestions($page, $limit);

    } 

}

?>