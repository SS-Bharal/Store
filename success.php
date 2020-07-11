<?php
require 'includes/common.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>Success | Life Style Store</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->

    <?php
    include 'includes/header.php'
    ?>

    <!--Header end-->


    <div class="container-fluid" id="content">
        <div class="col-md-12">
            <div class="jumbotron">
                <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3>
                <hr>
                <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
            </div>
        </div>
    </div>

    <?php
    include 'includes/footer.php';
    ?>





</body>

</html>