<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/21/2018
 * Time: 10:12 AM
 */
?>
<html>
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="_css/semantic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>sub</title>
    <link rel="stylesheet" href="_css/nav.css">
    <link rel="stylesheet" href="_css/test4.css">
    <link rel="stylesheet" href="_css/icon.min.css">

    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="_js/semantic.js"></script>

    <style>

        a{
            font-size: 13px;
        }

        .post-module {
            position: relative;
            z-index: 1;
            display: block;
            background: #FFFFFF;
            min-width: 170px;
            height: 370px;
            -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
            -webkit-transition: all 0.3s linear 0s;
            -moz-transition: all 0.3s linear 0s;
            -ms-transition: all 0.3s linear 0s;
            -o-transition: all 0.3s linear 0s;
            transition: all 0.3s linear 0s;
        }

        .post-module:hover,
        .hover {
            -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
        }

        .post-module:hover .thumbnail img,
        .hover .thumbnail img {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            transform: scale(1.1);
            opacity: .6;
        }

        .post-module .thumbnail {
            background: #000000;
            height: 400px;
            overflow: hidden;
        }

        .post-module .thumbnail .date {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 1;
            background: #e74c3c;
            width: 55px;
            height: 5px;
            padding: 12.5px 0;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            color: #FFFFFF;
            font-weight: 700;
            text-align: center;
            -webkti-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .post-module .thumbnail .date .day {
            font-size: 18px;
        }

        .post-module .thumbnail .date .month {
            font-size: 12px;
            text-transform: uppercase;
        }

        .post-module .thumbnail img {
            display: block;
            width: 120%;
            -webkit-transition: all 0.3s linear 0s;
            -moz-transition: all 0.3s linear 0s;
            -ms-transition: all 0.3s linear 0s;
            -o-transition: all 0.3s linear 0s;
            transition: all 0.3s linear 0s;
        }

        .post-module .post-content {
            position: absolute;
            bottom: 0;
            background: #FFFFFF;
            width: 100%;
            padding: 30px;
            -webkti-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
        }

        .post-module .post-content .category {
            position: absolute;
            top: -34px;
            left: 0;
            background: #e74c3c;
            padding: 10px 15px;
            color: #FFFFFF;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .post-module .post-content .title {
            margin: 0;
            padding: 0 0 10px;
            color: #333333;
            font-size: 26px;
            font-weight: 700;
        }

        .post-module .post-content .sub_title {
            margin: 0;
            padding: 0 0 20px;
            color: #e74c3c;
            font-size: 20px;
            font-weight: 400;
        }

        .post-module .post-content .description {
            display: none;
            color: #666666;
            font-size: 14px;
            line-height: 1.8em;
        }

        .post-module .post-content .post-meta {
            margin: 30px 0 0;
            color: #999999;
        }

        .post-module .post-content .post-meta .timestamp {
            margin: 0 16px 0 0;
        }

        .post-module .post-content .post-meta a {
            color: #999999;
            text-decoration: none;
        }

        .hover .post-content .description {
            display: block !important;
            height: auto !important;
            opacity: 1 !important;
        }

        .container {
            max-width: 600px;
            min-width: 640px;
            margin: 0 auto;
        }

        .container:before,
        .container:after {
            content: '';
            display: block;
            clear: both;
        }

        .container .column {
            width: 50%;
            padding: 0 25px;
            -webkti-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            float: left;
        }

        .container .column .demo-title {
            margin: 0 0 15px;
            color: #666666;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .container .info {
            width: 300px;
            margin: 50px auto;
            text-align: center;
        }

        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 24px;
            font-weight: bold;
            color: #333333;
        }

        .container .info span {
            color: #666666;
            font-size: 12px;
        }

        .container .info span a {
            color: #000000;
            text-decoration: none;
        }

        .container .info span .fa {
            color: #e74c3c;
        }


    </style>
</head>
<body>
<div>
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
               href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i
                        class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Home</a>
            <a href="#aboutus" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About Us</a>
            <a href="#ourservices" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Our Services</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact Us</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More" style="font-size: 13px">Sign In <i class="fa fa-caret-down"></i>
                </button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="riderSignUp.php" class="w3-bar-item w3-button">SignIn As Rider</a>
                    <a href="#" class="w3-bar-item w3-button">SignIn As Driver</a>
                </div>
            </div>

            <div class="w3-dropdown-hover w3-hide-small" style="margin-left: 800px">
                <button class="w3-padding-large w3-button" title="More" style="font-size: 13px">My Profile<i class="fa fa-caret-down"></i>
                </button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="profile1.php" class="w3-bar-item w3-button">Profile</a>
                    <a href="payement.php" class="w3-bar-item w3-button">Payements</a>
                    <a href="myTrips.php" class="w3-bar-item w3-button">My Trips</a>
                    <a href="index1.php" class="w3-bar-item w3-button">LogOut</a>
                </div>
            </div>
            <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i
                        class="fa fa-search"></i></a>
        </div>
    </div>
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
        <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">About Us</a>
        <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Our Services</a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contact Us</a>
        <a href="profile1.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Profile</a>
        <a href="payement.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Payement</a>
        <a href="myTrips.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">My Trips</a>
        <a href="index1.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()"></a>
        <a href="index1.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">LogOut</a>

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
