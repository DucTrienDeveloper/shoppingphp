<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM billday WHERE status = 2";
if(isset($_SESSION['USER_NAME'])){
    $Username = $_SESSION['USER_NAME'];
    $idkh = $_SESSION['USER_ID'];
    echo $Username;
}
require "../inc/headerweb.php";

?>
<body>
    <?php
       error_reporting(0);
       $sql = "SELECT sanpham.tensp,sanpham.idsp,hoadon.tongbill FROM `hoadon` INNER JOIN sanpham ON hoadon.idsp = sanpham.idsp WHERE hoadon.trangthai = 1 && hoadon.idkh = $idkh";
       error_reporting(0);
       $query = mysqli_query($conn,$sql);
       $num = mysqli_num_rows($query);
       if($num > 0){
        while ($row = mysqli_fetch_array($query)) {
            // echo " tên sản phẩm : ";
            // echo $row['tensp'];
            // echo " tổng bill : ";
            // echo $row['tongbill'];
            ?>
            <div class="col-md-3 col-sm-6">
                                <div class="single-shop-product">
                                    <div class="product-upper">
                                        <img src="img/product-2.jpg" alt="">
                                    </div>
                                    <h2><?php echo $row["tensp"] ?></a></h2>
                                    <div class="product-carousel-price">
                                        <ins><?php echo $row["tongbill"] ?> VND</ins>
                                    </div>
                                    <div class="product-option-shop">
                                      
                                </div>
                                </div>
                            </div>
                            <?php
        }
       }
    ?>
</body>