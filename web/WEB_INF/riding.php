<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/17/2018
 * Time: 3:22 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>riding</title>
    <link rel="stylesheet" href="_css/nav.css">

    <link rel="stylesheet" href="_css/dashboard.css">
    <link rel="stylesheet" href="_css/test4.css">
    <link rel="stylesheet" href="_css/riding.css">
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="/css/semantic-ui/semantic.min.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php
include 'topNav.php';
?>
<div class="ui grid" style="height: 100%">
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
            <div>
                    <div>
                        <header>Get Ride in One Minute</header>
                        <br>
                        <form style="margin-left: 10px">
                            <div class="row" style="margin-top: 30px">
                                <div class=" col-sm-6 col-xs-6 col-md-6 col-lg-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <label for="fname"> Vehicle Type</label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <label for="lname">Total Distance</label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <label for="country">Payement Method</label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <select id="country" name="country">
                                                <option value="australia">Cash</option>
                                                <option value="canada" >Card</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 40px">
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <button class="ui  button"
                                                    style=" ; background-color: #009688 ;color: white ">
                                                Ride Now
                                            </button>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <button class="ui  button"
                                                    style=" background-color: #009688 ;color: white ">
                                                Shedule Ride Later
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
                                    <fieldset style="height: 400px">
                                    </fieldset>
                                </div>
                            </div>
                        </form>

                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
