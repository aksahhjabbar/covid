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
    <title>Login</title>
</head>

<body>
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

    <div class="main-banner banner-bg2 funfacts-area ptb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="main-banner-content">
                        <span class="sub-title">COVID-19</span>
                        <h1>Login</h1>
                        <p>Home | Login</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-uppercase text-center mb-3">Login Your Account</h2>

                        <form action="Login.php" method="post" class="form-group">

                            <div class="form-outline mb-2">
                                <input type="email" name="login_email" class="form-control form-control-lg" required />
                                <label class="form-label" for="email">Email</label>
                            </div>

                            <div class="form-outline mb-2">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="login_pass" id="password" required>
                                    <button class="btn" style="border:darkgray; background-color:lightgray;" type="button" id="show-hide-password">
                                        <i class="fa-solid fa-eye fa-flip" id="show-hide-password"></i>
                                    </button>
                                </div>
                                <label class="form-label" for="password">Password</label>
                            </div>

                            <div class="form-check d-flex mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" required />
                                <label class="form-check-label" for="checkbox">
                                    I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                            service</u></a>
                                </label>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="Login">Login</button>
                            </div>

                            <p class="text-center text-muted mt-3 mb-0">Don't have an account? <a href="Register.php" class="fw-bold text-body"><u>Register here</u></a></p>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <?php
    require("includes/config.php");

    if (isset($_POST["Login"])) {
        $login_email = $_POST["login_email"];
        $login_pass = $_POST["login_pass"];

        $login_query = "select * from paitent where Email = '$login_email'";
        $get_from_db = mysqli_query($conn, $login_query);
        if (mysqli_num_rows($get_from_db) > 0) {
            $row = mysqli_fetch_assoc($get_from_db);
            $db_pass = $row['Password'];
            $pass_decode = password_verify($login_pass, $db_pass);
            if ($pass_decode) {
                // session_start();
                $_SESSION["email"] = $row['Email'];
                // echo '<script>alert("succes"); </script>';
                echo ' <script>
                window.location.href="index.php";
                </script>';
            } else {
                echo '<script>alert("Invalid Email/Password"); </script>';
            }
        }
    }
    ?>
    <?php
    require("includes/footer.php");
    ?>
    <script>
        $("#show-hide-password").click(function() {
            var passwordField = $("#password");
            var fieldType = passwordField.attr("type");
            if (fieldType === "password") {
                passwordField.attr("type", "text");
            } else {
                passwordField.attr("type", "password");
            }
        });
    </script>
</body>

</html>