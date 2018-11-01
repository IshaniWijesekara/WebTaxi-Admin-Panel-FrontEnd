<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/30/2018
 * Time: 4:22 PM
 */
include 'driverTopNav.php';
?>
<html>
<head>

    <title>manageDocuments</title>
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

    <style>
        td {
            font-size: 17px;
        }

        p {
            text-align: left;
            font-size: 18px;

        }

        h1 {
            font-size: 30px;
        }
    </style>
</head>


<body>

<div class="container-fluid">
    <div class="w3-container w3-content w3-center w3-padding-64">
        <p><a href="driverProfile.php"><<< Back To Profile</a></p>
        <div style="background-color: #EAEDED   ; width: 200px;height: 150px ; margin-left: 38% ; top: 60px;">

        </div>
        <br>
        <br>

        <h1>Driver Name</h1>
        <div class="twelve wide computer sixteen wide tablet column" style="margin-left: 40px">
            <fieldset style=" width: 1000px ; margin-top: 15px ;">
                <table class="ui stretched stackable table" style="margin-top: 25px">
                    <tr>
                        <td>Driving Liscense</td>
                        <td>
                            <button class="ui large button">Pending Review</button>
                        </td>
                        <td>
                            <button class="ui large primary button" data-toggle="modal" data-target="#driving">Upload
                            </button>
                        </td>

                    </tr>
                    <tr>
                        <td>Police Clearance Certificate</td>
                        <td>
                            <button class="ui large negative button">Missing</button>
                        </td>
                        <td>
                            <button class="ui large primary button" data-toggle="modal" data-target="#police">Upload
                            </button>
                        </td>

                    </tr>
                    <tr>
                        <td>National Identity Card (Back)</td>
                        <td>Roland Mendel</td>
                        <td>
                            <button class="ui large primary button" data-toggle="modal" data-target="#id">Upload
                            </button>
                        </td>

                    </tr>
                    <tr>
                        <td>Profile Photo</td>
                        <td>Helen Bennett</td>
                        <td>
                            <button class="ui large primary button" data-toggle="modal" data-target="#photo">Upload
                            </button>
                        </td>

                    </tr>
                    <tr>
                        <td>Photo Id Proof</td>
                        <td>Helen Bennett</td>
                        <td>
                            <button class="ui large primary button" data-toggle="modal" data-target="#proof">Upload
                            </button>
                        </td>

                    </tr>
                    <tr>
                        <td>Bank Passbook</td>
                        <td>Helen Bennett</td>
                        <td>
                            <button class="ui large primary button" data-toggle="modal" data-target="#bank">Upload
                            </button>
                        </td>

                    </tr>

                </table>
            </fieldset>
        </div>
        <br>
        <br>
        <br>

        <div style="background-color: #EAEDED   ; width: 200px;height: 150px ; margin-left: 38% ; top: 160px;">

        </div>
        <br>
        <br>
        <p><a style="color: black" href="vehicledocument.php">Add Vehicle >>></a></p>
        <h1>Vehicle Documents</h1>
        <div class="twelve wide computer sixteen wide tablet column" style="margin-left: 20px">
            <fieldset style=" ; margin-top: 15px ;">
                <table class="ui stretched stackable table" style="margin-top: 25px">
                    <tr>
                        <td>Vehicle Insurance</td>
                        <td>
                            <button class="ui large button">Pending Review</button>
                        </td>
                        <td>
                            <button class="ui large primary button" data-toggle="modal" data-target="#myModal">Upload
                            </button>
                        </td>

                    </tr>
                    <tr>
                        <td>Vehicle Registration Document</td>
                        <td>
                            <button class="ui large negative button">Missing</button>
                        </td>
                        <td>
                            <button class="ui large primary button" data-toggle="modal" data-target="#registration">
                                Upload
                            </button>
                        </td>

                    </tr>
                    <tr>
                        <td>Revenue Liscence</td>
                        <td>Roland Mendel</td>
                        <td>
                            <button class="ui large primary button" data-toggle="modal" data-target="#revenue">Upload
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>No Objection Certificate</td>
                        <td>Helen Bennett</td>
                        <td>
                            <button class="ui large primary button" data-toggle="modal" data-target="#noObjection">
                                Upload
                            </button>
                        </td>

                    </tr>

                </table>
            </fieldset>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog" style="top: 20%">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--                <h4 class="modal-title">Modal Header</h4>-->
            </div>
            <div class="modal-body">
                <p style="text-align: center">Upload Document : Vehicle Insurance</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100%">Select File and
                    Upload
                </button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="registration" role="dialog" style="top: 20%">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--                <h4 class="modal-title">Modal Header</h4>-->
            </div>
            <div class="modal-body">
                <p style="text-align: center">Upload Document : Vehicle Registration Document</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100%">Select File and
                    Upload
                </button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="revenue" role="dialog" style="top: 20%">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--                <h4 class="modal-title">Modal Header</h4>-->
            </div>
            <div class="modal-body">
                <p style="text-align: center">Upload Document : Revenue Liscense</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100%">Select File and
                    Upload
                </button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="noObjection" role="dialog" style="top: 20%">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--                <h4 class="modal-title">Modal Header</h4>-->
            </div>
            <div class="modal-body">
                <p style="text-align: center">Upload Document : No Objection Certificate</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100%">Select File and
                    Upload
                </button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="driving" role="dialog" style="top: 20%">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--                <h4 class="modal-title">Modal Header</h4>-->
            </div>
            <div class="modal-body">
                <p style="text-align: center">Upload Document : Driving Liscence</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100%">Select File and
                    Upload
                </button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="police" role="dialog" style="top: 20%">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--                <h4 class="modal-title">Modal Header</h4>-->
            </div>
            <div class="modal-body">
                <p style="text-align: center">Upload Document : Police Clearance Certificate</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100%">Select File and
                    Upload
                </button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="id" role="dialog" style="top: 20%">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--                <h4 class="modal-title">Modal Header</h4>-->
            </div>
            <div class="modal-body">
                <p style="text-align: center">Upload Document : National Identity Card (Back)</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100%">Select File and
                    Upload
                </button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="photo" role="dialog" style="top: 20%">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--                <h4 class="modal-title">Modal Header</h4>-->
            </div>
            <div class="modal-body">
                <p style="text-align: center">Upload Document : Profile Photo</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100%">Select File and
                    Upload
                </button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="proof" role="dialog" style="top: 20%">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--                <h4 class="modal-title">Modal Header</h4>-->
            </div>
            <div class="modal-body">
                <p style="text-align: center">Upload Document :Photo Id Proof</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100%">Select File and
                    Upload
                </button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="bank" role="dialog" style="top: 20%">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--                <h4 class="modal-title">Modal Header</h4>-->
            </div>
            <div class="modal-body">
                <p style="text-align: center">Upload Document : Bank Passbook</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100%">Select File and
                    Upload
                </button>
            </div>
        </div>

    </div>
</div>

</body>
</html>
