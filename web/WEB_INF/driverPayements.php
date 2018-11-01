<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 9/1/2018
 * Time: 9:30 AM
 */
include 'driverTopNav.php';
?>
<html>
<head>
    <title>driverPayements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/semantic.css">
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
        h4 {
            font-size: 17px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="w3-container w3-content w3-center w3-padding-64" style="margin-top: 5px ; max-width: 800px">
        <div class="row">
            <div class="col-md-12">
                <div style="background-color: #D4E6F1    ;height: 80px ; ">
                    <p style="padding-top: 20px">
                        You have a weekly earning section to help you to track earnings over time.
                        Your payement information can still be found in the pay station section.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 50px ;  ">
            <div class="col-md-3">
                <p style="font-size: 17px"><a><u>
                            Weekly Earnings
                        </u></a></p>
            </div>
            <div class="col-md-3">
                <p style="font-size: 17px"><a href="driverPayementStatements.php"><u>
                            Statement
                        </u></a></p>
            </div>
            <div class="col-md-6">
                <p><?php
                    include 'time-range.php';
                    ?></p>
            </div>
        </div>
        <div class="row" style="margin-top: 50px ; background-color: #F2F4F4; height: 130px">
            <div class="col-md-12">
                <div style=" ; background-color: #F2F4F4">
                    <h4 style="padding-top: 20px ; text-align: left;margin-left: 20px ;font-size: 20px">
                        Total Earnings
                    </h4>
                </div>
            </div>

            <div class="col-md-12">
                <div style=" ; background-color: #F2F4F4">
                    <h1 style="padding-top: 20px ; text-align: left;margin-left: 20px">
                        Rs.80.00
                    </h1>
                </div>
            </div>
            <br>
            <br>
        </div>


        <div class="row" style="margin-top: 50px ">
            <div class="col-md-3">
                <h3>0</h3>
                <h4>Completed Trips</h4>
            </div>
            <div class="col-md-3">
                <h3>10</h3>
                <h4>Online Hours</h4>
            </div>
            <div class="col-md-3">
                <h3>50%</h3>
                <h4>Acceptance Rate</h4>
            </div>
            <div class="col-md-3">
                <h3>30</h3>
                <h4>Driver Cancellation</h4>
            </div>
        </div>

        <div class="row" style="margin-top: 80px ; text-align: left ; margin-left: 20px">
            <h2>Weekly Earnings</h2>
            <div class="col-md-8">
                <h4 style="margin-top: 50px">Expected Direct Diposit</h4>
            </div>
            <div class="col-md-4" style="margin-top: 41px">
                <p>10.00</p>
            </div>
        </div>
    </div>

</div>
</body>
</html>
