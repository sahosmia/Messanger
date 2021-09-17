<?php
session_start();
// include_once('function.php');
$outgoing = $_SESSION['auth']['id'];
$incoming = $_POST['incoming'];
$db = mysqli_connect("localhost", "root", "", "message");
$output = "";
$sql = "SELECT * FROM inboxs LEFT JOIN users ON users.id = inboxs.outgoing
                WHERE (outgoing = {$outgoing} AND incoming = {$incoming})
                OR (outgoing = {$incoming} AND incoming = {$outgoing}) ORDER BY meg_id";
$query = mysqli_query($db, $sql);
if (mysqli_num_rows($query) > 0) {
   while ($row = mysqli_fetch_assoc($query)) {
      if ($row['outgoing'] === $outgoing) {
         $output .= '<div class="chat_message outgoing">
                                <div class="message">
                                    <p>' . $row['meg'] . '</p>
                                </div>
                                </div>';
      } else {
         $output .= '<div class="chat_message incoming">
                                <img src="img/' . $row['img'] . '" alt="">
                                <div class="message">
                                    <p>' . $row['meg'] . '</p>
                                </div>
                                </div>';
      }
   }
   // echo 'hi';
} else {
   $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
}
echo $output;

// // echo mysqli_num_rows($query);
// $get_query_assoc = mysqli_fetch_assoc($query);
// print_r($get_query_assoc);
