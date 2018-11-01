<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/30/2018
 * Time: 11:40 AM
 */
?>
<html>
<head>
    <title>driverSignUp</title>
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
    <link rel="stylesheet" href="_css/driverSignUp.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container-fluid">
    <div class="w3-container w3-content w3-center w3-padding-64">
        <h1>SignUp To Drive With Taxi</h1>
        <div id="wrapper" class="container">
            <form id="form-work" class="" name="form-work" action="#">
                <fieldset>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="nome">First Name(required)</label>
                            <input name="nome" class="form-control" placeholder="First Name" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="surname" style="margin-top: -3px">Last
                                Name(required)</label>
                            <input name="surname" class="form-control" placeholder="Last Name" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="tel">Contact Number</label>
                            <div class="input-group">
                                <input name="tel" class="form-control" placeholder="9211-4957" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="mobile">Email</label>
                            <div class="input-group">
                                <input name="email" class="form-control" placeholder="Email" type="email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="email">Create Password</label>
                            <input name="password" class="form-control" placeholder="password"
                                   type="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="district">City</label>
                            <input name="city" class="form-control" placeholder="city" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block info"
                                    style="background-color: #009688 ; color: white"><a style="color: white" href="driverHome.php">SignUp</a>
                            </button>
                            <br>
                            <p>By clicking "Sign Up", you agree to Uber's Terms of Use and acknowledge you have read the
                                Privacy Policy.</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-12" style="margin-top: 30px">
                        <h6><a href="driverSignIn.php">Already Have An Account ?LogIn With Us</a></h6>
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