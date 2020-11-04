<?php
    session_start();
    include('config.php');
    $flag=0;
    $sql ="SELECT * FROM `userlogin`";
    $query= $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0){
        foreach($results as $result){
            $pass=md5($result->password);
            $sql ="UPDATE `userlogin` SET `pass`=:pass WHERE `useremail`=:id";
            $query= $dbh -> prepare($sql);
            $query-> bindParam(':id', $result->useremail, PDO::PARAM_STR);
            $query-> bindParam(':pass', $pass, PDO::PARAM_STR);
            $query->execute();
            $flag=1;
        }
    }
    if($flag==1){
        echo "<script type='text/javascript'>document.location = 'login.php';<?script>";
    }else{
        echo "Something went wrong";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>