<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/17/2018
 * Time: 3:15 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pofile</title>
    <!--    <link rel="stylesheet" href="_css/style.css">-->
    <link rel="stylesheet" href="_css/test4.css">
    <link rel="stylesheet" href="_css/dashboard.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/profileUpdate1.css">
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>


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
        <div class="ten wide computer sixteen wide tablet column" id="col1">
            <header id="header">General Information</header>
            <form>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <label for="lastName">Last Name</label>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <input type="text" id="lastName" name="lastName" placeholder="Your name..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <label for="address">Email Address</label>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <input type="email" id="address" name="address" placeholder="Your Email Address..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <label for="mobile">Mobile</label>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                        <input type="text" id="mobile" name="mobile" placeholder="Your Mobile Number..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-ms-12 col-sm-12 col-xs-12 col-lg-12">
                        <button class="ui primary button" id="btn1">
                            <a href="profileUpdate2.php">Edit Details</a></button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>
