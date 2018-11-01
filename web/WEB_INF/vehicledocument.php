<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/31/2018
 * Time: 9:55 AM
 */
?>
<html>
<head>
    <title>vehicle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>

    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="_css/vehicledocument.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">
    <div class="w3-container w3-content w3-center w3-padding-64" id="main-div">
        <h1>Enter Your Vehicle Information</h1>
        <img src="_img/444.jpg" style="margin-top: 50px">

        <div id="wrapper" class="container">
            <form id="form-work" class="" name="form-work" action="#">
                <fieldset>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label class="control-label" for="nome">Vehicle Type(required)</label>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <input name="type" class="form-control" placeholder="Vehicle Type" type="text">
                            </div>
                        </div>

                    </div>
                    <div class="row" >
                        <div class="form-group">
                            <div class="col-md-6">
                                <label class="control-label" for="model">Modal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <input name="modal" class="form-control" placeholder="Modal" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="form-group">
                            <div class="col-md-6">
                                <label class="control-label" for="model">Year</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <input name="year" class="form-control" placeholder="Year" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="form-group">
                            <div class="col-md-6">
                                <label class="control-label" for="model">Liscence Number</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <input name="liscence" class="form-control" placeholder="Liscence" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary btn-lg btn-block info" style="background-color: #009688 ;">
                                    <a href="documents.php" style="color: white">Continue</a>
                                </button>
                                <br>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>
</div>

</body>
</html>
