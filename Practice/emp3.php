<?php
session_start();
$_SESSION['basic']= $_POST['basic'];
$_SESSION['da'] = $_POST['da'];
$_SESSION['hra'] = $_POST['hra'];
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title></title>
  </head>
  <body>
  <h1>Employe details</h1>
  <?php
  echo "Employ no".$_SESSION['eno']."<br>";
   echo "Employ name".$_SESSION['ename']."<br>";

    echo "Employ addres".$_SESSION['addr']."<br>";

     echo "Employ basic salary".$_SESSION['basic']."<br>";

      echo "Employ da".$_SESSION['da']."<br>";

       echo "Employ hra".$_SESSION['hra']."<br>";
  ?>
  </body>
  </html>