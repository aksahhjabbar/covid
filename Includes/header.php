<?php
session_start();

if (!isset($_SESSION["email"])) {
    header('location:login.php');
}


?>

<header class="header-area">

    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <ul class="top-header-social">
                        <li> <a href="https://www.facebook.com" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                        <li> <a href="https://www.Twitter.com" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                        <li> <a href="https://www.instagram.com" target="_blank"><i class="bx bxl-instagram"></i></a>
                        </li>
                        <li><a href="https://www.pinterest.com/" target="_blank"><i
                                    class="bx bxl-pinterest-alt"></i></a></li>
                        <li> <a href="https://www.linkedin.com" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-12">
                    <ul class="top-header-contact-info">
                        <li><a href="https://www.google.com/maps/place/Aptech+Computer+Education+North+Nazimabad+Center/@24.9273781,67.02842,17z/data=!3m1!4b1!4m6!3m5!1s0x3eb33f90157042d3:0x93d609e8bec9a880!8m2!3d24.9273733!4d67.0330334!16s%2Fg%2F11xyvbmyb?entry=ttu"
                                target="_blank"><i class="bx bx-map"></i> SD-1, Block A North Nazimabad Town, Karachi,
                                74700, Pakistan
                            </a> </li>

                        <li> <a href="tel:(021) 5871 5476"><i class="bx bx-phone-call"></i> Emergancy Helpline:(021)
                                5871
                                5476</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area">
        <div class="cognizance-responsive-nav">
            <div class="container">
                <div class="cognizance-responsive-menu">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/img/logo.png" class="main-logo" alt="logo">
                            <img src="assets/img/logo2.png" class="white-logo" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cognizance-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" class="main-logo" alt="logo">
                        <img src="assets/img/logo2.png" class="white-logo" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="index.php" class="nav-link ">Home</a></li>
                            </li>
                            <li class="nav-item"><a href="about-1.php" class="nav-link">About Us</a></li>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Pages <i
                                        class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="doctors.php" class="nav-link">Doctors</a></li>
                                    <li class="nav-item"><a href="prevention.php" class="nav-link">Prevention</a></li>
                                    <li class="nav-item"><a href="appointment.php" class="nav-link">Appointment</a></li>
                                    <li class="nav-item"><a href="spread.php" class="nav-link">Spreads</a></li>
                                    <li class="nav-item"><a href="out-break.php" class="nav-link">Outbreak</a></li>
                                    <li class="nav-item"><a href="faq.php" class="nav-link">FAQ</a></li>
                                    <li class="nav-item"><a href="error-404.php" class="nav-link">404 Error</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="single-post.php" class="nav-link">Blog</a></li>
                            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                            <li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>
                        </ul>
                        <div class="others-option d-flex align-items-center">
                            <div class="option-item">
                                <div class="search-btn-box">
                                    <i class="search-btn bx bx-search-alt"></i>
                                </div>
                            </div>
                            <div class="option-item">
                                <a href="appointment.php" class="default-btn"><i class="flaticon-open-book"></i>
                                    Appointment</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option">
                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="cart.php"><i class="bx bx-shopping-bag"></i><span>3</span></a>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="search-btn-box">
                                    <i class="search-btn bx bx-search-alt"></i>
                                </div>
                            </div>
                            <div class="option-item">
                                <a href="appointment.php" class="default-btn"><i class="flaticon-open-book"></i>
                                    Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>