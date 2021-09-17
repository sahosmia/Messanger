<?php
session_start();
include_once('include/function.php');
include_once('include/header.php');
check();
$auth = $_SESSION['auth'];
?>

<body>
   <!-- box start  -->
   <div class="box1">
      <section class="front">

         <div class="search_bar">
            <input autofocus type="text" name="search_item" placeholder="type your user name">
            <a class="cross_btn" href="front.php"><i class="fas fa-times"></i></a>
         </div>





         <!-- user list content  -->
         <div class="user_list">
            <!-- all content get form ajax -->
         </div>



      </section>
   </div><!-- box div end -->

   <!-- main js  -->
   <!-- <script src="js/user.js"></script> -->
   <script src="js/search1.js"></script>
</body>

</html>