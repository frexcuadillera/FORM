<?php include('connection.php'); ?>
<?php 

	/*

		1. SQL String 
		2. Prepare the SQL String Statement
		3. Bind Parameters to SQL String
		4. Execute Query

	*/

    $yes_counter=0;
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $password = $_POST['password'];

    echo $fname;
    
    $sql_string = "INSERT INTO `Student Accounts` (`FNAME`, `LNAME`, `ADDR` , `EMAIL`, `COURSE`, `PASSWORD` ) VALUES (:fname, :lname, :addr, :email, :course, :password)";
	$stmt_prepare = $conn->prepare($sql_string);

    $stmt_prepare->bindParam(":fname", $fname, PDO::PARAM_STR);
	$stmt_prepare->bindParam(":lname", $lname, PDO::PARAM_STR);
	$stmt_prepare->bindParam(":addr", $address, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt_prepare->bindParam(":course", $course, PDO::PARAM_STR);
	$stmt_prepare->bindParam(":password", $password, PDO::PARAM_STR);

    

    $stmt_prepare->execute();
    //header ( 'Location: /FORM/login.php');
    echo "<script>var r = confirm('Registration Successful \\r\\nClick OK to Login \\r\\nClick Cancel to Register another account'); if (r == true) { window.location.href = '/FORM/login.php';} else {window.location.href = '/FORM/registration.php';}</script>";
?>