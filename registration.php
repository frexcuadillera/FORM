<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1 id="title">Welcome to Registration Page</h1>
            <p id="description"> If you don't have any account please register first. </p>
            
        </header>  
        <form action="register.php" id="register" method=post>  
            <div class="form-group">
                    <label for="fname">FName
                    <input type="text" id="fname" class="formControl" name="fname" placeholder="Enter your First name"
                    required>
                </div>
                <!-- end of Fname section -->

                <!-- Lname section -->
                <div class="form-group">
                <label for="last name">Lname
                    <input type="text" id="lname" class="formControl" name="lname" placeholder="Enter your Last name" required>
                </label>
                </div>
                <!-- end of Lname section -->
                
                <!-- Address section -->
                 <div class="form-group">
                <label for="address">Address
                    <input type="text" id="address" class="formControl" name="address" placeholder="Enter your Address" required>
                </label>
                </div>
                <!-- end of Address section -->

                

                  <!-- Email section -->
                  <div class="form-group">
                    <label for="Email">Email
                    <input type="text" id="email" class="formControl" name="email" placeholder="Enter your Email"
                    required>
                </div>
                <!-- end of Email section -->

                 <!--   Course section -->
                 <div class="form-group">
                    <label for="Course">Course
                    <input type="text" id="course" class="formControl" name="course" placeholder="Enter your Course"
                    required>
                </div>
                <!-- end of Course section -->

                <!-- Password section -->
                <div class="form-group">
                <label for="password">Password
                    <input type="password" id="password" class="formControl" name="password" placeholder="Enter your Password" required>
                </label>
                </div>
                <!-- end of Password section -->
                 <!-- submit buttom -->
                 <div class="radio-group">
                    <button type="submit"
                    id="create-account"
                    class="btn">Create Account</button>
                </div>
                  <!-- end of submit button -->

                  <!-- register button -->
                  <div class="radio-group">
                    <button type="login"
                    id="create-account"
                    class="btn" onclick="window.location.href='/FORM/login.php'">Already have an account? Login here!</button>
                </div>

                  
        </form>

    </div>
</body>
</html>