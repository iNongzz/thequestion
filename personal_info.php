<?php
// include 'conx/mysql.php';




// $sql = "SELECT * FROM question";
// $result = $db->query($sql);
// $row = $result->fetch_all();


// print_r($row);






// $db->close();
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
        <h3>แบบสอบถาม เรื่องบุคลิกภาพ</h3>
        <p>คำชี้แจง ให้ท่านพิจารณาข้อความแต่ละข้อต่อไปนี้ว่าสอดคล้องกับท่านมากน้อยเพียงใด โดยใส่เครื่องหมาย ✓ ตรงคำตอบที่ท่านต้องการเพียงคำตอบเดียวในแต่ละข้อและโปรดตอบคำถามให้ครบทุกข้อ
</p>
        <div class="row">
        
            <form class="col s12">
                 <div class="row">
                    <div class="input-field col s12">
                        <h5>1. เพศ</h5>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>ชาย</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>หญิง</span>
                                
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <h5>2. อายุ</h5>
                    <input placeholder="Placeholder" id="age" type="text" class="validate">
                    <!-- <label for="first_name">2.อายุ</label> -->
                    </div>
                    <!-- <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                    </div> -->
                </div>
                 <div class="row">
                    <div class="input-field col s12">
                        <h5>3. ระดับการศึกษา</h5>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>น้อยกว่า ปริญญาตรี</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>ปริญญาตรี</span>
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>มากกว่า ปริญญาตรี</span>
                                
                            </label>
                        </p>

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <h5>4. ท่านเคยตอบแบบสอบถามออนไลน์หรือไม่</h5>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>เคย</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>ไม่เคย</span>
                                
                            </label>
                        </p>

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <h5>5. เวลาที่เริ่มเล่นเกม</h5>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>ไม่เคยเล่นเกม</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>เริ่มเล่นเกมมาเป็นเวลาน้อยกว่า 1 ปี</span>
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>เริ่มเล่นเกมมาเป็นเวลามากกว่า 1 ปี</span>
                                
                            </label>
                        </p>

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <h5>6.ความถี่ในการเล่นเกมต่อสัปดาห์</h5>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>1-2 วันต่อสัปดาห์</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>3-5 วันต่อสัปดาห์</span>
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>6-7 วันต่อสัปดาห์</span>
                                
                            </label>
                        </p>

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <h5>7. เวลาที่ใช้ในการเล่นเกมต่อวัน</h5>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>น้อยกว่า 1 ชั่วโมงต่อวัน</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>มากกว่า 1 ชั่วโมงต่อวัน แต่ไม่เกิน 3 ชั่วโมง</span>   
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                 <span>มากกว่า 3 ชั่วโมงต่อวัน แต่ไม่เกิน 6 ชั่วโมง</span> 
                                
                            </label>
                        </p>
                         <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                 <span>มากกว่า 6 ชั่วโมงต่อวัน แต่ไม่เกิน 9 ชั่วโมง</span> 
                                
                            </label>
                        </p>
                         <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                 <span>มากกว่า  9 ชั่วโมงต่อวัน</span> 
                                
                            </label>
                        </p>

                    </div>
                </div>
                 <div class="row">
                    <div class="input-field col s12">
                        <h5>8. ช่วงเวลาที่นิยมเล่นเกมมากที่สุด</h5>                       
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>0.01 น. – 3.00 น.</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>3.01 น. – 6.00 น.</span>   
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                 <span>6.01 น. – 9.00 น.</span> 
                                
                            </label>
                        </p>
                         <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                 <span>9.01 น. – 12.00 น.</span> 
                                
                            </label>
                        </p>
                         <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                 <span>12.01 น. – 15.00 น.</span> 
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                 <span>15.01 น. – 18.00 น.</span> 
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                 <span>18.01 น. – 21.00 น.</span> 
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                 <span>21.00 น. – 24.00 น.</span> 
                            </label>
                        </p>
                    </div>
                </div>
                 <div class="row">
                    <div class="input-field col s12">
                        <h5>9. อุปกรณ์ที่ใช้ในการเล่นเกม</h5>

                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>โทรศัพท์มือถือ (Mobile phone)</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>แทปเล็ต (Tablet)</span>
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>เครื่องเล่น console</span>
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>คอมพิวเตอร์ตั้งโต๊ะ (Desktop)</span>
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>คอมพิวเตอร์พกพา (Laptop)</span>
                                
                            </label>
                        </p>
                         <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>สมาร์ททีวี (Smart TV)</span>
                                
                            </label>
                        </p>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="input-field col s12">
                    <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                    <label for="disabled">Disabled</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                    This is an inline input field:
                    <div class="input-field inline">
                        <input id="email" type="email" class="validate">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>
                    </div>
                </div> -->
            </form>
            <div class="col s3 m3 l3">
                <p class="center-align">
                    <a class="waves-effect waves-light btn">
                    <i class="material-icons right">chevron_right</i>REGISTER & NEXT</a>
                </p>
            </div>
        </div>
    </div>
     
</div>
   
</body>

</html>