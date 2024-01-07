<?php
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form validation in HTML & CSS | CodingNepal</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<?php
// if (isset($_POST['submit_login'])){
//     echo "<pre>";
//     print_r($_POST);
// }
error_reporting(0);
$Username = mysqli_real_escape_string($conn, $_POST['email']);
$Password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = mysqli_query($conn, "select * from account where email = '$Username' && password ='$Password' ");
$num = mysqli_num_rows($sql);
if ($num > 0) {
    $row = mysqli_fetch_assoc($sql);
    $_SESSION['USER_ID'] = $row['id'];
    $_SESSION['USER_NAME'] = $row['email'];
    header("location:index1.php");
    
} else{
  echo " not found";
  header("location:login.php");
}

?>


