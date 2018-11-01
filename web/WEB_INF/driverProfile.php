<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/30/2018
 * Time: 2:21 PM
 */
include 'driverTopNav.php';
?>
<html>
<head>
    <title>driverProfile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/semantic.css">
    <link rel="stylesheet" href="_css/driverProfile.css">
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
    <div class="w3-container w3-content w3-center w3-padding-64">
        <br>
        <br>
        <div id="maindiv">

        </div>
        <br>
        <br>

        <h1>Driver Name</h1>
        <div id="wrapper" class="container">
            <form id="form-work" class="" name="form-work" action="#">
                <fieldset>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="nome">Email(required)</label>
                            <input name="email" class="form-control" placeholder="Email" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="surname" style="margin-top: -3px">Phone
                                Number(required)</label>
                            <input name="surname" class="form-control" placeholder="Last Name" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="email">Address</label>
                            <input name="address" class="form-control" placeholder="address"
                                   type="address">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="district">City</label>
                            <input name="city" class="form-control" placeholder="city" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="email">Country</label>
                            <input name="country" class="form-control" placeholder="country"
                                   type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="district">Postal Code</label>
                            <input name="code" class="form-control" placeholder="code" type="text">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12" style="width: 100%">
                            <button type="button" class="btn btn-primary btn-lg btn-block info"
                                    id="btn2">Save Configurations
                            </button>
                            <br>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <h5><a href="manageDocuments.php" style="color: black">Manage Documents >></a></h5>
    </div>
</div>
<?php
include 'footer.php';
?>

</body>
</html>
