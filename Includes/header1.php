<?php
session_start();

if (isset($_SESSION["email"])) {
    header('location:index.php');
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
                            <li class="nav-item"><a href="Register.php" class="nav-link">Signup</a></li>
                            <li class="nav-item"><a href="login.php" class="nav-link">login</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>