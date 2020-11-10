<?php
session_start();
error_reporting(0);
include('config.php');
$sql ="SELECT * FROM myteam";
$query= $dbh -> prepare($sql);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
echo "<script> let myTeams = ".json_encode($results)."</script>";

$sql ="SELECT * FROM userlogin ORDER BY score DESC LIMIT 5";
$query= $dbh -> prepare($sql);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
echo "<script> let toppers = ".json_encode($results)."</script>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="iste.png" type="image/icon type">
  <link rel="stylesheet" href="css/lbstyle.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BEAT THE GAME</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>
    body {
      background-image: url(login_page.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-origin: padding-box;
      height: 100vh;
      background-position: center;


    }

    .center {
      filter: drop-shadow(3px);
      transition: all 2s ease-in-out;
    }

    .center:hover {
      transform: scale(1.2);
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -40%);


    }
  </style>
</head>

<body>

  <div class="container ">

    <div class="center text-center p-5 shadow-lg rounded">
      <div class="row mx-auto text-center">
        <div class=" list mx-auto text-center d-flex justify-content-center text-align-center">
          <div class="item pl-5 pr-5 mx-auto">
            <h6 class="mx-auto my-auto" style="font-weight:600; width:50min;">Leaderboard </h6>
          </div>
        </div>
      </div>
      <div class="row mx-auto text-center">
        <div class="players" id="toppers"></div>
      </div>
      <div class="row mt-5 text-center">
        <div class=" list mx-auto text-center d-flex justify-content-center text-align-center">
          <div class="item pl-5 pr-5 mx-auto">
            <a href="index/index.php"><h6 class="mx-auto my-auto" style="font-weight:600; width:50min;">Go to home </h6></a>
          </div>
        </div>
      </div>
    </div>


  </div>
  <script>
let cnt = 0;
const setPlayers = () => {
  playersList = toppers.reduce((leaderBoard, topper) => {
    cnt = cnt + 1;
    leaderBoard += `<div class = "list p-0" style = "width:80vmin;">
            <div class = "item p-4">
            
            <div class="pos" style = "font-weight:510;">
            ${cnt}
            </div>
          <div class="name col-10 mx-auto" style = "font-weight:510;">
        ${topper.name}
          </div>
          <div class="name col-1 mx-auto" style = "font-weight:510;">
        ${topper.batch}
          </div>&nbsp;
         <div class="col-2" style = "">
        <strong>${topper.score}</strong>
        </div>
            </div>
            </div>`;

    return leaderBoard;
  }, "");

  playersElement = document.getElementById("toppers");
  playersElement.innerHTML = playersList;
};

setPlayers();
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
