<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/28/2018
 * Time: 12:00 PM
 */
include 'mainNav.php';
?>
<html>
<head>

    <title>passenger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/passenger.css">
    <link rel="stylesheet" href="_css/semantic.css">
    <link href="/css/semantic-ui/semantic.min.css" media="screen" rel="stylesheet" type="text/css">

    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <script type="text/javascript" src="_js/semantic.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <img src="_img/personal-driver-1200x460.jpg" class="img-responsive"  id="image1">
        <div class="img-title">
            <h1 style="margin-top: -50px ; color: #D5D8DC">Have a safe Ride with Us</h1>
            <button class="ui button" id="btn11"><a style="color: black" href="riderSignUp.php">Start Riding
                    With
                    Us</a></button>
        </div>
    </div>
</div>

<div class="container">
    <div style="margin-top: 60px" id="heading">
        <h2 class="w3-justify" id="header2">
            Always Have A Safe Ride With Us
        </h2>
    </div>
    <h3 class="w3-justify" id="header3">
        The Best Way To Get Where You're Going.Have A ride By Us
    </h3>
</div>

<br>
<br>
<br>
<div class="container-fluid">
    <div class="container" style="margin-top: -20px">
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-4" id="col1">
                <h4 style="margin-top: 20px">
                    Tap a button, get a ride
                </h4>
                <p id="p2">
                    Choose your ride and set your location. You'll see your driver's picture and vehicle details, and
                    can track their arrival on the map.
                </p>
            </div>

            <div class="col-sm-4" id="col2">
                <h4 style="margin-top: 20px">
                    Always on, always available
                </h4>
                <p id="p22">
                    No phone calls to make, no pick-ups to schedule. With 24/7 availability, request a ride any time of
                    day, any day of the year.
                </p>
            </div>
            <div class="col-sm-4" id="col3">
                <h4 style="margin-top: 20px">
                    You rate, we listen
                </h4>
                <p id="p23">No phone calls to make, no pick-ups to schedule. With
                    24
                    /7 availability, request a ride any time of day, any day of the year.</p>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="container-fluid" id="container12">
    <div class="container" style="margin-top: 20px">
        <div class="w3-container w3-content w3-padding-64">
            <h3>Get a Fare Estimate From Us</h3>
            <div class="w3-row w3-padding-32" style="margin-left: -50px">
                <div class="w3-col m6 w3-large w3-margin-bottom">
                    <div id="subDiv">
                        <div id="googleMap" style="height:250px;width: 350px" class="w3-grayscale-max"></div>
                        <script>
                            function myMap() {
                                myCenter = new google.maps.LatLng(41.878114, -87.629798);
                                var mapOptions = {
                                    center: myCenter,
                                    zoom: 12, scrollwheel: false, draggable: false,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

                                var marker = new google.maps.Marker({
                                    position: myCenter,
                                });
                                marker.setMap(map);
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

                    </div>
                </div>
                <div class="w3-col m6" style="margin-top: 50px">
                    <form action="/action_page.php" target="_blank">

                        <input class="w3-input w3-border" type="text" placeholder="Enter PickUp Location" required
                               name="Message">
                        <br>
                        <input class="w3-input w3-border" type="text" placeholder="Enter Drop Location" required
                               name="Message">
                        <button class="w3-button w3-black w3-section w3-right" type="submit">Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 50px">
    <div class="row" style="width: 100%">
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <div class="row" style="margin-top: 70px ; ">
                <div class="col-sm-6" id="col56">
                    <h4 style="margin-top: 20px">
                        Create Your Account
                    </h4>
                    <p id="p57">
                        Sign up, get the app, and you’re all set to take rides—and stops along the way.
                    </p>
                    <button class="w3-button w3-black w3-section w3-right" type="submit"><a style="color: white"
                                                                                            href="riderSignUp.php">SignUp
                            to Ride</a></button>
                </div>

                <div class="col-sm-6" id="col58">
                    <h4 style="margin-top: 20px">
                        Already Have An Account?
                    </h4>
                    <p id="50">
                        Sign up, get the app, and you’re all set to take rides—and stops along the way.
                    </p>
                    <button class="w3-button w3-black w3-section w3-right" type="submit"><a
                                href="riderSignIn.php"
                                style="color: white">Login
                            To Ride</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" id="container2">
    <div class="container">
        <div class="row" style="margin-top: 100px">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="text-align: center ;background-color: #F4F6F6 ">
                <br>
                <br>
                <h3 id="h34">How to Use the Taxi App</h3>
                <img src="_img/safe.jpg">
                <p style="margin-top: 30px ; font-size: 18px">
                    Taxi’s smartphone apps connect riders with nearby driver-
                    partners. Here’s how to request a ride and track your driver.
                </p>
                <h5 style="color: #0E566C"><a>Way To Use The Taxi App >></a></h5>
                <br>
                <br>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" id="col59">
            <br>
            <br>
            <h3 id="h37">From start to finish, a ride you can trust</h3>
            <img src="_img/444.jpg">
            <p style="margin-top: 30px ; font-size: 18px">
                Taxi’s smartphone apps connect riders with nearby driver-
                partners. Here’s how to request a ride and track your driver.Your safety is important to us before,
                during, and after every trip. That's why we continue to d
                evelop technology that helps make millions of rides safer every day.
            </p>
            <h5 style="color: #0E566C"><a style="color: #0E566C" href="safeRide.php">How We Keep You Safe >></a>
            </h5>
            <br>
            <br>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>

<div class="container" id="container3">
    <div class="col-sm-16">
        <img class="img-responsive" src="_img/3d-graphics_gray_texture_016438_.jpg" id="image4">
        <div class="cenetered">
            <h1 style="position: relative ;  ; color: white ; font-size: 30px">Your First Ride Is Minute Away</h1>
            <button class="ui button" style="; ; height: 50px ; font-size: 20px ;margin-top: 20px; position: relative">
                <a href="riderSignUp.php" style="color: black">SignUp to Ride</a>
            </button>
        </div>
    </div>
</div>


<div class="container" style="margin-top: 100px" id="grid">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
            <h4 style="margin-top: 20px">
                Keep Our Trips Separate
            </h4>
            <img src="_img/un.jpg" style="margin-left: 40px">
            <p id="p55">
                Choose your ride and set your location. You'll see your driver's picture and vehicle details, and
                can track their arrival on the map.
            </p>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
            <h4 style="margin-top: 20px">
                Share Your Ride and Save
            </h4>
            <img src="_img/unnamed.jpg" style="margin-left: 20px">
            <p id="p56">
                No phone calls to make, no pick-ups to schedule. With 24/7 availability, request a ride any time of
                day, any day of the year.
            </p>
        </div>


        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
            <h4 style="margin-top: 20px ;">
                You rate, we listen
            </h4>
            <img src="_img/mn.jpg" style="margin-left: -45px">
            <p id="60">No phone calls to make, no pick-ups to schedule. With
                24
                /7 availability, request a ride any time of day, any day of the year.</p>
        </div>
    </div>
</div>
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

</body>
<div style="margin-top: 100px">

    <?php
    include 'footer.php';
    ?>
</div>
</html>
