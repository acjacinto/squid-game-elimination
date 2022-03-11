<!DOCTYPE html>
<html>
<style>
    html,
    body {
        background: darkviolet;
        color: #fff;
        height: 100%;
        font-family: poppins;
    }

    html {
        display: table;
        margin: auto;
    }

    body {
        display: table-cell;
        vertical-align: middle;
    }

    .container {
        font-size: 60px;
        text-align: center;
    }

    .timer {
        width: 100%;
        margin: 0 auto;
    }

    .jst-hours {
        float: left;
    }

    .jst-minutes {
        float: left;
    }

    .jst-seconds {
        float: left;
    }
</style>

<body>

    <div class="container">
        <h1 class='timer' data-minutes-left=200></h1>
    </div>
    <button id="start">START</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="jquery.simple.timer.js"></script>
    <script>
        $("#start").click(function() {
                    $('.timer').startTimer();
        });
    </script>

</body>

</html>