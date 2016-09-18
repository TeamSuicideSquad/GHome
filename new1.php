<!DOCTYPE html>
<html lang="en">
<title> GHome </title>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

<head>
<style>
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0; font-family:sans-serif; }
      #map-canvas { height: 100% }
      h1 { position:absolute; background:black; color:white; padding:10px; font-weight:200; z-index:10000;}
      #all-examples-info { position:absolute; background:white; font-size:16px; padding:20px; bottom:20px; width:250px; line-height:100%; border:1px solid rgba(0,0,0,.2);}
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js1/heatmap.js"></script>
    <script src="js1/gmaps-heatmap.js"></script>
    
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
 <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">

    <title>Info windows</title>
    <style>
        
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 60%;
      }
    </style>
    </head>
<?php
session_start();
include "connection.php";
if(isset($_SESSION["userID"])){
    
}
    $slct = $dbh->prepare("SELECT * FROM users WHERE ID = :id");
  $slct->bindParam(":id", $_SESSION["userID"]);
  $slct->execute();
  $data = $slct->fetch(PDO::FETCH_ASSOC);
?>

    <body>
        <nav class="teal" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="index.php" class="brand-logo"><img class="circle" src="images/GHomeSmallLogo.png"></a>
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
                            <a href="#!user"><img class="circle" src="images/GHomeMediumLogo.png"></a>
                            <a href="#!email"><span class="white-text email">GHome</span></a>

                            <a href="#!email"><span class="white-text email">ghomeapp@gmail.com</span></a>
                        </div>
                    </li>
                    <li><a href="index2.php"><i class="teal-text material-icons">store</i>Home</a></li>
                    <li>
                        <div class="divider"></div>
                    </li>

                    <li><a href="loginform.php"><i class="teal-text material-icons">perm_identity</i>Logout</a></li>
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
        <div id="map"></div>
            <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;
      var infowindow;

      function initMap() {
        var philippines = {lat: 14.838668, lng: 120.284207};

        map = new google.maps.Map(document.getElementById('map'), {
          center: philippines,
          zoom: 15
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: philippines,
          radius: 5000,
          type: ['hospital']
        }, callback);
      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }
    </script>
  </head>
    <div id="map-canvas"></div>
	
    
    <script>
        var myLatlng = new google.maps.LatLng(14.829074, 120.268051);
        var myOptions = {
          zoom: 15,
          center: myLatlng
        };
        map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
        heatmap = new HeatmapOverlay(map, 
          {
            "radius": 0.0010,
            "maxOpacity": 0.3, 
            "scaleRadius": true, 
            "useLocalExtrema": true,
            latField: 'lat',
            lngField: 'lng',
            valueField: 'count'
          }
        );

        var testData = {
          max: 8,
          data: [{lat: 14.829074, lng:120.268051, count: 3}, {lat: 14.825541, lng:120.268494, count: 3},
				{lat: 14.831387, lng:120.269210, count: 3}, {lat:14.833689, lng:120.270026, count: 4}, 
				{lat:14.835644, lng:120.270981, count: 4}, {lat:14.844914, lng:120.326468,count: 4}, 
				{lat:14.852020, lng:120.334485, count: 5}, {lat:14.845928, lng:120.337081, count: 5},
				{lat:14.865135, lng:120.288225, count: 5}, {lat:14.869491, lng:120.288809, count: 5},
				{lat:14.873167, lng:120.289597, count: 5}, {lat:14.875155, lng:120.290703, count: 5}]
        };

        heatmap.setData(testData);

</script>
  <body>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj4XDmHACe966pJDO_ydCqjnQO_hiHHFs&libraries=places&callback=initMap" async defer></script>
      
      
      

    <div id="map-canvas"></div>
	
    
    <script>
        var myLatlng = new google.maps.LatLng(14.829074, 120.268051);
        var myOptions = {
          zoom: 15,
          center: myLatlng
        };
        map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
        heatmap = new HeatmapOverlay(map, 
          {
            "radius": 0.0010,
            "maxOpacity": 0.3, 
            "scaleRadius": true, 
            "useLocalExtrema": true,
            latField: 'lat',
            lngField: 'lng',
            valueField: 'count'
          }
        );

        var testData = {
          max: 8,
          data: [{lat: 14.829074, lng:120.268051, count: 3}, {lat: 14.825541, lng:120.268494, count: 3},
				{lat: 14.831387, lng:120.269210, count: 3}, {lat:14.833689, lng:120.270026, count: 4}, 
				{lat:14.835644, lng:120.270981, count: 4}, {lat:14.844914, lng:120.326468,count: 4}, 
				{lat:14.852020, lng:120.334485, count: 5}, {lat:14.845928, lng:120.337081, count: 5},
				{lat:14.865135, lng:120.288225, count: 5}, {lat:14.869491, lng:120.288809, count: 5},
				{lat:14.873167, lng:120.289597, count: 5}, {lat:14.875155, lng:120.290703, count: 5}]
        };

        heatmap.setData(testData);

</script>

        </body>

      </html>