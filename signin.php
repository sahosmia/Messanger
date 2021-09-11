<?php
include_once('include/header.php');
?>
<section class="signup">
   <div class="header title">Sign In</div>
   <div class="main_form">
      <form action="">

         <!-- email address   -->
         <div class="item">
            <label>Email Address</label>
            <input type="text" name="email1" placeholder="Email Address">
            <!-- <small>plese give your name</small> -->
         </div>

         <!-- password  -->
         <div class="item">
            <label>Password</label>
            <input type="password1" name="password" placeholder="Password">
            <!-- <small>plese give your name</small> -->
         </div>

         <!-- submit button  -->
         <button class="btn" type="submit">Submit</button>

      </form>
   </div>

   <!-- text start   text for sing iup link  -->
   <div class="text">
      <p>Have no acount? <a href="index.php">Sign Up</a> Now</p>
   </div>
   <?php
   include_once('include/footer.php');
   ?>