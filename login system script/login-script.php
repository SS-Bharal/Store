<?php



// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$database = "store";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database) or die(mysqli_error($con));




// collecting post variables
// $id = mysqli_real_escape_string($con, $_POST['id']);

$email = mysqli_real_escape_string($con, $_POST['email']);

$password = mysqli_real_escape_string($con, $_POST['password']);

$password = md5($password);

// $name = $_POST['name'];
// $email =  $_POST['email'];
// $password =  md5($_POST['password']);
// $c_password =  md5($_POST['password1']);
// // $password = md5($_POST['password']);


//  fetching existing email from database
$sql = "SELECT * FROM `store`.`users` WHERE email='$email' AND password='$password'";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
$num = mysqli_num_rows($sql_result);
$r = mysqli_fetch_array($sql_result);


if ($num == 1) {



    // session start

    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $r[0];

    header("location:../products.php");
} else {

    // Showing alert and after it redirected


    echo "<script>alert(' This Email address OR Password does not match. if email address not registered please signup.')</script>";
    echo ("<script>location.href='../login.php'</script>");

    // redirecting
    // header("location:../login.php");
}
