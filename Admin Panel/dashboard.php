<?php
session_start();
include_once('../includes/config.php');
if (!isset($_SESSION['aid'])) {
    header('location:adminlogin.php');
} else {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <button type="submit"><a href="adminlogout.php">Logout</a></button>
    </body>

    </html>





    <?php









}
?>