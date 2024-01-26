<?php
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$query = "SELECT * FROM billday WHERE status = 2";
$id = $_GET['id'];
error_reporting(0);
$idkh = $_SESSION['USER_ID'];
$gia = $_GET['gia'];
require "../inc/header.php";

if(isset($_POST['search'])){
    
}

?>
