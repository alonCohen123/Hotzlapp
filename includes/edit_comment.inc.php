<?php
if(!isset($_POST["ecomment_id"])){
  echo "<script>
             window.history.go(-1);
     </script>";
}
$comment_id = $_POST["ecomment_id"];
$content = $_POST["econtent"];
$dir = "ltr";
$rtl_chars_pattern = '/[\x{0590}-\x{05ff}\x{0600}-\x{06ff}]/u';
if(preg_match($rtl_chars_pattern, $content))
  $dir="rtl";
//echo $content;

$user="";
session_start();
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
}

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

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <!-- Site CSS -->
     <link rel="stylesheet" href="../css/style.css">
     <!-- Colors CSS -->
     <link rel="stylesheet" href="../css/colors.css">
     <!-- ALL VERSION CSS -->
     <link rel="stylesheet" href="../css/versions.css">
     <!-- Responsive CSS -->
     <link rel="stylesheet" href="../css/responsive.css">
     <!-- Custom CSS -->
     <link rel="stylesheet" href="../css/custom.css">

     <!-- CSS -->
     <link href="../css/tabs2.css" rel="stylesheet">

     <!-- Fonts  -->
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,600italic,600,700italic' rel='stylesheet' type='text/css'>


     <!-- <header class="header header_style_01" style="position:relative;">

     </header> -->

 </head>
  <body style="background-color:#EEEEEE;min-height: auto;
  position: relative;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="position:fixed top;">
    <div class="container">
      <a class="navbar-brand" href="../index.php">Wisely</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home
            </a>
          </li>
          <li class="nav-item active">
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

    <div class="container">
        <div class="tab-wrap" >
          <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
          <label for="tab1"></label>
          <div class="tab__content">
            <div class="container" align="center">
             <form method="POST" action="handle_edit.inc.php">
              <div class="form-group">
               <input hidden name="comment_name" id="comment_name" value='<?php echo $user?>' />
              </div>
              <label>ערוך את תגובתך</label>
              <div class="form-group">
               <textarea required name="comment_content" id="comment_content" class="form-control" rows="3" style="max-width: 700px;" dir="<?php echo $dir; ?>"><?php echo $content?></textarea>
              </div>
              <div class="form-group">
               <input type="hidden" name="comment_id" id="comment_id" value='<?php echo $comment_id?>' />
               <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
               <input type="submit" name="cancel" id="cancel" class="btn btn-info" value="Cancel"/>
              </div>
             </form>

            </div>
        </div>
        </div>
  </body>
 </html>
