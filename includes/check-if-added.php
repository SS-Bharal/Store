
<?php
// include 'common.php';

// session_start();

// $_SESSION['id'] = $user_id;
// $user_id = $_SESSION['id'];
// $user_id = 1;


function check_if_added_to_cart($item_id)
{

    include 'common.php';
    $user_id = $_SESSION['id'];

    // session_start();



    $sql = "SELECT * FROM `store`.`users_items` WHERE item_id='$item_id' AND user_id='$user_id' and status='added to cart';";
    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

    // $sql = "SELECT * FROM store.user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart' ";
    // $sql_result = mysqli_query($con, $sql);





    if (mysqli_num_rows($sql_result) >= 1) {

        return 1;
    } else {
        return 0;
    }
}

?>
