<?php
session_start();
if(isset($_POST["cancel"])){
  echo "<script>
             window.history.go(-2);
     </script>";
}
else {
  if(isset($_SESSION['user']) && !empty($_SESSION['user']) && $_SESSION['user'] !=""){
    require 'dbh.inc.php';
    $connect = new PDO('mysql:host='.$servername.';dbname='.$dBname.'', $dBUname, $dBPassword);
    //$connect = new PDO('mysql:host=localhost;dbname=wisely-hotzlapp', 'root', '');

    if(!isset($connect)){
      alert("problemmmmmm");
    }
    $query = "
    UPDATE tbl_comment SET comment=:comment WHERE comment_id = :comment_id
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
     array(
      ':comment_id'  => $_POST["comment_id"],
      ':comment'   => $_POST["comment_content"]
     )
    );
    $result = $statement->fetchAll();
    if(isset($result))
    {
      $message = "Your comment updated successfully";
      echo "<script type='text/javascript'>alert('$message');</script>";
      echo "<script>
                 window.history.go(-2);
         </script>";
    }
  }
}
