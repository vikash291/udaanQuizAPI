# Simple Quiz application where we can fetch questions for Quiz from the DB.

create the following tables in you local DB.

CREATE TABLE quizapp.answers (
	answer_id INT auto_increment NOT null primary key,
	answer varchar(100) NOT NULL,
	is_correct INT NOT NULL,
	question_id INT NOT NULL
);


CREATE TABLE quizapp.questions (
	question_id INT auto_increment NOT null primary key,
	question varchar(100) NOT NULL
);

<ul> API URLs:
	<li>udaanQuizAPI/index.php?quiz=getQuestions </li>
	<li>udaanQuizAPI/index.php?quiz=getQuestions&page=2 </li>
	<li>udaanQuizAPI/index.php?quiz=getQuestions&page=2&limit=20 </li>
</ul>
