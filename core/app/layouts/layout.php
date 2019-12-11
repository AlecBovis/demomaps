<!--
Este es el layout principal, a partir de este layout o plantilla se muestran el resto de "vistas"
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MapCrud-Enotria</title>
    <link href="res/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
    <script src="res/js/jquery.min.js"></script>
<!--
<script async defer
src="https://maps.googleapis.com/maps/api/js">
</script>
-->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBUf2cDjX6QTyLvUYGe5IQs748Sn_UzBKs"></script>

  <script src="res/jquery-gmaps-latlon-picker.js"></script>


   <link rel="stylesheet" type="text/css" href="res/fullcalendar/fullcalendar.min.css">
   </head>

  <body>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">MAP<b>CRUD</b></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./"><i class='glyphicon glyphicon-home'></i> INICIO</a></li>
        <li><a href="./?view=crud&opt=all"><i class='glyphicon glyphicon-calendar'></i> LUGARES</a></li>
      </ul>


    </div>
  </div>
</nav>


<?php 
  View::load("index");
?>

<div class="container">
<div class="row">
<div class="col-md-12">
<br>
<hr>
</div>
</div>
</div>

<script src="res/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
