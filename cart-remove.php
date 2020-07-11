<?php
include 'includes/common.php';
session_start();

$item_id=$_GET['id'];
// echo $item_id;
// echo "hello";

$user_id=$_SESSION['id'];



$sql = "DELETE FROM `store`.`users_items` WHERE user_id='$user_id' AND item_id='$item_id'";

$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));



header("location:cart.php");
?>