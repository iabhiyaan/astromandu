<?php require('inc/header.php') ?>

<!-- main slider section starts -->
<section id="home" class="main-slider">
   <div class="main-slide">
      <div class="main-slide-container">
         <figure style="background-image:url(images/banner__1.jpg)">
            <div class="container vertical__center">
               <div class="main-slide-content">
                  <h1><span>Durga Puja</span> Montrel </h1>
               </div>
            </div>
         </figure>
      </div>
      <div class="main-slide-container">
         <figure style="background-image:url(images/banner__2.jpg)">
            <div class="container vertical__center">
               <div class="main-slide-content">
                  <h1><span>Basantapur Durbar </span> Square </h1>
               </div>
            </div>
         </figure>
      </div>
      <div class="main-slide-container">
         <figure style="background-image:url(images/banner__1.jpg)">
            <div class="container vertical__center">
               <div class="main-slide-content">
                  <h1><span>Durga Puja</span> Montrel </h1>
               </div>
            </div>
         </figure>
      </div>
   </div>
   <div class="slider slider-thumb">
      <div>
         <p>01</p>
      </div>
      <div>
         <p>02</p>
      </div>
      <div>
         <p>03</p>
      </div>
   </div>
</section>
<!-- main slider section ends -->

<a id="form-btn" role="button" class="trigger book-btn">Request an appointment </a>

<!-- modal -->
<section class="appointment">
   <div class="modal-wrapper home_appointment_form">
      <div class="modal">
         <div class="head">
            <h2 class="text-white modal__title">Request an appointment</h2>
            <a class="btn-close trigger text-white" href="javascript:;">
               <i class="fa fa-times"></i>
            </a>
         </div>
         <div class="content">
            <form action="#" method="POST">
               <div class="form-row">
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
                     <input type="text" id="mobile-number" placeholder="Contact number" name="contact_number">
                  </div>
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
                  <!-- <div class="col-12 text-right">
                     <span class="btn btn-link my-2">
                        <i class="fa fa-plus text__tertiary ask__question"></i>
                     </span>
                  </div> -->
                  <div class="col-12 list__question">
                     <textarea name="message" cols="30" rows="10" placeholder="Please send the list of questions to make your reading more useful."></textarea>
                  </div>
                  <div class="col-12 text-right">
                     <button>Proceed to checkout</button>
                     <div class="pt-4 pb-1">
                        <img src="images/inter__payment.png" alt="payment">
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- modal -->

<!-- our astrologers starts -->
<section id="astrologers" class="white__space--md">
   <div class="container">
      <h2 class="primary__title text-uppercase section__title">
         our astrologers
      </h2>
      <div class="row">
         <?php include('inc/appointmentForm.php') ?>
         <div class="col-xl-3 col-md-6">
            <div class="rounded__card">
               <div class="rounded__card_top">
                  <a href="astrologerDetail.php" class="text__tertiary">
                     <img src="images/2.jpg" alt="card-title" class="rounded__card_img">
                  </a>
               </div>
               <div class="rounded__card_body">
                  <div class="rounded__card_text">
                     <h3>
                        <a href="astrologerDetail.php" class="text__tertiary">
                           Ramesh Dhakal
                        </a>
                     </h3>
                     <span class="text__tertiary--300">Kathmandu, Nepal</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                     <ul class="rounded__card_list d-flex ">
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-facebook"></i> </a></li>
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-twitter"></i> </a></li>
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-instagram"></i> </a></li>
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-youtube-play"></i> </a></li>
                     </ul>
                     <a class="btn border-1 border-tertiary-300 text__tertiary text-capitalize font__sm hover__bg_tertiary book__modal_trigger">book now</a>
                  </div>
               </div>

            </div>
         </div>
         <div class="col-xl-3 col-md-6">
            <div class="rounded__card">
               <div class="rounded__card_top">
                  <a href="astrologerDetail.php" class="text__tertiary">
                     <img src="images/2.jpg" alt="card-title" class="rounded__card_img">
                  </a>
               </div>
               <div class="rounded__card_body">
                  <div class="rounded__card_text">
                     <h3>
                        <a href="astrologerDetail.php" class="text__tertiary">
                           Ramesh Dhakal
                        </a>
                     </h3>
                     <span class="text__tertiary--300">Kathmandu, Nepal</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                     <ul class="rounded__card_list d-flex ">
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-facebook"></i> </a></li>
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-twitter"></i> </a></li>
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-instagram"></i> </a></li>
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-youtube-play"></i> </a></li>
                     </ul>
                     <a class="btn border-1 border-tertiary-300 text__tertiary text-capitalize font__sm hover__bg_tertiary book__modal_trigger">book now</a>
                  </div>
               </div>

            </div>
         </div>
         <div class="col-xl-3 col-md-6">
            <div class="rounded__card">
               <div class="rounded__card_top">
                  <a href="astrologerDetail.php" class="text__tertiary">
                     <img src="images/2.jpg" alt="card-title" class="rounded__card_img">
                  </a>
               </div>
               <div class="rounded__card_body">
                  <div class="rounded__card_text">
                     <h3>
                        <a href="astrologerDetail.php" class="text__tertiary">
                           Ramesh Dhakal
                        </a>
                     </h3>
                     <span class="text__tertiary--300">Kathmandu, Nepal</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                     <ul class="rounded__card_list d-flex ">
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-facebook"></i> </a></li>
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-twitter"></i> </a></li>
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-instagram"></i> </a></li>
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-youtube-play"></i> </a></li>
                     </ul>
                     <a href="#" class="btn border-1 border-tertiary-300 text__tertiary text-capitalize font__sm hover__bg_tertiary book__modal_trigger">book now</a>
                  </div>
               </div>

            </div>
         </div>
         <div class="col-xl-3 col-md-6">
            <div class="rounded__card">
               <div class="rounded__card_top">
                  <a href="astrologerDetail.php" class="text__tertiary">
                     <img src="images/2.jpg" alt="card-title" class="rounded__card_img">
                  </a>
               </div>
               <div class="rounded__card_body">
                  <div class="rounded__card_text">
                     <h3>
                        <a href="astrologerDetail.php" class="text__tertiary">
                           Ramesh Dhakal
                        </a>
                     </h3>
                     <span class="text__tertiary--300">Kathmandu, Nepal</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                     <ul class="rounded__card_list d-flex ">
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-facebook"></i> </a></li>
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-twitter"></i> </a></li>
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-instagram"></i> </a></li>
                        <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-youtube-play"></i> </a></li>
                     </ul>
                     <a href="#" class="btn border-1 border-tertiary-300 text__tertiary text-capitalize font__sm hover__bg_tertiary book__modal_trigger">book now</a>
                  </div>
               </div>

            </div>
         </div>

         <div class="col-12">
            <div class="text-center mt-3">
               <a href="astrologer.php" class="text-capitalize primary_rounded_button">read more</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- our astrologers end -->

