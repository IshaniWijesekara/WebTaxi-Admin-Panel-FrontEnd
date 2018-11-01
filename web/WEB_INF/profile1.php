<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/22/2018
 * Time: 10:32 AM
 */
?>
<html>
<head>
    <title>profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/dashboard.css">
    <link rel="stylesheet" href="_css/nav.css">
    <link rel="stylesheet" href="_css/test4.css">
    <link rel="stylesheet" href="_css/profile.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<?php
include 'topNav.php';
?>
<div class="ui grid">
    <div class="row">
        <div class="three wide computer sixteen wide tablet column">
            <div class="nav-container1">
                <ul class="nav1">
                    <li class="li">
                        <a href="profile1.php" class="a">
                            <span><i class="ui large home icon"></i></span>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>

                    <li class="li">
                        <a href="profileUpdate1.php" class="a">
                            <span><i class="ui large setting icon"></i></span>
                            <span class="text">Settings</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="myTrips.php" class="a">
                            <span><i class="ui large taxi icon"></i></span>
                            <span class="text">My Trips</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="#" class="a">
                            <span><i class="ui large car icon"></i></span>
                            <span class="text">UpComing Trips</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="profileUpdate1.php" class="a">
                            <span><i class="ui large user icon"></i></span><span class="text">Profile</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="password.php" class="a">
                            <span><i class="ui large cogs icon"></i></span>
                            <span class="text">Change Password</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="payement.php" class="a">
                            <span><i class="ui large dollar icon"></i></span>
                            <span class="text">Payement</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="#" class="a">
                            <span><i class="ui large dollar icon"></i></span>
                            <span class="text">Promocodes</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="index1.php" class="a">
                            <span><i class="ui large right arrow icon"></i></span>
                            <span class="text">LogOut</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="twelve wide computer sixteen wide tablet column" id="col1">

            <form>
                <div class="row" id="row1">
                    <div class="col-md-6">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 ">
                            <input type="text" id="pickUp" name="pickUp" placeholder="Enter PickUp Location">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                            <input type="text" id="drop" name="drop" placeholder="Enter Drop Location">
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">

                                <img src="_img/47.png" id="image">

                                <div class="content">
                                    <div class="header">Sudan</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">

                                <img src="_img/Van.png" id="image2">

                                <div class="content">
                                    <div class="header">SUV</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">

                                <img src="_img/Tuk.png" id="image3">

                                <div class="content">
                                    <div class="header">Sudan</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">

                                <img src="_img/Car.png" id="image4">

                                <div class="content">
                                    <div class="header">Sudan</div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary btn-lg btn-block info" id="btn"><a
                                    style="color: white"
                                    href="riding.php">
                                Continue
                            </a>
                        </button>

                    </div>

                    <div class="col-md-6">
                        <div class="col-md-12">
                            <fieldset class="f1" id="fieldset">
                            </fieldset>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

</body>

<script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>

</html>
