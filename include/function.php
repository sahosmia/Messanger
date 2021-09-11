<?php
define("server", "localhost");
define("username", "root");
define("password", "");
define("database", "message");
function db()
{
   $db_connect = mysqli_connect(server, username, password, database);
   return $db_connect;
}


function check(){
  if (!isset($_SESSION['auth'])) {
    $_SESSION['deny_error'] = 'please sign in first' .$_SESSION['log_chack'];
    header("location:signin.php");
  }
}
