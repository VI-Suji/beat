<?php
session_start();
// echo "<script>alert('Time Up'); document.location = '../index/index.php'; </script>";
include('../config.php');
$email=$_SESSION['alogin'];
$sql ="SELECT * FROM myteam WHERE useremail=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount()>0){
    echo "<script type='text/javascript'>document.location = 'myteam.php';</script>";
    
}else{
$sql ="SELECT * FROM player WHERE 0";
$query= $dbh -> prepare($sql);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
echo "<script> let players = ".json_encode($results)."</script>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./iste.png" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beat the game</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        li {
            list-style-type: none;

        }



        .block {
            display: block;
            width: 100%;
            color: white;
            border: none;
            border-right: 2px solid white;
            background-color: transparent;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }

        .block-f {
            display: block;
            width: 100%;
            color: white;
            border: none;
            border-right: 2px solid white;
            background-color: transparent;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }

        .block:hover {
            display: block;
            width: 100%;
            border: none;
            border-left: 2px solid white;
            border-right: 2px solid white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;

        }


        .block:focus {
            display: block;
            width: 100%;
            border: none;
            border-left: 2px solid rgb(31, 28, 28);
            border-right: 2px solid rgb(31, 28, 28);
            background-color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;

        }

        .block:active {
            display: block;
            width: 100%;
            border: none;
            color: black;
            border-left: 2px solid rgb(31, 28, 28);
            border-right: 2px solid rgb(31, 28, 28);
            background-color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;

        }

        .block-f:active {
            display: block;
            width: 100%;
            border: none;
            color: black;
            border-left: 2px solid rgb(31, 28, 28);
            border-right: 2px solid rgb(31, 28, 28);
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;

        }



        /* 
        #header1 {

            background-image: url('before-cut.jpg');

            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 2vmin;
            background-origin: center;
            background-position-x: -3vw;
            background-position-y: -13vh;


        } */



        #header1, #middle1,
        #middle2,
        #middle3,
        #middle4  {
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(255, 0, 0, 1) 100%);
            background-repeat: no-repeat;
         
            background-size: cover;
            border-radius: 2vmin;
            background-origin: center;
            width: 100%;
        }

        #upper-nav {


            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(255, 0, 0, 1) 100%);
            border-radius: 5px;
            color: white;
        }

        .footer {
            width: 100%;
            color: white;
            font-weight: 600;
            font-size: 0.9em;
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(255, 0, 0, 1) 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-origin: content-box;
            font-family: 'Roboto', sans-serif;


        }

        #nav-11-img {
            width: 9vmin;
            height: 9vmin;
        }

       

        /* @media only screen and (max-width: 600px) {



            #header1 {

                background-image: url('before-cut.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                border-radius: 2vmin;
                background-origin: center;
                background-position-x: -3vw;
                background-position-y: -11vh;
                width: 100%;
                background-color: black;


            }

        #middle1,
        #middle2,
        #middle3,
        #middle4  {
            
            background:black;
            background-size: cover;
            border-radius: 2vmin;
            background-origin: center;
            width: 100%;
        }

    
            .footer {
                width: 100%;
                color: white;
                font-weight: 600;
                font-size: 0.9em;
                background: url('https://image.freepik.com/free-vector/cricket-ball-fire_1308-33325.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-origin: content-box;
                font-family: 'Roboto', sans-serif;


            }
        } */
    </style>
</head>

