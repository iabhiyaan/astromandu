<?php require('inc/header.php') ?>

<link rel="stylesheet" href="css/inner.css">

<section class="breadcrumbs" data-parallax="scroll" data-image-src="images/banner__2.jpg">
   <div class="container zIndex__1">
      <h2 class="text-uppercase">Contact Us</h2>
      <p>
         <a class="breadcrumb__links" href="index.php">Home</a> / <span class="breadcrumb__links">Contact Us</span>
      </p>
   </div>
</section>

<section class="inner__page">
   <div class="container">
      <div class="inner__content inner__white_space">
         <div class="row">
            <div class="col-lg-6 mb-4">
               <div class="contact-form-side">
                  <h2>Send Us Message</h2>
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
                        <label for="phone">Phone <span class="text-danger">*</span></label>
                        <input type="text" name="phone" required class="w-100" id="phone">
                     </div>

                     <div>
                        <label for="subject">Subject <span class="text-danger">*</span></label>
                        <input type="text" name="subject" required class="w-100" id="subject">
                     </div>
                     <div>
                        <label for="message">Message</label>
                        <textarea name="message" class="w-100" id="message" cols="30" rows="10"></textarea>
                     </div>

                     <button class="btn-block">Send Message</button>

                  </form>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="contact-address-side">
                  <h2>Contact Us</h2>
                  <ul>
                     <li><i class="fa fa-map-marker" aria-hidden="true"></i>Kapan,Kathmandu</li>
                     <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i>9841749906</li>
                     <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">webdramesh@gmail.com</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="map-section">
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d56504.333942198624!2d85.294235!3d27.732076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18c24695e0f5%3A0x1cb2955d3bd1fc15!2sBalaju%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1582538410095!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<?php require('inc/footer.php') ?>