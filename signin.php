<?php
session_start();
include_once('include/header.php');
?>
<section class="signup">
  <?php
  if(isset($_SESSION['deny_error'])):
?>
  <div class="errormessage">
      <p><?=$_SESSION['deny_error']?></p>
  </div>
<?php
unset($_SESSION['deny_error']);
endif;
 ?>
   <div class="header title">Sign In</div>
   <div class="main_form">
      <form id="signin_form" method="post">

         <!-- email address   -->
         <div class="item">
            <label>Email Address</label>
            <input id="email_form" type="text" name="email" placeholder="Email Address">
            <small></small>
         </div>

         <!-- password  -->
         <div class="item">
            <label>Password</label>
            <input id="password_form" type="password" name="password" placeholder="Password">
            <small></small>
         </div>

         <!-- submit button  -->
         <button class="btn" type="submit">Submit</button>

      </form>
   </div>

   <!-- text start   text for sing iup link  -->
   <div class="text">
      <p>Have no acount? <a href="index.php">Sign Up</a> Now</p>
   </div>
 </section>
 </div><!-- box div end -->

 <!-- main js  -->
 <script src="js/signin.js"></script>
 </body>

 </html>
