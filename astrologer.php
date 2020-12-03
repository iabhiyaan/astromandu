<?php require('inc/header.php') ?>

<link rel="stylesheet" href="css/inner.css">

<section class="breadcrumbs" data-parallax="scroll" data-image-src="images/banner__2.jpg">
   <div class="container zIndex__1">
      <h2 class="text-uppercase">Astrologers</h2>
      <p>
         <a class="breadcrumb__links" href="index.php">Home</a> / <span class="breadcrumb__links">Astrologers</span>
      </p>
   </div>
</section>

<section class="inner__page">
   <div class="container">
      <div class="inner__content inner__white_space mb-5 pb-2">
         <form action="#">
            <div class="form-row mx-auto">
               <div class="form-group col-lg-5">
                  <select name="fname" class="form-control no__border-radius province__option">
                     <option value>-- Select province --</option>
                     <option value="1">Province 1</option>
                     <option value="2">Province 2</option>
                  </select>
               </div>
               <div class="form-group col-lg-5">
                  <div class="input-group mb-3">
                     <input type="text" name="search" class="form-control no__border-radius astrologer__search" placeholder="Search...">
                     <div class="input-group-append">
                        <button class="btn primary_rounded_button no__border-radius"> <i class="fa fa-search"></i> Search</button>
                     </div>
                  </div>
               </div>
               <div class="form-group col-lg-2">
                  <span class="btn primary_rounded_button no__border-radius py-2 font__sm d-block cursor__pointer reset__search"><i class="fa fa-refresh"></i> Reset</span>
               </div>
            </div>
         </form>
      </div>
      <div class="inner__content">
         <div class="inner__white_space">
            <div class="row">
               <?php include('inc/appointmentForm.php');
               $astros = array_fill(0, 6, 'Ramesh Dhakal');
               ?>
               <?php foreach ($astros as $astro) { ?>
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
                                    <?php echo $astro; ?>
                                 </a>
                              </h3>
                              <span class="text__tertiary--300">Kathmandu, Nepal</span>
                           </div>
                           <div class="d-320-flex justify-content-between align-items-center">
                              <ul class="rounded__card_list d-flex mb-3 mb-320-0">
                                 <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-facebook"></i> </a></li>
                                 <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-twitter"></i> </a></li>
                                 <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-instagram"></i> </a></li>
                                 <li class="rounded__card_list_item"><a class="rounded__card_list_link" href="#"> <i class="fa fa-youtube-play"></i> </a></li>
                              </ul>

                              <a class="book__modal_trigger btn border-1 border__dark__blue text__dark__blue text-capitalize font__sm hover__bg_dark__blue inner__book_now cursor__pointer">book now</a>

                           </div>
                        </div>

                     </div>
                  </div>
               <?php } ?>

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