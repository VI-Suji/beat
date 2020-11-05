<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./iste.png" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISTE</title>
    <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background: black;
        }
        #upper-nav,
        .footer {
            position : relative;
            margin-bottom: 0px;
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

        .back {
            background-color: black;
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <div class="container-fluid back">
        <header class="row m-0">

            <nav class="navbar navbar-expand-lg navbar-dark navbar-trans navbar-inverse rounded mb-1" id="upper-nav">
                <a class="navbar-brand" href="#"><img src='1024px-Eleven_logo.svg.png' id="nav-11-img"
                        class='logo'><span class='welcome-txt'> Welcome <span class='username'></span></span></a>
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
                            <a class="nav-link" href="#">LeaderBoard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>


        </header>


        <section class="row p-4 outerbox">
            <div class="container animated animatedFadeInUp fadeInUp" id="j2">
                <h1 class="text-center text-white">About the Game </h1>
                <div class="row p-2 ">

                    <div class="col-md-8 mx-auto shadow p-1 rounded"
                        style="background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(255, 0, 0, 1) 100%);"
                        id="instructions">

                        <video id="my_video_1" class="video-js vjs-default-skin embed-responsive embed-responsive-21by9"
                            style="" width="100%" height="auto" controls preload="none"
                            poster='http://video-js.zencoder.com/oceans-clip.jpg'
                            data-setup='{ "aspectRatio":"720:480", "playbackRates": [1, 1.5, 2] }'>
                            <source src="about_beatthegame.mp4" type='video/mp4' />
                            <!-- <source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm' /> -->
                        </video>
                    </div>

                </div>
            </div>
        </section>

        <footer class="row mx-auto ">


            <div class="footer row p-4 mx-auto jumbotron jumbo-color mt-1">


                <div class="col-12">


                    <div class="row mx-auto mb-3">
                        <div class="col-12 text-center my-auto pt-2 text-responsive text-center mx-auto  " style="font-size:1.2em; font-weight:550; font-family:sans-serif ;-webkit-text-stroke: 1px black;
                            color:white ;
                            text-shadow:
                                3px 3px 0 blue,
                              -1px -1px 0 red,  
                               1px -1px 0 blue,
                               -1px 1px 0 blue,
                                1px 1px 0 blue">
                            <p>BEAT THE GAME</p>
                        </div>

                    </div>

                    <div class="row mx-auto my-auto">
                        <div class="col-md-1 col-4  pb-3 mx-auto">
                            <img class="img-responsive mx-auto img-thumbnail img-fluid rounded-circle"
                                style="width:25vmin;" src="iste.png" alt="iste">
                        </div>
                    </div>


                </div>


            </div>

        </footer>


        <style>
            #instructions {
                width: 200%;
                text-align: left;
                margin: 30px auto;
            }

            /* Show the controls (hidden at the start by default) */
            .video-js .vjs-control-bar {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }

            /* Make the demo a little prettier */
            /* body {
                        margin-top: 20px;
                        background: #fff;
                        text-align: center;
                        color: #aaa;
                        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                        background: radial-gradient(#333, hsl(200, 30%, 6%));
                    }
                    a,
                    a:hover,
                    a:visited {
                        color: #76DAFF;
                    } */
        </style>

</body>

<script>
    $(function () {
        var $refreshButton = $('#refresh');
        var $results = $('#css_result');

        function refresh() {
            var css = $('style.cp-pen-styles').text();
            $results.html(css);
        }

        refresh();
        $refreshButton.click(refresh);

        // Select all the contents when clicked
        $results.click(function () {
            $(this).select();
        });
    });

</script>

</html>