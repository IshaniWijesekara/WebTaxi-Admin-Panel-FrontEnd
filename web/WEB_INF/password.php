<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/17/2018
 * Time: 12:50 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="_css/nav.css">
    <link rel="stylesheet" href="_css/dashboard.css">
    <link rel="stylesheet" href="_css/test4.css">
    <link rel="stylesheet" href="_css/riding.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/password.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



</head>
<body>
<?php
include 'topNav.php';
?>
<div class="ui grid" id="mainDiv">
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
        <div class="twelve wide computer sixteen wide tablet column" style="margin-top: 100px">
            <h3>Change Password</h3>
            <form>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="fname">Old Password</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input type="text" id="old" name="old" placeholder="Your old password.">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="fname">New Password</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input type="text" id="new" name="new" placeholder="Your new password..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="fname">Confirm Password</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input type="text" id="confirm" name="confirm" placeholder="Retype..">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                        <button class="ui primary button" id="btn2" style="width: 100% ; height: 50px">Save
                            Configurations
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
</html>
