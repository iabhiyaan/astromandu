<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astro Kathmandu</title>
    <link rel="shortcut icon" href="images/fav.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>
    <header id="header">
        <div class="middle-head">
            <div class="mid-header bg__primary py-2 py-md-3">
                <div class="container">
                    <div class="d-lg-flex justify-content-between align-items-center">
                        <div>
                            <a href="index.php" class="logo">Astro Kathmandu </a>
                            <p class="text-white mt-1">Traditional vedic astrology and spiritual services</p>
                        </div>
                        <div class="calendar-box lh__normal text-white d-flex pt-1 pb-3">
                            <span class="media icon-text current-date mr-3 font__sm align-items-center">
                                <span class="left-icon lnr lnr-calendar-full mr-2"></span><span class="main-title">
                                    <?php echo date('F j, Y'); ?> </span>
                            </span>
                            <span class="media icon-text current-date current-time font__sm align-items-center">
                                <span class="left-icon lnr lnr-clock mr-2"></span><span class="main-title" id="live-time">00 : 00 : 00</span>
                            </span>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="main-head bg__grey--300">
            <div class="container">
                <div class="top-menu-bar">
                    <span class="menu-line"></span>
                    <span class="menu-line"></span>
                    <span class="menu-line"></span>
                </div>
                <nav class="main-nav">
                    <span class="close-btn"><i class="fa fa-times"></i></span>
                    <div class="nav-inner">
                        <a href="index.php" class="small-device-logo">Astro Kathmandu</a>
                        <ul class="text-capitalize">
                            <a href="#" class="sticky-logo"><img src="images/logo.jpg" alt="logo"></a>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="cpage.php">About</a></li>
                            <li><a href="about.php">Anil Chalise</a></li>
                            <li><a href="astrologer.php">Astrologers</a></li>
                            <li><a href="services.php">services</a></li>
                            <li><a href="video.php">video</a></li>
                            <li><a href="childs.php">Child Sponser</a></li>
                            <li><a href="register.php">register</a></li>
                            <li><a href="login.php">login</a></li>
                            <!-- <li><a href="#">Bajrayogini Scheme <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu" id="sub-menu">
                                    <li><a href="#">Home Loan</a></li>
                                    <li><a href="#">Business Loan</a></li>
                                    <li><a href="#">Deposit Scheme</a></li>
                                    <li><a href="#">Naari Bachat</a></li>
                                    <li><a href="#">Realstate Loan</a></li>
                                </ul>
                            </li> -->
                            <li><a href="donate.php">Donate</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="header-push"></div>
    <!-- header section ends -->