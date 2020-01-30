<?php

if (isset($_POST['login-submit'])){

  require 'dbh.inc.php';

  $username = $_POST['username'];
  $psd = $_POST['psd'];

  $sql = "SELECT * FROM users WHERE username='$username'";
  $resultUser = mysqli_query($conn, $sql);

    if ($rowUser = mysqli_fetch_assoc($resultUser)){
      $psdCheck = password_verify($psd, $rowUser['password']);
      if($psdCheck == false){

            echo "<script>
                       alert('Wrong Password');
                       window.history.go(-1);
               </script>";
            exit();
          }
          else{
            session_start();
              $_SESSION['user']=$username;
              echo "<script>
                       alert('Succesfully loged in');
                       window.history.go(-2);
                    </script>";
                  }
      }
  else{
    //header("Location: ../login.html?error=wrongusername");
          echo "<script>
                     alert('Wrong UserName');
                     window.history.go(-1);
             </script>";
          exit();
  }
}
else{
  header("Location: ../login.html");
  exit();
}
