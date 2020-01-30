<?php
$user="";
session_start();
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
}
if(isset($_GET['visitUser'])){
  $member_name = $_GET['visitUser'];
} else{
  //redirect
  echo "<script>
           window.history.go(-1);
        </script>";
}
require 'includes/dbh.inc.php';
require 'includes/user_data_helper.inc.php';
// require 'includes/update_user_data.inc.php';

$connect = new PDO('mysql:host='.$servername.';dbname='.$dBname.'', $dBUname, $dBPassword);

/*=============================================================*/
$userData = userData($member_name, $connect);
$name ='';
$email ='';
$websiteLInk='';
$WebsiteName ='';
$pwd = '';
$lname = '';
foreach ($userData as $uData) {
  $name =$uData['fName'];
  $lname = $uData['lName'];
  $pwd = $uData['password'];
  $email =$uData['email'];
  $websiteLInk=$uData['link'];
  $WebsiteName =$uData['linkName'];
}
$userColor = user_color($member_name, $connect);
$userType = user_type_by_color($userColor);

$itemRating = getUserRatingDistribution($member_name,$connect);
$ratingNumber = 0;
$count = 0;
$fiveStarRating = 0;
$fourStarRating = 0;
$threeStarRating = 0;
$twoStarRating = 0;
$oneStarRating = 0;
foreach($itemRating as $rate){
  $ratingNumber+= $rate['rating'];
  $count += 1;
  if($rate['rating'] == 5) {
    $fiveStarRating +=1;
  } else if($rate['rating'] == 4) {
    $fourStarRating +=1;
  } else if($rate['rating'] == 3) {
    $threeStarRating +=1;
  } else if($rate['rating'] == 2) {
    $twoStarRating +=1;
  } else if($rate['rating'] == 1) {
    $oneStarRating +=1;
  }
}
$average = 0;
if($ratingNumber && $count) {
  $average = $ratingNumber/$count;
}
$fiveStarRatingPercent=0;
$fourStarRatingPercent=0;
$threeStarRatingPercent=0;
$twostarRatingPercent=0;
$oneStarRatingPercent=0;
if($count != 0){
$fiveStarRatingPercent = round(($fiveStarRating/$count)*100);
$fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';

$fourStarRatingPercent = round(($fourStarRating/$count)*100);
$fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';

$threeStarRatingPercent = round(($threeStarRating/$count)*100);
$threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';

$twoStarRatingPercent = round(($twoStarRating/$count)*100);
$twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';

$oneStarRatingPercent = round(($oneStarRating/$count)*100);
$oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';
}
/////////////////////
$allUsers = get_all_users($connect);
 ?>
<!DOCTYPE html>
<html style="background-color:#EEEEEE;">
 <head>

  <title>Wizely Hotzlapp</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>Wisely Hotzlapp</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- CSS -->
    <link href="css/tabs2.css" rel="stylesheet">

    <!-- Fonts  -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,600italic,600,700italic' rel='stylesheet' type='text/css'>



    <!-- <header class="header header_style_01" style="position:relative;">

    </header> -->

