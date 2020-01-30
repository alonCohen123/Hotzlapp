<?php

//fetch_comment.php
session_start();
$current_user='';
if(isset($_SESSION['user']))
  $current_user = $_SESSION['user'];

$page='';
if(isset($_POST['page1'])){
  $page = $_POST['page1'];
}
else {
  echo "erorr";
}

require 'dbh.inc.php';
require 'user_data_helper.inc.php';
$connect = new PDO('mysql:host='.$servername.';dbname='.$dBname.'', $dBUname, $dBPassword);
//$connect = new PDO('mysql:host=localhost;dbname=wisely-hotzlapp', 'root', '');
$userType = user_type_by_color(user_color($current_user, $connect));
$tooltip = ['Not Helpfull At All','Not Helpfull','Partly helpfull','Helpfull','Very Helpfull'];
$tooltip = ['לא מועיל כלל','לא מועיל','מועיל חלקית','מועיל','מאוד מועיל'];
$query = "
SELECT * FROM tbl_comment
WHERE parent_comment_id = '0' AND page = '".$page."'
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '<style>
.rating {
   float: right;
   height: 40px;
   //margin-bottom: 20px;
}
.rating:not(:checked) > input {
   position:absolute;
   top:-9999px;
}
.rating:not(:checked) > label {
   float:right;
   width:1em;
   overflow:hidden;
   white-space:nowrap;
   cursor:pointer;
   font-size:30px;
   color:#ccc;
}
.rating > input:checked ~ label {
   color: #ffc700;
}
.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
   color: #deb217;
}
.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
   color: #c59b08;
}

</style>
<script>$("[data-toggle=tooltip]").tooltip();</script>';
foreach($result as $row)
{
 $user_color = user_color($row["comment_sender_name"], $connect);
 $output .= '
 <hr>
 <div style="
      width: 80%;
      height: 80%;
      background: #F5FBFB;
      padding : 30px;
      margin-right : 85px;">
 <div class="panel panel-default" style="border-radius: 20px;max-width: 650px;min-height:100%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" align="right">
  <div class="panel-heading" style="border-radius: 20px 20px 0px 0px;">By <a href="../visit_profile.php?visitUser=' . $row["comment_sender_name"] . '" data-toggle="tooltip" data-placement="top" data-html="true" title="<u>
  '.user_type_by_color($user_color).' </u><br>
  סך הכל תגובות :
  '.user_total_comments($row["comment_sender_name"] ,$connect).'<br>
   מספר דירוגים :
  '.user_total_rating($row["comment_sender_name"] ,$connect).'<br>
  דירוג ממוצע :
  '.user_avg_rating($row["comment_sender_name"] ,$connect).'
  "><b><font color="'.$user_color.'">'.$row["comment_sender_name"].'</font></b></a> on <i>'.$row["date"].'</i> <b><u>('.$row['comment_id'].'</b></u><br>';
  $ratingAvg = count_avg_rating($row['comment_id'], $connect);
  $rating = round($ratingAvg);
  $ratingAvg = number_format((float)$ratingAvg, 1, '.', '');
  $totalRates = count_total_rating($row['comment_id'], $connect);
  $output.='
  ';
  for($count=1; $count<=5; $count++)
  {
    if($count <= $rating)
    {
      $color = 'color:#ffcc00;';
    }
    else
    {
      $color = 'color:#ccc;';
    }
    $output .= '<li title="'.$tooltip[$count-1].'" id="'.$row['comment_id'].'-'.$count.'" data-index="'.$count.'"  data-business_id="'.$row['comment_id'].'" data-rating="'.$rating.'" class="rating" style="cursor:pointer; '.$color.' font-size:30px;">&#9733;</li>';
 }
  $output .= '
  <br>
  <br>
  <div dir="rtl" style="margin-right:5px;">
  <b>'.$ratingAvg.'/5 </b>: '.$totalRates.' דירוגים
  </div>
  </div>
  <div class="panel-body" dir="rtl">'.$row["comment"].' '.signature_display($row["comment_sender_name"], $connect, $user_color).'</div>';
  $delete_status = 'hidden';
  if(strtolower($row['comment_sender_name']) == strtolower($current_user) || strtolower($current_user) == 'admin'  || $userType =="מגשר")
    $delete_status = '';
  $output .= '
  <div class="panel-footer" align="right" style="border-radius: 0px 0px 20px 20px;">
    <form  action="../includes/edit_comment.inc.php" method="post">
    <button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply to '.$row["comment_id"].' <span class="glyphicon glyphicon-share-alt"></span></button>
    <button '.$delete_status.' type="button" class="btn btn-default delete" id="'.$row["comment_id"].'">Delete <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
    <input hidden name="ecomment_id" value="'.$row["comment_id"].'">
    <input hidden name="econtent" value="'.$row["comment"].'">
    <button '.$delete_status.' type="submit" class="btn btn-default edit" id="'.$row["comment_id"].'" name="edit-submit">Edit <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
    </form>
  </div>
 </div>
 ';
 $output .= get_reply_comment($connect, $page, $row["comment_id"], $current_user, $tooltip);
 $output.='</div>';
}

