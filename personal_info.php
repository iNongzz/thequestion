<?php
session_set_cookie_params(0);
session_start();

include 'conx/mysql.php';
// include 'fndata.php';

// check triker
$st_sql = "SELECT tricker FROM user order by id desc limit 0,1";
$st_res = $db->query($st_sql);
$st_row = $st_res->fetch_assoc();
$question_trigger=($st_row['tricker']==0 ? 1 : 0);
//print_r($st_row);
// generate user
$arr_result = array();
$arr_result = insert_user($db,$_SERVER['HTTP_USER_AGENT'],$question_trigger);

$_SESSION['qtricker'] = $question_trigger;
$_SESSION['userid'] = $arr_result['userid'];
$_SESSION['userkey'] = $arr_result['userkey'];


function insert_user($db, $device, $tricker) {

    $genkey = md5(microtime().rand());
    $sql = "INSERT INTO user (id,ukey,timestamp,device,tricker) VALUES (null,'$genkey', now(), '$device', '$tricker')";
    
    if ($db->query($sql) === TRUE) {
        $last_id = $db->insert_id;
        // echo "New record created successfully. Last inserted ID is: " . $last_id;
        return array('userid'=>$last_id,'userkey'=>$genkey);
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
        return array('userid'=>$db->error,'userkey'=>$db->error,'error'=>1);
    }
    // return array('userid'=>,'userkey'=>);
}

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
    
    <title>The Question.</title>
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
        <h6>แบบสอบถามเรื่อง บุคลิกภาพห้าองค์ประกอบกับการเล่นเกมดิจิตอล</h6>
        <p>
            <span>ข้อมูลทั่วไปและการเล่นเกมดิจิตอลของผู้ตอบแบบสอบถาม</span>
        </p>   
        <!-- <p class="qdesc">คำชี้แจง ให้ท่านพิจารณาข้อความแต่ละข้อต่อไปนี้ว่าสอดคล้องกับท่านมากน้อยเพียงใด โดยใส่เครื่องหมาย ✓ ตรงคำตอบที่ท่านต้องการเพียงคำตอบเดียวในแต่ละข้อและโปรดตอบคำถามให้ครบทุกข้อ -->
