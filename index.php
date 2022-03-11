<!DOCTYPE html>
<html>

<head>
    <title>SQUID GAME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="squidgame icon" href="sg_icon.jpg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="diamonds.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>
    <div class="row">

        <div class="column left">

            <img src="partycard.png" class="center" width="300">
            <br><br><br><br>
            <div class="content">
                <center><a href="#" onclick="toggle_choosing_teams();">Choosing Teams</a></center>&nbsp;
                <center><a href="#" onclick="toggle_redlight_greenlight();">Red Light, Green Light</a></center>&nbsp;
                <center><a href="#" onclick="toggle_honeycomb();">Honeycomb</a></center>&nbsp;
                <center><a href="#" onclick="toggle_tug_of_war();">Tug of War</a></center>&nbsp;
                <center><a href="#" onclick="toggle_rubber_mat();">Rubber Mat Jump</a></center>
            </div>

            <div class="trailer">
                <video id="choosingTeams" style="display:none;" class="vidchoosingTeams" src="mechanics/mech_choosing_teams.mp4" controls="true"></video>
                <img id="close_choosingTeams" style="display:none;" src="close.png" class="close" onclick="toggle_choosing_teams();">

                <video id="redlightGreenlight" style="display:none;" class="vidredlightGreenlight" src="mechanics/mech_redlight_greenlight.mp4" controls="true"></video>
                <img id="close_redlightGreenlight" style="display:none;" src="close.png" class="close" onclick="toggle_redlight_greenlight();">

                <video id="honeycomb" style="display:none;" class="vidhoneycomb" src="mechanics/mech_honeycomb.mp4" controls="true"></video>
                <img id="close_honeycomb" style="display:none;" src="close.png" class="close" onclick="toggle_honeycomb();">

                <video id="tugOfWar" style="display:none;" class="vidtugOfWar" src="mechanics/mech_tug_of_war.mp4" controls="true"></video>
                <img id="close_tugOfWar" style="display:none;" src="close.png" class="close" onclick="toggle_tug_of_war();">

                <video id="rubberMat" style="display:none;" class="vidrubberMat" src="mechanics/mech_rubber_mat.mp4" controls="true"></video>
                <img id="close_rubberMat" style="display:none;" src="close.png" class="close" onclick="toggle_rubber_mat();">
            </div>


        </div>

        <div class="column middle">
            <img src="squidgame_logo.png" class="center" width="600">
            <div class="diamond-grid">
                <div class="item"><img id="p005" src="player_img/005.png" width="170" height="200" /></div>
                <div class="item"><img id="p015" src="player_img/015.png" width="170" height="200" /></div>
                <div class="item"><img id="p027" src="player_img/027.png" width="170" height="200" /></div>
                <div class="item"><img id="p067" src="player_img/067.png" width="170" height="200" /></div>
                <div class="item"><img id="p101" src="player_img/101.png" width="170" height="200" /></div>
                <div class="item"><img id="p113" src="player_img/113.png" width="170" height="200" /></div>
                <div class="item"><img id="p199" src="player_img/199.png" width="170" height="200" /></div>
                <div class="item"><img id="p269" src="player_img/269.png" width="170" height="200" /></div>
                <div class="item"><img id="p420" src="player_img/420.png" width="170" height="200" /></div>
                <div class="item"><img id="p423" src="player_img/423.png" width="170" height="200" /></div>
                <div class="item"><img id="p512" src="player_img/512.png" width="170" height="200" /></div>
                <div class="item"><img id="frontman" src="player_img/frontman.png" width="170" height="200" /></div>
                <div class="item"><img id="p815" src="player_img/815.png" width="170" height="200" /></div>
            </div>
        </div>

        <div class="column right">


            <video id="video-timer" width="360" height="150" loop>
                <source id="timer" src="timer/5mins_clock.mp4" type="video/mp4">
            </video>

            <div class="container-fluid">
                <!-- If Needed Left and Right Padding in 'md' and 'lg' screen means use container class -->
                <div class="row">
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">

                        <label class="switch">
                            <input type="checkbox" id="togBtn">
                            <div class="slider round">
                                <!--ADDED HTML -->
                                <span class="on">10</span>
                                <span class="off">05</span>
                                <!--END-->
                            </div>
                        </label>

                    </div>

                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">

                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button id="play" type="button" class="btn btn-secondary"><i class="fa fa-play" aria-hidden="true"></i></button>
                            <button id="pause" type="button" class="btn btn-secondary"><i class="fa fa-pause" aria-hidden="true"></i></button>
                            <button id="stop" type="button" class="btn btn-secondary"><i class="fa fa-stop" aria-hidden="true"></i></button>
                        </div>

                    </div>
                </div>
            </div>


            <h1>
                <center>OST PAD</center>
            </h1>

            <div class="pad">
                <div class="box pad-1">
                    <center>Way Back Then</center>
                </div>
                <div class="box pad-2">
                    <center>Round 1</center>
                </div>
                <div class="box pad-3">
                    <center>The Rope is Tied</center>
                </div>
                <div class="box pad-4">
                    <center>Pink Soldiers</center>
                </div>

                <div class="box pad-5">
                    <center>Unfolded</center>
                </div>
                <div class="box pad-6">
                    <center>Needle & Dalgona</center>
                </div>
                <div class="box pad-7">
                    <center>Money Counting</center>
                </div>
                <div class="box pad-8">
                    <center>Round 6</center>
                </div>

                <div class="box pad-9">
                    <center>Murder without Violence</center>
                </div>
                <div class="box pad-10">
                    <center>Dawn</center>
                </div>
                <div class="box pad-11">
                    <center>Fly me to the Moon</center>
                </div>
                <div class="box pad-12">
                    <center>STOP</center>
                </div>
            </div>



        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="jquery.diamonds.js"></script>
    <script type="text/javascript">
        //------------------------------- MECHANICS ------------------------------- 
        function toggle_choosing_teams() {
            //video
            $('#choosingTeams').show();
            $('#redlightGreenlight').hide();
            $('#honeycomb').hide();
            $('#tugOfWar').hide();
            $('#rubberMat').hide();

            //close button
            $('#close_choosingTeams').show();
            $('#close_redlightGreenlight').hide();
            $('#close_honeycomb').hide();
            $('#close_tugOfWar').hide();
            $('#close_rubberMat').hide();

            var trailer = document.querySelector(".trailer")
            var video = document.querySelector(".vidchoosingTeams")
            trailer.classList.toggle("active");
            video.pause();
            video.currentTime = 0;
        }

        function toggle_redlight_greenlight() {
            //video
            $('#choosingTeams').hide();
            $('#redlightGreenlight').show();
            $('#honeycomb').hide();
            $('#tugOfWar').hide();
            $('#rubberMat').hide();

            //close button
            $('#close_choosingTeams').hide();
            $('#close_redlightGreenlight').show();
            $('#close_honeycomb').hide();
            $('#close_tugOfWar').hide();
            $('#close_rubberMat').hide();

            var trailer = document.querySelector(".trailer")
            var video = document.querySelector(".vidredlightGreenlight")
            trailer.classList.toggle("active");
            video.pause();
            video.currentTime = 0;
        }

        function toggle_honeycomb() {
            //video
            $('#choosingTeams').hide();
            $('#redlightGreenlight').hide();
            $('#honeycomb').show();
            $('#tugOfWar').hide();
            $('#rubberMat').hide();

            //close button
            $('#close_choosingTeams').hide();
            $('#close_redlightGreenlight').hide();
            $('#close_honeycomb').show();
            $('#close_tugOfWar').hide();
            $('#close_rubberMat').hide();

            var trailer = document.querySelector(".trailer")
            var video = document.querySelector(".vidhoneycomb")
            trailer.classList.toggle("active");
            video.pause();
            video.currentTime = 0;
        }

        function toggle_tug_of_war() {
            //video
            $('#choosingTeams').hide();
            $('#redlightGreenlight').hide();
            $('#honeycomb').hide();
            $('#tugOfWar').show();
            $('#rubberMat').hide();

            //close button
            $('#close_choosingTeams').hide();
            $('#close_redlightGreenlight').hide();
            $('#close_honeycomb').hide();
            $('#close_tugOfWar').show();
            $('#close_rubberMat').hide();

            var trailer = document.querySelector(".trailer")
            var video = document.querySelector(".vidtugOfWar")
            trailer.classList.toggle("active");
            video.pause();
            video.currentTime = 0;
        }

        function toggle_rubber_mat() {
            //video
            $('#choosingTeams').hide();
            $('#redlightGreenlight').hide();
            $('#honeycomb').hide();
            $('#tugOfWar').hide();
            $('#rubberMat').show();

            //close button
            $('#close_choosingTeams').hide();
            $('#close_redlightGreenlight').hide();
            $('#close_honeycomb').hide();
            $('#close_tugOfWar').hide();
            $('#close_rubberMat').show();

            var trailer = document.querySelector(".trailer")
            var video = document.querySelector(".vidrubberMat")
            trailer.classList.toggle("active");
            video.pause();
            video.currentTime = 0;
        }

        $(document).ready(function() {



            //------------------------------- OST PAD ------------------------------- 
            var padOne = new Audio('ost_sound/01_way_back_then.mp3');
            $('.pad-1').mousedown(function() {

                padOne.load()
                padOne.play();

            });

            var padTwo = new Audio('ost_sound/02_round_1.mp3');
            $('.pad-2').mousedown(function() {

                padTwo.load();
                padTwo.play();

            });

            var padThree = new Audio('ost_sound/03_the_rope_is_tied.mp3');
            $('.pad-3').mousedown(function() {

                padThree.load();
                padThree.play();

            });

            var padFour = new Audio('ost_sound/04_pink_soldiers.mp3');
            $('.pad-4').mousedown(function() {

                padFour.load();
                padFour.play();

            });

            var padFive = new Audio('ost_sound/05_unfolded.mp3');
            $('.pad-5').mousedown(function() {

                padFive.load();
                padFive.play();

            });

            var padSix = new Audio('ost_sound/06_needle_and_dalgona.mp3');
            $('.pad-6').mousedown(function() {

                padSix.load();
                padSix.play();

            });

            var padSeven = new Audio('ost_sound/07_money_counting.mp3');
            $('.pad-7').mousedown(function() {

                padSeven.load();
                padSeven.play();

            });

            var padEight = new Audio('ost_sound/08_round_6.mp3');
            $('.pad-8').mousedown(function() {

                padEight.load();
                padEight.play();

            });

            var padNine = new Audio('ost_sound/09_murder_without_violence.mp3');
            $('.pad-9').mousedown(function() {

                padNine.load();
                padNine.play();

            });

            var padTen = new Audio('ost_sound/10_dawn.mp3');
            $('.pad-10').mousedown(function() {

                padTen.load();
                padTen.play();

            });

            var padEleven = new Audio('ost_sound/11_fly_me_to_the_moon.mp3');
            $('.pad-11').mousedown(function() {

                padEleven.load();
                padEleven.play();

            });

            //Stop
            $('.pad-12').mousedown(function() {
                padOne.pause();
                padOne.currentTime = 0;
                padTwo.pause();
                padTwo.currentTime = 0;
                padThree.pause();
                padThree.currentTime = 0;
                padFour.pause();
                padFour.currentTime = 0;
                padFive.pause();
                padFive.currentTime = 0;
                padSix.pause();
                padSix.currentTime = 0;
                padSeven.pause();
                padSeven.currentTime = 0;
                padEight.pause();
                padEight.currentTime = 0;
                padNine.pause();
                padNine.currentTime = 0;
                padTen.pause();
                padTen.currentTime = 0;
                padEleven.pause();
                padEleven.currentTime = 0;
            });

            //------------------------------- TIMER ------------------------------- 
            //*Toogle Timer 5mins and 10mins
            $('#togBtn').click(function() {
                if ($(this).is(':checked')) {
                    $('video source').attr('src', "timer/10mins_clock.mp4")
                    $('#video-timer')[0].load()
                } else {
                    $('video source').attr('src', "timer/5mins_clock.mp4")
                    $('#video-timer')[0].load()
                }
            });

            //*Timer Buttons
            $('#play').click(function() {
                var mediaVideo = $("#video-timer").get(0);
                mediaVideo.play();
            });

            $('#pause').click(function() {
                var mediaVideo = $("#video-timer").get(0);
                mediaVideo.pause();
            });

            $('#stop').click(function() {
                var mediaVideo = $("#video-timer").get(0);
                mediaVideo.currentTime = 0;
                mediaVideo.pause();
            });


            //------------------------------- PLAYERS ------------------------------- 
            $(".diamond-grid").diamonds({
                size: 230, // Size of diamonds in pixels. Both width and height. 
                gap: 0, // Pixels between each square.
                hideIncompleteRow: false, // Hide last row if there are not enough items to fill it completely.
                autoRedraw: true, // Auto redraw diamonds when it detects resizing.
                itemSelector: ".item" // the css selector to use to select diamonds-items.
            });

            //FRONTMAN - Sheila
            $("#frontman").click(function() {
                $("#frontman").fadeOut(500, function() {
                    $("#frontman").attr("src", "player_img/frontman_masked.png");
                }).fadeIn(500);

                $("#frontman").fadeOut(1000, function() {
                    $("#frontman").attr("src", "player_img/frontman.png");

                    //Player Reset
                    $("#p005").attr("src", "player_img/005.png");
                    $("#p015").attr("src", "player_img/015.png");
                    $("#p027").attr("src", "player_img/027.png");
                    $("#p067").attr("src", "player_img/067.png");
                    $("#p101").attr("src", "player_img/101.png");
                    $("#p113").attr("src", "player_img/113.png");
                    $("#p199").attr("src", "player_img/199.png");
                    $("#p269").attr("src", "player_img/269.png");
                    $("#p420").attr("src", "player_img/420.png");
                    $("#p423").attr("src", "player_img/423.png");
                    $("#p512").attr("src", "player_img/512.png");
                    $("#p815").attr("src", "player_img/815.png");

                }).fadeIn(500);
                const audio = new Audio("player_eliminated/frontman_reset.mp3");
                audio.play();
                return false;
            });

            //PLAYER 005 - Julius
            $("#p005").click(function() {
                $("#p005").fadeOut(500, function() {
                    $("#p005").attr("src", "player_img/black.png");
                }).fadeIn(500);
                const audio = new Audio("player_eliminated/005_eliminated.mp3");
                audio.play();
                return false;
            });

            //PLAYER 015 - Patrick
            $("#p015").click(function() {
                $("#p015").fadeOut(500, function() {
                    $("#p015").attr("src", "player_img/black.png");
                }).fadeIn(500);
                const audio = new Audio("player_eliminated/015_eliminated.mp3");
                audio.play();
                return false;
            });

            //PLAYER 027 - Recem
            $("#p027").click(function() {
                $("#p027").fadeOut(500, function() {
                    $("#p027").attr("src", "player_img/black.png");
                }).fadeIn(500);
                const audio = new Audio("player_eliminated/027_eliminated.mp3");
                audio.play();
                return false;
            });

            //PLAYER 067 - A.C
            $("#p067").click(function() {
                $("#p067").fadeOut(500, function() {
                    $("#p067").attr("src", "player_img/black.png");
                }).fadeIn(500);
                const audio = new Audio("player_eliminated/067_eliminated.mp3");
                audio.play();
                return false;
            });

            //PLAYER 101 - Domenic
            $("#p101").click(function() {
                $("#p101").fadeOut(500, function() {
                    $("#p101").attr("src", "player_img/black.png");
                }).fadeIn(500);
                const audio = new Audio("player_eliminated/101_eliminated.mp3");
                audio.play();
                return false;
            });

            //PLAYER 113 - Zerwin
            $("#p113").click(function() {
                $("#p113").fadeOut(500, function() {
                    $("#p113").attr("src", "player_img/black.png");
                }).fadeIn(500);
                const audio = new Audio("player_eliminated/113_eliminated.mp3");
                audio.play();
                return false;
            });

            //PLAYER 199 - Byron
            $("#p199").click(function() {
                $("#p199").fadeOut(500, function() {
                    $("#p199").attr("src", "player_img/black.png");
                }).fadeIn(500);
                const audio = new Audio("player_eliminated/199_eliminated.mp3");
                audio.play();
                return false;
            });

            //PLAYER 269 - Darcy
            $("#p269").click(function() {
                $("#p269").fadeOut(500, function() {
                    $("#p269").attr("src", "player_img/black.png");
                }).fadeIn(500);
                const audio = new Audio("player_eliminated/269_eliminated.mp3");
                audio.play();
                return false;
            });

            //PLAYER 420 - Barvie
            $("#p420").click(function() {
                $("#p420").fadeOut(500, function() {
                    $("#p420").attr("src", "player_img/black.png");
                }).fadeIn(500);
                const audio = new Audio("player_eliminated/420_eliminated.mp3");
                audio.play();
                return false;
            });

            //PLAYER 423 - Nicanor
            $("#p423").click(function() {
                $("#p423").fadeOut(500, function() {
                    $("#p423").attr("src", "player_img/black.png");
                }).fadeIn(500);
                const audio = new Audio("player_eliminated/423_eliminated.mp3");
                audio.play();
                return false;
            });

            //PLAYER 512 - Dendar
            $("#p512").click(function() {
                $("#p512").fadeOut(500, function() {
                    $("#p512").attr("src", "player_img/black.png");
                }).fadeIn(500);
                const audio = new Audio("player_eliminated/512_eliminated.mp3");
                audio.play();
                return false;
            });

            //PLAYER 815 - Kenneth
            $("#p815").click(function() {
                $("#p815").fadeOut(500, function() {
                    $("#p815").attr("src", "player_img/black.png");
                }).fadeIn(500);
                const audio = new Audio("player_eliminated/815_eliminated.mp3");
                audio.play();
                return false;
            });
        });
    </script>
</body>

</html>