<!-- our programs starts -->
<section id="programs" class="bg__tertiary--200 white__space--md">
   <div class="container">
      <h2 class="primary__title text-uppercase section__title">
         our programs
      </h2>
      <div class="row">
         <div class="col-xl-4 col-md-6">
            <div class="rounded__card">
               <div class="rounded__card_top">
                  <a href="programDetail.php" class="text__tertiary">
                     <img src="images/banner__2.jpg" alt="card-title" class="rounded__card_img">
                  </a>
               </div>
               <div class="rounded__card_body">
                  <div class="rounded__card_text short_description">
                     <h3>
                        <a href="programDetail.php" class="text__tertiary">
                           Sanskrit Language
                        </a>
                     </h3>
                     <span class="text__tertiary--300">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis laboriosam esse, alias ratione perspiciatis molestiae nostrum, quasi error quae odio consequuntur excepturi, tempore iste repellendus necessitatibus. Ut?
                     </span>
                  </div>
                  <div class="text-right">
                     <a href="programDetail.php" class="btn text-capitalize tertiary_transparent_button">read more</a>
                  </div>
               </div>

            </div>
         </div>
         <div class="col-xl-4 col-md-6">
            <div class="rounded__card">
               <div class="rounded__card_top">
                  <a href="programDetail.php" class="text__tertiary">
                     <img src="images/banner__1.jpg" alt="card-title" class="rounded__card_img">
                  </a>
               </div>
               <div class="rounded__card_body">
                  <div class="rounded__card_text short_description">
                     <h3>
                        <a href="programDetail.php" class="text__tertiary">
                           Jyotish
                        </a>
                     </h3>
                     <span class="text__tertiary--300">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis laboriosam esse, alias ratione perspiciatis molestiae nostrum, quasi error quae odio consequuntur excepturi, tempore iste repellendus necessitatibus. Ut?
                     </span>
                  </div>
                  <div class="text-right">
                     <a href="programDetail.php" class="btn text-capitalize tertiary_transparent_button">read more</a>
                  </div>
               </div>

            </div>
         </div>
         <div class="col-xl-4 col-md-6">
            <div class="rounded__card">
               <div class="rounded__card_top">
                  <a href="programDetail.php" class="text__tertiary">
                     <img src="images/banner__2.jpg" alt="card-title" class="rounded__card_img">
                  </a>
               </div>
               <div class="rounded__card_body">
                  <div class="rounded__card_text short_description">
                     <h3>
                        <a href="programDetail.php" class="text__tertiary">
                           Karma Kanda
                        </a>
                     </h3>
                     <span class="text__tertiary--300">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis laboriosam esse, alias ratione perspiciatis molestiae nostrum, quasi error quae odio consequuntur excepturi, tempore iste repellendus necessitatibus. Ut?
                     </span>
                  </div>
                  <div class="text-right">
                     <a href="programDetail.php" class="btn text-capitalize tertiary_transparent_button">read more</a>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>
