<?php


session_start();
include_once('function.php');

// get all input data
$username = $_POST['username']; //user name
$email = $_POST['email']; //email
$password = $_POST['password']; //password
$img = $_FILES['img']; //img

$img_name = $img['name'];  // img name
$tmp_name = $img['tmp_name'];  //tempory location

// img_name explode for get img extention
$img_explode = explode('.', $img_name);  // explod this name by '.'
$img_ext = end($img_explode);  //get last index form img name   output (extention)
$time = time();  // get current time
$rand = rand(100, 1000); //random number
$new_img_name = $time . $rand . "." . $img_ext;  //new img name

$encrypt_password = md5($password); // password encrypt
move_uploaded_file($tmp_name, "../img/" . $new_img_name); //move image file  on img folder

$insert_query = "INSERT INTO users (name, email, password, img) VALUES ('$username', '$email', '$encrypt_password', '$new_img_name')"; // query_query
$insert_db = mysqli_query(db(), $insert_query); // insert db
if ($insert_db == true) {

   $select_query = "SELECT * FROM users WHERE email = '$email'";  // select query for get all data in session
   $get_auth = mysqli_query(db(), $select_query);
   $get_query_assoc = mysqli_fetch_assoc($get_auth);
   $_SESSION['auth'] = $get_query_assoc;
   echo 'success';
}
