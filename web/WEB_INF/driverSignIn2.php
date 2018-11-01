<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 9/11/2018
 * Time: 9:39 AM
 */
?>
<html>
<head>
   <title>driverSignIn2</title>
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
    <link rel="stylesheet" href="_css/driverSignIn2.css">
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
                            <label class="control-label" for="nome">Password</label>
                            <input name="password" class="form-control" placeholder=" Password" type="password">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block info"
                                    style="background-color: #009688 ; color: white"><a href="driverHome.php" style="color: white">SignIn</a>
                            </button>
                            <p style="text-align: right ; font-size: 15px ;  color: black"><a style="color: black">Forgot Password?</a></p>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>
</body>
</html>