</head>
 <body style="background-color:#EEEEEE;min-height: auto;
 position: relative;">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   <div class="container">
     <a class="navbar-brand" href="index.php">Wisely</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto" style="float:right;">
         <li class="nav-item">
           <a class="nav-link" href="index.php">Home
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="stages/general.php">Main</a>
         </li>
         <li class="nav-item">
       <!--   <a class="nav-link" href="#">General</a>-->
       <?php if( (!isset($_SESSION['user'])) || ($_SESSION['user'] == "") ){
                 echo "
                 <a class='nav-link' href='login.html'>Login</a>
                 </li>
                   <li class='nav-item'>
                 <a class='nav-link' href='signUp.html'>Sign Up</a>
                 </li>
                 ";
               }else {
                 $activeSign="";
                 if($member_name == $user)
                 {
                   $activeSign = "active";
                 }
                 echo "
                 <a class='nav-link ".$activeSign."' href='visit_profile.php?visitUser=".$user."'>My Profile</a>
                 </li>
                 <li class='nav-item'>
                 <a class='nav-link' href='includes/logout.inc.php'>Logout</a>
                 </li>
                 ";
               }
        ?>
         </li>
       </ul>
     </div>
   </div>
   <?php if($user != ""){
            echo '<label dir="rtl" style="color:white;position:block;right:5;">שלום '.$user.'</label>';
          }
    ?>
 </nav>
   <!-- <br /><br /><br /><br /> -->

   <!-- <div class="container" style="position:fixed; left:13%;height:100%;"> -->
   <div class="container">

       <div class="tab-wrap" >

         <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
         <label for="tab1"><?php if(strtolower($user) == $member_name || strtolower($user) == "admin") echo "הצגת פרופיל" ;?></label>

         <?php
         if(strtolower($user) == strtolower($member_name) ){
           echo '<input type="radio" id="tab2" name="tabGroup1" class="tab">
           <label for="tab2">עדכון פרטים אישיים</label>';
          }

         if(strtolower($user) == "admin" && strtolower($member_name) == 'admin'){
             echo '<input type="radio" id="tab3" name="tabGroup1" class="tab">
             <label for="tab3">ניהול משתמשים</label>';
          }

         ?>


         <div class="tab__content" >
           <p class="lead" dir="rtl" align="right">
              <h1 align="center"><?php echo $member_name."'s Profile"; ?></h1>

              <hr>
                <div class="row" dir="rtl">
                  <div class="col-md">
                    <p align="center" dir="rtl"><u> נתוני משתמש </u>
                      <br>
                       שם : <?php echo $name; ?>
                      <br>
                       מייל : <?php echo $email; ?>
                      <br>
                      סוג משתמש : <?php echo $userType; ?>
                      <br>
                       <?php //website
                       if ($userType == "משתמש פופולרי"){
                         echo 'אתר אישי : '.'<a href="'.$websiteLInk.'" target="_blank">'.$WebsiteName.'</a>';
                       }
                      ?>
                    </p>
                  </div>
                  <div class="col-md">
                    <p align="center" dir="rtl"><u>סטטיסטיקת המשתמש</u>
                      <br>
                       סה"כ הודעות : <?php echo user_total_comments($member_name,$connect); ?>
                      <br>
                       דירוג : <?php echo number_format((float)$average, 1, '.', ''); ?>
                      <br>
                      מספר דירוגים : <?php echo $count; ?>
                    </p>
                  </div>
                  <div class="col-md">
                    <p align="center" dir="rtl"><u>התפלגות דירוג המשתמש</u>
                      <div style="margin-left:15%;">
                      <div class="pull-left">
              					<div class="pull-left" style="width:35px; line-height:1;">
              						<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
              					</div>
              					<div class="pull-left" style="width:140px;">
              						<div class="progress" style="height:9px; margin:8px 0;">
              						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fiveStarRatingPercent; ?>">
              							<span class="sr-only"><?php echo $fiveStarRatingPercent; ?></span>
              						  </div>
              						</div>
              					</div>
              					<div class="pull-right" style="margin-left:10px;"><?php echo $fiveStarRating; ?></div>
              				</div>

              				<div class="pull-left">
              					<div class="pull-left" style="width:35px; line-height:1;">
              						<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
              					</div>
              					<div class="pull-left" style="width:140px;">
              						<div class="progress" style="height:9px; margin:8px 0;">
              						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fourStarRatingPercent; ?>">
              							<span class="sr-only"><?php echo $fourStarRatingPercent; ?></span>
              						  </div>
              						</div>
              					</div>
              					<div class="pull-right" style="margin-left:10px;"><?php echo $fourStarRating; ?></div>
              				</div>

              				<div class="pull-left">
              					<div class="pull-left" style="width:35px; line-height:1;">
              						<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
              					</div>
              					<div class="pull-left" style="width:140px;">
              						<div class="progress" style="height:9px; margin:8px 0;">
              						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $threeStarRatingPercent; ?>">
              							<span class="sr-only"><?php echo $threeStarRatingPercent; ?></span>
              						  </div>
              						</div>
              					</div>
              					<div class="pull-right" style="margin-left:10px;"><?php echo $threeStarRating; ?></div>
              				</div>

              				<div class="pull-left">
              					<div class="pull-left" style="width:35px; line-height:1;">
              						<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
              					</div>
              					<div class="pull-left" style="width:140px;">
              						<div class="progress" style="height:9px; margin:8px 0;">
              						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $twoStarRatingPercent; ?>">
              							<span class="sr-only"><?php echo $twoStarRatingPercent; ?></span>
              						  </div>
              						</div>
              					</div>
              					<div class="pull-right" style="margin-left:10px;"><?php echo $twoStarRating; ?></div>
              				</div>

              				<div class="pull-left">
              					<div class="pull-left" style="width:35px; line-height:1;">
              						<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
              					</div>
              					<div class="pull-left" style="width:140px;">
              						<div class="progress" style="height:9px; margin:8px 0;">
              						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $oneStarRatingPercent; ?>">
              							<span class="sr-only"><?php echo $oneStarRatingPercent; ?></span>
              						  </div>
              						</div>
              					</div>
              					<div class="pull-right" style="margin-left:10px;"><?php echo $oneStarRating; ?></div>
              				</div>
                    </div>
                    </p>
                  </div>
            </div>
            </p>
         </div>
