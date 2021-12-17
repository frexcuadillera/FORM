<?php 
    include('connection.php');
    session_start();
?>
<?php 

	/*

		1. SQL String 
		2. Prepare the SQL String Statement
		3. Bind Parameters to SQL String
		4. Execute Query

	*/

    $yes_counter=0;
    $studentID = $_SESSION['Student ID'];
    $date = date("Y-m-d");
    $question_1 = $_POST['question-1'];
    $question_2 = $_POST['question-2'];
    $question_3 = $_POST['question-3'];
    $question_4 = $_POST['question-4'];
    $question_5 = $_POST['question-5'];
    $question_6 = $_POST['question-6'];
    $question_7 = $_POST['question-7'];
    $question_8 = $_POST['question-8'];
    $question_9 = $_POST['question-9'];
    $question_10 = $_POST['question-10'];
    $question_11 = $_POST['question-11'];
    $question_12 = $_POST['question-12'];
    $question_13 = $_POST['question-13'];

    if($question_1 == "YES"){
        $question_1 = true;
        $yes_counter++;
    } else if ($question_1 == "NO") {
        $question_1 = false;
    }

    if($question_2 == "YES"){
        $question_2 = true;
        $yes_counter++;
    } else if ($question_2 == "NO") {
        $question_2 = false;
    }

    if($question_3 == "YES"){
        $question_3 = true;
        $yes_counter++;
    } else if ($question_3 == "NO") {
        $question_3 = false;
    }

    if($question_4 == "YES"){
        $question_4 = true;
        $yes_counter++;
    } else if ($question_4 == "NO") {
        $question_4 = false;
    }

    if($question_5 == "YES"){
        $question_5 = true;
        $yes_counter++;
    } else if ($question_5 == "NO") {
        $question_5 = false;
    }

    if($question_6 == "YES"){
        $question_6 = true;
        $yes_counter++;
    } else if ($question_6 == "NO") {
        $question_6 = false;
    }

    if($question_7 == "YES"){
        $question_7 = true;
        $yes_counter++;
    } else if ($question_7 == "NO") {
        $question_7 = false;
    }

    if($question_8 == "YES"){
        $question_8 = true;
        $yes_counter++;
    } else if ($question_8 == "NO") {
        $question_8 = false;
    }

    if($question_9 == "YES"){
        $question_9 = true;
        $yes_counter++;
    } else if ($question_9 == "NO") {
        $question_9 = false;
    }

    if($question_10 == "YES"){
        $question_10 = true;
        $yes_counter++;
    } else if ($question_10 == "NO") {
        $question_10 = false;
    }

    if($question_11 == "YES"){
        $question_11 = true;
        $yes_counter++;
    } else if ($question_11 == "NO") {
        $question_11 = false;
    }

    if($question_12 == "YES"){
        $question_12 = true;
        $yes_counter++;
    } else if ($question_12 == "NO") {
        $question_12 = false;
    }

    if($question_13 == "YES"){
        $question_13 = true;
        $yes_counter++;
    } else if ($question_13 == "NO") {
        $question_13 = false;
    }

    $sql_string = "INSERT INTO `covid19-survey-responses` (`Student ID`, `DATE`, `Q1`, `Q2`,`Q3`,`Q4`,`Q5`,`Q6`,`Q7`,`Q8`,`Q9`,`Q10`,`Q11`,`Q12`,`Q13` ) VALUES (:student_id, :date, :question_1, :question_2, :question_3, :question_4, :question_5, :question_6, :question_7, :question_8, :question_9, :question_10, :question_11, :question_12, :question_13)";
	$stmt_prepare = $conn->prepare($sql_string);

    $stmt_prepare->bindParam(":student_id", $studentID, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":date", $date, PDO::PARAM_STR);
	$stmt_prepare->bindParam(":question_1", $question_1, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":question_2", $question_2, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":question_3", $question_3, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":question_4", $question_4, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":question_5", $question_5, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":question_6", $question_6, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":question_7", $question_7, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":question_8", $question_8, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":question_9", $question_9, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":question_10", $question_10, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":question_11", $question_11, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":question_12", $question_12, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":question_13", $question_13, PDO::PARAM_STR);

    $stmt_prepare->execute();
   
	header("Location: index.php");

?>