<?php

$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    if(isset($_POST["tensp"])){    // tensp, gia ,so luong, total,tenkh;
        $tensp = $_POST["tensp"];
        $gia = $_POST["gia"];
        $soluong = $_POST["soluong"];
        $total = $_POST["gia"];
        $idkh = $_POST["idkH"];
        $idsp = $_POST["id"];
    }
    $sql = "UPDATE sanpham SET soluong = soluong - $soluong WHERE id=$idsp";
    mysqli_query($conn,$sql);
    $query = "INSERT INTO hoadon VALUES ('','$idsp','$soluong','$idkh','','','','$soluong')";
    mysqli_query($conn,$query);
?>
