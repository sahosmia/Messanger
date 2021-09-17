<?php
session_start();
include_once('include/function.php');
include_once('include/header.php');
$guest_id = $_GET['id'];

$select = "SELECT * FROM users WHERE id = $guest_id";
$select_db = mysqli_query(db(), $select);
$guest = mysqli_fetch_assoc($select_db);
$auth = $_SESSION['auth'];
?>

<body>
   <!-- box start  -->
   <div class="box1">
      <section class="chat">
         <div class="header">
            <div class="front_name">
               <a href="front.php"> <i class="fas fa-angle-left"></i></a>
               <img src="img/<?= $guest['img'] ?>" alt="">
               <div class="active_status">
                  <h4><?= $guest['name'] ?></h4>
                  <p><?= $guest['active'] == 1 ? 'Active Now' : "Unactive Now" ?></p>
               </div>
            </div>
         </div>


         <div class="text_content">




         </div>



         <div class="send_input">
            <form id="send_form" method="post">
               <input class="incoming" type="hidden" name="incoming" value="<?= $guest['id'] ?>">
               <input type="hidden" name="outgoing" value="<?= $auth['id'] ?>">
               <input class="send_message" autocomplete="off" type="text" name="send_message" placeholder="Type New Message...">
               <button type="submit" class="send_btn"><i class="fas fa-location-arrow"></i></button>
            </form>
         </div>


      </section>
   </div><!-- box div end -->

   <!-- main js  -->
   <script src="js/chat.js"></script>
</body>

</html>