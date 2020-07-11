<?php
// require 'includes/common.php';
?>
<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "store";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database) or die(mysqli_error($con));

// echo "Database connected successfully";

// Session started now


?>

<?php


// Data

$name = mysqli_real_escape_string($con, $_POST['name']);

// Backend validations
$email = mysqli_real_escape_string($con, $_POST['email']);

// $regex_email = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
// if (!preg_match($regex_email, $email)) {
//   echo "Incorrect email";
// }

$password = mysqli_real_escape_string($con, $_POST['password']);
$c_password = mysqli_real_escape_string($con, $_POST['password1']);


$contact = mysqli_real_escape_string($con, $_POST['contact']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);











//  fetching existing email from database
$sql = "SELECT * FROM `store`.`users` WHERE email='$email';";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
$num = mysqli_num_rows($sql_result);

if ($num < 1) {

  if ($password == $c_password) {

    $password = md5($password);
    // $sql = "INSERT INTO temp_db.abc(`id`,`name`,`email`) VALUES (`$id`,`$name`,`$email`)";
    $sql = "INSERT INTO `store`.`users` (`name`,`email`,`password`,`contact`,`city`,`address` ) VALUES ('$name', '$email','$password','$contact','$city','$address');";
    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));


    //  fetching existing email from database
    $sql = "SELECT * FROM `store`.`users` WHERE email='$email';";
    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $r = mysqli_fetch_array($sql_result);
    session_start();

    $_SESSION['email'] = $email;
    $_SESSION['id'] = $r[0];




    if (isset($_SESSION['email'])) {
      // header('location: products.php');
      echo "<script>alert('Your account is created successfully.')</script>";
      echo ("<script>location.href='products.php'</script>");
    }
  } else {
    echo "<script>alert('your password and confirm password does not match.')</script>";
    echo ("<script>location.href='signup.php'</script>");
  }
} else {

  echo "<script>alert('This email address are already registered please login.')</script>";
  echo ("<script>location.href='signup.php'</script>");
}















?>

