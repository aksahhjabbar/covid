<?php
session_start();
include_once('../includes/config.php');
if (isset($_SESSION['aid'])) {
    header('location:dashboard.php');
}

?>