echo $output;

function get_reply_comment($connect, $page, $parent_id = 0,$current_user, $tool, $marginleft = 0, $reply_counter = 1)
{

 $query = "
 SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."' AND page = '".$page."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 if($reply_counter < 3){
   $marginleft = $marginleft - 100;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $user_color = user_color($row["comment_sender_name"], $connect);
   $output .= '
   <div class="panel panel-default" style="border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-color: #D2C2C2; min-height:100%;max-width: 650px;margin-left:'.$marginleft.'px" align="right">
    <div class="panel-heading" style="border-radius: 20px 20px 0px 0px;"><u>replied to '.$row['parent_comment_id'].'</u></div>
    <div class="panel-heading">By <a href="../visit_profile.php?visitUser=' . $row["comment_sender_name"] . '" data-toggle="tooltip" data-placement="top" data-html="true" title="<u>
    '.user_type_by_color($user_color).' </u><br>
    סך הכל תגובות :
    '.user_total_comments($row["comment_sender_name"] ,$connect).'<br>
     מספר דירוגים :
    '.user_total_rating($row["comment_sender_name"] ,$connect).'<br>
    דירוג ממוצע :
    '.user_avg_rating($row["comment_sender_name"] ,$connect).'
    "><b><font color="'.$user_color.'">'.$row["comment_sender_name"].'</font></b></a> on <i>'.$row["date"].'</i> <b><u>('.$row['comment_id'].'</b></u><br>';
    $ratingAvg = count_avg_rating($row['comment_id'], $connect);
    $rating = round($ratingAvg);
    $ratingAvg = number_format((float)$ratingAvg, 1, '.', '');
    $totalRates = count_total_rating($row['comment_id'], $connect);
    $output.='
    ';
    for($count=1; $count<=5; $count++)
    {
      if($count <= $rating)
      {
        $color = 'color:#ffcc00;';
      }
      else
      {
        $color = 'color:#ccc;';
      }
      $output .= '<li title="'.$tool[$count-1].'" id="'.$row['comment_id'].'-'.$count.'" data-index="'.$count.'"  data-business_id="'.$row['comment_id'].'" data-rating="'.$rating.'" class="rating" style="cursor:pointer; '.$color.' font-size:30px;">&#9733;</li>';
   }
    $output .= '
    <br>
    <br>
    <div dir="rtl" style="margin-right:5px;">
    <b>'.$ratingAvg.'/5 </b>: '.$totalRates.' דירוגים
    </div>
    </div>
    <div class="panel-body" dir="rtl">'.$row["comment"].' '.signature_display($row["comment_sender_name"], $connect, $user_color).'</div>';
    $delete_status = 'hidden';
    if(isset($_SESSION['user'])){
    if(strtolower($row['comment_sender_name']) == strtolower($current_user) || strtolower($current_user) == 'admin'  || user_type_by_color(user_color($_SESSION['user'],$connect)) =="מגשר")
      $delete_status = '';}
    $output .= '
    <div class="panel-footer" align="right" style="border-radius: 0px 0px 20px 20px;">
    <form  action="../includes/edit_comment.inc.php" method="post">
    <button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply to '.$row["comment_id"].' <span class="glyphicon glyphicon-share-alt"></span></button>
    <button '.$delete_status.' type="button" class="btn btn-default delete" id="'.$row["comment_id"].'">Delete <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
    <input hidden name="ecomment_id" value="'.$row["comment_id"].'">
    <input hidden name="econtent" value="'.$row["comment"].'">
    <button '.$delete_status.' type="submit" class="btn btn-default edit" id="'.$row["comment_id"].'" name="edit-submit">Edit <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
    </form>
    </div>
   </div>
   ';
   $reply_counter = $reply_counter + 1;
   $output .= get_reply_comment($connect, $page,$row["comment_id"],$current_user, $tool,$marginleft,$reply_counter);
  }
 }
 $output .="
  ";
 return $output;
}

?>
