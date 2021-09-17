<?php
session_start();
include_once('function.php');
$email = $_POST['email'];
$password = $_POST['password'];

$email_query = "SELECT COUNT(*) AS count FROM users WHERE email = '$email'";   //chack email is resgisted or not query
$email_form_db = mysqli_query(db(), $email_query);
$email_assoc = mysqli_fetch_assoc($email_form_db);

// check email is exists or not    1 == yes    0 == no
if ($email_assoc['count'] == 1) {                  // email exist

  $after_encript_password = md5($password);  //password convert to encript password
  $password_query = "SELECT COUNT(*) AS count FROM users WHERE email = '$email' AND password = '$after_encript_password'";  // query for password === email
  $password_form_db = mysqli_query(db(), $password_query);   // check from db
  $password_assoc = mysqli_fetch_assoc($password_form_db);  // after assoc


  // check email === password    1 == match    0 == dont match
  if ($password_assoc['count'] == 1) {
    $select_query =  "SELECT * FROM users WHERE email = '$email'"; //query for get this email all data
    $db_mysqli_query = mysqli_query(db(), $select_query);  // apply this query on db
    $select_assoc = mysqli_fetch_assoc($db_mysqli_query); // after assoc

    // update active col for active now show
    $update_query = "UPDATE users SET active = 1 WHERE email = '$email'";
    mysqli_query(db(), $update_query);


    $_SESSION['auth'] = $select_assoc;  //get auth user all data (id,name,email,active) and check login != true
    echo 'success';
  } else {
    echo "*Your password is wrong";
  }
} else {
  echo "*This email is alrady does not exists";
}
