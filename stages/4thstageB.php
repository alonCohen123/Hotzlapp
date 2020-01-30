<?php
$user="";
session_start();
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
}
 ?>
 <!DOCTYPE html>
<html lang="en" style="background-color : #eceae5;">
  <head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>Wisely Hotzlapp</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <!-- Colors CSS -->
    <link rel="stylesheet" href="../css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="../css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <header class="header header_style_01" style="position:relative;">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="../index.php">Wisely</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" style="float:right;">
              <ol style="margin-top:15px;margin-left: -40px;">
                <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="4thstage.php"><strong>תשלום חוב</strong></a>
                <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="#"><strong>הכחשת החוב</strong></a>
              </ol>
              <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../stages/general.php">Main</a>
              </li>
              <li class="nav-item">
            <!--   <a class="nav-link" href="#">General</a>-->
            <?php if( (!isset($_SESSION['user'])) || ($_SESSION['user'] == "") )
                      echo "
                      <a class='nav-link' href='../login.html'>Login</a>
                      </li>
                        <li class='nav-item'>
                      <a class='nav-link' href='../signUp.html'>Sign Up</a>
                      </li>
                      ";
                    else {
                      echo "
                      <a class='nav-link' href='../visit_profile.php?visitUser=".$user."'>My Profile</a>
                      </li>
                      <li class='nav-item'>
                      <a class='nav-link' href='../includes/logout.inc.php'>Logout</a>
                      </li>
                      ";
                    }
             ?>
             <!-- <ol style="margin-top:15px;margin-left: -40px;">
               <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="4thstage.php"><strong>תשלום חוב</strong></a>
               <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="#"><strong>הכחשת החוב</strong></a>
             </ol> -->
              </li>
            </ul>
          </div>
        </div>
        <?php if($user != ""){
                 echo '<label dir="rtl" style="color:white;position:block;right:5;">שלום '.$user.'</label>';
               }
         ?>
        </nav>
    </header>

</head>
<body class="seo_version" style="background-color : #eceae5;">
  <style media="screen">
    #content-mobile {width: 335px;}
    @media screen and (max-width: 800px) {
    #content-mobile {
      width: 290px;
      margin: auto;
    }
    }
  </style>

  <div class="container">
    <div class="row" dir="rtl">
      <div class="col-md">
        <br>

        <div id="content-mobile" class="card">
          <a href="4thstageBA.php">
          <img class="card-img-top" src="../images/timeline/55.jpg" height="190"></a>
          <!-- <div class="card-body" dir="rtl">
            <h4 class="card-title" dir="rtl"></h4>
          </div> -->
          <div class="card-footer" style="text-align:center;">
            <a href="4thstageBA.php" class="btn btn-primary">התנגדות לביצוע שטר</a>
          </div>
        </div>

        <br>

        <div id="content-mobile" class="card">
          <a href="4thstageBB.php">
          <img class="card-img-top" src="../images/timeline/66.jpg" height="190"></a>
          <!-- <div class="card-body" dir="rtl">
            <h4 class="card-title" dir="rtl"></h4>
          </div> -->
          <div class="card-footer" style="text-align:center;">
            <a href="4thstageBB.php" class="btn btn-primary">פרעתי את החוב</a>
          </div>
        </div>
        <br>
      </div>

      <div class="col-md">
        <br>
        <div id="content-mobile" class="card">
          <a href="4thstageBC.php">
          <img class="card-img-top" src="../images/timeline/88.jpg"></a>
          <!-- <div class="card-body" dir="rtl">
            <h4 class="card-title" dir="rtl"></h4>
          </div> -->
          <div class="card-footer" style="text-align:center;">
            <a href="4thstageBC.php" class="btn btn-primary">התנגדות לסכום החוב</a>
          </div>
        </div>

        <br>

        <div id="content-mobile" class="card">
          <a href="4thstageBD.php">
          <img class="card-img-top" src="../images/timeline/77.jpg"></a>
          <!-- <div class="card-body" dir="rtl">
            <h4 class="card-title" dir="rtl"></h4>
          </div> -->
          <div class="card-footer" style="text-align:center;">
            <a href="4thstageBD.php" class="btn btn-primary">בקשה לביטול פסק הדין</a>
          </div>
        </div>
      </div>

      <div class="col-md">
        <div style="text-align: center;">
          <h1><a style="font-size: 1em;" href="../index.php">בחזרה עמוד הראשי <img src="../images/back.png" alt="" height="30" width="30"></a></h1>
          <img src="../images/1122.png" height="auto" width="280" alt="">
        </div>
      </div>

    </div>
  </div>

      <footer style="text-align:center;">All rights belong to Alon Cohen & Zarima Osinov</footer>
      <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        };

      </script>
</body>
</html>
