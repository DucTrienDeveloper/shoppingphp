<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM billday WHERE status = 2";
if (!isset($_SESSION['USER_ID'])) {
    header("location:index1.php");
}
if (isset($_SESSION['USER_NAME'])) {
    $Username = $_SESSION['USER_NAME'];
    echo $Username;
}
if (isset($_SESSION['USER_ID'])) {
    $id = $_SESSION['USER_ID'];
}
require "../inc/headerweb.php";

?>

<body>
    <?php

    $sql = "SELECT sanpham.img,sanpham.tensp,sanpham.idsp,hoadon.tongbill FROM `hoadon` INNER JOIN sanpham ON hoadon.idsp = sanpham.idsp WHERE hoadon.trangthai = 2 && hoadon.idkh= $id";
    $query = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($query);
    if ($num > 0) {
        while ($row = mysqli_fetch_array($query)) {
            // echo " tên sản phẩm : ";
            // echo $row['tensp'];
            // echo " tổng bill : ";
            // echo $row['tongbill'];
    ?>
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <img src="<?php echo $row['img'] ?>" style="width: 200px; height : 200px" alt="">
                    </div>
                    <h2><?php echo $row["tensp"] ?></a></h2>
                    <div class="product-carousel-price">
                        <ins><?php echo $row["tongbill"] ?> VND</ins>
                    </div>
                    <div class="product-option-shop">
                        <a href="thanhtoan.php?id=<?php echo $row['idsp'] ?>"><input type="submit" name="form_click" value="Thanh toan"></a>
                        <a href="huy.php?id=<?php echo $row['idsp'] ?>"><input type="submit" name="form_click" value="Huy"></a>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</body>