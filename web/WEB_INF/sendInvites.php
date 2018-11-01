<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 9/13/2018
 * Time: 11:13 AM
 */
include 'driverTopNav.php';
?>
<html>
<head>
    <title>sendInvites</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/sendInvites.css">
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>

    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="w3-container w3-content w3-center w3-padding-64"  id="main-div">
        <div class="row" id="row1">
            <h2>Invite Your Friends To Drive with Taxi App</h2>
        </div>
        <div class="row" id="row2">
            <div class="col-md-6 col-sm-6 col-lg-6 col-sx-6">
                <h3>Invite With Your Code</h3>
                <br>
                <br>
                <p id="p1">Send Your Friend Your Unique Code Through Us</p>
                <br>

                <label>
                    Copy Your Code Here
                </label>
                <br>
                <input type="text" placeholder="Enter Your Code Here" id="code">
                <br>
                <br>
                <p  id="p2">Or</p>
                <p  id="p3">Share In</p>
                <br>
                <a href="#"><i class="fa fa-facebook-official fa-2x"></i></a>
                <a href="#"><i class="fa fa-pinterest-p fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa fa-flickr fa-2x"></i></a>
                <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
            </div>


            <div class="col-md-6 col-sm-6 col-lg-6 col-sx-6">
                <h3>Invite With Your Code</h3>
                <br>
                <br>
                <p id="p4">Find friends to invite from your Gmail contacts.</p>
                <br>
                <br>
                <button class="btn btn-primary btn-lg btn-block info" style="background-color: #009688 ; color: white">
                    Invite Friends
                </button>

            </div>
        </div>
        <br>
        <br>
        <hr id="hr" />

        <div class="row" style="margin-top: 60px">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
                <h3>Or Invite Manually</h3>
                <br>
                <br>
                <p id="p5">Earn up to ₨8000 for every friend you invite to drive.
                </p>
                <br>
                <label>Potential Reward</label>
                <input type="text" placeholder="Enter Freind's Email Or Password In Here " style="  border:1px solid #ddd; height: 80px ; width: 300px">
                <br>
                <br>
                <br>
                <button class="btn btn-primary btn-lg btn-block info" style="background-color: #009688 ; color: white">
                    Invite Friends
                </button>
            </div>

        </div>
    </div>
</div>
</body>
</html>
