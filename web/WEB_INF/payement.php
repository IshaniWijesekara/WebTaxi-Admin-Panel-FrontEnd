<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/21/2018
 * Time: 8:46 AM
 */
?>
<html>
<head>
    <title>payement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/nav.css">
    <link rel="stylesheet" href="_css/dashboard.css">
    <link rel="stylesheet" href="_css/test4.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="/css/semantic-ui/semantic.min.css" media="screen" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="_js/semantic.js"></script>

    <style>
        span{
            font-size: 11px;
        }
    </style>
</head>
<body>
<?php
include 'topNav.php';
?>
<div class="ui grid" style="height: 100%">
    <div class="row">
        <div class="three wide computer sixteen wide tablet column">
            <div class="nav-container1" style="margin-top: 37px ; height: 100%">
                <ul class="nav1">
                    <li class="li">
                        <a href="profile1.php" class="a">
                            <span><i class="ui large home icon"></i></span>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>

                    <li class="li">
                        <a href="profileUpdate1.php" class="a">
                            <span><i class="ui large setting icon"></i></span>
                            <span class="text">Settings</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="myTrips.php" class="a">
                            <span><i class="ui large taxi icon"></i></span>
                            <span class="text">My Trips</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="#" class="a">
                            <span><i class="ui large car icon"></i></span>
                            <span class="text">UpComing Trips</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="profileUpdate1.php" class="a">
                            <span><i class="ui large user icon"></i></span><span class="text">Profile</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="password.php" class="a">
                            <span><i class="ui large cogs icon"></i></span>
                            <span class="text">Change Password</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="payement.php" class="a">
                            <span><i class="ui large dollar icon"></i></span>
                            <span class="text">Payement</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="#" class="a">
                            <span><i class="ui large dollar icon"></i></span>
                            <span class="text">Promocodes</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="index1.php" class="a">
                            <span><i class="ui large right arrow icon"></i></span>
                            <span class="text">LogOut</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="twelve wide computer sixteen wide tablet column" style="margin-left: 20px">
            <div class="twelve wide computer sixteen wide tablet column">
                <fieldset style="margin-top: 100px ;">
                    <header style="margin-top: 10px">Payement Methods</header>

                    <div style="margin-top: 50px ; margin-left: 50px">
                        <div class="ui grid">
                            <div class="sixteen wide column">
                                <img src="_img/12.png" style="height: 25px">
                                Cash
                                <button class="ui mini grey button" style=" margin-left: 10px;  width: 90px">Delete
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="">
                            <div>
                                <img src="_img/11.png" style="height: 25px">
                                VISA
                                <button class="ui green mini button" style="margin-left: 8px">Default</button>
                                <button class="ui mini grey button" style="; width: 90px">Delete
                                </button>
                            </div>
                        </div>
                        <hr>
                        <button class="ui mini primary button" style="margin-left: 5px ; margin-top: 50px;width: 90px"
                                onclick="openWin(); ">Add Card
                        </button>
                    </div>
                </fieldset>
            </div>
            <div class="ui mini modal">
                <div class="header" style="text-align: center">Add Card</div>
                <i class="close icon"></i>
                <div class="content">
                    <form class="ui form" id="mainForm2" method="post">
                        <div class="twelve wide field" style="margin-top: -15px">
                            <label>Full Name</label>
                            <div class="two fields">
                                <div class="field">
                                    <input type="text" name="firstName" placeholder="First Name" style="width: 310px">
                                </div>
                            </div>
                            <label>Card Number</label>
                            <div class="two fields">
                                <div class="field">
                                    <input type="text" name="card" placeholder="Card Number" style="width: 310px">
                                </div>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="field">
                                <label>Month</label>
                                <input type="text" placeholder="Month">
                            </div>
                            <div class="field">
                                <label>Year</label>
                                <input type="text" placeholder="Year">
                            </div>
                            <div class="field">
                                <label>CCV</label>
                                <input type="text" placeholder="CVV">
                            </div>
                        </div>
                        <button class="ui button" style="width: 300px; background-color: #009688;color: white  ">Add
                            Card
                        </button>
                    </form>
                </div>
            </div>


            <script>
                function openWin() {
                    $('.ui.modal')
                        .modal('show');
                }
            </script>
        </div>
    </div>
</div>
</div>
</body>
</html>