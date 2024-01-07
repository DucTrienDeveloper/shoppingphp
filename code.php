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
require "../inc/headerweb.php";

?>

<?php
if (!isset($_SESSION['USER_ID'])) {
    echo "please login";
} else {
    $update = "INSERT INTO hoadon ( idsp, idkh,gia,trangthai,tongbill)
    VALUES ('$id', '$idkh', '$gia', '2', '$gia');";
    $query2 = mysqli_query($conn,$update);
    
    
}
if(isset($_SESSION['USER_NAME'])){
    $sql = "UPDATE sanpham SET soluong = soluong - 1 WHERE idsp = $id ";
    $query = mysqli_query($conn,$sql);
    echo "bạn đã đặt hàng thành công để thanh toán vào Cart";
}

?>