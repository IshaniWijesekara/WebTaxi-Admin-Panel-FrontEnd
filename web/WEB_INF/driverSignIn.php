<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 9/11/2018
 * Time: 8:47 AM
 */
?>
<html>
<head>
    <title>driverSignIn</title>
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
    <link rel="stylesheet" href="_css/driverSignIn.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>


<div class="container-fluid">
    <div class="w3-container w3-content w3-center w3-padding-64">
        <h1 style="font-weight: 500">SignIn To Drive With Taxi</h1>
        <div id="wrapper" class="container">
            <form style="margin-top: 40px">
                <fieldset>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="nome">Email or Phone Number(required)</label>
                            <input name="nome" class="form-control" placeholder=" Email or Phone Number" type="text">
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block info"
                                    style="background-color: #009688 ; color: white"><a href="driverSignIn2.php" style="color: white">Next</a>
                            </button>


                            <br>
                            <button href="#" class="fb btn">
                                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                            </button>
                            <button href="#" class="google btn"><i class="fa fa-google fa-fw">
                                </i> Login with Google+
                            </button>
                            <br>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>

</body>
</html>
