<?php


  $servername = "localhost";
  $username = "circulant";
  $password = "eRhZ6ONLgY77787";
  $database = "CirculantZoom";
  $socketFile = "/tmp/mysql.sock";
  $port = 3306;
  $conn = new mysqli($servername, $username, $password, $database, $port);

  if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
  }


?>
