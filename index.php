<?php

require_once './Quiz.php';
if(isset($_GET['quiz']) && $_GET['quiz'] == 'getQuestions' ) {
    $quiz = new Quiz();
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit =isset($_GET['limit'])? $_GET['limit'] : 10;

    echo $quiz->createQuizQuestions($page,$limit);
}

?>