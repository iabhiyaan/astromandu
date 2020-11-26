<?php include('inc/header.php'); ?>
<link rel="stylesheet" href="css/inner.css">

<section class="donate__page" style="background-image: url('images/banner__2.jpg')">
   <div class="container">
      <div class="row justify-content-center justify-content-lg-end mr-lg-5 align-items-center">
         <div class="col-md-6">
            <div class="inner__content inner__white_space d-none show_donation__description">
               <div>
                  <p>
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint quisquam eligendi autem totam a facere, vero minus rerum numquam itaque?
                     <br>
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore ex laboriosam, excepturi ab eius odio voluptates sequi ad voluptatum voluptate neque illum placeat quod, nisi quidem, saepe vero iure quas quis eveniet. Ullam porro, voluptatem quis doloribus sit accusantium quo.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-6 text-center p-0 mt-3 mb-2">
            <h3 class="donate__form__title">Donate Today दानपत्र</h3>
            <div class="inner__content inner__white_space">
               <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                  <h2 id="heading" class="py-3">donate us</h2>
                  <p class="text-center">Decrease the negative effects from planets</p>
                  <form method="post" id="msform" accept-charset="UTF-8" action="#" name="paymentForm" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_live_gtX3TSx265nZG67RCqPMCJ9r">
                     <!-- progressbar -->
                     <ul id="progressbar">
                        <li class="active" id="account">Amount</li>
                        <li id="personal">Personal</li>
                        <li id="payment">Payment</li>
                     </ul>
                     <!-- amount section starts -->
                     <fieldset>
                        <div class="form-card">
                           <div class="form-row">
                              <div class="col-7">
                                 <h2 class="fs-title">Amount :</h2>
                              </div>
                              <div class="col-5">
                                 <h2 class="steps">Step 1 - 3</h2>
                              </div>
                              <div class="form-group col-4 col-lg-3">
                                 <div class="total select_amount">
                                    <span class="display_front">$20</span>
                                    <input type="checkbox" class=" amount" value="20" name="amount[]">
                                 </div>
                              </div>
                              <div class="form-group col-4 col-lg-3">
                                 <div class="total select_amount">
                                    <span class="display_front">$35</span>
                                    <input type="checkbox" class=" amount" value="35" name="amount[]">
                                 </div>
                              </div>
                              <div class="form-group col-4 col-lg-3">
                                 <div class="total select_amount">
                                    <span class="display_front">$42</span>
                                    <input type="checkbox" class=" amount" value="42" name="amount[]">
                                 </div>
                              </div>
                              <div class="form-group col-4 col-lg-3">
                                 <div class="total select_amount">
                                    <span class="display_front">$55</span>
                                    <input type="checkbox" class=" amount" value="55" name="amount[]">
                                 </div>
                              </div>
                              <div class="form-group col-4 col-lg-3">
                                 <div class="total select_amount">
                                    <span class="display_front">$62</span>
                                    <input type="checkbox" class=" amount" value="62" name="amount[]">
                                 </div>
                              </div>
                              <div class="form-group col-4 col-lg-3">
                                 <div class="total select_amount">
                                    <span class="display_front">$100</span>
                                    <input type="checkbox" class=" amount" value="100" name="amount[]">
                                 </div>
                              </div>
                              <div class="form-group col-4 col-lg-3">
                                 <div class="total select_amount">
                                    <span class="display_front">$200</span>
                                    <input type="checkbox" class=" amount" value="200" name="amount[]">
                                 </div>
                              </div>
                              <div class="form-group col-4 col-lg-3">
                                 <div class="total select_amount">
                                    <span class="display_front">$300</span>
                                    <input type="checkbox" class=" amount" value="300" name="amount[]">
                                 </div>
                              </div>
                              <div class="form-group col-4 col-lg-3">
                                 <div class="total select_amount other__amount">
                                    <input type="text" class=" amount form-control" placeholder="Other" name="amount[]">
                                 </div>
                              </div>
                              <div class="form-check col-12">
                                 <div class="row pl-2">
                                    <input id="general__donation" class="col-1 radio--sm donation_for" type="radio" name="donation_for" value="general-donation">
                                    <label for="general__donation" class="col-11 px-0 font__sm">
                                       General Donation
                                    </label>
                                 </div>
                              </div>
                              <div class="form-check col-12">
                                 <div class="row pl-2">
                                    <input id="planetary__donation" class="col-1 radio--sm donation_for" type="radio" name="donation_for" value="planetary-donation">
                                    <label for="planetary__donation" class="col-11 px-0 font__sm">
                                       Planetary Donation
                                    </label>
                                 </div>
                              </div>

                           </div>
                        </div>
                        <span class="next action-button">Next <i class="fa fa-arrow-right"></i></span>
                     </fieldset>
                     <!-- amount section ends -->

                     <!-- personal detail section starts -->
                     <fieldset>
                        <div class="form-card">
                           <div class="row">
                              <div class="col-7">
                                 <h2 class="fs-title">Personal Information:</h2>
                              </div>
                              <div class="col-5">
                                 <h2 class="steps">Step 2 - 3</h2>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="fieldlabels">first name: <span class="text-danger">*</span></label>
                                 <input type="text" name="first_name" />
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="fieldlabels">last name: <span class="text-danger">*</span></label>
                                 <input type="text" name="last_name" />
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="fieldlabels">address: <span class="text-danger">*</span></label>
                                 <input type="text" name="address" />
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="fieldlabels">city: <span class="text-danger">*</span></label>
                                 <input type="text" name="city" />
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="fieldlabels">province/territory: <span class="text-danger">*</span></label>
                                 <select name="province" class="form-control">
                                    <option value>--Province/Territory--</option>
                                    <option value="kathmandu">Kathmandu</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="fieldlabels">postal code: <span class="text-danger">*</span></label>
                                 <input type="text" name="postal_code" />
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="fieldlabels">Email: <span class="text-danger">*</span></label>
                                 <input type="email" name="email" />
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="fieldlabels">phone number: <span class="text-danger">*</span></label>
                                 <input type="text" name="phone_number" />
                              </div>
                              <div class="form-check col-12">
                                 <div class="row">
                                    <input type="checkbox" name="confirm" class="col-1">
                                    <label class="col-11 px-0 font__sm">I confirm that I am citizen or permanent resident of Canada making this donation with my personal funds and not business or corporate funds. No person or entity will reimburse me.</label>
                                 </div>

                              </div>
                           </div>
                        </div>
                        <span class="next action-button">Next <i class="fa fa-arrow-right"></i></span>
                        <span class="previous action-button-previous"><i class="fa fa-arrow-left"></i> Previous</span>
                     </fieldset>
                     <!-- personal detail section ends -->

                     <!-- payment section starts -->
                     <fieldset>
                        <div class="form-card">
                           <div class="row">
                              <div class="col-7">
                                 <h2 class="fs-title">Payment:</h2>
                              </div>
                              <div class="col-5">
                                 <h2 class="steps">Step 3 - 3</h2>
                              </div>
                              <div class="form-group payment__top col-12">
                                 <span class="fieldlabels">Amount: <span class="text__primary donated__amount"></span> </span>
                                 <p class="text__primary text-uppercase">Donate faster</p>
                                 <a href="#" class="btn text-capitalize bg__primary border__primary border-1 text-white font__sm">
                                    G PAY
                                 </a>
                              </div>
                              <div class="form-group col-12">
                                 <p class="text__tertiary text-center payment__top">OR</p>
                              </div>
                              <div class="form-group col-12">
                                 <label class="fieldlabels">Card Number: <span class="text-danger">*</span></label>
                                 <input type="text" name="card_number" />
                                 <img class="master_card" src="images/inter__payment.png" alt="">
                              </div>
                              <div class="form-group col-md-4">
                                 <label class="fieldlabels">Expiration Month: <span class="text-danger">*</span></label>
                                 <input type="text" name="exp_month" />
                              </div>
                              <div class="form-group col-md-4">
                                 <label class="fieldlabels">Expiration year: <span class="text-danger">*</span></label>
                                 <input type="text" name="exp_year" />
                              </div>
                              <div class="form-group col-md-4">
                                 <label class="fieldlabels">CVV/CVC/CVD: <span class="text-danger">*</span></label>
                                 <input type="text" name="cvv" />
                              </div>
                              <div class="form-check col-12">
                                 <div class="row">
                                    <input type="checkbox" name="save_payment" class="col-1">
                                    <label class="col-11 px-0 font__sm">Please save my payment information.</label>
                                 </div>

                              </div>
                           </div>

                        </div>
                        <button class="btn text-capitalize bg__primary no__border-radius float-right donate__form__button text-white font__sm">Donate Now</button>
                        <span class="previous action-button-previous"><i class="fa fa-arrow-left"></i> Previous</span>
                     </fieldset>
                     <!-- payment section ends -->
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="no__swipe">
   <div class="donation__footer inner__page">
      <div class="container">
         <div class="row no_wrap__scroll">
            <div class="col-lg-4 mb-3">
               <div class="donation__card--secondary border_radius__sm text-center">
                  <div class="mt-3">
                     <img src="images/esewa_logo.png" class="w-50">
                  </div>
                  <h5 class="pt-3">9841706508</h5>
               </div>
            </div>
            <div class="col-lg-4 mb-3">
               <div class="donation__card--secondary border_radius__sm text-center">
                  <div class="mt-3">
                     <img src="images/whatsapp.png" alt="whatsapp" class="width__15p">
                     <img src="images/viber.png" alt="viber" class="width__15p mr-1">
                  </div>
                  <h5 class="pt-3">9841706508</h5>
               </div>
            </div>
            <div class="col-lg-4 mb-3">
               <div class="donation__card--secondary border_radius__sm text-center">
                  <div class="mt-3">
                     <img src="images/paypal.png" alt="paypal" class="w-50">
                  </div>
                  <p class="pt-3 mb-0">Anil Chalise</p>
                  <span class="font__sm">astrokathmandu@gmail.com</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!--
<div class="col-12">
   <div class="donation__card border_radius__sm bg__orange d-flex align-items-center">
      <div>
         <h3 class="text-uppercase font__40--lg">make a general donation</h3>
         <p>Help where it's needed most</p>
      </div>
   </div>
</div> -->

<?php include('inc/footer.php'); ?>