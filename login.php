<?php include('connection.php'); 
    $login_failed = 0;
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['login'])){
        func();
    }
    function func(){
       $email = "";
       $password = ""; 
        session_start();
        global $conn;
        if(isset($_POST["email"])){
	        $email = $_POST["email"];
	        $password = $_POST["password"];	
            $sql_string = "SELECT * FROM `student accounts` WHERE Email = '".$email."' AND Password = '".$password."' ";
	        $stmt_prepare = $conn->prepare($sql_string);

	        $stmt_prepare->execute();

	        $count = $stmt_prepare->rowCount();
            //echo $count;
            while ($row = $stmt_prepare->fetch(PDO::FETCH_ASSOC)){
                $StudentID = $row['Student ID'];               
                $Fname = $row['Fname'];
                $Lname = $row['Lname'];
                $Addr = $row['Addr'];
                $Email = $row['Email'];
                $Course = $row['Course'];
                
            }
            if ($count==1) { 
                //echo $count;
                $_SESSION['Student ID']=$StudentID;
                $_SESSION['Fname']=$Fname; 
                $_SESSION['Lname']=$Lname;                   
                $_SESSION['Addr']=$Addr;      
                $_SESSION['Email']=$Email;
                $_SESSION['Course']=$Course;      
                
                header('Location: index.php');

            }
            else{
                $login_failed=1;
                echo "login failed";
            }    
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="center">
            <h1 id="title">Welcome to Login Page</h1>
        </header>
        <form action="login.php" id="login" method=post>
        
            <div class="text_field">
                    <input type="text" name="email" required>
                    <span> </span>
                    <label>Email</label>
                </div>
                <div class="text_field">
                    <input type="text" name="password" required>
                    <span> </span>
                    <label>Password</label>
                </div>
                
                <?php 
                    if ($login_failed==1 and $_SERVER['REQUEST_METHOD'] == "POST"){
                        echo "<p>Email or Password is incorrect</p>";
                    }
                ?>
              
                    <input type="submit"
                    id="login"
                    class="btn" name="login" value = "login">
        </form>
                    <button type="register"
                    id="register"
                    class="btn" name="register" onclick="window.location.href='/FORM/registration.php'" >Register</button>
                </div>
             

                    
       

    </div>
</body>
</html>