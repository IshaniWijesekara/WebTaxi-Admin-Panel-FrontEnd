<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 9/13/2018
 * Time: 4:10 PM
 */
include 'driverTopNav.php'
?>
<html>
<head>
    <title>driverPage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/semantic.css">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/driverPage.css">
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="_js/semantic.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="/css/semantic-ui/semantic.min.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .box {
            position: relative;
        }

        .img-title {
            position: absolute;
            color: #fff;
            text-align: center;
            left: 0;
            right: 0;
            top: 70%;
            letter-spacing: 3px;
            font-size: 30px;
        }

    </style>
</head>
<body>
<div class="box">
    <img class="img-responsive" src="_img/XEnS14.jpg" alt="header image"/>
    <div class="img-title">
        <h1 id="mainDiv">Get Ready To Drive With Us</h1>
        <button class="ui button"><a style="color: black" href="driverSignUp.php">SignUp To
                Drive</a>
        </button>
    </div>
</div>

<div class="container " id="container1">

    <div class="w3-container w3-content w3-center w3-padding-64">
        <div class="container-fluid">
            <h2 class="w3-justify" id="header1">
                Move The Way You Want
            </h2>
        </div>
        <br>
        <div class="container-fluid">
            <h3 class="w3-justify" id="header2">
                Drive When You Want.Find Opportunities Around You
            </h3>
        </div>
    </div>
    <div class="w3-container w3-content w3-padding-64" id="contact333">
        <br>
        <br>
        <h2 id="header3">Get a Fare Estimate from Us</h2>
        <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <div id="header4">
                    <img src="_img/uber.jpg" id="imaage1">
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
    <div class="w3-container w3-content w3-padding-64" style=" ;margin-top: -40px ; id=" contact
    ">
    <div style="background-color: #F4F6F6 ">
        <br>
        <br>
        <br>
        <div class="w3-container" style="background-color: #F4F6F6 ">
            <h2 id="header5">How To Use The Driver App?
            </h2>
        </div>
        <div class="w3-container" style="background-color: #F4F6F6 ">
            <p id="p1">Tap A Button.Start Making Money.Its Working That Fits Around You.
            </p>
            <img src="https://www.uber-assets.com/image/upload/f_svg,q_auto/v1536163667/assets/46/44bf79-f121-4e5b-8f72-81082a9316f8/original/driverApp_desktop.svg">
        </div>
        <br>
        <br>
        <br>
    </div>
    <br>
    <br>
    <br>
    <div class="container-fluid" style="margin-top: 40px">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
                <img src="https://www.uber-assets.com/image/upload/f_svg,q_auto/v1535581271/assets/a2/ff4b13-ba33-4dc7-84b2-33b113096449/original/matchRider.svg"
                     class="w3-justify" style=";margin-left: 20px">
                <h4 id="header6">Open The App</h4>
                <p>Tap GO and you will be matched with a rider nearby.</p>
            </div>

            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4" style="">
                <img src="https://www.uber-assets.com/image/upload/f_svg,q_auto/v1535522753/assets/08/1702e0-ec8f-4ae4-8a80-110110732fb9/original/documentCheck.svg">
                <h4 id="header7">Swipe To Accept A Request</h4>
                <p>Get easy-to-follow directions for a smooth pickup.</p>
            </div>

            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4" style="">
                <img src="https://www.uber-assets.com/image/upload/f_svg,q_auto/v1535521926/assets/34/56a7a3-6c7b-46fc-a8c6-91d3271b92bd/original/money.svg">
                <h4 id="header8">Earn After Every Trip</h4>
                <p>Easily track your progress toward your daily and weekly goals.</p>
            </div>
        </div>

    </div>


    <div class="container-fluid" style="margin-top: 60px ; ">
        <br>
        <br>
        <br>
        <h2 id="header9">
            Why Drive With Us?
        </h2>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                <h4 id="header44">Flexible Shedule</h4>
                <p>
                    Not set hours.Day or Night you will always start and stop your jouney.
                    You will have a safe journey.
                </p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                <h4 id="header45">All Riders are registered.</h4>
                <p>
                    Every riders are registered in our taxi app.
                    Every riders will be rated from drivers like you.
                    So you will always know the names and rates of the riders.
                </p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                <h4 id="header46">Make the money when you want</h4>
                <p>
                    You are able to take decisions by yourself.You are the boss.
                    So you have the power to decide how often you want to
                    drive and earn
                </p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                <h4 id="header47">Automatic GPS Navigation</h4>
                <p>
                    Get a clear directions around town with easy to follow
                    turn by turn using navigation
                </p>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>

    <div class="w3-container w3-content w3-padding-64" style=" ;" id="contact">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <img src="_img/ffffffffffffffffffff.jpg" class="img-responsive" style="position: absolute">
                <div class="cenetered">
                    <h1 id="header48">
                        Start Driving With Us</h1>
                    <button class="ui button"><a
                                style="color: black" href="driverSignUp.php">SignUp To Drive</a></button>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-container w3-content w3-padding-64" style=" ; " id="contact">
        <div class="container-fluid">
            <div class="w3-justify">
                <div class="row" style="margin-top: 70px">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6" id="col44">
                        <h4 style="margin-top: 20px;font-size: 20px">
                            Create Your Account
                        </h4>
                        <p id="p1">
                            Sign up, get the app, and you’re all set to take rides—and stops along the way.
                        </p>
                        <button class="w3-button w3-black w3-section w3-right" type="submit"><a style="color: white"
                                                                                                href="driverSignUp.php">SignUp
                                to Drive</a></button>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6" id="col1">
                        <h4 id="header49">
                            Already Have An Account?
                        </h4>
                        <p id="p2">
                            Sign up, get the app, and you’re all set to take rides—and stops along the way.
                        </p>
                        <button class="w3-button w3-black w3-section w3-right" type="submit"><a style="color: white"
                                                                                                href="driverSignIn.php">Login
                                To Drive</a></button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="w3-container w3-content w3-padding-64" style=" ;margin-top: -60px " id="contact">
        <div class="container-fluid">
            <h2 id="header10">
                Earnings That Work For You
            </h2>
            <p id="p4">
                Tap A Button.Start Making Money.Its Working That Fits Around You.
            </p>

            <div class="row">
                <div class="col-sm-4" id="col2">
                    <h4 id="header11">
                        Make money on your schedule
                    </h4>
                    <img src="https://www.uber-assets.com/image/upload/f_svg,q_auto/v1535521901/assets/04/2e9cbe-6142-4d19-bea4-627a1967cc74/original/calendar.svg"
                         style="margin-left: 50%">
                    <p id="p5">
                        Choose your ride and set your location. You'll see your driver's picture and vehicle details,
                        and
                        can track their arrival on the map.
                    </p>
                </div>

                <div class="col-sm-4" id="col3">
                    <h4 id="header50">
                        Ways to earn extra
                    </h4>
                    <img src="https://www.uber-assets.com/image/upload/f_svg,q_auto/v1535581599/assets/be/707bec-e586-49e3-bd65-64898d721fd9/original/earning.svg"
                         style="margin-left: 50%">
                    <p id="p6">
                        No phone calls to make, no pick-ups to schedule. With 24/7 availability, request a ride any time
                        of
                        day, any day of the year.
                    </p>
                </div>
                <div class="col-sm-4" id="col5">
                    <h4 id="header12">
                        Get paid fast
                    </h4>
                    <img src="https://www.uber-assets.com/image/upload/f_svg,q_auto/v1535521926/assets/34/56a7a3-6c7b-46fc-a8c6-91d3271b92bd/original/money.svg"
                         style="margin-left: 50%">
                    <p id="p7">No phone calls to make, no pick-ups to schedule.
                        With
                        24
                        /7 availability, request a ride any time of day, any day of the year.</p>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 90px">
            <h2 id="header13">
                Earnings That Work For YouTrack your earnings at a glance
            </h2>
            <p style="font-size: 15px ">Easily track your progress toward your daily and weekly earning goals. You can
                also
                access your earning summaries with just a tap.

                How to track earnings: tap the fare icon on your map screen, then swipe right and left to explore your
                earnings.</p>
            <img src="_img/22222.jpg" id="image22">
        </div>
    </div>
