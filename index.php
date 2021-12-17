<?php include('connection.php'); 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1 id="title">Welcome to SLSU-TAYABAS Weekly Health Status
                Monitoring of Learners</h1>

                <!-- logout --> 
            <div>
                <a href="logout.php"><input type="button" value="Log out"></a>
            </div>
                <!--end of logout session -->
            <p id="description">This survey aims to know your current health in the midst of pandemic. We ensure that your answer is confidential. Please be honest in your answer. </p>
            <p1 id="law">In accordance of RA 10173 Of the data privacy act of 2012, all personal and/or sensitive information solicited and disclose from this questionnaire shall be only used for the study alone. Rest assured that your responses in this instrument will be kept confidential. Thank you for taking time to answer this survey.</p1>
            <form action="add.php" onsubmit="myFunction()" id="survey" method=post>
    
                
                <div class="form-group">
                    <label for="fname">First Name: <?php echo $_SESSION['Fname']; ?>
                </div>
                

                
                <div class="form-group">
                <label for="last name">Last Name: <label for="Lname"><?php echo $_SESSION['Lname']; ?>
                </label>
                </div>
                
                <?php
                //echo date("Y-m-d");
                ?>
                
                <div class="form-group">
                <label for="address">Address: <label for="address"> <?php echo $_SESSION['Addr']; ?>
                    
                </label>
            </div>
                
                 <div class="form-group">
                    <label for="email">Email: <label for="email"> <?php echo $_SESSION['Email']; ?>
                </div>
                <div class="form-group">
                    <label for="course">Course: <label for="course"> <?php echo $_SESSION['Course']; ?>
                </div>
               
                
                <!-- Covid Title-->
                <div class="form-group">
                <p id="quest">COVID-19 Symptoms</p>
            </div>
                <!-- end of Covid Title-->

                
                <div class="form-group">
                    <p id="question-1">Do you have a Cough (Ubo)?</p required>
                    <input type="radio" name="question-1" value="YES" class="inputRadio" required>
                        <label>YES</label>
                        <input type="radio" name="question-1" value="NO" class="inputRadio" required>
                        <label>NO</label>
            
                </div>
                
                 <div class="form-group">
                    <p id="question-2">Do you have a Colds (Sipon)?</p required>
                        <input type="radio" name="question-2" value="YES" class="inputRadio" required>
                            <label>YES</label>
                            <input type="radio" name="question-2" value="NO" class="inputRadio" required>
                            <label>NO</label>
                  
                 <div class="form-group">
                    <p id="question-3">Loss of Taste (Pagkawala ng Panlasa)</p required>
                        <input type="radio" name="question-3" value="YES" class="inputRadio" required>
                            <label>YES</label>
                            <input type="radio" name="question-3" value="NO" class="inputRadio" required>
                            <label>NO</label>
                 
                 <div class="form-group">
                    <p id="question-4">Loss of Smell (Pagkawala ng Pang amoy)</p required>
                        <input type="radio" name="question-4" value="YES" class="inputRadio" required>
                            <label>YES</label>
                            <input type="radio" name="question-4" value="NO" class="inputRadio" required>
                            <label>NO</label>
                  
                 <div class="form-group">
                    <p id="question-5">Diarrhea (Nag tatae)</p required>
                        <input type="radio" name="question-5" value="YES" class="inputRadio" required>
                            <label>YES</label>
                            <input type="radio" name="question-5" value="NO" class="inputRadio" required>
                            <label>NO</label>
                  
                 <div class="form-group">
                    <p id="question-6">Sore Throat (Masakit ang Lalamunan)</p required>
                        <input type="radio" name="question-6" value="YES" class="inputRadio" required>
                            <label>YES</label>
                            <input type="radio" name="question-6" value="NO" class="inputRadio" required>
                            <label>NO</label>
                  
                 <div class="form-group">
                    <p id="question-7">Body Malaise (Panghihina ng Katawan)</p required>
                        <input type="radio" name="question-7" value="YES" class="inputRadio" required>
                            <label>YES</label>
                            <input type="radio" name="question-7" value="NO" class="inputRadio" required>
                            <label>NO</label>
                 
                 <div class="form-group">
                    <p id="question-8">Do you have a Headache (Masakit ang Ulo)</p required>
                        <input type="radio" name="question-8" value="YES" class="inputRadio" required>
                            <label>YES</label>
                            <input type="radio" name="question-8" value="NO" class="inputRadio" required>
                            <label>NO</label>
                 
                 <div class="form-group">
                    <p id="question-9">Do you have a Fever (Lagnat)</p required>
                        <input type="radio" name="question-9" value="YES" class="inputRadio" required>
                            <label>YES</label>
                            <input type="radio" name="question-9" value="NO" class="inputRadio" required>
                            <label>NO</label>
                  
                 <div class="form-group">
                    <p id="question-10">Difficulty of Breathing (Hirap sa Paghinga)</p required>
                        <input type="radio" name="question-10" value="YES" class="inputRadio" required>
                            <label>YES</label>
                            <input type="radio" name="question-10" value="NO" class="inputRadio" required>
                            <label>NO</label>
                  
                    <p id="question-11">Do you have a travel history(within 14days)</p required>
                        <input type="radio" name="question-11" value="YES" class="inputRadio" required> 
                            <label>YES</label>
                            <input type="radio" name="question-11" value="NO" class="inputRadio" required>
                            <label>NO</label>
                
                 <div class="form-group">
                    <p id="question-12">Are you exposed to a COVID 19 patient?(within 14days)</p required>
                        <input type="radio" name="question-12" value="YES" class="inputRadio" required>
                            <label>YES</label>
                            <input type="radio" name="question-12" value="NO" class="inputRadio" required>
                            <label>NO</label>
                
                 <div class="form-group">
                    <p id="question-13">Are you a COVID 19 positive?(within 14days)</p>
                        <input type="radio" name="question-13" value="YES" class="inputRadio" required>
                            <label>YES</label>
                        <input type="radio" name="question-13" value="NO" class="inputRadio" required>
                            <label>NO</label>
                
                <div class="form-group">
                    <button type="submit"
                    id="submit"
                    class="btn">SUBMIT</button>
                </div>



            </form>
    </div>
</body>
<script src="app.js"></script>
</html>