</p>
        <div class="row">
        
            <form id="myform" class="col s12"  onSubmit="return doNothing()">
                <div class="q1" style="display: none;">
                     <div class="row">
                        <div class="input-field col s12">
                            <h6>1. เพศ</h6>

                            <p>
                                <label>
                                    <input class="with-gap" name="q1" type="radio" value="1" />
                                    <span class="black-text">ชาย</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q1" type="radio" value="2" />
                                    <span class="black-text">หญิง</span>
                                    
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s1 m3 l3"></div>
                        <div class="col s3 m3 l3">
                            <!-- <p class="center-align">
                                <a class="waves-effect waves-light btn prev_btn"  onclick="ck_prev(1);">
                                <i class="material-icons left">chevron_left</i>ย้อนกลับ</a>
                            </p> -->
                        </div>
                        
                        <div class="col s3 m3 l3">
                          
                            <p class="center-align">
                                <a class="waves-effect waves-light btn next_btn" onclick="ck_next(1);">
                                <i class="material-icons right">chevron_right</i>ถัดไป</a>
                            </p>
                        </div>
                        <div class="col s1 m3 l3"></div>
                    </div>
                </div>


                <div class="q2" style="display: none;">
                    <div class="row">
                        <div class="input-field col s12">
                        <h6>2. อายุ</h6>

                        <input placeholder="กรุณาระบุอายุ (ปี)" id="age" pattern="[0-9]*" name="q2" type="number" class="validate">
                        <!-- <label for="first_name">2.อายุ</label> -->
                        </div>
                        <!-- <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col s1 m3 l3"></div>
                        <div class="col s3 m3 l3">
                            <p class="center-align">
                                <a class="waves-effect waves-light btn prev_btn"  onclick="ck_prev(2);">
                                <i class="material-icons left">chevron_left</i>ย้อนกลับ</a>
                            </p>
                        </div>
                        
                        <div class="col s3 m3 l3">
                          
                            <p class="center-align">
                                <a class="waves-effect waves-light btn next_btn" onclick="ck_next(2);">
                                <i class="material-icons right">chevron_right</i>ถัดไป</a>
                            </p>
                        </div>
                        <div class="col s1 m3 l3"></div>
                    </div>
                </div>


                <div class="q3" style="display: none;">
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>3. ระดับการศึกษาสูงสุดของท่าน</h6>

                            <p>
                                <label>
                                    <input class="with-gap" name="q3" type="radio" value="1" />
                                    <span class="black-text">ประถมศึกษา</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q3" type="radio" value="2" />
                                    <span class="black-text">มัธยมศึกษาหรือเทียบเท่า</span>
                                    
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q3" type="radio" value="3" />
                                    <span class="black-text">ปริญญาตรีหรือเทียบเท่า</span>
                                    
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q3" type="radio" value="4" />
                                    <span class="black-text">สูงกว่าปริญญาตรี</span>
                                    
                                </label>
                            </p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col s1 m3 l3"></div>
                        <div class="col s3 m3 l3">
                            <p class="center-align">
                                <a class="waves-effect waves-light btn prev_btn"  onclick="ck_prev(3);">
                                <i class="material-icons left">chevron_left</i>ย้อนกลับ</a>
                            </p>
                        </div>
                        
                        <div class="col s3 m3 l3">
                          
                            <p class="center-align">
                                <a class="waves-effect waves-light btn next_btn" onclick="ck_next(3);">
                                <i class="material-icons right">chevron_right</i>ถัดไป</a>
                            </p>
                        </div>
                        <div class="col s1 m3 l3"></div>
                    </div>
                </div>

                <div class="q4" style="display: none;">
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>4. ท่านเคยตอบแบบสอบถามออนไลน์หรือไม่</h6>

                            <p>
                                <label>
                                    <input class="with-gap" name="q4" type="radio" value="1" />
                                    <span class="black-text">เคย</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q4" type="radio" value="2" />
                                    <span class="black-text">ไม่เคย</span>
                                    
                                </label>
                            </p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col s1 m3 l3"></div>
                        <div class="col s3 m3 l3">
                            <p class="center-align">
                                <a class="waves-effect waves-light btn prev_btn"  onclick="ck_prev(4);">
                                <i class="material-icons left">chevron_left</i>ย้อนกลับ</a>
                            </p>
                        </div>
                       
                        <div class="col s3 m3 l3">
                          
                            <p class="center-align">
                                <a class="waves-effect waves-light btn next_btn" onclick="ck_next(4);">
                                <i class="material-icons right">chevron_right</i>ถัดไป</a>
                            </p>
                        </div>
                        <div class="col s1 m3 l3"></div>
                    </div>
                </div>

                <div class="q5" style="display: none;">
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>5. ท่านเริ่มเล่นเกมดิจิตอลมาแล้วเป็นระยะเวลานานเท่าใด</h6>

                            <p>
                                <label>
                                    <input class="with-gap" name="q5" type="radio" value="1" />
                                    <span class="black-text">ไม่เคยเล่นเกมดิจิตอลเลย</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q5" type="radio" value="2" />
                                    <span class="black-text">เริ่มเล่นเกมดิจิตอลมาเป็นระยะเวลานานน้อยกว่า 1 ปี</span>
                                    
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q5" type="radio" value="3" />
                                    <span class="black-text">เริ่มเล่นเกมดิจิตอลมาเป็นระยะเวลานานมากกว่า 1 ปี</span>
                                    
                                </label>
                            </p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col s1 m3 l3"></div>
                        <div class="col s3 m3 l3">
                            <p class="center-align">
                                <a class="waves-effect waves-light btn prev_btn"  onclick="ck_prev(5);">
                                <i class="material-icons left">chevron_left</i>ย้อนกลับ</a>
                            </p>
                        </div>
                        
                        <div class="col s3 m3 l3">
                          
                            <p class="center-align">
                                <a class="waves-effect waves-light btn next_btn" onclick="ck_next(5);">
                                <i class="material-icons right">chevron_right</i>ถัดไป</a>
                            </p>
                        </div>
                        <div class="col s1 m3 l3"></div>
                    </div>
                </div>


                <div class="q6" style="display: none;">
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>6. ท่านใช้เวลาเล่นเกมดิจิตอลโดยเฉลี่ยกี่วันต่อสัปดาห์</h6>

                            <p>
                                <label>
                                    <input class="with-gap" name="q6" type="radio" value="1" />
                                    <span class="black-text">1-2 วันต่อสัปดาห์</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q6" type="radio" value="2" />
                                    <span class="black-text">3-5 วันต่อสัปดาห์</span>
                                    
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q6" type="radio" value="3" />
                                    <span class="black-text">6-7 วันต่อสัปดาห์</span>
                                    
                                </label>
                            </p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col s1 m3 l3"></div>
                        <div class="col s3 m3 l3">
                            <p class="center-align">
                                <a class="waves-effect waves-light btn prev_btn"  onclick="ck_prev(6);">
                                <i class="material-icons left">chevron_left</i>ย้อนกลับ</a>
                            </p>
                        </div>
                        
                        <div class="col s3 m3 l3">
                          
                            <p class="center-align">
                                <a class="waves-effect waves-light btn next_btn" onclick="ck_next(6);">
                                <i class="material-icons right">chevron_right</i>ถัดไป</a>
                            </p>
                        </div>
                        <div class="col s1 m3 l3"></div>
                    </div>
                </div>



                <div class="q7" style="display: none;">
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>7. ท่านใช้เวลาเล่นเกมดิจิตอลโดยเฉลี่ยกี่ชั่วโมงต่อสัปดาห์</h6>

                            <input placeholder="ระบุจำนวนชั่วโมง" id="playtime" pattern="[0-9]*" name="q7" type="number" class="validate">
                            <!-- <p>
                                <label>
                                    <input class="with-gap" name="q7" type="radio" value="1" />
                                    <span class="black-text">น้อยกว่า 1 ชั่วโมงต่อวัน</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q7" type="radio" value="2" />
                                    <span class="black-text">มากกว่า 1 ชั่วโมงต่อวัน แต่ไม่เกิน 3 ชั่วโมง</span>   
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q7" type="radio" value="3" />
                                     <span class="black-text">มากกว่า 3 ชั่วโมงต่อวัน แต่ไม่เกิน 6 ชั่วโมง</span> 
                                    
                                </label>
                            </p>
                             <p>
                                <label>
                                    <input class="with-gap" name="q7" type="radio" value="4" />
                                     <span class="black-text">มากกว่า 6 ชั่วโมงต่อวัน แต่ไม่เกิน 9 ชั่วโมง</span> 
                                    
                                </label>
                            </p>
                             <p>
                                <label>
                                    <input class="with-gap" name="q7" type="radio" value="5" />
                                     <span class="black-text">มากกว่า  9 ชั่วโมงต่อวัน</span> 
                                    
                                </label>
                            </p> -->

                        </div>
                    </div>
                    <div class="row">
                        <div class="col s1 m3 l3"></div>
                        <div class="col s3 m3 l3">
                            <p class="center-align">
                                <a class="waves-effect waves-light btn prev_btn"  onclick="ck_prev(7);">
                                <i class="material-icons left">chevron_left</i>ย้อนกลับ</a>
                            </p>
                        </div>
                        
                        <div class="col s3 m3 l3">
                          
                            <p class="center-align">
                                <a class="waves-effect waves-light btn next_btn" onclick="ck_next(7);">
                                <i class="material-icons right">chevron_right</i>ถัดไป</a>
                            </p>
                        </div>
                        <div class="col s1 m3 l3"></div>
                    </div>
                </div>


                <div class="q8" style="display: none;">
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>8. ช่วงเวลาใดที่ท่านนิยมเล่นเกมมากที่สุด</h6>
                                                
                            <p>
                                <label>
                                    <input class="with-gap" name="q8" type="radio" value="1" />
                                    <span class="black-text">0.01 น. - 6.00 น.</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q8" type="radio" value="2" />
                                    <span class="black-text">6.01 น. - 12.00 น.</span>   
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q8" type="radio" value="3" />
                                     <span class="black-text">12.01 น. - 18.00 น.</span> 
                                    
                                </label>
                            </p>
                             <p>
                                <label>
                                    <input class="with-gap" name="q8" type="radio" value="4" />
                                     <span class="black-text">18.01 น. - 24.00 น.</span> 
                                    
                                </label>
                            </p>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s1 m3 l3"></div>
                        <div class="col s3 m3 l3">
                            <p class="center-align">
                                <a class="waves-effect waves-light btn prev_btn"  onclick="ck_prev(8);">
                                <i class="material-icons left">chevron_left</i>ย้อนกลับ</a>
                            </p>
                        </div>
                        <div class="col s3 m3 l3">
                          
                            <p class="center-align">
                                <!-- <a class="waves-effect waves-light btn" onclick="ck_next(8);"> -->
                                <a class="waves-effect waves-light btn next_btn" href="questionnair.php">
                                <i class="material-icons right">chevron_right</i>ถัดไป</a>
                            </p>
                        </div>
                        <div class="col s1 m3 l3"></div>
                    </div>
                </div>



                <div class="q9" style="display: none;">
                    <div class="row">
                        <div class="input-field col s12">
                            <h6>9. อุปกรณ์ที่ใช้ในการเล่นเกม</h6>

                            <p>
                                <label>
                                    <input class="with-gap" name="q9" type="radio" value="8" />
                                    <span class="black-text">โทรศัพท์มือถือ (Mobile phone)</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q9" type="radio" value="8" />
                                    <span class="black-text">แทปเล็ต (Tablet)</span>
                                    
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q9" type="radio" value="8" />
                                    <span class="black-text">เครื่องเล่น console</span>
                                    
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q9" type="radio" value="8" />
                                    <span class="black-text">คอมพิวเตอร์ตั้งโต๊ะ (Desktop)</span>
                                    
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="q9" type="radio" value="8" />
                                    <span class="black-text">คอมพิวเตอร์พกพา (Laptop)</span>
                                    
                                </label>
                            </p>
                             <p>
                                <label>
                                    <input class="with-gap" name="q9" type="radio" value="8" />
                                    <span class="black-text">สมาร์ททีวี (Smart TV)</span>
                                    
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s1 m3 l3"></div>
                        <div class="col s3 m3 l3">
                            <p class="center-align">
                                <a class="waves-effect waves-light btn prev_btn" onclick="ck_prev(9);">
                                <i class="material-icons left">chevron_left</i>ย้อนกลับ</a>
                            </p>
                        </div>
                        
                        
                        <div class="col s3 m3 l3">
                          
                            <p class="center-align">
                                <a class="waves-effect waves-light btn next_btn" onclick="ck_next(9);">
                                <i class="material-icons right">chevron_right</i>ถัดไป</a>
                            </p>
                        </div>
                        <div class="col s1 m3 l3"></div>
                    </div>
                </div>
               
            </form>
           <!--  <div class="col s3 m3 l3">
                <p class="center-align">
                    <a class="waves-effect waves-light btn">
                    <i class="material-icons right">chevron_right</i>REGISTER & NEXT</a>
                </p>
            </div> -->
        </div>
    </div>
     
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
       $(".q1").show();
       $('#myform').on("keydown",function(event){
               if (event.keyCode == 9) {
                   //you got tab i.e "NEXT" Btn
                   $('.next_btn').trigger("click");
                   ck_next(2);
               }
               if (event.keyCode == 13) {
                   //you got enter i.e "GO" Btn
                   event.preventDefault();
                   // $('.next_btn').trigger("click");
                   ck_next(2);
               }
        });
    });

    function ck_next(number) {
        let page = (number*1)+1;
        let json_data = {aid : "null", qid : number, question_type : "1", title : "question part 1", answer_val : "", sorting : "0", device : "<?php echo $_SERVER['HTTP_USER_AGENT']; ?>", tricker : <?php echo $_SESSION['qtricker'];?>, uid : <?php echo $_SESSION['userid'];?>};
        $(".q"+page).show();
        $(".q"+number).hide();
        return postdata(json_data);

    }

    function ck_prev(number) {
        let page = (number > 0 ? (number*1)-1 : 0 );
        let json_data = {aid : "null", qid : number, question_type : "1", title : "question part 1", answer_val : "", sorting : "0", device : "<?php echo $_SERVER['HTTP_USER_AGENT']; ?>", tricker : <?php echo $_SESSION['qtricker'];?>, uid : <?php echo $_SESSION['userid'];?>};
        $(".q"+page).show();
        $(".q"+number).hide();
        return postdata(json_data)
    }

    function postdata($data) {
        $.ajax({
            type: "POST",
            url: "fndata.php",
            // data: {aid : "null", qid : "1",question_type : "x", title : "x", sorting : "x", device : "x", tricker : "1", uid : "17"},
            data: $data,
            success: function (result) {
                //do somthing here
                console.log('Success!!!');
                console.log(result);
            }
        });
    }

    function getDataFormat(qnumber, field_val) {
        let result = '';
        if(qnumber == 2 || qnumber == 7) {
            result = $('#q'+qnumber).val();
        } else {
            result = $('input[name=q'+qnumber+']:checked').val();
        }
        return result;
    }

    
</script>
   
</body>

</html>