<!-- our programs end -->

<!-- our tours starts -->
<section id="tours" class="white__space--md">
   <div class="container">
      <h2 class="primary__title text-uppercase section__title">
         our Trips
      </h2>
      <div class="row">
         <div class="col-xl-4 col-md-6">
            <div class="rounded__card">
               <div class="rounded__card_top">
                  <a href="tourDetail.php" class="text__tertiary">
                     <img src="images/4.jpg" alt="card-title" class="rounded__card_img">
                  </a>
               </div>
               <div class="rounded__card_body">
                  <div class="rounded__card_text short_description">
                     <h3>
                        <a href="tourDetail.php" class="text__tertiary mb-0">
                           Kathmandu-Pokahara Tour
                        </a>
                     </h3>
                     <span class="text__tertiary--300">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis laboriosam esse, alias ratione perspiciatis molestiae nostrum, quasi error quae odio consequuntur excepturi, tempore iste repellendus necessitatibus. Ut?
                     </span>

                  </div>
                  <div class="text-right">
                     <a href="tourDetail.php" class="btn text-capitalize tertiary_transparent_button">read more</a>
                  </div>
               </div>

            </div>
         </div>
         <div class="col-xl-4 col-md-6">
            <div class="rounded__card">
               <div class="rounded__card_top">
                  <a href="tourDetail.php" class="text__tertiary">
                     <img src="images/4.jpg" alt="card-title" class="rounded__card_img">
                  </a>
               </div>
               <div class="rounded__card_body">
                  <div class="rounded__card_text short_description">
                     <h3>
                        <a href="tourDetail.php" class="text__tertiary mb-0">
                           Kathmandu-Pokahara Tour
                        </a>
                     </h3>
                     <span class="text__tertiary--300">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis laboriosam esse, alias ratione perspiciatis molestiae nostrum, quasi error quae odio consequuntur excepturi, tempore iste repellendus necessitatibus. Ut?
                     </span>

                  </div>
                  <div class="text-right">
                     <a href="tourDetail.php" class="btn text-capitalize tertiary_transparent_button">read more</a>
                  </div>
               </div>

            </div>
         </div>
         <div class="col-xl-4 col-md-6">
            <div class="rounded__card">
               <div class="rounded__card_top">
                  <a href="tourDetail.php" class="text__tertiary">
                     <img src="images/4.jpg" alt="card-title" class="rounded__card_img">
                  </a>
               </div>
               <div class="rounded__card_body">
                  <div class="rounded__card_text short_description">
                     <h3>
                        <a href="tourDetail.php" class="text__tertiary mb-0">
                           Kathmandu-Pokahara Tour
                        </a>
                     </h3>
                     <span class="text__tertiary--300">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis laboriosam esse, alias ratione perspiciatis molestiae nostrum, quasi error quae odio consequuntur excepturi, tempore iste repellendus necessitatibus. Ut?
                     </span>

                  </div>
                  <div class="text-right">
                     <a href="tourDetail.php" class="btn text-capitalize tertiary_transparent_button">read more</a>
                  </div>
               </div>

            </div>
         </div>

      </div>
   </div>
</section>
<!-- our tours end -->

