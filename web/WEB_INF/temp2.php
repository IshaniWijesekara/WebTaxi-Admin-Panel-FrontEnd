<?php

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/driverSignUp.css">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/card.css">
    <link rel="stylesheet" href="_css/home2.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/semantic.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
           href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i></a>
        <a href="index1.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
        <a href="#aboutus" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About Us</a>
        <a href="#ourservices" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Our Services</a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact Us</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">Sign In <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="riderSignUp.php" class="w3-bar-item w3-button">SignIn As Rider</a>
                <a href="#" class="w3-bar-item w3-button">SignIn As Driver</a>
            </div>
        </div>
        <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i
                    class="fa fa-search"></i></a>
    </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">About Us</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Our Services</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contact Us</a>

</div>

<div class="container-fluid" style="width: 100%">
    <div class="row" style="background-image: url(_img/39.jpg);height: 700px;width: auto; margin-left: -14px ;">
        <div class="col-sm-4">
            <p style="margin-top: 300px">
                Ride With Us In One Minute
            <p style="color: #FFC300  ">
                FASTER,SAFER,SMARTER
            </p>
            </p>
        </div>

        <div class="col-sm-6" style="margin-left: 200px ; ">
            <div class="box">
                <header style="font-family: 'Lato', sans-serif;top: 10px">
                    <a href="driverSignIn.php"> Create New Account</a>
                </header>
                <p style="color: white ; margin-top: 30px ; text-align: center;font-size: 25px ;font-family: 'Lato', sans-serif ;">
                    Ride With Taxi
                </p>
                <h4 style=" color: white ; font-size: 20px;text-align: center ; font-family: 'Lato', sans-serif ;margin-top: -5px">
                    Sign In</h4>
                <form style="margin-left: 45px ; margin-top: 20px">
                    <div class="inputBox">
                        <input type="text" name="email" required="">
                        <label>Enter Your Email</label>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="email" required="">
                        <label>Enter Your Password</label>
                    </div>
                    <div style="margin-top: 10px">
                        <button class="ui button"
                                style="width: 270px ; height: 50px;font-size: 18px ; background-color: #1DE9B6  ">
                            <a
                                    href="profile1.php">Log In</a>
                        </button>
                        <br>
                        <!--                <p class="pMain" style="font-size: 10px ; margin-top: 80px"><a href="passwordReset.php">Forgot Your Password?</a></p>-->
                        <br>

                        <button class="ui facebook button"
                                style="margin-top: 10px;width: 270px ; height: 50px;font-size: 15px">
                            <i class="facebook sign icon"></i>
                            Login with Facebook
                        </button>

                        <button class="ui google plus button"
                                style="margin-top: 10px;width: 270px ; height: 50px;font-size: 15px">
                            <i class="google plus icon"></i>
                            Login with Google Plus
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



</div>
</div>


</body>
</html>
