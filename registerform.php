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
    <div id="registerform" class="row">
        <div class="col s12 z-depth-6">
            <form class="registerform">
                <div class="row">
                    <div class="input-field col s12 center">
                        <img src="images/GHomeMediumLogo.png" alt="" class="responsive-img valign profile-image-login">
                        <h5><p class="center registerform teal-text">Register Form</p>
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
                        <i class="mdi-social-person-outline prefix material-icons prefix">email</i>
                        <input class="validate" id="email" type="email">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
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
                <div class="row margin">
                    <div class="input-field col s12 teal-text">
                        <i class="mdi-action-lock-outline prefix material-icons prefix">vpn_key</i>
                        <input id="password" type="password">
                        <label for="password">Re-type Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <a href="loginform.php" class="btn waves-effect waves-light col s12">Register Now</a>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6 m6 l6">
                        <p class="margin center-align medium-small">Already have an account?</a>
                        </p>
                    </div>
                    <div class="input-field col s6 m6 l6">
                        <p class="margin center-align medium-small"><a href="loginform.php ">Login Now</a></p>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>