<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
 <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <title>Googlemaps Heatmap Layer</title>
  
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
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

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

  </body>
</html>