<!-- ==============================עדכון פרטים ====================================-->
         <div class="tab__content">
           <p class="lead" dir="rtl" align="right">
              <h1 align="center"><?php echo $member_name."'s Profile"; ?></h1>

              <hr>
              <form class="form-horizontal" method="post" action="includes/update_user_data.inc.php" dir="rtl">
                <div class="row" dir="rtl">
                  <div class="col-md">
                    <div class="form-group">
                      <div class="col-sm-8">
                        <input required type="text" class="form-control" id="newName" name="newName" value="<?php echo $member_name;?>">
                      </div>
                      <label class="control-label col-sm-3" for="username">שם משתמש:</label>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-8">
                        <!-- <input type="password" class="form-control" id="pwd" name="pwd" value="php echo $pwd;"> -->
                        <input type="password" class="form-control" id="pwd" name="pwd" value="*****">
                      </div>
                      <label class="control-label col-sm-3" for="pwd">סיסמא:</label>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-8">
                        <input required type="text" class="form-control" id="fName" name="fName" value="<?php echo $name;?>">
                      </div>
                      <label class="control-label col-sm-3" for="fName">שם פרטי:</label>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-8">
                        <input required type="text" class="form-control" id="lName" name="lName" value="<?php echo $lname;?>">
                      </div>
                      <label class="control-label col-sm-3" for="lName">שם משפחה:</label>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <div class="col-sm-8">
                        <input dir="ltr" required type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>">
                      </div>
                      <label class="control-label col-sm-3" for="email">דוא"ל:</label>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-8">
                        <input dir="ltr" type="text" class="form-control" id="link" name="link" value="<?php echo $websiteLInk;?>">
                      </div>
                      <label class="control-label col-sm-3" for="link">לינק לאתר:</label>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="linkName" name="linkName" value="<?php echo $WebsiteName;?>">
                        <small id="linkNamehelp" class="form-text text-muted" align="right">שם האתר יוצג רק עבור משתמשים פופולריים</small>
                      </div>
                      <label class="control-label col-sm-3" for="linkName">שם האתר:</label>
                    </div>
                    <div align="center">
                      <input type="submit" name="submit-update" id="submit_update" class="btn btn-info" value="Submit" style="width:250px;" onclick="return  confirm('Do you want to update details ?')"/>
                    </div>
                  </div>
                </div>
              </form>
              </p>
            </div>

