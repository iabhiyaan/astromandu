<?php require('inc/header.php') ?>

<link rel="stylesheet" href="css/inner.css">

<section class="breadcrumbs" data-parallax="scroll" data-image-src="images/banner__2.jpg">
   <div class="container zIndex__1">
      <h2 class="text-uppercase">Puja & Havan </h2>
      <p>
         <a class="breadcrumb__links" href="index.php">Home</a> / <a class="breadcrumb__links" href="services.php">Services</a> / <span class="breadcrumb__links">Puja & Havan </span>
      </p>
   </div>
</section>

<section class="inner__page">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 mb-4">
            <div class="inner__content inner__white_space">
               <div class="inner__content_top">
                  <img src="images/banner__1.jpg" alt="consultation">
               </div>

               <div class="inner__content_body">
                  <h2 class="blog__title">Puja & Havan</h2>
                  <div class="row">
                     <div class="col-lg-6">
                        <div>
                           <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam dicta quae quia nisi similique velit inventore natus voluptates minima delectus.
                           </p>
                           <p>
                              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit vitae atque, voluptatibus iste quisquam animi nulla commodi qui voluptas repellendus nam vel, unde necessitatibus beatae quo ratione. Incidunt sequi quidem omnis expedita porro excepturi alias voluptate. Nobis quae delectus nihil.
                           </p>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <!-- service modal starts -->
                        <section class="appointment border-1 border__primary--300 border__solid">
                           <div class="head">
                              <h2 class="text-white modal__title">Graha Jap # Puja # Rituals</h2>
                           </div>
                           <div class="content">
                              <form action="#" method="POST">
                                 <input type="hidden" name="graha_jap">
                                 <div class="form-row">
                                    <div class="col-12">
                                       <p class="text__tertiary py-1 font-sm m-0">Date of Birth</p>
                                       <div class="row">
                                          <div class="col-md-4">
                                             <select name="day">
                                                <option value>Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4">
                                             <select name="month">
                                                <option value>Month</option>
                                                <option value="january">January</option>
                                                <option value="february">February</option>
                                                <option value="march">March</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4">
                                             <select name="year">
                                                <option value>Year</option>
                                                <option value="1993">1993</option>
                                                <option value="1994">1994</option>
                                                <option value="1995">1995</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <p class="text__tertiary py-1 font-sm m-0">Time of Birth</p>
                                       <div class="row">
                                          <div class="col-md-4">
                                             <input type="text" name="hour" placeholder="Hour">
                                          </div>
                                          <div class="col-md-4">
                                             <input type="text" name="minute" placeholder="Minute">
                                          </div>
                                          <div class="col-md-4">
                                             <input type="text" name="second" placeholder="Second">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <p class="text__tertiary py-1 font-sm m-0">Place of Birth</p>
                                       <div class="row">
                                          <div class="col-md-4">
                                             <select name="country" id="country">
                                                <option value="nepal">Nepal</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4">
                                             <input type="text" placeholder="Province" name="province">
                                          </div>
                                          <div class="col-md-4">
                                             <input type="text" placeholder="City" name="city">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <p class="text__tertiary py-1 font-sm m-0">Personal Detail</p>
                                    </div>
                                    <div class="col-md-6">
                                       <input type="text" placeholder="Full Name" name="fullname">
                                    </div>
                                    <div class="col-md-6">
                                       <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                    <div class="col-md-12">
                                       <select name="gender">
                                          <option value>Gender</option>
                                          <option value="1">Male</option>
                                          <option value="0">Female</option>
                                          <option value="11">Others</option>
                                       </select>
                                    </div>
                                    <div class="col-12">
                                       <input type="text" id="appointment_contact_number" placeholder="Contact number" name="contact_number">
                                    </div>
                                    <div class="col-12">
                                       <textarea name="message" cols="30" rows="10" placeholder="Message..."></textarea>
                                    </div>
                                    <div class="col-12">
                                       <p class="text__tertiary py-1 font-sm m-0">Please select number of priest you want for service</p>
                                       <div class="whole-cart-wrapp ">
                                          <div class="cart_list">
                                             <div class="qty-wrapper">
                                                <span class="minus service__minus">-</span>
                                                <input type="text" name="priest__quantity" class="qty-input m-0" value="1" readonly="">
                                                <span class="plus service__plus">+</span>
                                             </div>
                                          </div>
                                          <span class="text__tertiary py-1 m-0 font__normal service__cost">$250</span>
                                       </div>
                                    </div>
                                    <div class="col-12 text-right py-3">
                                       <button data-service-id="1" data-priest="1" class="payment__button service__payment">Proceed to checkout</button>
                                    </div>

                                 </div>

                              </form>
                           </div>
                        </section>
                        <!--  service modal ends -->
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>

<?php require('inc/footer.php') ?>