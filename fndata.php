<?php
// query function();
function insert_answer($db, $arr_data=array()) {
    $arr_data = array("aid"=>"1", "qid"=>"1","question_type"=>"1","title"=>"1","sorting"=>"1","device"=>"1","tricker"=>"1");    
    $sql =  "SELECT id FROM answer WHERE id=$arr_data['uid'] and qid=$arr_data['qid'] limit 0,1";
    $result = $db->query($sql);
    if($row=$result->fetch_assoc()) {
        // having id, update data
        $update = "UPDATE `answers` SET `aid`=$arr_data['aid'],`title`=$arr_data['title'],`timestamp`=now(),`device`=$arr_data['device'],`tricker`=$arr_data['tricker'] WHERE uid=$arr_data['uid'] and qid=$arr_data['qid']";
    } else {
        // No id, insert new data
        $insert = "INSERT INTO `answers`(`aid`, `qid`, `question_type`, `title`, `sorting`, `uid`, `timestamp`, `device`, `tricker`) VALUES ($arr_data['aid'],$arr_data['qid'],$arr_data['question_type'],$arr_data['title'],1,$arr_data['uid'],now(),$arr_data['device'],$arr_data['tricker'])";
        // echo $db->error();//
    }
}

function insert_user($db, $device, $tricker) {
    $genkey = md5(microtime().rand());
    $sql = "INSERT INTO user (id,ukey,timestamp,device,tricker) VALUES (null,'$genkey', now(), '$device', '$tricker')";
    
    if ($db->query($sql) === TRUE) {
        $last_id = $db->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
        return array('userid'=>$last_id,'userkey'=>$genkey);
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
        return array('userid'=>$db->error,'userkey'=>$db->error,'error'=>1);
        exit;
    }
    // return array('userid'=>,'userkey'=>);
}