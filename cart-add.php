<?php
include 'includes/common.php';
session_start();

$item_id=$_GET['id'];

$user_id=$_SESSION['id'];



//  fetching existing email from database
$sql = "INSERT INTO `store`.`users_items`(`user_id`, `item_id`, `status`) VALUES('$user_id', '$item_id', 'added to cart')";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
// $num = mysqli_num_rows($sql_result);



header("location:products.php");

?>