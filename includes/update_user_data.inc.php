<?php

session_start();

if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
}
if (isset($_POST['submit-update'])){
  // echo "hello";
  require 'dbh.inc.php';
  require 'user_data_helper.inc.php';
  $connect = new PDO('mysql:host='.$servername.';dbname='.$dBname.'', $dBUname, $dBPassword);

  $username = $_POST['newName'];

  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $email = $_POST['email'];
  $psd = $_POST['pwd'];
  $link = $_POST['link'];
  $linkName = $_POST['linkName'];

  $query = "
  UPDATE users SET fName=:fName, lName=:lName, email=:email, link=:link, linkName=:linkName WHERE username = :username
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':fName'  => $fName,
    ':lName'  => $lName,
    ':email'  => $email,
    ':link'  => $link,
    ':linkName'  => $linkName,
    ':username'   => $user
   )
  );
  $result1 = $statement->fetchAll();
  //check if the user changed his password
  if($psd != "*****"){
    $userData = userData($user, $connect);

    $userPassword = '';
    foreach ($userData as $uData) {
      $userPassword = $uData['password'];
    }
    if($userPassword != $psd && !password_verify($psd, $userPassword));
    {
      $query = "
      UPDATE users SET password=:psd WHERE username = :username
      ";
      $statement = $connect->prepare($query);
      $statement->execute(
       array(
        ':psd'  => $hashedPWD = password_hash($psd, PASSWORD_DEFAULT),
        ':username'   => $user
       )
      );
      $result2 = $statement->fetchAll();
    }
  }
  else {
    $result2="not changed";
  }
  //check if the user changed his user name
  if($username != $user && $user != 'admin'){
    //check if new username is available
    $query = "SELECT username FROM users WHERE username = '".$username."'";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();
    if($total_row < 1){ // new username is available - continue

        $query = "
        UPDATE rating SET rater=:rater WHERE rater = :username
        ";
        $statement = $connect->prepare($query);
        $statement->execute(
         array(
          ':rater'  => $username,
          ':username'   => $user
         )
        );
        $result3 = $statement->fetchAll();

        $query = "
        UPDATE tbl_comment SET comment_sender_name=:commenter WHERE comment_sender_name = :username
        ";
        $statement = $connect->prepare($query);
        $statement->execute(
         array(
          ':commenter'  => $username,
          ':username'   => $user
         )
        );
        $result4 = $statement->fetchAll();

        $query = "
        UPDATE users SET username=:username WHERE username = :user
        ";
        $statement = $connect->prepare($query);
        $statement->execute(
         array(
          ':username'  => $username,
          ':user'   => $user
         )
        );
        $result5 = $statement->fetchAll();

        $_SESSION['user'] = $username;
      }
      else{
        echo "<script> alert('UserName is already taken, Please choose different UserName');</script>";
        echo "<script>
                   window.location.href = 'http://localhost/hotzlapp/visit_profile.php?visitUser=".$_SESSION['user']."';
           </script>";
        $result3 = "";
        $result4 = "";
        $result5 = "";
      }
    }
  else{
    $result3 = "";
    $result4 = "";
    $result5 = "";
  }
  if(isset($result1) && isset($result2) && isset($result3) && isset($result4) && isset($result5))
  {
    $message = "Updated successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>
               window.location.href = '../visit_profile.php?visitUser=".$_SESSION['user']."';
       </script>";
  }

}
elseif (isset($_POST['submit-updateA'])) {
  require 'dbh.inc.php';
  require 'user_data_helper.inc.php';
  $connect = new PDO('mysql:host='.$servername.';dbname='.$dBname.'', $dBUname, $dBPassword);

  $username = $_POST['newNameA'];
  $fName = $_POST['fNameA'];
  $lName = $_POST['lNameA'];
  $email = $_POST['emailA'];;
  $link = $_POST['linkA'];
  $linkName = $_POST['linkNameA'];
  $permission = $_POST['permissionA'];

  $query = "
  UPDATE users SET fName=:fName, lName=:lName, email=:email, link=:link, linkName=:linkName ,permission=:permission WHERE username = :username
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':fName'  => $fName,
    ':lName'  => $lName,
    ':email'  => $email,
    ':link'  => $link,
    ':linkName'  => $linkName,
    ':permission'  => $permission,
    ':username'   => $username
   )
  );
  $result1 = $statement->fetchAll();
  $message = $username." updated successfully";
  echo "<script type='text/javascript'>alert('$message');</script>";
  echo "<script>
             window.location.href = '../visit_profile.php?visitUser=".$_SESSION['user']."';
     </script>";
  // header("Location: ../visit_profile.php?visitUser=admin");

}
elseif (isset($_GET['delete']) && $user == 'admin') {
    require 'dbh.inc.php';
    require 'user_data_helper.inc.php';
    $connect = new PDO('mysql:host='.$servername.';dbname='.$dBname.'', $dBUname, $dBPassword);
    $userToDelete = $_GET['delete'];
    $query = "Delete From users WHERE username = '".$userToDelete."'";
    $statement = $connect->prepare($query);
    $statement->execute();
    $message = "User : ".$userToDelete." deleted successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>
               window.location.href = '../visit_profile.php?visitUser=".$_SESSION['user']."';
       </script>";
}
else{
header("Location: ../index.php");
exit();
}
 ?>
