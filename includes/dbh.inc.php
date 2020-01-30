<?php
$servername ="localhost";
$dBUname ="root";
$dBPassword ="";
$dBname ="wisely-hotzlapp";

$conn = mysqli_connect($servername, $dBUname, $dBPassword, $dBname);
if(!$conn){
  die("connection failed!!! ".mysqli_connect_error());
}

?>
