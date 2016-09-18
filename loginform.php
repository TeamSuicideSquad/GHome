<!DOCTYPE html>
<html lang="en">
<title> GHome </title>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <div id="loginform" class="row">
        <div class="col s12 z-depth-6 ">
            <form class="loginform">
                <div class="row">
                    <div class="input-field col s12 center">
                        <img src="images/GHomeMediumLogo.png" alt="" class="responsive-img valign profile-image-login">
                        <h5><p class="center loginform teal-text">Login Form</p>
                        </h5>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12 teal-text">
                        <i class="mdi-social-person-outline prefix material-icons prefix">account_circle</i>
                        <input class="validate" id="username" type="tel">
                        <label for="username" data-error="wrong" data-success="right">Username</label>
                        <!--class="center-align"-->
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12 teal-text">
                        <i class="mdi-action-lock-outline prefix material-icons prefix">vpn_key</i>
                        <input id="password" type="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l12  login-text">
                        <input type="checkbox" id="remember-me" />
                        <label for="remember-me">Remember me</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <a href="index.php" class="btn waves-effect waves-light col s12">Login</a>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 m6 l6">
                        <p class="margin center-align medium-small"><a href="registerform.php">Register Now!</a></p>
                    </div>
                    <div class="input-field col s6 m6 l6">
                        <p class="margin center-align medium-small"><a href="forgotpasswordform.php">Forgot password?</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>