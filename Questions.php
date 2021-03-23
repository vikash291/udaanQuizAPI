<?php 
class Questions {
    public $conn = null;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // 1 -> 1 - 10
    // 2 -> 11- 20
    // 3 -> 21 - 30

    public function getQuestions($page, $limit) {
        $offset = ($page - 1) * $limit;
        $quesQuery= "Select * from questions q limit ".$offset.", ". $limit;

        $res = mysqli_query($this->conn, $quesQuery);
        $result = [];
        while($rec = mysqli_fetch_assoc($res)) {
            $result[$rec['question_id']] = $rec;
            $ansQuery = "select * from answers a where a.question_id = ".$rec['question_id'];
            $ansRes = mysqli_query($this->conn, $ansQuery);
            while($ansRec = mysqli_fetch_assoc($ansRes)) {
                if($ansRec['is_correct']) {
                    $result[$rec['question_id']]['correct_answer'][] = ['answer_id' => $ansRec['answer_id'],'answer' => $ansRec['answer']];
                } else {
                    $result[$rec['question_id']]['incorrect_answer'][] = ['answer_id' => $ansRec['answer_id'],'answer' => $ansRec['answer']];
                }
            }
        }
        $result['status'] = 200;
        return json_encode($result,true);
    }

}

