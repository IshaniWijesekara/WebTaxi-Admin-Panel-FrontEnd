<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zeon IT (M04)
 * Date: 9/17/2018
 * Time: 2:46 PM
 */
?>
<html>
<head>
    <title>driverReuirements</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/semantic.css">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/driverPage.css">
    <link rel="stylesheet" href="_css/driverRequirements.css">
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
<div class="container">
    <div class="row" id="row1">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="text" id="text1">

                <h1 style="margin-top: 50px">Driver Requirements </h1>
                <h2 id="header1">How To Drive With Uber</h2>
                <p id="p1">
                    Taxi is a great way to be your own boss and earn extra
                    cash. Most folks are eligible to drive on the Taxi
                    platform—here’s what you need to know.
                </p>

            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="icon-left">
                <img src="_img/driver1.jpg" id="image1" class="img-responsive" >
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row" style="margin-top: 70px">
            <div>
                <?php
                include 'test2.php';
                ?>
            </div>
            <br>
            <br>
            <h3 style="text-align: left">What Are The Ways To Earn?</h3>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style=";height: 350px ; padding: 10px ;  ">
                <h4 id="header2">
                    Driver Cum Owner
                </h4>
                <img src="_img/444.jpg"
                     style="margin-left: 40%"  class="img-responsive" >
                <p id="p2">
                    A driver cum owner drives a vehicl
                    e that he or she owns. Requirements
                    vary by city, but there are a few
                    minimum requirements:
                </p>
                <ul style="font-size: 15px">
                    <li>Liscence</li>
                    <li>National Identity Card</li>
                    <li>Vehicle Registration Document</li>
                    <li>Vehicle Insurance</li>
                    <li>Revenue Document</li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="col1">
                <h4 style="margin-top: 20px ; text-align: center ; font-size: 18px">
                    Driver Under Partner
                </h4>
                <img src="_img/mn.jpg"
                     style="margin-left: 40%"  class="img-responsive" >
                <p id="p4">
                    A driver under partner
                    drives a vehicle owned by
                    a non-driving partner. The
                    following document is required o
                    f a driver under partner:
                </p>
                <ul style="font-size: 15px">
                    <li>Driver Liscence</li>
                    <li>National Identity Card</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"
                 id="col4">
                <h4 id="header6">
                    Non Driving Partner
                </h4>
                <img src="_img/444.jpg"
                     style="margin-left: 40%"  class="img-responsive" >
                <p id="p7">A non-driving partner
                    or fleet partner is someone who does not
                    drive on the Uber platform but owns vehicle(s)
                    and manages at least one driver. Becoming a
                    non-driving partner requires:</p>
                <ul style="font-size: 15px">
                    <li>Driver Liscence or Photo Id</li>
                    <li>National Identity Card</li>
                    <li>Vehicle Insurance</li>
                    <li>Vehicle Registration Document</li>
                    <li>Revenue Document</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row" style="margin-top: 150px">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="icon-left">
                <img src="_img/requir.jpg" style="width: 100%"  class="img-responsive" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="background-color: #E5E8E8">
            <div class="text" style="background-color: white ; color: black" >
                <h4 style=";margin-top:10px">Local Vehicle Requirements</h4>
                <h3 style="margin-left: -30px">What Are The Local Vehicle Requirements?</h3>

                <p id="p8">
                    In addition to the minimum requirements above, each city has its own regulations for vehicles. Sign
                    up online to get more information.
                </p>

                <button class="ui button" id="btn1"><a style="color: black" href="driverSignUp.php">SignUp To
                        Drive</a>
                </button>

            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 80px">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-top: 10px">
            <h3>How To Get Started?</h3>
            <h2>Document Requirements</h2>
            <img src="_img/desk%20(2).png"  class="img-responsive" >
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <ul>
                <h4>Driver's Profile Photo</h4>
                <li>
                    Must be forward facing cenetered photo including the
                    driver's full face & top od shoulders ,
                    with no sunglasses.
                </li>
                <li>
                    Must be a photo only of the driver with no other subject in the frame ,well-lit
                    ,& in focus.It cannot be a driver's liscence photo or other printed photograph
                </li>
            </ul>

            <br>
            <br>
            <ul>
                <h4>Driver's Liscence</h4>
                <li>
                    Meet the minimum age to drive in your city
                </li>
                <li>
                    21+ years old
                </li>
            </ul>

            <br>
            <br>
            <ul>
                <h4>Proof of Work eligibilty</h4>
                <p>Proof of work options includes any of following</p>
                <li>
                    Passport
                </li>
                <li>
                    Birth Certificate
                </li>
                <li>
                    Residency Card
                </li>
                <li>
                    Citizenship Card
                </li>
                <li>
                    Work Permit
                </li>
            </ul>
            <br>
            <br>


            <ul>
                <h4>Owner's Certificate Of Insurance & Vehicle Liscence</h4>
                <li>
                    You are only required to upload the first page
                </li>
                <li>
                    Vehicle Must be 1997 or newer
                </li>
                <li>
                    Vehicle must be registered under Srilanka
                </li>
                <li>
                    Insurance and Registration must be in your name
                </li>
            </ul>
        </div>
    </div>

    <div class="w3-container w3-content w3-padding-64" style="max-width:800px ; height: 400px" id="contact">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <img src="_img/ffffffffffffffffffff.jpg" class="img-responsive" style="position: absolute">
                <div class="cenetered">
                    <h3 id="header8">
                        Ready To Make Money With Us?</h3>
                    <h4 style="position: relative ;  ; color: white ;; text-align: center ; ">
                        Start Driving With Us</h4>
                    <button class="ui button" id="btn3"><a
                                style="color: black" href="driverSignUp.php">SignUp To Drive</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>
