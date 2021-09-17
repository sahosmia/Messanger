<?php
include_once('include/header.php');
?>

<body>
   <!-- box start  -->
   <div class="box">
      <section class="signup">
         <div class="header title">Sign Up</div>
         <div class="main_form">
            <form id="form" enctype="multipart/form-data" method="post">

               <!-- username  -->
               <div class="item">
                  <input id="username" type="text" name="username" placeholder="User Name">
                  <small></small>
               </div>

               <!-- email  -->
               <div class="item">
                  <input id="email" type="text" name="email" placeholder="Email Address">
                  <small></small>
               </div>

               <!-- password  -->
               <div class="item">
                  <input id="password" type="password" name="password" placeholder="Password">
                  <small></small>
               </div>

               <!-- cpassword  -->
               <div class="item">
                  <input id="cpassword" type="password" name="cpassword" placeholder="Confirmation Password">
                  <small></small>
               </div>

               <!-- image  -->
               <div class="item">
                  <input id="img" type="file" name="img">
                  <small></small>
               </div>

               <!-- submit btn  -->
               <button class="btn" type="submit">Submit</button>
            </form>
         </div> <!-- main form  -->

         <!-- footer text  -->
         <div class="text">
            <p>Have a acount? <a href="signin.php">Sign In</a> Now</p>
         </div>
      </section>
   </div><!-- box div end -->

   <!-- main js  -->
   <script src="js/app.js"></script>
</body>

</html>