<?php
session_start();
error_reporting(0);
include('../config.php');
$sql ="SELECT * FROM myteam ";
$query= $dbh -> prepare($sql);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
echo "<script> let myTeams = ".json_encode($results)."</script>";

$sql ="SELECT * FROM player ";
$query= $dbh -> prepare($sql);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
echo "<script> let players = ".json_encode($results)."</script>";
?>
<script>
    // console.log(myTeams);
</script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beat The Team</title>
</head>
<body>
    <div class="col-6 col-md-4 mx-auto"><button type="submit" onclick="saveteam()"
                            style="outline:none; border:none;" name="myteam"
                            class="btn btn-success block rounded pt-1 pb-1">PLAY</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function saveteam(){
            $.post("updateteamdata.php",
                {
                    temdata:  JSON.stringify(myTeams)
                },
                function(data, status){
                    alert(data);
            });
            document.location = '../login.php';
        }
</script>
<script>
    const getPlayerScore = (p) => {
  return parseInt(players.find((player) => player.name === p).score);
};

myTeams.forEach((myTeam) => {
  const { p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11 } = myTeam;
  const normalPlayers = [p3, p4, p5, p6, p7, p8, p9, p10, p11];

  const capScore = getPlayerScore(p1);
  const vCapScore = getPlayerScore(p2);
  let normalPlayersScore = 0;
  normalPlayers.forEach((normalPlayer) => {
    normalPlayersScore += getPlayerScore(normalPlayer);
  });

  //total score  (adding weightage )
  //setting tscore to myteams
  myTeam.tscore = 2 * capScore + 1.5 * vCapScore + normalPlayersScore;
});

// console.log(myTeams);
</script>
</body>
</html>