<body>
    <div class="container-fluid">



        <nav class="navbar navbar-expand-lg navbar-dark navbar-trans navbar-inverse rounded mb-1" id="upper-nav">
            <a class="navbar-brand" href="#"><img src='../lol.png' id="nav-11-img" class='logo'><span
                    class='welcome-txt'> <?php echo htmlentities($_SESSION['name']); ?><span class='username'> (<?php echo htmlentities($_SESSION['score']); ?>)</span></span></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                <ul style="text-align:center;" class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="../index/index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../leaderboard.php">LeaderBoard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about/index.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://istetkmce.in/contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--  style="background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(255,0,0,1) 100%); -->

        <div class="jumbotron jumbo-color mb-1" id="header1">
            <div class="row mb-0">


                <div class="col-12">

                </div><br><br><br>

                <div class="col-4 col-md-4 my-auto item">



                    <img onmouseover="glowEnter(this)" onmouseout="glowLeave(this)"
                        class="mx-auto d-block img-responsive img-fluid rounded-circle" src="srhcapb.jpeg">
                    <br>
                    <h2 class="caption" style="color:white;  ">SRH</h2>




                </div>


                <div class="col-4 col-md-4 item">

                    <img
                        class="mx-auto d-block img-responsive  img-fluid rounded-circle" src="lol.png"
                        id="team_img">

                </div>



                <div class="col-4 col-md-4 item">

                    <img onmouseover="glowEnter(this)" onmouseout="glowLeave(this)"
                        class="mx-auto d-block img-responsive  img-fluid rounded-circle" src="rcbcapb.jpeg"
                        id="team_img">

                    <br>
                    <h2 class="caption" style="color:white; ">RCB</h2>

                </div>


            </div>

        </div>
        <!-- header END -->


        <!-- div for guidelines -->

        <div class="row mx-auto rounded mb-0 pb-1 pt-1 text-center" id="middle1">

            <div class="col-12 mx-auto" id="guidelines">
                <p class="mx-auto my-auto" style=" color:orangered; font-family: sans-serif;">First choose Captain then
                    Vice Captain</p>
            </div>
        </div>

        <!-- first row with two cols for the navbars -->

        <div class="row mx-auto rounded mb-0 pb-1 pt-1" id="middle2">
            <div class="col-12 col-md-5 mx-auto middle">
                <ul class="nav nav-pills nav-justified nav-static-top my-auto" onClick="tabChange(event)">
                    <li class="nav-item">

                        <button id='wk' style=" font-weight: 500;font-size:.9em;border-left:1px solid white;"
                            class=" block btn p-0 mt-2">WK</button>
                    </li>
                    <li class="nav-item">
                        <button id='bat' style=" font-weight: 500;font-size:.9em"
                            class=" block btn p-0 mt-2">BAT</button>
                    </li>
                    <li class="nav-item">
                        <button id='ar' style=" font-weight: 500;font-size:.9em" class="block btn p-0 mt-2">AR</button>
                    </li>
                    <li class="nav-item">
                        <button id='bowl' style=" font-weight: 500;font-size:.9em;"
                            class=" block btn p-0 mt-2 ">BOWL</button>
                    </li>



                </ul>
            </div>




            <div class="col-12 col-md-5 mx-auto " id="">

                <!-- progressbar completed-->

                <ul class="nav nav-pills nav-justified nav-static-top my-auto row">
                    <li class="nav-item col-md-12 col-12">
                        <div class="w3-light-grey mt-2 rounded " style="color:white;">
                            <div id='progressBar' class="w3-orange rounded" style="height:20px;width:0% "></div>
                        </div>
                    </li>

                </ul>

            </div>
        </div>



        <!-- div row for the team players listing -->
        <div class="row mx-auto pb-5" id="middle4">
            <!-- left side -->
            <div onmouseover="glowEnter2(this)" onmouseout="glowLeave2(this)"
                class="col-12 col-md-5 shadow rounded mt-2 pt-3 pb-3 mx-auto" id="bg-2-">

                <div class="row">
                    <div class="col-6 mx-auto" style="color:white; font-weight:520;">Players</div>
                    <div class="col-6" id="remainingCredit">

                    </div>
                </div>

                <div id="players"></div>

            </div>

            <!-- right side -->
            <div onmouseover="glowEnter3(this)" onmouseout="glowLeave3(this)"
                class="col-12 col-md-5 shadow rounded mt-2 pt-3 pb-3 mx-auto" id="bg-">


                <div class="row">
                    <div class="col-6 mx-auto" style="color:white; font-weight:520;">My Team</div>
                    <div class=" col-6" id="usedCredit">

                    </div>
                </div>

                <div id="myTeam"></div>
            </div>

        </div>






        <!-- footer final completed -->
        <div class="footer row p-0 mx-auto jumbotron jumbo-color mt-1">


            <div class="col-12">
                <!-- buttons to previous and continue -->
                <div class="row mx-auto mb-3 pt-2 p-2 rounded">
                    <div class="col-6 col-md-4 mx-auto">
                        <a href="../index/index.php">
                            <button style="outline:none; border:none;"
                                class="btn  block-f btn-danger rounded pt-1 pb-1">HOME</button></a>
                    </div>

                    <div class="col-6 col-md-4 mx-auto"><button type="submit" onclick="saveteam()"
                            style="outline:none; border:none;" name="myteam"
                            class="btn btn-success block rounded pt-1 pb-1">PLAY</form></button> </div>

                </div>


                <div class="row mx-auto mb-3">
                    <div class="col-12 text-center my-auto text-responsive text-center mx-auto  "
                        style="font-size:1.2em; font-weight:550;">BEAT THE GAME</div>

                </div>

                <div class="row mx-auto my-auto">
                    <div class="col-md-1 col-4  pb-3 mx-auto">
                        <img class="img-responsive mx-auto img-thumbnail img-fluid rounded-circle" style="width:25vmin;"
                            src="iste.png" alt="iste">
                    </div>
                </div>


            </div>


        </div>
    </div>



    <script src="index.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>

        <script>
        // function check(){
        //     if(!(wkNo >= 1 && wkNo < 4 && arNo >= 1 && arNo < 4)){
        //         alert("Not enough players selected select atleast 1 and atmost 4 keepers and all rounders from each");
        //         return false;
        //     }else if(!(batNo >= 3 && batNo < 6 && bowlNo >= 3 && bowlNo < 6)){
        //         alert("Not enough players selected select atleast 3 and atmost 6 batsmen and bowlers from each");
        //         return false;
        //     }else{
        //         return true;
        //     }
        // }

        function saveteam(){
            let flag=0;
            if(!(wkNo >= 1 && wkNo < 4 && arNo >= 1 && arNo <= 4)){
                alert("Not enough players selected select atleast 1 and atmost 4 keepers and all rounders from each");
                flag=0;
            }else if(!(batNo >= 3 && batNo < 6 && bowlNo >= 3 && bowlNo < 6)){
                alert("Not enough players selected select atleast 3 and atmost 6 batsmen and bowlers from each");
                flag=0;
            }else{
                flag=1;
            }
            if(flag){
            $.post("saveteamdata.php",
                {
                    temdata:  JSON.stringify(myTeam)
                },
                function(data, status){
                    alert(data);
            });
        }


        }

    </script>

</body>

</html>
    <?php } ?>