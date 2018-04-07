<?php
session_start();

session_destroy();

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Prompt" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    
    <title>The Question Version 1.0</title>
    <style>
    body {
        font-family: 'Prompt', sans-serif;
        font-family: 'Montserrat', sans-serif;
    }
    
    </style>
</head>

<body>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>

    <!-- <a href="personal_info.php" >personal info</a>
    <br>
    <a href="questionnair.php" >question</a>   -->

    <div class="container">
        <!-- Page Content goes here -->
    </div>

    <div class="row">
        <!-- <div class="col s12"><p>s12</p></div> -->
        <div class="col s12 m2 l2"></div>
        <div class="col s12 m8 l8 center-align">
            <br>
            <br>
            <h5>ข้อมูลได้ถูกบันทึกเรียบร้อยแล้ว <br><br>ขอขอบคุณที่ท่านให้ความร่วมมือในการตอบแบบสอบถามครั้งนี้</h5>
            
            <!-- <button class="btn waves-effect waves-light" type="submit" name="action" onclick="window.location.href('personal_info.php')">GO
                <i class="material-icons right">send</i>
             </button> -->
             <!-- <a class="waves-effect waves-light btn" href="personal_info.php" ><i class="material-icons right">send</i>เริ่มต้น</a> -->
            
        </div>
        <div class="col s12 m2 l2"></div>
      </div>

</body>

</html>