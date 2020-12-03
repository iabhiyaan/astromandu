<?php require('inc/header.php') ?>

<link rel="stylesheet" href="css/inner.css">

<section class="breadcrumbs" data-parallax="scroll" data-image-src="images/banner__2.jpg">
   <div class="container zIndex__1">
      <h2 class="text-uppercase">Services</h2>
      <p>
         <a class="breadcrumb__links" href="index.php">Home</a> / <span class="breadcrumb__links">Services</span>
      </p>
   </div>
</section>

<section class="inner__page">
   <div class="container">
      <div class="inner__content">
         <div class="inner__white_space">
            <div class="row">
               <?php $services = array_fill(0, 5, 'Consultation');
               ?>
               <?php foreach ($services as $service) { ?>
                  <div class="col-xl-4 col-md-6">
                     <div class="rounded__card">
                        <div class="rounded__card_top">
                           <a href="serviceDetail.php" class="text__tertiary">
                              <img src="images/banner__2.jpg" alt="card-title" class="rounded__card_img">
                           </a>
                        </div>
                        <div class="rounded__card_body">
                           <div class="rounded__card_text short_description">
                              <h3>
                                 <a href="serviceDetail.php" class="text__tertiary">
                                    <?php echo $service; ?>
                                 </a>
                              </h3>
                              <span class="text__tertiary--300">
                                 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis laboriosam esse, alias ratione perspiciatis molestiae nostrum, quasi error quae odio consequuntur excepturi, tempore iste repellendus necessitatibus. Ut?
                              </span>
                           </div>
                           <div class="text-right">
                              <a href="serviceDetail.php" class="btn text-capitalize tertiary_transparent_button">read more</a>
                           </div>
                        </div>

                     </div>
                  </div>
               <?php } ?>
               <div class="col-xl-4 col-md-6">
                  <div class="rounded__card">
                     <div class="rounded__card_top">
                        <a href="pujaHavan.php" class="text__tertiary">
                           <img src="images/banner__2.jpg" alt="card-title" class="rounded__card_img">
                        </a>
                     </div>
                     <div class="rounded__card_body">
                        <div class="rounded__card_text short_description">
                           <h3>
                              <a href="pujaHavan.php" class="text__tertiary">
                                 Puja & Havan
                              </a>
                           </h3>
                           <span class="text__tertiary--300">
                              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi cumque exercitationem facilis laboriosam esse, alias ratione perspiciatis molestiae nostrum, quasi error quae odio consequuntur excepturi, tempore iste repellendus necessitatibus. Ut?
                           </span>
                        </div>
                        <div class="text-right">
                           <a href="pujaHavan.php" class="btn text-capitalize tertiary_transparent_button">read more</a>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <nav>
               <ul class="pagination">
                  <li class="page-item disabled">
                     <span class="page-link">Previous</span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active">
                     <span class="page-link">
                        2
                        <span class="sr-only">(current)</span>
                     </span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                     <a class="page-link" href="#">Next</a>
                  </li>
               </ul>
            </nav>

         </div>
      </div>
   </div>
</section>

<?php require('inc/footer.php') ?>