<?php
session_start();
if(isset($_SESSION['user']) && !empty($_SESSION['user']) && $_SESSION['user'] !=""){
  require 'dbh.inc.php';
  $connect = new PDO('mysql:host='.$servername.';dbname='.$dBname.'', $dBUname, $dBPassword);
  //$connect = new PDO('mysql:host=localhost;dbname=wisely-hotzlapp', 'root', '');

  if(!isset($connect)){
    alert("problemmmmmm");
  }

  if(isset($_POST["index"], $_POST["business_id"]))
  {
    //check if the user is trying to rate his own comment
    $query = "
    SELECT comment_id FROM tbl_comment WHERE comment_id=:business_id AND comment_sender_name=:rater
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
       ':business_id'  => $_POST["business_id"],
       ':rater' => $_SESSION['user']
      )
    );
    $result = $statement->fetchAll();
    $count = $statement->rowCount();

    if($count > 0){
      echo "You can not rate your own comments";
    }
    else{
      /*check if this user already rated this comment */
      $query = "
      SELECT id FROM rating WHERE comment_id=:business_id AND rater=:rater
      ";
      $statement = $connect->prepare($query);
      $statement->execute(
        array(
         ':business_id'  => $_POST["business_id"],
         ':rater' => $_SESSION['user']
        )
      );
      $result = $statement->fetchAll();
      $count = $statement->rowCount();
      if($count>0){//if the user already rated this comment - update
        $query = "
        UPDATE rating SET rating=:rating WHERE comment_id = :business_id AND rater = :rater
        ";
        $statement = $connect->prepare($query);
        $statement->execute(
         array(
          ':business_id'  => $_POST["business_id"],
          ':rating'   => $_POST["index"],
          ':rater' => $_SESSION['user']
         )
        );
        $result = $statement->fetchAll();
        if(isset($result))
        {
         echo 'Rating updated successfully';
        }
      }
      else{ //if the user haven't rated this comment yet - insert
       $query = "
       INSERT INTO rating(comment_id, rating, rater)
       VALUES (:business_id, :rating, :rater)
       ";
       $statement = $connect->prepare($query);
       $statement->execute(
        array(
         ':business_id'  => $_POST["business_id"],
         ':rating'   => $_POST["index"],
         ':rater' => $_SESSION['user']
        )
       );
       $result = $statement->fetchAll();
       if(isset($result))
       {
        echo 'You have rate '.$_POST["index"].' out of 5';
       }

      }


  }
  }
}
else{
  echo "you must log in in order to rate o comment";
}

?>
