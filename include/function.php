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

// check for user or not 
function check()
{
  if (!isset($_SESSION['auth'])) {
    $_SESSION['deny_error'] = 'please sign in first';
    header("location:signin.php");
  }
}
