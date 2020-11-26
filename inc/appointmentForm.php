<!-- appointment modal starts -->
<section class="appointment">
   <div class="modal-wrapper astrologer_book_form">
      <div class="modal">
         <div class="head">
            <h2 class="text-white modal__title">Request an appointment</h2>
            <a class="btn-close book__modal_trigger text-white" href="javascript:;">
               <i class="fa fa-times"></i>
            </a>
         </div>
         <div class="content">
            <form action="#" method="POST">
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
                  <div class="col-md-12">
                     <label for="country" class="text__tertiary py-1 font-sm m-0">Place of birth</label>
                     <select name="country" id="country">
                        <option value="nepal">Nepal</option>
                     </select>
                  </div>
                  <div class="col-md-6">
                     <input type="text" placeholder="Province" name="province">
                  </div>
                  <div class="col-md-6">
                     <input type="text" placeholder="City" name="city">
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
                     <p class="text__tertiary py-1 font-sm m-0">Choosed Astrologer</p>
                     <select name="selected_astrologer">
                        <option value="1">Ramesh Dhakal</option>
                     </select>
                  </div>
                  <div class="col-12">
                     <p class="text__tertiary py-1 font-sm m-0">Choose Service</p>
                     <select name="service">
                        <option value>--Select Service--</option>
                        <option value="1">Annual update</option>
                        <option value="1">Compatibility</option>
                        <option value="1">Muhurta</option>
                        <option value="1">Business</option>
                        <option value="1">Full life analysis</option>
                        <option value="1">Buy a gift</option>
                     </select>
                  </div>

                  <div class="col-12">
                     <textarea name="message" cols="30" rows="10" placeholder="Please send the list of questions to make your reading more useful."></textarea>
                  </div>
                  <div class="col-md-12">
                     <label class="text__tertiary py-1 font-sm m-0">Payment</label>
                     <select name="payment" class="payment__wallet">
                        <option value>--Select Payment--</option>
                        <option value="digital-wallet">Digital Wallet</option>
                        <option value="home-office">Home/Office Visit</option>
                        <option value="remit">Remit</option>
                     </select>
                  </div>
                  <div class="col-12">
                     <p class="text__tertiary py-1 font-sm m-0">
                        Please select number of minutes
                     </p>
                     <div class="whole-cart-wrapp">
                        <div class="cart_list">
                           <div class="qty-wrapper">
                              <span class="minus astro__minus">-</span>
                              <input type="text" name="minutes__quantity" class="qty-input m-0" value="30" readonly="">
                              <span class="plus astro__plus">+</span>
                           </div>
                        </div>
                        <span class="text__tertiary py-1 m-0 font__normal priest__cost">$300</span>
                     </div>
                  </div>
                  <div class="col-12 text-right">
                     <button disabled class="payment__button">Proceed to checkout</button>
                  </div>

               </div>

            </form>
         </div>
      </div>
   </div>
</section>
<!--  appointment modal ends -->