<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zeon IT (M04)
 * Date: 10/1/2018
 * Time: 4:09 PM
 */
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    <a href="riderSignUp.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SignIn As Rider</a>
    <a href="driverSignUp.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SignIn As Driver</a>

</div>

<script>
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
</body>
</html>
