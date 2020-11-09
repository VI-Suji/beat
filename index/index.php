<?php
 session_start();
 ?>
<!DOCTYPE html>

<head>

  <title>Beat The Game</title>
  <link rel="icon" href="iste.png" type="image/icon type">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0" />



  <style>
  body{
      background: linear-gradient(
    90deg,
    rgba(255, 255, 255, 1) 0%,
    rgba(2, 44, 126, 1) 0%,
    rgba(192, 199, 200, 1) 0%,
    rgba(0, 3, 171, 1) 0%,
    rgba(0, 3, 2, 1) 100%
  );
    }

    @media (max-width: 1028px) {
   .background {
    /* height: 100%;
    width: 200%;
    z-index: 1; */
    background-position-x: -38vh;
    /*     background-image: url("data-original1_m4.jpg"); 
  } */
  .container-fluid {
    padding: 20% 10%;
  }
  
  .brand{
    padding: 0px 70% 50px 20px;
    font-family: "Monsteratt";
    font-weight: bolder;
    font-size: 40px;
    color: yellow;
    margin-right: auto;
    margin-bottom: 150px;
    background-position-x: -38vh;
  }

  .brand-txt {
    padding: 0px 70% 50px 20px;
    font-family: "Monsteratt";
    font-weight: bolder;
    font-size: 40px;
    color: yellow;
    margin-right: auto;
    margin-bottom: 150px;
    background-position-x: -38vh;
  }
  .logo {
    width: 60px;
    padding-left: 0px;
  }
  .welcome-txt {
    font-size: 80%;
    padding: 10px;
  }
}
    
    #upper-nav,.footer {


        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(255, 0, 0, 1) 100%);
        border-radius: 5px;
        color: white;
        width: 100%;
    }

    #nav-11-img {
        width: 9vmin;
        height: 9vmin;
    }

    .footer {
      background: linear-gradient(
    90deg,
    rgba(255, 255, 255, 1) 0%,
    rgba(2, 44, 126, 1) 0%,
    rgba(192, 199, 200, 1) 0%,
    rgba(0, 3, 171, 1) 0%,
    rgba(0, 3, 2, 1) 100%
  );
    }
</style>

