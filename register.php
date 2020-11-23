<?php require('inc/header.php') ?>

<link rel="stylesheet" href="css/inner.css">

<section class="breadcrumbs" data-parallax="scroll" data-image-src="images/banner__2.jpg">
   <div class="container zIndex__1">
      <h2 class="text-uppercase">Register</h2>
      <p>
         <a class="breadcrumb__links" href="index.php">Home</a> / <span class="breadcrumb__links">Register</span>
      </p>
   </div>
</section>

<section class="inner__page">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-md-7">
            <div class="inner__content inner__white_space">
               <div class="contact-form-side">
                  <h2>Register an account as astrologer</h2>
                  <form action="#">
                     <div>
                        <label for="fullname">Full name <span class="text-danger">*</span></label>
                        <input type="text" name="fullname" required class="w-100" id="fullname">
                     </div>
                     <div>
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" required class="w-100" id="email">
                     </div>
                     <div>
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="w-100">
                           <option value="1">Male</option>
                           <option value="0">Female</option>
                           <option value="11">Others</option>
                        </select>
                     </div>
                     <div>
                        <label for="password">Password <span class="text-danger">*</span></label>
                        <div class="d-flex">
                           <input type="password" name="password" required class="w-100 show__password" id="password">
                           <i class="fa fa-eye show__eye"></i>
                        </div>
                     </div>
                     <div>
                        <label for="password_confirmation">Re-Password <span class="text-danger">*</span></label>
                        <div class="d-flex">
                           <input type="password" name="password" required class="w-100 show__password" id="password_confirmation">
                           <i class="fa fa-eye show__eye"></i>
                        </div>
                     </div>
                     <div class="form-check form-group">
                        <input type="checkbox" class="form-check-input" id="terms_condition">
                        <label class="form-check-label" for="terms_condition">I accept terms and condition</label>
                     </div>

                     <button class="btn-block">Register</button>
                     <div class="text-center">
                        <a href="login.php" class="btn btn-link text__primary">Already have an account ? Log in</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require('inc/footer.php') ?>