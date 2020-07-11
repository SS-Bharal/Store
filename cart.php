<?php
require 'includes/common.php';
session_start();



if (!isset($_SESSION['email'])) {
    header("location:login.php");
    exit;
}


$user_id = $_SESSION['id'];
// echo $user_id;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart | Life Style Store</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid" id="content">
        <!-- Header -->

        <?php
        include 'includes/header.php'
        ?>

        <!--Header end-->

        <!-- fetching data from items and users_items table using inner join  -->
        <?php


        //  different inner joins queries 

        // imp 
        // SELECT * FROM users_items ui INNER JOIN items i ON i.p_id = ui.user_id
        // $sql = "SELECT * FROM users_items ui INNER JOIN items i ON i.p_id = ui.user_id";
        $sql = "SELECT * FROM users_items ui INNER JOIN items i ON i.p_id = ui.user_id WHERE ui.user_id='$user_id'";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $n = mysqli_num_rows($sql_result);

        ?>
        <?php




        // $num = mysqli_num_rows($sql_result);

        if ($n == 0) {
            echo '<h1> Add items to cart first </h1>';
        } else { ?>

            <?php
            $x = 0;
            // $sql = "SELECT * FROM users_items ui INNER JOIN items i ON i.p_id = ui.item_id ";
            $sql = "SELECT * FROM users_items ui INNER JOIN items i ON i.p_id = ui.item_id WHERE ui.user_id='$user_id'";
            // $sql = "SELECT * FROM users_items ui INNER JOIN items i ON i.p_id = ui.item_id INNER JOIN users u ON u.id=ui.user_id";
            // $sql = "SELECT * FROM users_items ui INNER JOIN items i ON i.p_id = ui.item_id INNER JOIN users u ON u.id=ui.user_id WHERE ui.user_id='$user_id'";
            $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
            for ($a = 1; $a <= $n; $a++) {

                $num = mysqli_fetch_array($sql_result);
                $x = $x + $num[6];
            ?>



                <div class="row decor_bg">
                    <div class="col-sm-6 col-md-offset-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Item Id:&ensp;&ensp;<?php echo $num[4]; ?></th>
                                    <th>Item Name:&ensp;&ensp;<?php echo $num[5]; ?></th>
                                    <th>Price:&ensp;&ensp;<?php echo $num[6]; ?></th>

                                    <!-- here in link we post item id  -->
                                    <th><a href="cart-remove.php?id=<?php echo $num[4];?>" class="remove_item_link">Remove</a></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td></td>
                                    <td>Total</td>
                                    <td>Rs </td>
                                    <td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>




            <?php
            } ?>
            <br><br>
            <h2>Total:<?php echo $x; ?></h2>
            <p><a href='success.php' class='btn btn-primary btn-lg'>Confirm Order</a></p>
        <?php

        } ?>










    </div>


    <?php
    include 'includes/footer.php';
    ?>






</body>

</html>