<!-- videos starts -->
<section id="videos" class="bg__tertiary--200 white__space--md">
   <div class="container">
      <h2 class="primary__title text-uppercase section__title">
         watch our videos
      </h2>
      <div class="row">
         <div class="col-xl-3 col-md-6">
            <article class="article__card">
               <div class="article__card_top">
                  <div class="play-button">
                     <div class="fa fa-play custom__play" data-toggle="modal" data-target="#video-1"></div>
                  </div>
                  <img src="images/slider3.jpg" alt="card-title" class="article__card_img">
               </div>
               <div class="modal fade" id="video-1" tabindex="-1" role="dialog" aria-labelledby="video-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                     <div class="modal-content video__model">
                        <div class="modal-body">
                           <div class="video__iframe embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qtiRz009xqM" allowfullscreen></iframe>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <div class="article__card_body">
                  <div class="article__card_text short_description">
                     <h3>
                        <a href="#" class="text__tertiary">
                           Today's horoscope
                        </a>
                     </h3>
                     <span class="text__tertiary--300">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis
                     </span>
                  </div>
               </div>
            </article>
         </div>
         <div class="col-xl-3 col-md-6">
            <article class="article__card">
               <div class="article__card_top">
                  <div class="play-button">
                     <div class="fa fa-play custom__play" data-toggle="modal" data-target="#video-2"></div>
                  </div>
                  <img src="images/banner__1.jpg" alt="card-title" class="article__card_img">
               </div>
               <div class="modal fade" id="video-2" tabindex="-1" role="dialog" aria-labelledby="video-2" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                     <div class="modal-content video__model">
                        <div class="modal-body">
                           <div class="video__iframe embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qtiRz009xqM" allowfullscreen></iframe>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <div class="article__card_body">
                  <div class="article__card_text short_description">
                     <h3>
                        <a href="#" class="text__tertiary">
                           How to attract wealth
                        </a>
                     </h3>
                     <span class="text__tertiary--300">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis
                     </span>
                  </div>
               </div>
            </article>
         </div>
         <div class="col-xl-3 col-md-6">
            <article class="article__card">
               <div class="article__card_top">
                  <div class="play-button">
                     <div class="fa fa-play custom__play" data-toggle="modal" data-target="#video-3"></div>
                  </div>
                  <img src="images/slider3.jpg" alt="card-title" class="article__card_img">
               </div>
               <div class="modal fade" id="video-3" tabindex="-1" role="dialog" aria-labelledby="video-3" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                     <div class="modal-content video__model">
                        <div class="modal-body">
                           <div class="video__iframe embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qtiRz009xqM" allowfullscreen></iframe>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <div class="article__card_body">
                  <div class="article__card_text short_description">
                     <h3>
                        <a href="#" class="text__tertiary">
                           What is Vedic Astrology?
                        </a>
                     </h3>
                     <span class="text__tertiary--300">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis
                     </span>
                  </div>
               </div>
            </article>
         </div>
         <div class="col-xl-3 col-md-6">
            <article class="article__card">
               <div class="article__card_top">
                  <div class="play-button">
                     <div class="fa fa-play custom__play" data-toggle="modal" data-target="#video-4"></div>
                  </div>
                  <img src="images/banner__2.jpg" alt="card-title" class="article__card_img">
               </div>
               <div class="modal fade" id="video-4" tabindex="-1" role="dialog" aria-labelledby="video-4" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                     <div class="modal-content video__model">
                        <div class="modal-body">
                           <div class="video__iframe embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qtiRz009xqM" allowfullscreen></iframe>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <div class="article__card_body">
                  <div class="article__card_text short_description">
                     <h3>
                        <a href="#" class="text__tertiary">
                           What is Vedic Astrology?
                        </a>
                     </h3>
                     <span class="text__tertiary--300">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis
                     </span>
                  </div>
               </div>
            </article>
         </div>
         <div class="col-12">
            <div class="text-center mt-3">
               <a href="video.php" class="text-capitalize primary_rounded_button">read more</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- videos ends -->

<!-- subscribe starts -->
<section id="subscribe" class="white__space--md" data-parallax="scroll" data-image-src="images/newsletter.jpg">
   <div class="container zIndex__1">
      <h2 class="primary__title text-uppercase section__title">
         Subscribe to newsletter
      </h2>
      <form action="#">
         <div class="form-row mx-auto">
            <div class="form-group col-lg-5">
               <input type="text" class="form-control no__border-radius" name="fname" placeholder="Name">
            </div>
            <div class="form-group col-lg-7">
               <div class="input-group mb-3">
                  <input type="text" name="email" class="form-control no__border-radius" placeholder="Email">
                  <div class="input-group-append">
                     <button class="btn primary_rounded_button no__border-radius">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
      </form>

   </div>
</section>
<!-- subscribe ends -->

<!-- Donate starts -->
<section class="bg__tertiary--200 white__space--md">
   <div class="container">
      <h2 class="primary__title text-uppercase section__title pb-1">
         Donate us
      </h2>
      <div class="square__group mx-auto">
         <p class="section__secondary_title">
            Donate # improve the negative effects from planet
         </p>
         <ul class="square__list d-flex justify-content-between">
            <li class="square__list_item">
               <a href="#" class="square__list_link">
                  $5
               </a>
            </li>

            <li class="square__list_item">
               <a href="#" class="square__list_link">
                  $10
               </a>
            </li>
            <li class="square__list_item">
               <a href="#" class="square__list_link">
                  $25
               </a>
            </li>
            <li class="square__list_item">
               <a href="#" class="square__list_link">
                  $50
               </a>
            </li>
            <li class="square__list_item">
               <a href="#" class="square__list_link">
                  $100
               </a>
            </li>

         </ul>
         <div class="form-group my-5">
            <div class="input-group">
               <input type="text" name="other" class="form-control no__border-radius" placeholder="Other Amount">
               <div class="input-group-append">
                  <button class="btn primary_rounded_button no__border-radius">Donate</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Donate ends -->

<?php require('inc/footer.php') ?>