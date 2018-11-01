<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/17/2018
 * Time: 3:18 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="_css/test4.css">
    <link rel="stylesheet" href="_css/dashboard.css">
    <link rel="stylesheet" href="_css/riding.css">
    <link rel="stylesheet" href="_css/profileUpdate2.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <link href="/_css/semantic-ui/semantic.min.css" media="screen" rel="stylesheet" type="text/css">

</head>
<body>
<?php
include 'topNav.php';
?>
<style>

</style>

<div class="ui grid">
    <div class="row">
        <div class="three wide computer sixteen wide mobile column">
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
        <div class="ten wide computer sixteen wide tablet column ">
            <header id="header">Edit Information</header>
            <form>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <label for="fname">Profile</label>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <textarea type="text" id="photo" name="photo" placeholder="Your photo.."></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="col-sm-6 ol-xs-6 col-md-6 col-lg-6">
                        <input type="text" id="lname" name="lname" placeholder="Your Last name..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
                        <label for="address">Address</label>
                    </div>
                    <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
                        <input type="text" id="address" name="address" placeholder="Your Address..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <input type="email" id="email" name="email" placeholder="Your Email Address..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
                        <label for="mobile">Mobile</label>
                    </div>
                    <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
                        <input type="email" id="mobile" name="mobile" placeholder="Your Mobile Number..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12"
                    <button class="ui primary button" id="btn">
                        <a href="profileUpdate2.php" id="a">Save
                            Configurations</a></button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

<script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>

</html>