</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark navbar-trans navbar-inverse rounded mb-1" id="upper-nav">
  <a class="navbar-brand" href="#"><img src='../lol.png' id="nav-11-img" class='logo'><span
                    class='welcome-txt'> <?php echo htmlentities($_SESSION['name']); ?><span class='username'> (<?php echo htmlentities($_SESSION['score']); ?>)</span></span></a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav ml-auto">
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
            <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>


  <section class="background" id="title">
  <!-- <h1 class='brand'>BEAT <br> THE <br>GAME</h1> -->
    <div class="container-fluid">
      <div class='row bg'>
        <div class='col-lg-6 md-3 sm-1 left'>
        <h1 class='brand-txt'>BEAT THE GAME</h1>
        </div>
        <div class='col-lg-6 md-3 sm-1 right'>
          
        </div>
      </div>
    </div>
  </section>
  <!--UPCOMING MATCH-->
  <section>
    <div class="upcoming-match-container pt-5" style = "height:90vh;">
      


    <div class="row mx-auto ">

    <div style="background: black;" class="col-12 col-md-6 p-4 mb-4 rounded" style=" border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px 0.5;">
     <div class="row">
      <div class=" row match-title dark fire  mx-auto my-auto">
        <p class="Blazing title-text mx-auto mt-5 pb-3"><span class="mad">MATCH OVER</span>
        <p>
      </div>

         </div>
  </div>
  <div style="background: blue;" class="col-12 col-md-6 p-4 mb-4 rounded" style=" border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px 0.5;">
     <div class="row">
      <div class=" row match-title dark fire  mx-auto my-auto">
        <p class="Blazing title-text mx-auto mt-5 pb-3"><span class="mad">MATCH OVER</span>
        <p>
      </div>

         </div>
  </div>

  </div>

      <div class="row mt-2 ">

      <div style="background: black;" class="col-12 col-md-6 p-4 mb-4 rounded" style=" border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px 0.5;">
     <div class="row">
      <div class=" row match-title dark fire  mx-auto my-auto">
        <p class="Blazing title-text mx-auto mt-5 pb-3"><span class="mad">MATCH OVER</span>
        <p>
      </div>

         </div>
  </div>

      <div style="background: blue;" class="col-12 col-md-6 p-4 mb-4 rounded" style=" border: 1px solid;
  padding: 1px;
  box-shadow: 5px 10px 0.5;">
     <h2 style="color:white;">10-NOV-2020 (FINAL)</h2>
    <div class="row">
      <div class="col-4">
        <a href="../createteam/index.php">
        <img class = "img-responsive img-thumbnail img-fluid rounded-circle"src="micapb.jpeg" alt=""></a>
      </div>
      <div class="col-4">
      <a href="../createteam/index.php">
        <img class = "img-responsive img-thumbnail img-fluid rounded-circle" src="vs.jpg" alt=""></a>
      </div>  

      <div class="col-4">
      <a href="../createteam/index.php"><img class = "img-responsive img-fluid img-thumbnail rounded-circle" src="dccapb.jpeg" alt=""></div>
      </a></div>
  </div>


      </div>



      <!-- <div class="row mx-auto ">
        <div style="background: black;" class="col-12 col-md-6 p-4 mb-4 rounded" style=" border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px 0.5;">
           <div class="row">
            <div class=" row match-title dark fire  mx-auto my-auto">
              <p class="Blazing title-text mx-auto mt-5 pb-3"><span class="mad">COMING SOON</span>
              <p>
            </div>

               </div>
        </div>


        <div style="background: blue;"  class="col-12 col-md-6 p-4 mb-4 rounded " style=" border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px 0.5;">
          <div class="row">
            <div class=" row match-title dark fire  mx-auto my-auto">
              <p class="Blazing title-text mx-auto mt-5 pb-3"><span class="mad">COMING SOON</span>
              <p>
            </div>

               </div>
        </div>




       
      </div> -->

  <div style="background: linear-gradient(
    90deg,
    rgba(255, 255, 255, 1) 0%,
    rgba(2, 44, 126, 1) 0%,
    rgba(192, 199, 200, 1) 0%,
    rgba(0, 3, 171, 1) 0%,
    rgba(0, 3, 2, 1) 100%
  );" class="footer row p-0 mx-auto jumbotron jumbo-color mt-1">


            <div class="col-12">
                <!-- buttons to previous and continue -->
                <div class="row mx-auto mb-3 pt-2 p-2 rounded">
                    <!-- <div class="col-6 col-md-4 mx-auto">
                        <a href="../index/index.php">
                            <button style="outline:none; border:none;"
                                class="btn  block-f btn-danger rounded pt-1 pb-1">HOME</button></a>
                    </div>

                    <div class="col-6 col-md-4 mx-auto"><button type="submit" onclick="saveteam()"
                            style="outline:none; border:none;" name="myteam"
                            class="btn btn-success block rounded pt-1 pb-1">PLAY</form></button> </div> -->

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

  </section>


  <!--START OF JS-->
  <script>
    //$('.carousel').carousel();
    // MATCH DIV JAVASCRiPT

    var dt = new Date();
    var day = dt.getDate();
    var hor = dt.getHours();

    //considering a match day on NOV 2 and NOV 3
    //the starting time is 7:30 pm
    //the team logo will change 12 hours before the game

    //console.log(day);
    //console.log(hor)



    document.getElementById("match1-team1").style.backgroundImage = "url('MI.jpg')";



    document.getElementById("match1-team2").style.backgroundImage = "url('RCB.jpg')";




    document.getElementById("match2-team1").style.backgroundImage = "url('kkr.jpg')";



    document.getElementById("match2-team2").style.backgroundImage = "url('dc.png')";




    document.getElementById("match3-team1").style.backgroundImage = "url('rcb.jpg')";



    document.getElementById("match3-team2").style.backgroundImage = "url('kkr.jpg')";



    document.getElementById("match4-team1").style.backgroundImage = "url('MI.jpg')";



    document.getElementById("match4-team2").style.backgroundImage = "url('dc.png')";



    if (!((day == 5 && hor >= 19) || (day == 6 && hor <= 1))) {
      document.getElementById("opac1").style.opacity = 0.3;
    }
    if ((day == 5 && hor >= 19) || (day == 6 && hor <= 1)) {
      document.getElementById("opac1").style.opacity = 1;
    }


    if (!((day == 6 && hor >= 19) || (day == 7 && hor <= 1))) {
      document.getElementById("opac2").style.opacity = 0.3;
    }
    if ((day == 6 && hor >= 19) || (day == 7 && hor <= 1)) {
      document.getElementById("opac2").style.opacity = 1;
    }


    if (!((day == 8 && hor >= 19) || (day == 9 && hor <= 1))) {
      document.getElementById("opac3").style.opacity = 0.3;

    }
    if ((day == 8 && hor >= 19) || (day == 9 && hor <= 1)) {
      document.getElementById("opac3").style.opacity = 1;
    }
    if (!((day == 10 && hor >= 19) || (day == 11 && hor <= 1))) {
      document.getElementById("opac4").style.opacity = 0.3;
    }
    if ((day == 10 && hor >= 19) || (day == 11 && hor <= 1)) {
      document.getElementById("opac4").style.opacity = 1;
    }
  </script>
</body>

</html>
