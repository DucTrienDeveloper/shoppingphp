<?php
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
require "../inc/headerweb.php";
error_reporting(0);
$id = $_GET['id'];

$sql = mysqli_query($conn,"UPDATE `hoadon` SET `trangthai`= 1 WHERE idsp = $id");

?>