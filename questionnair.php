<?php
session_set_cookie_params(0);
session_start();
include 'conx/mysql.php';
// include 'fndata.php';

$question_trigger = $_SESSION['qtricker'];
$uid = $_SESSION['userid'];
$ukey = $_SESSION['userkey'];
// print_r($_SESSION);
if(!isset($_SESSION['qtricker'])) {
    header("Location: personal_info.php");
    die();
}

$sql = "SELECT * FROM question";
$result = $db->query($sql);
$row = $result->fetch_all();

$data = "";
$cnt=0;
foreach ($row as $key => $value) {
    $cnt++;
    $data .= ' <div class="q'.$cnt.'" style="display:none;">
                <div class="row">
                <div class="col s12 m8 l8 offset-m2 offset-l2">
                        <h6>'.$cnt.'. '.$value[1].'</h6>

                        <p>
                            <label>
                                <input class="with-gap" name="group'.$value[0].'" type="radio" />
                                <span class="black-text">เห็นด้วยอย่างยิ่ง</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group'.$value[0].'" type="radio" />
                                <span class="black-text">เห็นด้วย</span>
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group'.$value[0].'" type="radio" />
                                <span class="black-text">เห็นด้วยปานกลาง</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group'.$value[0].'" type="radio" />
                                <span class="black-text">ไม่เห็นด้วย</span>
                                
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group'.$value[0].'" type="radio" />
                                <span class="black-text">ไม่เห็นด้วยอย่างยิ่ง</span>                        
                            </label>
                        </p>
                </div>

            </div>
            <div class="row">
                <div class="col s1 m3 l3"></div>
                <div class="col s3 m3 l3">
                    <p class="center-align">
                        <a class="waves-effect waves-light btn prev_btn" onclick="ck_prev('.$cnt.');">
                        <i class="material-icons left">chevron_left</i>ย้อนกลับ</a>
                    </p>
                </div>
                
                <div class="col s3 m3 l3">
                  
                    <p class="center-align">
                        <a class="waves-effect waves-light btn next_btn" onclick="ck_next('.$cnt.');">
                        <i class="material-icons right">chevron_right</i>ถัดไป</a>
                    </p>
                </div>
                <div class="col s1 m3 l3"></div>
            </div>
            </div>
            ';
}

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

    h5 {
        font-size: 80%;
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
                   <h6>แบบสอบถามเรื่อง บุคลิกภาพห้าองค์ประกอบกับการเล่นเกมดิจิตอล</h6>
                    <p>
                        <span>ส่วนที่ 1: ข้อมูลทั่วไปและการเล่นเกมดิจิตอลของผู้ตอบแบบสอบถาม</span>
                    </p>
                </div>
                <?php if($question_trigger==1 || $question_trigger==true) { ?>
                <div class="col s12 m12 l12">
                    <div class="row">
                    	<div class="col s2 m2 l2"></div>
                        <div class="col s2 m2 l2">
                            <img class="responsive-img" src="img/image001.png"> 
                        </div>
                        <div class="col s2 m2 l2">
                            <div id="icon33"  style="display: none;"><img class="responsive-img" src="img/image002.png"></div>
                        </div>
                        <div class="col s2 m2 l2">
							<div id="icon66"  style="display: none;"><img class="responsive-img" src="img/image003.png"></div>
                        </div>
                        <div class="col s2 m2 l2">
							<div id="iconfinish"  style="display: none;"><img class="responsive-img" src="img/image004.png"></div>
                        </div>
                        <div class="col s2 m2 l2">
                            <div id="icontimer"  style="display: none;"><img class="responsive-img" width="50%" src="img/image005.png"></div>
                        </div>
                        
                        <!-- <div class="col s2 m2 l2"></div>  -->
                    </div>
                    
                </div>
                <?php } ?>
                <!-- <div class="col s12 m4 l2"><p>s12 m4</p></div>
                <div class="col s12 m4 l8"><p>s12 m4</p></div>
                <div class="col s12 m4 l2"><p>s12 m4</p></div> -->
        </div>
        <?php echo $data;?>

        </div>
    </div>
    <div class="raw">
        <div class="col s12">
           <p >
            <span>Progress : </span><span class="show_p">0</span> <span>%</span>
           </p>
        </div>
        <div class="col s12">
             <div class="progress">
                <div class="determinate" style="width: 70%"></div>
            </div>
        </div>
    </div>
   
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script>

    $(document).ready(function(){
       $(".q1").show(function(){
            // $('.prev_btn').hide();
            return calpercentage(1, 59);
       });

       $('selector').on("keydown",function(event){
               if (event.keyCode == 9) {
                   //you got tab i.e "NEXT" Btn
                   $('.next_btn').trigger("click");
               }
               if (event.keyCode == 13) {
                   //you got enter i.e "GO" Btn
                   $('.next_btn').trigger("click");

               }
        });

        
    });

    $(function ($) {
        var fiveMinutes = 60 * 10,
        display = $('#time');
        startTimer(fiveMinutes, display);
    });

    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            // display.text(minutes + ":" + seconds);
            // console.log(minutes + ":" + seconds);
            if (--timer < 0) {
                timer = duration;
            }

            if(minutes < 1) {
                $('#icontimer').show();
            }

        }, 1000);
    }

    function ck_next(number) {
        
        $('.prev_btn').show();
        
        let page = (number*1)+1;
        let json_data = {aid : "null", qid : number, question_type : "2", title : "question part 2",answer_val : "", sorting : "0", device : "<?php echo $_SERVER['HTTP_USER_AGENT']; ?>", tricker : <?php echo $_SESSION['qtricker'];?>, uid : <?php echo $_SESSION['userid'];?>};
        if(number!=60) {
            $(".q"+page).show();
            $(".q"+number).hide();

            postdata(json_data);
            return calpercentage(number, 59);
        } 
    }

    function ck_prev(number) {
        if(number<2){
            $('.prev_btn').hide();
        }
        let page = (number > 0 ? (number*1)-1 : 0 );
        let json_data = {aid : "null", qid : number, question_type : "2", title : "question part 2",answer_val : "", sorting : "0", device : "<?php echo $_SERVER['HTTP_USER_AGENT']; ?>", tricker : <?php echo $_SESSION['qtricker'];?>, uid : <?php echo $_SESSION['userid'];?>};
        if(number>1) {
            $(".q"+page).show();
            $(".q"+number).hide();
            postdata(json_data);
            return calpercentage(number-2, 59);
        }
       
    }

    function calpercentage(number, total) {
        result = ((number*1) / (total*1)) * 100;
        $(".show_p").html(parseFloat(result).toFixed(0));
        $(".determinate").attr("style","width: "+result+"%");

        if(result >= 33 && result< 66) {
            $("#icon33").show();
        } else if(result >= 66 && result < 100) {
            $("#icon66").show();
        } else if(result >= 100){
            // 100% of finish
            $("#iconfinish").show();
        }
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