</div>
<div class="w3-container w3-content w3-center w3-padding-64">
    <div class="container-fluid" style="margin-top: -100px">
        <div class="row">
            <div class="col-sm-4" style=";height: 230px ; padding: 10px">
                <h4 style="margin-top: 20px">
                    Safety Features
                </h4>
                <img src="_img/un.jpg" style="margin-left: 40px">
                <p id="p23">
                    Tell your loved ones where you are. Get help with the tap of a button. Technology makes travel safer
                    than ever before.
                </p>
            </div>

            <div class="col-sm-4" id="col45">
                <h4 style="margin-top: 20px">
                    Help If You Neef
                </h4>
                <img src="_img/unnamed.jpg" style="margin-left: 20px">
                <p id="55">
                    From contacting emergency assistance to getting 24/7 support, the app is designed around your
                    safety.
                </p>
            </div>
            <div class="col-sm-4" id="col56">
                <h4 style="margin-top: 20px ;">
                    An Exclusive Community
                </h4>
                <img src="_img/mn.jpg" style="margin-left: -45px">
                <p id="p57">We are millions of drivers and riders who share
                    Community Guidelines and depend on one another to do the right thing.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <button class="ui button" id="btn12"><a
                style="color: black" href="driverRequirements.php">Requirements To Drive -></a>
    </button>
</div>
<br>
<br>
<br>


<?php
include 'footer.php';
?>
</body>
</html>
