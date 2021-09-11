<?php
include_once('include/header.php');
?>
<section class="signup">
   <div class="header title">Sign Up</div>
   <div class="main_form">
      <form id="form" enctype="multipart/form-data" method="post" action="include/signup.php">

         <div class="item">
            <label>User Name</label>
            <input id="username" type="text" name="username" placeholder="User Name">
            <small></small>
         </div>
         <div class="item">
            <label>Email Address</label>
            <input id="email" type="text" name="email" placeholder="Email Address">
            <small></small>
         </div>

         <div class="item">
            <label>Password</label>
            <input id="password" type="password1" name="password" placeholder="Password">
            <small></small>
         </div>

         <div class="item">
            <label>Confirmation Password</label>
            <input id="cpassword" type="password1" name="cpassword" placeholder="Confirmation Password">
            <small></small>
         </div>

         <div class="item">
            <label>Select your Image</label>
            <input id="img" type="file" name="img" >
            <small></small>
         </div>

         <button class="btn" type="submit">Submit</button>
      </form>
   </div>
   <div class="text">
      <p>Have a acount? <a href="signin.php">Sign In</a> Now</p>
   </div>
   <?php
   include_once('include/footer.php');
   ?>