<!-- ==============================ניהול משתמשים ====================================-->
<div class="tab__content">
  <p class="lead" dir="rtl" align="right">
     <h1 align="center">ניהול משתמשים</h1>

     <hr>
     <div class="row justify-content-center">
       <!-- <form action="includes/update_user_data.inc.php" method="post"> -->
       <div style="overflow-x:auto;">
       <table class="table" >
         <thead>
           <tr>
             <th > פעולה </th>
             <th> שם משתמש </th>
             <th> הרשאות </th>
             <th> סיסמא </th>
             <th> שם פרטי </th>
             <th> שם משפחה </th>
             <th> דוא"ל </th>
             <th> לינק </th>
             <th> שם האתר </th>
           </tr>
         </thead>
         <tbody id="tbody">
           <?php foreach ($allUsers as $u): ?>
             <tr>
               <td>
                 <a data-id="<?php echo $u['username']; ?>" class="btn btn-info btnedit" style="width:60px;">Edit</a><br>
                 <a href="includes/update_user_data.inc.php?delete=<?php echo $u['username'];?>" class="btn btn-danger" style="width:60px;" onclick="return  confirm('Do you want to delete?')">Delete</a>
               </td>
               <td data-id="<?php echo $u['username']; ?>"><a href="visit_profile.php?visitUser=<?php echo $u['username'];?>"><u><?php echo $u['username']; ?></u></a></td>
               <td data-id="<?php echo $u['username']; ?>"><?php echo $u['permission']; ?></td>
               <td data-id="<?php echo $u['username']; ?>">*****</td>
               <td data-id="<?php echo $u['username']; ?>"><?php echo $u['fName']; ?></td>
               <td data-id="<?php echo $u['username']; ?>"><?php echo $u['lName']; ?></td>
               <td data-id="<?php echo $u['username']; ?>"><?php echo $u['email']; ?></td>
               <td data-id="<?php echo $u['username']; ?>"><?php echo $u['link']; ?></td>
               <td data-id="<?php echo $u['username']; ?>"><?php echo $u['linkName']; ?></td>
             </tr>
           <?php endforeach; ?>
         </tbody>
       </table>
     </div>
       <!-- </form> -->
     </div>

     <form autocomplete="off" class="form-horizontal" method="post" action="includes/update_user_data.inc.php" dir="rtl">
       <div class="row" dir="rtl">
         <div class="col-md">
           <div class="form-group">
             <div class="col-sm-8">
               <input required type="text" class="form-control" id="newNameA" name="newNameA" autocomplete="off" readonly>
             </div>
             <label class="control-label col-sm-3">שם משתמש:</label>
           </div>
           <div class="form-group">
             <div class="col-sm-8">
               <!-- <input type="password" class="form-control" id="pwd" name="pwd" value="php echo $pwd;"> -->
               <input type="password" class="form-control" id="pwdA" name="pwdA" autocomplete="off" readonly >
             </div>
             <label class="control-label col-sm-3">סיסמא:</label>
           </div>
           <div class="form-group">
             <div class="col-sm-8">
               <input required type="text" class="form-control" id="fNameA" name="fNameA" >
             </div>
             <label class="control-label col-sm-3" for="fName">שם פרטי:</label>
           </div>
           <div class="form-group">
             <div class="col-sm-8">
               <input required type="text" class="form-control" id="lNameA" name="lNameA" >
             </div>
             <label class="control-label col-sm-3" for="lName">שם משפחה:</label>
           </div>
         </div>
         <div class="col-md">
           <div class="form-group">
             <div class="col-sm-8">
               <input dir="ltr" required type="email" class="form-control" id="emailA" name="emailA" readonly onfocus="this.removeAttribute('readonly');">
             </div>
             <label class="control-label col-sm-3" for="email">דוא"ל:</label>
           </div>
           <div class="form-group">
             <div class="col-sm-8">
               <input dir="ltr" type="text" class="form-control" id="linkA" name="linkA">
             </div>
             <label class="control-label col-sm-3" for="link">לינק לאתר:</label>
           </div>
           <div class="form-group">
             <div class="col-sm-8">
               <input type="text" class="form-control" id="linkNameA" name="linkNameA" >
             </div>
             <label class="control-label col-sm-3" for="linkName">שם האתר:</label>
           </div>
           <div class="form-group">
             <div class="col-sm-8">
               <input type="text" class="form-control" id="permissionA" name="permissionA" >
             </div>
             <label class="control-label col-sm-3" for="permission">הרשאות :</label>
           </div>
           <div class="col-sm-8">
             <input type="submit" name="submit-updateA" id="submit_updateA" class="btn btn-info" value="Update" style="width:250px;" onclick="return  confirm('Do you want to update details ?')"/>
           </div>
         </div>
       </div>
     </form>
     </p>
   </div>

         </div>

       </div>

 </body>
</html>
<script src="js/topnav.js"></script>
<script src="js/adminCRUD.js"></script>
