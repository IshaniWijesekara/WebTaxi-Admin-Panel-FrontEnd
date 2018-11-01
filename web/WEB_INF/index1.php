<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/21/2018
 * Time: 3:54 PM
 */
include 'mainNav.php';
?>
<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="_css/driverSignUp.css">
<link rel="stylesheet" href="_css/style.css">
<link rel="stylesheet" href="_css/card.css">
<link rel="stylesheet" href="_css/icon.min.css">
<link rel="stylesheet" href="_css/home1.css">
<link rel="stylesheet" href="_css/semantic.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<body>

<!-- Page content -->
<div class="container-fluid" style=" margin-top: 45px">
    <div class="row" style=" ; position: relative">
        <img src="_img/39.jpg" class="img-responsive" style="width: 100% ; height: 700px">
        <div class="col-md-8 col-sm-8 col-xs-12 col-lg-8" style="; height: 40px ; margin-top: -500px">
            <p style=" ; color: white ; font-size: 50px ; margin-left: 50px ; text-align: center">
                Ride With Us In One Minute
            <p style="color: #FFC300  ; text-align: center ; font-size: 40px ">
                FASTER,SAFER,SMARTER
            </p>
            </p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4" style="height: 40px ;margin-top: -650px">
            <div class="box2" style="">
                <br>
                <header style="font-family: 'Lato', sans-serif;top: 20px">
                    <a href="riderSignUp.php"> Create New Account</a>
                </header>
                <p style="color: white ; margin-top: 30px ; text-align: center;font-size: 25px ;font-family: 'Lato', sans-serif ;">
                    Ride With Taxi
                </p>
                <h4 style=" color: white ; font-size: 20px;text-align: center ; font-family: 'Lato', sans-serif ;margin-top: -5px">
                    Sign In</h4>
                <form style="margin-left: 45px ; margin-top: 20px">
                    <div class="inputBox">
                        <input type="text" name="email" required="" placeholder="Enter Your Email"
                               style="  width: 300px;  ;padding: 5px;  color: #ffff; margin-bottom: 30px; border: none; border-bottom: 1px solid; outline: none;background: transparent">
                        <label></label>
                    </div>
                    <div class="inputBox" style="margin-top: -20px">
                        <input type="password" name="email" required="" placeholder="Enter Your Password"
                               style="  width: 300px;padding: 5px;  color: #ffff; margin-bottom: 30px; border: none; border-bottom: 1px solid; outline: none;background: transparent">
                        <label></label>
                    </div>
                    <div style="margin-top: 10px">
                        <button class="ui button"
                                style="width: 300px ; height: 50px;font-size: 18px ; background-color: #1DE9B6  ">
                            <a
                                    href="profile1.php">Log In</a>
                        </button>
                        <br>
                        <!--                <p class="pMain" style="font-size: 10px ; margin-top: 80px"><a href="passwordReset.php">Forgot Your Password?</a></p>-->
                        <br>

                        <button class="fb btn"
                                style="margin-top: 10px;width: 300px ; height: 50px;font-size: 15px">
                            <i class="fa fa-facebook fa-fw"></i>
                            Login with Facebook
                        </button>

                        <button class="google btn"
                                style="margin-top: 10px;width: 300px ; height: 50px;font-size: 15px">
                            <i class="fa fa-google fa-fw"></i>
                            Login with Google Plus
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- The Band Section -->
<div class="row" id="row1">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div id="band22">
            <div class="w3-container w3-content w3-center w3-padding-64">
                <h2>Ride with Us in One Minute</h2 class="w3-opacity" style="font-size: 30px
                ;
                    color: black">
                <p class="w3-justify" style="color: gray()">We have created a fictional band website. Lorem ipsum dolor
                    sit amet,
                    consectetur adipiscing
                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud
                    exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim
                    id est laborum consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <br>
                <div>
                </div>
                <!-- The Tour Section -->
                <div class="w3-black" id="tour">
                    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
                        <h2 class="w3-wide w3-center">Explore SriLanka </h2>
                        <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>


                        <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                            <div class="w3-third w3-margin-bottom">
                                <img src="_img/94.jpg" alt="New York" style="width:100% ; height: 200px"
                                     class="w3-hover-opacity ">
                                <div class="w3-container w3-white">
                                    <p><b>Kandy</b></p>
                                    <p class="w3-opacity">Fri 27 Nov 2016</p>
                                    <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                    <button class="w3-button w3-black w3-margin-bottom"
                                            onclick="document.getElementById('ticketModal').style.display='block'">Buy
                                        Tickets
                                    </button>
                                </div>
                            </div>
                            <div class="w3-third w3-margin-bottom">
                                <img src="_img/galle.jpg" alt="Paris" style="width:100% ; height: 200px"
                                     class="w3-hover-opacity">
                                <div class="w3-container w3-white">
                                    <p><b>Galle</b></p>
                                    <p class="w3-opacity">Sat 28 Nov 2016</p>
                                    <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                    <button class="w3-button w3-black w3-margin-bottom"
                                            onclick="document.getElementById('ticketModal').style.display='block'">Buy
                                        Tickets
                                    </button>
                                </div>
                            </div>
                            <div class="w3-third w3-margin-bottom">
                                <img src="_img/92.jpg" alt="San Francisco" style="width:100% ;height: 200px"
                                     class="w3-hover-opacity">
                                <div class="w3-container w3-white">
                                    <p><b>Mathara</b></p>
                                    <p class="w3-opacity">Sun 29 Nov 2016</p>
                                    <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                    <button class="w3-button w3-black w3-margin-bottom"
                                            onclick="document.getElementById('ticketModal').style.display='block'">Buy
                                        Tickets
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" id="row3">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div class="w3-container w3-content w3-padding-64" id="contact222">
            <br>
            <br>
            <h2>Get a Fare Estimate from Us</h2>
            <div class="w3-row w3-padding-32">
                <div class="w3-col m6 w3-large w3-margin-bottom">
                    <div style="height: 200px ; width: 300px ; ">
                        <img src="_img/40.jpg" style="height: 200px; width: 300px">
                    </div>
                </div>
                <div class="w3-col m6">
                    <form action="/action_page.php" target="_blank">

                        <input class="w3-input w3-border" type="text" placeholder="Enter PickUp Location" required
                               name="Message">

                        <input class="w3-input w3-border" type="text" placeholder="Enter Drop Location" required
                               name="Message">
                        <button class="w3-button w3-black w3-section w3-right" type="submit">Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Ticket Modal -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div id="contact1234">
            <br>
            <div class="w3-container w3-content  w3-padding-64">
                <h2>Why To
                    Choose Our Taxi App?</h2>
                <p style=" margin-top: 40px; text-align: center ; color: black">
                    It started as a simple idea: What if you could request a ride from your phone? More than 5 billion
                    trips later,
                    we’re working to make transportation safer and more accessible, helping people order food quickly
                    and
                    affordably, reducing congestion in cities by getting more people into fewer cars, and creating
                    opportunities for
                    people to work on their own terms.
                </p>
                <div>
                    <img src="_img/uberpic1.jpg" style="height: 300px ;; margin-top: 10px ;width: 800px">
                    <br>
                    <br>
                    <button type="button"
                            style=";background-color: #85929E ; color: white ; width: 300px ; height: 50px ; font-size: 18px "><span
                                style="margin-top: 2px;margin-left: -20px ; font-size: 18px"><a
                                    href="passenger.php" style="color: white">Reasons to Ride With Us -></a> </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div class="w3-container w3-content w3-padding-64" style="" id="contact1">
            <h2>Your safety is always a top priority</h2>
            <p style="font-size: 18px ; color: #34495E ; text-align: center "> We’re committed to helping riders and
                drivers get
                whe
                re they want to go with confidence..</p>
            <div>
                <img src="_img/eeee.jpg">
            </div>
            <button type="button"
                    style="background-color: #85929E ; color: white ; width: 300px ; height: 50px ; font-size: 18px ; margin-top: 20px">
                <a style="color: white" href="safety.php">Learn More About Safety -></a>
            </button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div id="ready">
            <div class="w3-container w3-content w3-padding-64" id="contact14444">
                <h2>Get Ready To Drive With Us</h2>
                <p style="font-size: 18px ; color: #34495E ; text-align: center ">Make money when you want, wherever you
                    are.</p>
                <div>
                    <img src="_img/desk%20(1).jpg">
                </div>
                <button type="button"
                        style="background-color: #85929E ; color: white ; width: 300px ; height: 50px ; font-size: 18px">
                    <a style="color: white" href="driverPage.php"> Reasons To Drive With Us -></a>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- The Contact Section -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
            <h2 class="w3-wide w3-center" A>CONTACT</h2>
            <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
            <div class="w3-row w3-padding-32">
                <div class="w3-col m6 w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker" style="width:30px"></i>Taxi,Us<br>
                    <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
                    <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
                </div>
                <div class="w3-col m6">
                    <form action="/action_page.php" target="_blank">
                        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                            <div class="w3-half">
                                <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                            </div>
                            <div class="w3-half">
                                <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                            </div>
                        </div>
                        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                        <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
                    </form>
                </div>


                <button type="button"
                        style="background-color: #85929E ; color: white ; width: 300px ; height: 50px ; font-size: 18px">
                    <a style="color: white" href="taxiWork.php"> How Does Taxi Works -></a>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- End Page Content -->
</div>
<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;" class="w3-grayscale-max"></div>
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
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides ");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-white";
    }
</script>

<?php
include 'footer.php';
?>
</body>
</html>

