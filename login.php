<?php require('inc/header.php') ?>

<link rel="stylesheet" href="css/inner.css">

<section class="breadcrumbs" data-parallax="scroll" data-image-src="images/banner__2.jpg">
   <div class="container zIndex__1">
      <h2 class="text-uppercase">Login</h2>
      <p>
         <a class="breadcrumb__links" href="index.php">Home</a> / <span class="breadcrumb__links">Login</span>
      </p>
   </div>
</section>

<section class="inner__page">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-lg-6">
            <div class="inner__content inner__white_space">
               <div class="contact-form-side">
                  <h2>Astrologer login</h2>
                  <form action="#">
                     <div>
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" required class="w-100" id="email">
                     </div>

                     <div>
                        <label for="password">Password <span class="text-danger">*</span></label>
                        <div class="d-flex">
                           <input type="password" name="password" required class="w-100 show__password" id="password">
                           <i class="fa fa-eye show__eye"></i>
                        </div>
                     </div>

                     <div>
                        <button class="btn-block">Login</button>
                        <div class="text-center">
                           <a href="email-reset.php" class="btn btn-link text__primary">Can't login ?</a>
                           <span class="text__primary d-none d-sm-inline-block"> <strong> . </strong></span>
                           <a href="register.php" class="btn btn-link text__primary">Sign up for an account</a>
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