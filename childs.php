<?php require('inc/header.php') ?>

<link rel="stylesheet" href="css/inner.css">

<section class="breadcrumbs" data-parallax="scroll" data-image-src="images/banner__2.jpg">
   <div class="container zIndex__1">
      <h2 class="text-uppercase">Sponser a child</h2>
      <p>
         <a class="breadcrumb__links" href="index.php">Home</a> / <span class="breadcrumb__links">Sponser a child</span>
      </p>
   </div>
</section>

<section class="inner__page">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="inner__content">
               <h2 class="primary__title text-uppercase section__title pb-1">
                  Sponser a child
               </h2>
               <p class="section__secondary_title text-center text__primary--300">
                  Give blessings to child ! Get Blessings from cosmic energy !!
               </p>
               <div class="inner__white_space">
                  <div class="row">
                     <?php include('inc/childDetail.php');
                     $childs = array_fill(0, 9, 'Jagrat Chalise'); ?>
                     <?php foreach ($childs as $child) { ?>
                        <div class="col-md-6 col-xl-4">
                           <div class="rounded__card">
                              <div class="rounded__card_top">
                                 <a href="#" class="text__tertiary">
                                    <img src="images/banner__2.jpg" alt="card-title" class="rounded__card_img">
                                 </a>
                              </div>
                              <div class="rounded__card_body">
                                 <div class="rounded__card_text">
                                    <h3>
                                       <a href="#" class="text__tertiary">
                                          <?php echo $child; ?>
                                       </a>
                                    </h3>
                                    <p class="font__sm text__tertiary--300 mb-1">Ashwini (अश्विनी) चु , चे, चो , ला </p>
                                 </div>
                                 <div class="d-flex d-md-block d-lg-flex text-center justify-content-end">
                                    <div class="mb-2">
                                       <button data-toggle="modal" data-target="#childDetail" class="btn text-capitalize tertiary_transparent_button">
                                          <i class="fa fa-university" aria-hidden="true"></i> Bank Transfer
                                       </button>
                                    </div>

                                    <!-- <div class="mb-2">
                                       <a href="donate.php" class="btn text-capitalize bg__primary border__primary border-1 text-white font__sm">
                                          <img class="width__60" src="images/inter__payment.png" alt="">
                                          Donate
                                       </a>
                                    </div> -->

                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 d-none">
            <div class="inner__content inner__white_space slogans">
               <p>Give blessings to child ! Get Blessings from cosmic energy !!</p>
               <p>Nine child represents nine planets</p>
            </div>
         </div>
      </div>

   </div>
</section>

<?php require('inc/footer.php') ?>