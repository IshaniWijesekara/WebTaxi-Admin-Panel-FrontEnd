<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/29/2018
 * Time: 3:50 PM
 */
include 'mainNav.php';
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/semantic.css">
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="_js/semantic.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="/css/semantic-ui/semantic.min.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="_css/safeRide.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    <div class="row" id="row1">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="text">

                <h1  id="h1">Trip Safety</h1>
                <h2 id="h2">Taxi Commitment to Riders</h2>
                <p id="p1">
                    Taxi is dedicated to keeping people safe
                    on the road. Our technology enables us to
                    focus on rider safety before, during, and
                    after every trip. Here's how.
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="icon-left">
                <img src="_img/ddd.jpg" style="width: 100%">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="icon-left">
                <img src="_img/driverpartner_thankyou_dribbble_2.gif" id="gif1">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="col1">
            <div class="text">
                <div>
                    <h3 id="h3">Before The Trip How You Get Safe</h3>
                    <h2 >Getting Safe Ride</h2>
                    <br>

                    <h5 id="h5">Safe Picks</h5>
                    <p id="p1">
                        Taxi is dedicated to keeping people safe
                        on the road. Our technology enables us to
                        focus on rider safety before, during, and
                        after every trip. Here's how.
                    </p>
                    <br>

                    <h5 id="h5">Open To Everyone Everywhere</h5>
                    <p id="p3">
                        All ride requests are blindly matched with
                        the closest available driver. So there is
                        no discrimination based on race, gender,
                        or destination.
                    </p>
                    <br>

                    <h5 id="h6">Driver Profiles</h5>
                    <p id="p4">
                        When you’re matched with a driver, you’ll see
                        their name, license plate number, photo, and
                        rating—so you know who’s picking you up ahead
                        of time. And even after the trip, you’re able
                        to contact your driver if you left something
                        behind.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="row2">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="icon-left">
                <img src="_img/Uber%20(1).jpg" style="width: 100%">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="text">
                <h3 id="h7">During The Trip How You Get Safe</h3>
                <h2 >Getting To Your Destination</h2>

                <h5 id="h8">Always On The Map</h5>
                <p id="p5">
                    Follow your trip in real time so that you always
                    know where you are. And if you use uberPOOL, you
                    ’ll know exactly who’s riding with you.
                </p>

                <h5 id="h9">Share Your ETA</h5>
                <p id="p6">
                    Follow your trip in real time so that you always
                    know where you are. And if you use uberPOOL, you
                    ’ll know exactly who’s riding with you.
                </p>
            </div>
        </div>
    </div>
    <div class="row" id="row3">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="icon-left">
                <img src="_img/uber-collects-data-that-could-be-used-for-autonomous-cars.gif" style="width: 100%">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="text">
                <h3 id="h10">During The Trip How You Get Safe</h3>
                <h2 >Getting To Your Destination</h2>

                <h5 id="h11">Always On The Map</h5>
                <p id="p7">
                    Follow your trip in real time so that you always
                    know where you are. And if you use uberPOOL, you
                    ’ll know exactly who’s riding with you.
                </p>

                <h5 id="h12">Share Your ETA</h5>
                <p id="p8">
                    Follow your trip in real time so that you always
                    know where you are. And if you use uberPOOL, you
                    ’ll know exactly who’s riding with you.
                </p>
            </div>
        </div>
    </div>

    <button class="ui grey button"
            style="color: white; ;font-size: 18px ; margin-left: 20px ; margin-top: 100px ; width: 400px"><a
                style="color: white" href="riderSignUp.php">Get A Safe Ride With Taxi >></a></button>
    <br>
    <br>
    <br>
    <br>
    <script>
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>
    <script>
        $(window).load(function () {
            $('.post-module').hover(function () {
                $(this).find('.description').stop().animate({
                    height: "toggle",
                    opacity: "toggle"
                }, 300);
            });
        });
    </script>
</div>

<?php
include 'footer.php';
?>
</body>
</html>
