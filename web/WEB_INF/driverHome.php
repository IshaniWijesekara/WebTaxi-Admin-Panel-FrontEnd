<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/31/2018
 * Time: 9:20 AM
 */
?>
<html>
<head>

    <title>driverHome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/semantic.css">
    <link rel="stylesheet" href="_css/driverHome.css">
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

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="w3-container w3-content w3-center w3-padding-64" style="margin-top: 5px ; max-width: 800px">
        <h1>Please chose how you would like to be partner with Taxi</h1>
        <div class="w3-row w3-padding-32">
            <div class="w3-col m12">
                <div id="div1">
                    <div style="padding-top: 50px">
                        <h4>Driver Cum Owner</h4>
                        <p style="font-size: 16px">
                            Chose this option if you own the vehicle and plan to drive yourself too.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w3-col m12">
                <div id="div2">
                    <div style="padding-top: 50px">
                        <h4>Delivery By Car</h4>
                        <p style="font-size: 16px ; text-align: center">
                            You are atleast 19 years old ,with a personal driver liscence.
                            Your vehicle is any two door or four door vehicle.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w3-col m12">
                <div id="div3">
                    <div style="padding-top: 50px">
                        <h4>Taxi</h4>
                        <p style="font-size: 16px">
                            You are currently a tzxi driver certified and liscence by the
                            city.Your Vehicle is a commercial taxi driver.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w3-col m12" style="margin-top: 40px ;">
                <button class="btn btn btn-lg btn-block info"
                        id="btn1"><a href="documents.php" style="color: white">Continue</a>
                </button>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>
