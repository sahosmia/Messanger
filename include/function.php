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
