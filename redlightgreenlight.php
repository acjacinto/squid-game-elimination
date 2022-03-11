<!DOCTYPE html>
<html>

<head>
    <title>SQUID GAME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="squidgame icon" href="sg_icon.jpg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="diamonds.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>
    <div class="row">

        <div class='video-container'>
            <video id="doll" class="doll" autoplay>
                <source id="doll_timer" src="redlight_greenlight/00.mp4" type="video/mp4">
            </video>
        </div>


        <div class="column left">

            <img class='light' id='light' src="redlight_greenlight/nolight.png" class="center">

        </div>

        <div class="column middle">

        </div>

        <div class="column right">


            <video id="video-timer" class="video-timer" loop>
                <source id="timer" src="timer/5mins_clock.mp4" type="video/mp4">
            </video>

            <br><br><br><br><br><br><br><br>
            <div class="container-fluid">
                <!-- If Needed Left and Right Padding in 'md' and 'lg' screen means use container class -->
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        &nbsp;
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button id="play" type="button" class="btn btn-secondary"><i class="fa fa-play" aria-hidden="true"></i></button>
                            <button id="pause" type="button" class="btn btn-secondary"><i class="fa fa-pause" aria-hidden="true"></i></button>
                            <button id="stop" type="button" class="btn btn-secondary"><i class="fa fa-stop" aria-hidden="true"></i></button>
                        </div>

                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    </div>

                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 ">

                        <div class="btn-group">
                            <button id="btn_greenlight" type="button" class="btn btn-lg btn-success">Green Light</button>
                            <button id="btn_redlight_01" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_02" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_03" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_04" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_05" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_06" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_07" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_08" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_09" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_10" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_11" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_12" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_13" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>
                            <button id="btn_redlight_14" style="display:none;" type="button" class="btn btn-lg btn-danger">Red Light</button>

                        </div>

                    </div>
                </div>


            </div>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="jquery.diamonds.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

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


            //GREEN LIGHT BUTTON
            $("#btn_greenlight").click(function() {
                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/greenlight.png");
                }).fadeIn(0);

                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/00.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                // const audio = new Audio("player_eliminated/005_eliminated.mp3");
                // audio.play();
                return false;
            });

            //REDLIGHT CONDITION
            var condition = 0; //i get this from database
            var c = condition;


            if (c == 0) {

                $('#btn_redlight_01').css({
                    'display': ''
                });
            } else if (c == 1) {

                $('#btn_redlight_02').css({
                    'display': ''
                });
            }

            $('#btn_redlight_01').click(function() {
                $('#btn_redlight_01').hide();
                $('#btn_redlight_02').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/001.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_02').click(function() {
                $('#btn_redlight_02').hide();
                $('#btn_redlight_03').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/02.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_03').click(function() {
                $('#btn_redlight_03').hide();
                $('#btn_redlight_04').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/03.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_04').click(function() {
                $('#btn_redlight_04').hide();
                $('#btn_redlight_05').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/04.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_05').click(function() {
                $('#btn_redlight_05').hide();
                $('#btn_redlight_06').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/05.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_06').click(function() {
                $('#btn_redlight_06').hide();
                $('#btn_redlight_07').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/06.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_07').click(function() {
                $('#btn_redlight_07').hide();
                $('#btn_redlight_08').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/07.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_08').click(function() {
                $('#btn_redlight_08').hide();
                $('#btn_redlight_09').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/08.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_09').click(function() {
                $('#btn_redlight_09').hide();
                $('#btn_redlight_10').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/09.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_10').click(function() {
                $('#btn_redlight_10').hide();
                $('#btn_redlight_11').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/10.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_11').click(function() {
                $('#btn_redlight_11').hide();
                $('#btn_redlight_12').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/11.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_12').click(function() {
                $('#btn_redlight_12').hide();
                $('#btn_redlight_13').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/12.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_13').click(function() {
                $('#btn_redlight_13').hide();
                $('#btn_redlight_14').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/13.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });

            $('#btn_redlight_14').click(function() {
                $('#btn_redlight_14').hide();
                $('#btn_redlight_01').show();

                $("#light").fadeOut(0, function() {
                    $("#light").attr("src", "redlight_greenlight/redlight.png");
                }).fadeIn(0);

                //Load Video
                $("#doll").fadeOut(0, function() {
                    $('video source').attr('src', "redlight_greenlight/14.mp4")
                    $('#doll')[0].load()
                }).fadeIn(0);
                return false;
            });


        });
    </script>
</body>

</html>