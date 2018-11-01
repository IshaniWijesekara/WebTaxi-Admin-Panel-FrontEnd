<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/30/2018
 * Time: 2:24 PM
 */
?>
<html>
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="_css/semantic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>driver</title>
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/driverTopNav.css">
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="_js/semantic.js"></script>

</head>
<body>
<div>
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
               href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i
                        class="fa fa-bars"></i></a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">Home <i class="fa fa-caret-down"></i>
                </button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="driverProfile.php" class="w3-bar-item w3-button">Profile</a>
                    <a href="manageDocuments.php" class="w3-bar-item w3-button">Manage Documents</a>
                    <a href="manageVehicles.php" class="w3-bar-item w3-button">Vehicles</a>
                </div>
            </div>
            <a href="#aboutus" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Partner Earnings</a>
<!--            <a href="#ourservices" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Invites</a>-->
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">Invites <i class="fa fa-caret-down"></i>
                </button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="trackInvites.php" class="w3-bar-item w3-button">Track Invites</a>
                    <a href="sendInvites.php" class="w3-bar-item w3-button">Send Invites</a>

                </div>
            </div>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Help</a>

            <div class="w3-dropdown-hover w3-hide-small" style="margin-left: 500px">
                <button class="w3-padding-large w3-button" title="More">My Profile<i class="fa fa-caret-down"></i>
                </button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="" class="w3-bar-item w3-button">Profile</a>
                    <a href="" class="w3-bar-item w3-button">Payements</a>
                    <a href="" class="w3-bar-item w3-button">My Trips</a>
                    <a href="" class="w3-bar-item w3-button">LogOut</a>
                </div>
            </div>
            <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i
                        class="fa fa-search"></i></a>
        </div>
    </div>
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
        <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Profile</a>
        <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Partner Earnings</a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Invites</a>

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
</html>

