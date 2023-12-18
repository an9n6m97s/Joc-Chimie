<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title()?></title>

    <!-- CSS -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME'] ?>/assets/css/style.css">
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/plugins/jQuery/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME'] ?>/assets/plugins/Bootstrap/bootstrap.min.css">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME'] ?>/assets/plugins/FontAwsome/all.min.css">
    <!-- Font Awsome Less -->
    <link rel="stylesheet/less" type="text/css" href="<?php $_SERVER['SERVER_NAME'] ?>/assets/plugins/files.less" />

    <!-- Font Awsome SCSS -->
    <link rel="stylesheet/scss" type="text/css" href="<?php $_SERVER['SERVER_NAME'] ?>/assets/plugins/files.scss" />

    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME'] ?>/assets/plugins/Animate/animate.min.css">

    <!-- End CSS -->


    <!-- JS -->
    
    <!-- Custom JS -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/js/index.js" type="application/javascript"></script>

    <!-- jQuery JS -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/plugins/jQuery/jquery-3.7.1.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/plugins/Bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Popper JS -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/plugins/Popper/popper.min.js"></script>

    <!-- Font Awesome JS -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/plugins/FontAwsome/all.min.js"></script>

    <!-- AOS JS -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/plugins/AOS/aos.js"></script>

    <!-- End JS -->

    <!-- AOS Initiate -->
    <script>AOS.init();</script>
</head>
<body>
   
<!-- End Head -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/modals.php'; ?>