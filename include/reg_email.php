<?php
include_once('function.php');
$email = $_POST['email'];

  $email_query = "SELECT COUNT(*) AS count FROM users WHERE email = '$email'";   //chack email is resgisted or not query
   $email_form_db = mysqli_query(db(), $email_query);
   $email_assoc = mysqli_fetch_assoc($email_form_db);
   if ($email_assoc['count'] == 0) {                       // email not exist
     echo 'success';
   }
   else {
     echo "*This email is alrady exist";
   }
 ?>
