<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Cognizance - Medical Health & COVID-19 Template</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>


    <?php
    include('includes/header.php');
    ?>


    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class="bx bx-search-alt"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <section class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Appointment</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Appointment</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="appointment-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Appointment</span>
                <h2>Book an Appointment</h2>
            </div>
            <div class="appointment-form">
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div> -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>vaccinations</label>
                                <div class="select-box">
                                    <select class="form-control">
                                    <option>choose vaccination</option>
                                        <option>moderna</option>
                                        <option>pfizer</option>
                                        <option>sinovac</option>
                                        <option>sinopharm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Visit Date</label>
                                <input type="text" class="form-control" placeholder="2021-10-09">
                            </div>
                        </div>
                        <!-- <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Captcha Question</label>
                                <input type="text" class="form-control" placeholder="3 + 7 = ?">
                            </div>
                        </div> -->
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn"><i class="flaticon-plane"></i> Book
                                Appointment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
    include("includes/footer.php");
    ?>
</body>

</html>