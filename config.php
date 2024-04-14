<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', 'Guru@2003');
  define('DB_NAME', 'db_movie'); 
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
  if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
?>