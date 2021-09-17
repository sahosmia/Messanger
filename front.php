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

         <!-- header start  -->
         <div class="header">
            <div class="front_name">
               <img src="img/<?= $auth['img'] ?>" alt=""> <!-- user image  -->
               <div class="active_status">
                  <h4><?= $auth['name'] ?></h4> <!-- user name  -->
                  <p>Active now</p>
                  <!-- <p><?= $auth['active'] == 1 ? 'Active Now' : 'Unactive' ?></p> user active status -->
               </div>
            </div>
            <!-- logout btn  -->
            <div class="right">
               <a href="search.php" class="search_btn"><i class="fas fa-search"></i></a>
               <a href="include/logout.php?id=<?= $auth['id'] ?>" class="logut_btn">Log Out</a>
            </div>
         </div>
         <!-- end header  -->





         <!-- user list content  -->
         <div class="user_list">
            <!-- all content get form ajax -->
         </div>



      </section>
   </div><!-- box div end -->

   <!-- main js  -->
   <!-- <script src="js/user.js"></script> -->
   <script src="js/front.js"></script>
</body>

</html>