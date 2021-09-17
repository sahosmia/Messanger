<?php
session_start();
include_once('function.php');
$id = $_GET['id'];
$update_query = "UPDATE users SET active = 2 WHERE id = $id";
$update = mysqli_query(db(), $update_query);
unset($_SESSION['auth']);
header("location:../signin.php");
