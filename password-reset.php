<?php require('inc/header.php') ?>

<link rel="stylesheet" href="css/inner.css">

<section class="breadcrumbs" data-parallax="scroll" data-image-src="images/banner__2.jpg">
   <div class="container zIndex__1">
      <h2 class="text-uppercase">Password Reset</h2>
      <p>
         <a class="breadcrumb__links" href="index.php">Home</a> / <span class="breadcrumb__links">Password Reset</span>
      </p>
   </div>
</section>

<section class="inner__page">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-md-7">
            <div class="inner__content inner__white_space">
               <div class="contact-form-side">
                  <h2>Reset Password</h2>
                  <form action="#">
                     <div>
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" required class="w-100" id="email">
                     </div>

                     <div>
                        <label for="password">Password <span class="text-danger">*</span></label>
                        <div class="d-flex">
                           <input type="password" name="password" required class="w-100" id="password">
                           <i class="fa fa-eye show__eye"></i>
                        </div>
                     </div>
                     <div>
                        <label for="password_confirmation">Re-Password <span class="text-danger">*</span></label>
                        <div class="d-flex">
                           <input type="password" name="password" required class="w-100" id="password_confirmation">
                           <i class="fa fa-eye show__eye2"></i>
                        </div>
                     </div>

                     <div class="d-md-flex justify-content-between">
                        <button class="btn-block">Reset</button>

                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require('inc/footer.php') ?>