<?php require('inc/header.php') ?>

<link rel="stylesheet" href="css/inner.css">

<section class="breadcrumbs" data-parallax="scroll" data-image-src="images/banner__2.jpg">
   <div class="container zIndex__1">
      <h2 class="text-uppercase">Reset Password</h2>
      <p>
         <a class="breadcrumb__links" href="index.php">Home</a> / <span class="breadcrumb__links">Reset Password</span>
      </p>
   </div>
</section>

<section class="inner__page">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-md-7">
            <div class="inner__content inner__white_space">
               <div class="contact-form-side">
                  <h2>Send Reset Password link</h2>
                  <form action="#">
                     <div>
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" required class="w-100" id="email">
                     </div>

                     <div class="d-md-flex justify-content-between">
                        <button>Send</button>
                        <div>
                           <a href="login.php" class="btn btn-link text__primary">Login</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require('inc/footer.php') ?>