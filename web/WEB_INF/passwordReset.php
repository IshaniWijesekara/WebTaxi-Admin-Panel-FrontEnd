<?php
/**
 * Created by PhpStorm.
 * User: Zeon IT (M04)
 * Date: 8/17/2018
 * Time: 12:51 PM
 */

include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/icon.min.css">
    <link rel="stylesheet" href="_css/semantic.css">
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="_js/semantic.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="/css/semantic-ui/semantic.min.css" media="screen" rel="stylesheet" type="text/css">
    <title>PasswordReset</title>
</head>
<body>
<div class="main">
    <div class="form-area" style="height: 300px ; margin-top: -400px">
        <div style="background-color: white ; height: 35px ; text-align: center">
            <header>
                <a href="index.php"> Already have an Account</a>
            </header>
        </div>
        <br>
        <form>
            <div class="field">
                <p>Reset Password</p>
                <input type="text" id="fname" name="firstname" placeholder="Enter Your Email..">
            </div>
            <div style="margin-top: 10px">
                <button class="ui button"
                        style="width: 319px ; height: 50px;font-size: 18px ; background-color: #48C9B0  ">Send
                    Password Reset Link
                </button>
                <br>
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>