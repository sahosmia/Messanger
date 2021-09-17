<?php

session_start();
include_once('function.php');

$incoming = $_POST['incoming'];
$outgoing = $_POST['outgoing'];
$send_message = $_POST['send_message'];


$insert_query = "INSERT INTO inboxs (incoming, outgoing, meg) VALUES ('$incoming', '$outgoing', '$send_message')"; // query_query
$insert_db = mysqli_query(db(), $insert_query); // insert db

