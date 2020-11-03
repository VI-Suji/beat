<?php
session_start();
include('config.php');
$jdata=json_decode($_POST['temdata']);

for($i=0;$i<count($jdata);$i++){
    $sql ="UPDATE `myteam` SET `tscore`=:score WHERE `id`=:id";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':score', $jdata[$i]->tscore, PDO::PARAM_STR);
    $query-> bindParam(':id', $jdata[$i]->id, PDO::PARAM_STR);
    $query->execute();
}
?>