<?php

if (isset($_POST['signup-submit'])){

  require 'dbh.inc.php';

  $username = $_POST['username'];
  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $email = $_POST['email'];
  $psd = $_POST['psd'];
  $psd_repeat = $_POST['psd-repeat'];
  $link = $_POST['link'];
  // $type = $_POST['UserType'];
  $linkName = $_POST['linkName'];

// validate email
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../signUp.html?error=invalidmail");
    exit();
  }
  //validate correct password
  else if($psd!==$psd_repeat){
    header("Location: ../signUp.html?error=wrongpassword");
    exit();
  }
  //check if user or email already taken
  else{
    $sql = "SELECT username FROM users WHERE username=? OR email=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location: ../signUp.html?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $username, $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if($resultCheck > 0){
        header("Location: ../signUp.html?error=useroremailTaken");
        echo "<script>
                   alert('Username or Email already taken');
           </script>";
        exit();
      }
      else {
        //$username, $psd, $fName, $lName, $email, $link, $type
        $sql = "INSERT INTO users(username, password, fName, lName, email, link, linkName) VAlUES(?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../signUp.html?error=sqlerror");
          echo "<script>
                     alert('SERVER SIDE error');
             </script>";
          exit();
        }
        else {
          $hashedPWD = password_hash($psd, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "sssssss", $username, $hashedPWD, $fName, $lName, $email, $link, $linkName);
          mysqli_stmt_execute($stmt);
          //header("Location: ../signUp.html?signup=success");
          // header('Location: ' . $_SERVER['HTTP_REFERER']);
          //header("location:javascript://history.go(-2)");
          session_start();
          $_SESSION['user']=$username;
          echo "<script>
                     alert('Signed up succesfully');
                     window.history.go(-2);
             </script>";
          exit();
        }

      }
    }

  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else{

  header("Location: ../signUp.html");
  exit();
}
