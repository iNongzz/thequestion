<?php
include 'conx/mysql.php';




$sql = "SELECT * FROM question";
$result = $db->query($sql);
$row = $result->fetch_all();


print_r($row);






$db->close();
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

<div class="container">
    <div class="raw">
        <div class="col s4 m4 l4">

            <div class="row" style="border-bottom: 2px solid #eee">
                <div class="col s12">
                    <!-- <div class="progress">
                        <div class="indeterminate"></div>
                    </div> -->
                    <p class="center-align">แบบสอบถามบุคลิคภาพห้าองค์ประกอบกับการเล่นเกมในชีวิตประจำวัน</p>
                    
                </div>
                <div class="col s12 m12 l12">
                    <div class="row">
                    	<div class="col s2 m2 l2"></div>
                        <div class="col s2 m2 l2">
                            <img class="responsive-img" src="img/image001.png"> 
                        </div>
                        <div class="col s2 m2 l2">
                            <img class="responsive-img" src="img/image002.png">
                        </div>
                        <div class="col s2 m2 l2">
							<img class="responsive-img" src="img/image003.png">
                        </div>
                        <div class="col s2 m2 l2">
							<img class="responsive-img" src="img/image004.png">
                        </div>
                        
                        <div class="col s2 m2 l2"></div> 
                    </div>
                    
                </div>
                <!-- <div class="col s12 m4 l2"><p>s12 m4</p></div>
                <div class="col s12 m4 l8"><p>s12 m4</p></div>
                <div class="col s12 m4 l2"><p>s12 m4</p></div> -->
        </div>
            <div class="row">
                <div class="col s12 m8 l8 offset-m2 offset-l2">
                    <form action="#">
                        <h5>1. ฉันไม่ใช่คนช่างวิตกกังวล</h5>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>เห็นด้วยอย่างยิ่ง</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>เห็นด้วย</span>
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>เห็นด้วยปานกลาง</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>ไม่เห็นด้วย</span>
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>ไม่เห็นด้วยอย่างยิ่ง</span>                        
                            </label>
                        </p>
                        <!-- <p>
                                <label>
                                    <input name="group1" type="radio" disabled="disabled" />
                                    <span>Brown</span>
                                </label>
                            </p> -->
                        <!-- <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button> -->

                </div>

            </div>
            <div class="row" style="border-bottom: 2px solid #EEE">
                <div class="col s3 m3 l3">
                    <p class="center-align">
                        <a class="waves-effect waves-light btn">
                        <i class="material-icons left">chevron_left</i>BACK</a>
                    </p>
                </div>
                <div class="col s1 m3 l3">
                    
                </div>
                <div class="col s1 m3 l3">
                    
                </div>
                <div class="col s3 m3 l3">
                    <!-- <p>s12 m6 l3</p> -->
                    <p class="center-align">
                        <a class="waves-effect waves-light btn">
                        <i class="material-icons right">chevron_right</i>NEXT</a>
                    </p>
                </div>
            </div>


        </div>
    </div>
     
</div>
   
</body>

</html>