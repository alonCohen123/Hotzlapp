<?php
function user_total_comments($user, $connect){
  $count = 0;
  $query = "SELECT COUNT(*) as count FROM tbl_comment WHERE comment_sender_name = '".$user."'";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $total_row = $statement->rowCount();
  if($total_row > 0)
  {
   foreach($result as $row)
   {
    $count = $row["count"];
   }
  }
  return $count;
}

function user_total_rating($user, $connect){
  $count = 0;
  $query = "SELECT COUNT(*) as count FROM rating INNER JOIN tbl_comment ON rating.comment_id = tbl_comment.comment_id WHERE comment_sender_name= '".$user."'";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $total_row = $statement->rowCount();
  if($total_row > 0)
  {
   foreach($result as $row)
   {
    $count = $row["count"];
   }
  }
  return $count;
}

function user_avg_rating($user, $connect){
  $count = 0;
  $query = "SELECT AVG(rating) as avg FROM rating INNER JOIN tbl_comment ON rating.comment_id = tbl_comment.comment_id WHERE comment_sender_name= '".$user."'";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $total_row = $statement->rowCount();
  if($total_row > 0)
  {
   foreach($result as $row)
   {
    $count = $row["avg"];
   }
  }
  return number_format((float)$count, 1, '.', '');
}
function user_color($user, $connect){
  if($user == "admin"){
    return 'red';
  }
  //check if it is a moderator user
  $query = "SELECT permission FROM users WHERE username = '".$user."'";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $total_row = $statement->rowCount();
  if($total_row > 0)
  {
   foreach($result as $row)
   {
    if($row["permission"] == "moderator")
      return '#9A00C6';
   }
  }
  //check if it is a contributer user (more then 20 comments , rated at least 20 times and avg rating greater then 3.75)
  if(user_total_comments($user, $connect)>=20 && user_total_rating($user, $connect)>=20 && user_avg_rating($user, $connect)>3.75){
    return '#25CA8B';
  }
  //regular user
  else return 'grey';
  }

  function signature_display($user, $connect, $color){
    $output="";
    if($color != '#25CA8B'){
      return $output;
    }
    $query = "SELECT link, linkName FROM users WHERE username = '".$user."'";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();
    if($total_row > 0)
    {
     foreach($result as $row)
     {
      //if($row["permission"] == "moderator")
        return '<hr style="margin : 5px 0 5px 0;">
        <a href="'.$row['link'].'" target="_blank">'.$row['linkName'].'</a>
        ';
     }
    }
    return $output;
  }

  function user_type_by_color($color){
    if($color == "red")
      return "מנהל הפורום";
    if($color == "#9A00C6")
      return "מגשר";
    if($color == "#25CA8B")
      return "משתמש פופולרי";
    return "משתמש רשום";
  }

  function count_avg_rating($comment_id, $connect)
  {
   $output = 0;
   $query = "SELECT AVG(rating) as rating FROM rating WHERE comment_id = '".$comment_id."'";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   $total_row = $statement->rowCount();
   if($total_row > 0)
   {
    foreach($result as $row)
    {
     $output = $row["rating"];
    }
   }
   return $output;
  }

  function count_total_rating($comment_id, $connect)
  {
   $output = 0;
   $query = "SELECT COUNT(rating) as rating FROM rating WHERE comment_id = '".$comment_id."'";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   $total_row = $statement->rowCount();
   if($total_row > 0)
   {
    foreach($result as $row)
    {
     $output = $row["rating"];
    }
   }
   return $output;
  }

  function getUserRatingDistribution($user,$connect){
    $query = "SELECT rating FROM rating INNER JOIN tbl_comment ON rating.comment_id = tbl_comment.comment_id WHERE comment_sender_name= '".$user."'";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    return $result;
  }

  function userData($user, $connect){
    $query = "SELECT * FROM users WHERE username= '".$user."'";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    return $result;
  }

  function get_all_users($connect){
    $query = "SELECT * FROM users";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    return $result;
  }
