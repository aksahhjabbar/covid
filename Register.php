<?php
require("includes/header1.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="assets/css/Registers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>User Registration</title>
</head>

<body>

    <!-- <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div> -->

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

    <div class="main-banner banner-bg3 funfacts-area ptb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="main-banner-content">
                        <span class="sub-title">COVID-19</span>
                        <h1>Register</h1>
                        <p>Home | Register</p>
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-md-12">
                    <div class="main-banner-image">
                        <img src="assets/img/banner-img3.png" alt="image">
                    </div>
                </div> -->
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-uppercase text-center mb-3">Create an account</h2>

                        <form action="Register.php" method="post" class="form-group">

                            <div class="form-outline mb-2">
                                <input type="text" name="username" class="form-control form-control-lg" required />
                                <label class="form-label" for="username">Username</label>
                            </div>

                            <div class="form-outline mb-2">
                                <input type="email" name="email" class="form-control form-control-lg" required />
                                <label class="form-label" for="email">Email</label>
                            </div>

                            <div class="form-outline mb-2">
                                <input type="text" name="city" class="form-control form-control-lg" required />
                                <label class="form-label" for="city">City</label>
                            </div>

                            <div class="form-outline mb-2">
                                <input type="text" name="area" class="form-control form-control-lg" required />
                                <label class="form-label" for="area">Area</label>
                            </div>

                            <div class="form-outline mb-2">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="password" required>
                                    <button class="btn" style="border:darkgray; background-color:lightgray;" type="button" id="show-hide-password">
                                        <i class="fa-solid fa-eye fa-flip" id="show-hide-password"></i>
                                    </button>
                                </div>
                                <label class="form-label" for="password">Password</label>
                            </div>

                            <div class="form-outline mb-2">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required>
                                    <button class="btn" style="border:darkgray;  background-color:lightgray;" type="button" id="show-hide-confirm-password">
                                        <i class="fa-solid fa-eye fa-spin" id="show-hide-confirm-password"></i>
                                    </button>
                                </div>
                                <label class="form-label" for="confirmPassword">Repeat your password</label>
                            </div>

                            <div class="form-check d-flex mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" required />
                                <label class="form-check-label" for="checkbox">
                                    I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                            service</u></a>
                                </label>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="submit">Register</button>
                            </div>

                            <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/register.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/meanmenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/ajaxchimp.min.js"></script>
    <?php
    require("includes/config.php");

    if (isset($_POST["submit"])) {
        $name = mysqli_real_escape_string($conn, $_POST["username"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $city = mysqli_real_escape_string($conn, $_POST["city"]);
        $area = mysqli_real_escape_string($conn, $_POST["area"]);
        $pass = mysqli_real_escape_string($conn, $_POST["password"]);
        $cpass = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);

        if ($pass === $cpass) {

            $password = password_hash($pass, PASSWORD_BCRYPT);

            $email_check = "select * from paitent where Email = '$email'";
            $result = mysqli_query($conn, $email_check);
            if (mysqli_num_rows($result) > 0) {
                echo "<script> alert('Email already exist'); </script>";
            } else {
                $insert_query = "INSERT INTO `paitent` (`Username`, `Email`, `City`, `Area`, `Password`) VALUES ('$name', '$email', '$city', '$area', '$password')";
                $connection_insert = mysqli_query($conn, $insert_query);
                // header('location:login.php');
                echo ' <script>
                window.location.href="login.php";
                
                </script>';
            }
        } else {
            echo '<script> alert("Your Password is incorrect")</script>';
        }
    };
    ?>

    <?php
    require("includes/footer.php");
    ?>

    <!-- <script src="assets/js/register.js"></script> -->
</body>

</html>