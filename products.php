<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "store";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database) or die(mysqli_error($con));

session_start();
// $user_id = $_SESSION['id'];

// echo $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products | Life Style Store</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid" id="content">


        <?php
        include 'includes/header.php'
        ?>

        <?php
        include 'includes/check-if-added.php';
        ?>








        <div class="container" id="content">

            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>

            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>

                            <?php

                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                <?php
                            } else {
                                if (check_if_added_to_cart(1) != 0) {
                                    echo '<p><a href="#" role="button" class="btn btn-primary btn-block" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                    <a href="cart-add.php?id=1" role="button" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Nikon EOS </h3>
                            <p>Price: Rs. 40,000.00 </p>

                            <?php

                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                <?php
                            } else {
                                if (check_if_added_to_cart(2) != 0) {
                                    echo '<p><a href="#" role="button" class="btn btn-primary btn-block" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                    <a href="cart-add.php?id=2" role="button" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php

                                }
                            }
                            ?>








                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>

                            <?php

                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                <?php
                            } else {
                                if (check_if_added_to_cart(3) != 0) {
                                    echo '<p><a href="#" role="button" class="btn btn-primary btn-block" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                    <a href="cart-add.php?id=3" role="button" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 50000.00</p>

                            <?php

                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                <?php
                            } else {
                                if (check_if_added_to_cart(4) != 0) {
                                    echo '<p><a href="#" role="button" class="btn btn-primary btn-block" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                    <a href="cart-add.php?id=4" role="button" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price: Rs. 13000.00 </p>

                            <?php

                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                <?php
                            } else {
                                if (check_if_added_to_cart(5) != 0) {
                                    echo '<p><a href="#" role="button" class="btn btn-primary btn-block" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                    <a href="cart-add.php?id=5" role="button" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00 </p>

                            <?php

                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                <?php
                            } else {
                                if (check_if_added_to_cart(6) != 0) {
                                    echo '<p><a href="#" role="button" class="btn btn-primary btn-block" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                    <a href="cart-add.php?id=6" role="button" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00 </p>

                            <?php

                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                <?php
                            } else {
                                if (check_if_added_to_cart(7) != 0) {
                                    echo '<p><a href="#" role="button" class="btn btn-primary btn-block" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                    <a href="cart-add.php?id=7" role="button" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/21.jpg" alt="">
                        <div class="caption">
                            <h3>Faber Luba #111 </h3>
                            <p>Price: Rs. 18000.00 </p>

                            <?php

                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                <?php
                            } else {
                                if (check_if_added_to_cart(8) != 0) {
                                    echo '<p><a href="#" role="button" class="btn btn-primary btn-block" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                    <a href="cart-add.php?id=8" role="button" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/22.jpg" alt="">
                        <div class="caption">
                            <h3>H&W </h3>
                            <p>Price: Rs. 800.00 </p>

                            <?php

                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                <?php
                            } else {
                                if (check_if_added_to_cart(9) != 0) {
                                    echo '<p><a href="#" role="button" class="btn btn-primary btn-block" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                    <a href="cart-add.php?id=9" role="button" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs. 1000.00</p>

                            <?php

                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                <?php
                            } else {
                                if (check_if_added_to_cart(10) != 0) {
                                    echo '<p><a href="#" role="button" class="btn btn-primary btn-block" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                    <a href="cart-add.php?id=10" role="button" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00</p>

                            <?php

                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                <?php
                            } else {
                                if (check_if_added_to_cart(11) != 0) {
                                    echo '<p><a href="#" role="button" class="btn btn-primary btn-block" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                    <a href="cart-add.php?id=11" role="button" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price Rs. 1300.00</p>

                            <?php

                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                <?php
                            } else {
                                if (check_if_added_to_cart(12) != 0) {
                                    echo '<p><a href="#" role="button" class="btn btn-primary btn-block" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                    <a href="cart-add.php?id=12" role="button" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <?php
        include 'includes/footer.php';
        ?>



</body>

</html>