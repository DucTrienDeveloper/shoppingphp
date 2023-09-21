<?php
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
require "../inc/headerweb.php";
error_reporting(0);
$id = $_GET['id'];

$query = mysqli_query($conn,"UPDATE `sanpham` SET soluong = soluong + 1 WHERE idsp = $id");
$sql = mysqli_query($conn,"DELETE FROM `hoadon` WHERE idsp = $id && trangthai = 2");

?>