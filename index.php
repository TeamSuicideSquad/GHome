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
    <nav class="teal" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.php" class="brand-logo"><h4>GHome</h4></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php"><i class="material-icons left">store</i>Home</a></li>
                <li><a href="logoutform.php"><i class="material-icons left">perm_identity</i>Logout</a></li>
                <li><a href="about.php"><i class="material-icons left">info_outline</i>About Us</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdownweb">Categories<i class="material-icons left">call_received</i></a></li>
            </ul>
            <ul id="slide-out" class="side-nav">
                <li>
                    <div class="userView">
                        <img class="background" src="images/SideNavBackground.png">
                        <a href="#!user"><img class="circle" src="images/GHomeSmallLogo.png"></a>
                        <a href="#!name"><span class="white-text name">GHome</span></a>
                        <a href="#!email"><span class="white-text email">ghomeapp@gmail.com</span></a>
                    </div>
                </li>
                <li><a href="index.php"><i class="teal-text material-icons">store</i>Home</a></li>
                <li>
                    <div class="divider"></div>
                </li>

                <li><a href="logoutform.php"><i class="teal-text material-icons">perm_identity</i>Logout</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a href="about.php"><i class="teal-text material-icons">info_outline</i>About Us</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdownmobile">Categories<i class="teal-text material-icons left">call_received</i></a></li>
                <ul id="dropdownmobile" class="dropdown-content">

                </ul>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</body>

</html>