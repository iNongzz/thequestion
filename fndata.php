<?php
// query function();
// if(isset($_REQUEST['']))
// echo "1";
// print_r($_REQUEST);
// echo $data1;
include 'conx/mysql.php';

function insert_answer($db, $arr_data) {
    // $arr_data = array("aid"=>"1", "qid"=>"1","question_type"=>"1","title"=>"1","sorting"=>"1","device"=>"1","tricker"=>"1");    
    // $sql = " SELECT aid FROM answers WHERE id=$arr_data['uid'] and qid=$arr_data['qid'] limit 0,1 ";
    // $result = $db->query($sql);
    // if($row=$result->fetch_assoc()) {
    //     // having id, update data
    //     $update = "UPDATE `answers` SET `aid`=$arr_data['aid'],`title`=$arr_data['title'],`timestamp`=now(),`device`=$arr_data['device'],`tricker`=$arr_data['tricker'] WHERE uid=$arr_data['uid'] and qid=$arr_data['qid']";
    // } else {
    //     // No id, insert new data
    //     $insert = "INSERT INTO `answers`(`aid`, `qid`, `question_type`, `title`, `sorting`, `uid`, `timestamp`, `device`, `tricker`) VALUES ($arr_data['aid'],$arr_data['qid'],$arr_data['question_type'],$arr_data['title'],1,$arr_data['uid'],now(),$arr_data['device'],$arr_data['tricker'])";
    //     // echo $db->error();//
    // }
}

