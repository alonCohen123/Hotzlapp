<?php
$servername ="localhost";
$dBUname ="root";
$dBPassword ="";
$dBname ="wisely-hotzlapp";

// $servername ="sql310.epizy.com";
// $dBUname ="epiz_24538462";
// $dBPassword ="2ptYvVLdUFGs7O";
// $dBname ="epiz_24538462_wiselyDB";

$conn = mysqli_connect($servername, $dBUname, $dBPassword, $dBname);
if(!$conn){
  die("connection failed!!! ".mysqli_connect_error());
}

?>
