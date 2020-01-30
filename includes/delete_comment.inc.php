<?php
require 'dbh.inc.php';
$connect = new PDO('mysql:host='.$servername.';dbname='.$dBname.'', $dBUname, $dBPassword);
//$connect = new PDO('mysql:host=localhost;dbname=wisely-hotzlapp', 'root', '');

if(!isset($connect)){
  alert("problemmmmmm");
}

if(isset($_POST["comment_id"]))
{
  $query = "
  DELETE FROM tbl_comment WHERE comment_id = :comment_id
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
    array(
     ':comment_id' => $_POST["comment_id"]
    )
  );
  // $result = $statement->fetchAll();
  // $count = $statement->rowCount();
  echo "done";
}
else {
  alert("not good");
}
?>
