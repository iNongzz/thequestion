<?php

// echo $_POST['xdata'];
include 'conx/mysql.php';

$arr_data = array("aid"=>null, "qid"=>"1","question_type"=>"x","title"=>"x","sorting"=>"x","device"=>"x","tricker"=>"1","uid"=>"17");
insert_answer($db, $arr_data);

function insert_answer($db, $arr_data) {
        
    // $sql = "SELECT aid FROM answers WHERE uid='".$arr_data['uid']."' and qid='".$arr_data['qid']."' limit 0,1 ";
    $sql = "SELECT aid FROM answers WHERE uid='".$arr_data['uid']."' and qid='".$arr_data['qid']."' limit 0,1 ";
    $result = $db->query($sql) or die($db->error);
    if(($row=$result->fetch_assoc())!=null) {
        // having id, update data
        echo "Update";
        $update = "UPDATE `answers` SET `title`='".$arr_data['title']."',`timestamp`='".date("Y-m-d H:i:s")."',`device`='".$arr_data['device']."',`tricker`='".$arr_data['tricker']."' WHERE uid='".$arr_data['uid']."' and qid='".$arr_data['qid']."' ";
        echo $res = $db->query($update) or die($db->error);
    } else {
        // No id, insert new data
        echo "Insert";
        $insert = "INSERT INTO `answers`( `qid`, `question_type`, `title`, `sorting`, `uid`, `timestamp`, `device`, `tricker`) VALUES ('".$arr_data['qid']."','".$arr_data['question_type']."','".$arr_data['title']."',1,'".$arr_data['uid']."','".date("Y-m-d H:i:s")."','".$arr_data['device']."','".$arr_data['tricker']."')";
        echo $res = $db->query($insert) or die($db->error);
        // echo $db->error();//
    }
}

