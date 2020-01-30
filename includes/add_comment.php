
<?php
require 'dbh.inc.php';
$connect = new PDO('mysql:host='.$servername.';dbname='.$dBname.'', $dBUname, $dBPassword);
//$connect = new PDO('mysql:host=localhost;dbname=wisely-hotzlapp', 'root', '');

$error = '';
$comment_name = '';
$comment_content = '';
$page='';

if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">You must log in in order to write a comment or reply</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}
///
if(empty($_POST["page"]))
{
 $error .= '<p class="text-danger">page is not passed</p>';
}
else
{
 $page = $_POST["page"];
}
///
if($error == '')
{
 $query = "
 INSERT INTO tbl_comment
 (parent_comment_id, comment, comment_sender_name, page)
 VALUES (:parent_comment_id, :comment, :comment_sender_name, :page)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name,
   ':page' => $page
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
// }



/***************send email to the user*********************/
        if($_POST["comment_id"] != 0 ){

            // need to know the parent comment user
            $parentUser ='err1';
            $query = "SELECT comment_sender_name FROM tbl_comment WHERE comment_id = '".$_POST["comment_id"]."' ;";
            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            $total_row = $statement->rowCount();
            if($total_row > 0)
            {
                foreach($result as $row)
                {
                $parentUser = $row["comment_sender_name"];
                }
            }
             //check if the current replier and the commenter is not the same user
             if($comment_name != $parentUser){
                 //get the parent user email
                $parentUserEmail ='err2';
                $query = "SELECT email FROM users WHERE username = '".$parentUser."' ";
                $statement = $connect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                $total_row = $statement->rowCount();
                if($total_row > 0)
                {
                    foreach($result as $row)
                    {
                    $parentUserEmail = $row["email"];
                    }
                }
                /*********debug**********/
                //$error = '<label class="text-success">'.$comment_name.':'.$parentUser.':'.$parentUserEmail.'</label>';
                /************************/
                date_default_timezone_set('Etc/UTC');

                // Edit this path if PHPMailer is in a different location.
                require '../PHPMailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;
                $mail->isSMTP();

                /*
                * Server Configuration
                */

                $mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
                $mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
                $mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
                $mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
                $mail->Username = "wizelyhotzlapp@gmail.com"; // Your Gmail address.
                $mail->Password = "asd42342fds2SF@@fds"; // Your Gmail login password or App Specific Password.

                /*
                * Message Configuration
                */



                $mail->setFrom('wizelyhotzlapp@gmail.com', 'Wisely: No-Reply'); // Set the sender of the message.
                $mail->addAddress($parentUserEmail); // Set the recipient of the message.
                $mail->Subject = 'Your post has been replied'; // The subject of the message.

                /*
                * Message Content - Choose simple text or HTML email
                */

                // Choose to send either a simple text email...
                $mail->Body = 'Your post #'.$_POST["comment_id"].' has been replied by '.$comment_name.''; // Set a plain text body.

                // ... or send an email with HTML.
                //$mail->msgHTML(file_get_contents('contents.html'));
                // Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
                //$mail->AltBody = 'This is a plain-text message body';

                // Optional: attach a file
                // $mail->addAttachment('images/phpmailer_mini.png');

                if ($mail->send()) {
                    //echo "Your message was sent successfully!";
                } else {
                // echo "Mailer Error: " . $mail->ErrorInfo;
                }
             }
        }

    }
/************************************/
$data = array(
 'error'  => $error
);
echo json_encode($data);

?>
