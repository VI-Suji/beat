<?php
session_start();
include('config.php');
$jdata=json_decode($_POST['temdata']);

for($i=0;$i<count($jdata);$i++){
    $sql ="UPDATE `myteam` SET `tscore`=:score WHERE `useremail`=:id";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':score', $jdata[$i]->tscore, PDO::PARAM_INT);
    $query-> bindParam(':id', $jdata[$i]->useremail, PDO::PARAM_STR);
    $query->execute();
}
$flag=1;
// $c=count($jdata);
// echo "$c";

for($i=0;$i<count($jdata);$i++){
    $z=0;
    // $t=$jdata[$i]->useremail;
    $s0=(int)$jdata[$i]->tscore;
    // echo "$t";
    $sql ="SELECT `score` FROM `userlogin` WHERE `useremail`=:id";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':id', $jdata[$i]->useremail, PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0){
        foreach($results as $result){
            $s0+=(int)$result->score;
        }
        $sql ="UPDATE `userlogin` SET `score`=:score  WHERE `useremail`=:id";
        $query= $dbh -> prepare($sql);
        $query-> bindParam(':score', $s0, PDO::PARAM_INT);
        $query-> bindParam(':id', $jdata[$i]->useremail, PDO::PARAM_STR);
        $query->execute();
        $flag=$flag+1;
        // echo "$flag";
    }
}

if($flag==count($jdata)){
    echo "Updated the score succesfully ";
}else{
    echo "Something went wrong";
}

?>