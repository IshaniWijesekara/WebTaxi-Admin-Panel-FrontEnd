<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/17/2018
 * Time: 2:29 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>myTrips</title>
    <link rel="stylesheet" href="_css/nav.css">
    <link rel="stylesheet" href="_css/dashboard.css">
    <link rel="stylesheet" href="_css/test4.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/semantic.css">
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="_js/semantic.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="/css/semantic-ui/semantic.min.css" media="screen" rel="stylesheet" type="text/css">

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
        <div class="twelve wide computer sixteen wide tablet column" style="margin-left: 20px ; width: 100% ; height: 100%">
            <fieldset style="  width: 100% ; height: 100% ; margin-top: 65px ;">
                <header style="margin-top: 8px; font-size: 20px">My Trips</header>
                <table class="ui stretched stackable table" style="margin-top: 25px">
                    <tr>
                        <th>Booking Id</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Total Amount</th>
                        <th>Vehicle Type</th>
                        <th>Payement</th>
                    </tr>
                    <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                    </tr>
                    <tr>
                        <td>Centro comercial Moctezuma</td>
                        <td>Francisco Chang</td>
                        <td>Mexico</td>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                    </tr>
                    <tr>
                        <td>Ernst Handel</td>
                        <td>Roland Mendel</td>
                        <td>Austria</td>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                    </tr>
                    <tr>
                        <td>Island Trading</td>
                        <td>Helen Bennett</td>
                        <td>UK</td>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                    </tr>
                    <tr>
                        <td>Island Trading</td>
                        <td>Helen Bennett</td>
                        <td>UK</td>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                    </tr>
                </table>
            </fieldset>
        </div>
    </div>
</div>
</body>
</html>
