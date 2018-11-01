<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/31/2018
 * Time: 3:23 PM
 */
?>
<html>
<head>
    <title>manageVehicles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/nav.css">
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

</head>
<body>
<div class="container-fluid">
    <div class="w3-container w3-content w3-center w3-padding-64" style="margin-top: 5px ; max-width: 800px">
        <h1>Manage Your Vehicle</h1>
        <div class="w3-row w3-padding-32">
            <div class="row" style="margin-top: 10%">
                <div class="col-md-3">
                    <img src="_img/444.jpg">
                </div>
                <div class="col-md-3">
                    <h5 style="font-size: 18px">
                        Liscenece Plate
                    </h5>
                </div>
                <div class="col-md-3">
                    <h5 style="font-size: 18px">
                        VIN
                    </h5>
                </div>
                <div class="col-md-3">
                    <button class="ui  button" style="font-size: 15px ; background-color: #009688 ; color: white">Finish
                        Uploading Documents >>
                    </button>
                </div>
            </div>
            <div class="row" style="margin-top: 80px">
                <div class="col-md-3">
                    <button class="ui primary button" style="font-size: 15px" data-toggle="modal"
                            data-target="#registration">Add Vehicle
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="registration" role="dialog" style="top: 10%">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--                <h4 class="modal-title">Modal Header</h4>-->
            </div>
            <div class="modal-body">
                <p style="text-align: center">
                <form>
                    <div class="row">
                        <div class="col-md-4" style="text-align: left; margin-top: 10px">
                            <label style="margin-left: 50px">Modal</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Enter The Modal">
                        </div>
                        <div class="col-md-4" style="text-align: left ; margin-top: 10px">
                            <label style="margin-left: 50px">Vehicle Type</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Enter The Vehicle Type">
                        </div>
                        <div class="col-md-4" style="text-align: left ; margin-top: 10px">
                            <label style="margin-left: 50px">Year</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Enter The Year">
                        </div>
                        <div class="col-md-4" style="text-align: left ; margin-top: 10px">
                            <label style="margin-left: 50px">Modal</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Enter The Modal">
                        </div>
                        <div class="col-md-4" style="text-align: left ; margin-top: 10px">
                            <label style="margin-left: 50px">Liscenece Plate</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Enter The Liscence Plate">
                        </div>
                        <div class="col-md-4" style="text-align: left ; margin-top: 10px">
                            <label style="margin-left: 50px">Vehicle Color</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Enter The Vehicle Colour">
                        </div>
                    </div>
                </form>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100%">Save Configurations
                </button>
            </div>
        </div>

    </div>
</div>
</body>
</html>
