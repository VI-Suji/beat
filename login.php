<?php
session_start();
error_reporting(0);
// $pass=md5('Daniel');
// echo "$pass";
include('config.php');
if(isset($_POST['SIGNUP'])){
  echo "<script type='text/javascript'> document.location = 'signup.php'; </script>";
}
if(isset($_POST['LOGIN']))
{
$email=$_POST['user'];
$password=md5($_POST['password']);
$sql ="SELECT * FROM userlogin WHERE useremail=:email and pass=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
  foreach($results as $result){
    if($result->flag==0){
      $_SESSION['alogin']=$_POST['user'];
      $_SESSION['name']=$result->name;
      $_SESSION['score']=$result->score;
      echo "<script type='text/javascript'> document.location = 'changepass.php'; </script>";
    }else{
      $_SESSION['alogin']=$_POST['user'];
      $_SESSION['name']=$result->name;
      $_SESSION['score']=$result->score;
      echo "<script type='text/javascript'> document.location = 'index/index.php'; </script>";
    }
  }

} else{
  
  echo "<script>alert('Invalid Details'); document.location = 'login.php'; </script>";

}

}


?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="icon" href="iste.png" type="image/icon type">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> ISTE- Beat The Game</title>
  <!-- <link rel="stylesheet" href="stylelogin.css"> -->
  <link rel="stylesheet" a href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
  <style>
   
    @media only screen and (min-width: 650px) {
      body{
      background-image:url('login.jpg');
    }
}
  </style>
</head>

<body>
  <div class="container" >



    <div class="row">


      <div class=" text-center contain ">



        <div class="row mx-auto" style="margin-top:-7vmin;">
          <div class="col-12 mx-auto">
            <img src="css/logo.jpg" class="img-responsive img-thumbnail  mb-2 mx-auto d-block"
              style="border-radius: 20%; width:30vmin;height:30vmin; margin-top:-8">
    
          </div>
        </div>
    
        <div class="row mx-auto">
    
    
          <div class="col-12 mx-auto">
            <form method="POST">
              <div class="row mx-auto">
                <div class="col-12 mx-auto">
                  <div class="form-input rounded">
                    <input type="text" id="input-1" class="rounded mx-auto" style="width:80vmin" id="email" name="user"
                      placeholder="TKMCE Mail-id" />
                  </div>
                </div>
              </div>
    
              <div class="row mx-auto">
                <div class="col-12 mx-auto">
    
                  <div class="form-input">
                    <input type="password" id="input-2" class="rounded mx-auto" style="width:80vmin;" name="password"
                      placeholder="Password" id="myInput" />
    
                  </div>
                </div>
              </div>
    
              <input onclick="checkid()" value="LOGIN" id="subbt" type="submit" name="LOGIN" class="btn-login btn btn-success" style = "background-color:#141E30;"/>
              <br><br>
              <input id="sub" value="SIGNUP" type="submit" name="SIGNUP" class="btn-signup btn btn-success" style = "background-color:#141E30;" placeholder="SIGNUP" />
              
            </form>
          </div>
        </div>
      </div>


    </div>
  </div>
 

  <script>


    function checkid() {
      var at = document.getElementById("email").value.indexOf("@tkmce.ac.in");
      console.log(at)
      submitOK = "true";

      if (at == -1) {
        alert("Not a valid e-mail!");
        document.getElementById("subbt").name = "";
        location.reload()
        submitOK = "false";
      }

      if (submitOK == "false") {
        return false;
      }
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
</body>

</html>
