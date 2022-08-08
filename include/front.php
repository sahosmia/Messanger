<?php
session_start();
include_once('function.php');
// $output = ""; // output define
$auth_id = $_SESSION['auth']['id']; //get id form session 

$select = "SELECT * FROM users WHERE NOT id = $auth_id ORDER BY id DESC"; //all user_name show
$user_data_db = mysqli_query(db(), $select);  // all user get form db
$count_user = mysqli_num_rows($user_data_db); // count user without auth
$user_data = mysqli_fetch_assoc($user_data_db);
while ($data = mysqli_fetch_assoc($user_data_db)) {

   $data_id = $data['id'];
   $sql2 = "SELECT * FROM inboxs WHERE (incoming = $data_id
                OR outgoing = $data_id) AND (outgoing = $auth_id 
                OR incoming = $auth_id) ORDER BY meg_id DESC LIMIT 1";
   $query2 = mysqli_query(db(), $sql2);
   $row2 = mysqli_fetch_assoc($query2);


   if (mysqli_num_rows($query2) > 0) {

      if (strlen($row2['meg']) > 28) {
         $last_message = substr($row2['meg'], 0, 28) . '...';
      } else {
         $last_message = $row2['meg'];
      }
   } else {
      $last_message = "No message available";
   }
   if (isset($row2['outgoing'])) {
      ($auth_id == $row2['outgoing']) ? $you = "You: " : $you = "";
   } else {
      $you = "";
   }

   $active = $data['active'] == 1 ? '' : 'unactive'; // user active or unactive now for add class unactive
   echo '<a href="chat.php?id=' . $data['id'] . '" class="user_item">
               <img src="img/' . $data['img'] . '" alt="">
               <div class="active_status">
                  <h4>' . $data['name'] . '</h4>
                  <p>' . $you . $last_message . '</p>
               </div>
               <div class="status_dot ' . $active . ' ">
                  <i class="fas fa-circle"></i>
               </div>
            </a>';
}
