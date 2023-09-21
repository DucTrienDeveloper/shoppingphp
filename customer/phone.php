<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM billday WHERE status = 2";
$id = $_GET["id"];
if (isset($_SESSION['USER_NAME'])) {
    $Username = $_SESSION['USER_NAME'];
    $idKH = $_SESSION['USER_ID'];
    echo $Username;
}
require "../inc/headerweb.php";
if ($id == 1){
    $loaisp = 'iphone';
}
else if($id == 2){
    $loaisp = 'samsung';
}
else if($id == 3){
    $loaisp = 'oppo';
}
?>

<body>
    <div class="single-product-area">

        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <?php
                if ($id == 1) {
                    $sql = "select * from sanpham where loaisp = 'iphone'";
                    $query = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($query);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_array($query)) {


                ?>


                            <div class="col-md-3 col-sm-6">
                                <div class="single-shop-product">
                                    <div class="product-upper">
                                        <img src="<?php echo $row['img']?>" style="width: 200px; height: 200px;" alt="">
                                    </div>
                                    <h2><a href="single-product.php?search=<?php echo $row['tensp'] ?>"><?php echo $row["tensp"] ?></a></h2>
                                    <div class="product-carousel-price">
                                        <ins><?php echo $row["gia"] ?> VND</ins>
                                    </div>
                                    <div class="product-option-shop">
                                        <a href="cart.php?id=<?php echo $row['idsp'] ?>"><input type="submit" name="form_click" value="Buy"></a>
                                    </div>
                                </div>
                            </div>

                <?php
                        }
                    }
                }
                ?>

<?php
                if ($id == 2) {
                    $sql = "select * from sanpham where loaisp = 'samsung'";
                    $query = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($query);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_array($query)) {


                ?>


                            <div class="col-md-3 col-sm-6">
                                <div class="single-shop-product">
                                    <div class="product-upper">
                                    <img src="<?php echo $row['img']?>" style="width: 200px; height: 200px;" alt="">
                                    </div>
                                    <h2><a href="single-product.php?search=<?php echo $row['tensp'] ?>"><?php echo $row["tensp"] ?></a></h2>
                                    <div class="product-carousel-price">
                                        <ins><?php echo $row["gia"] ?> VND</ins>
                                    </div>
                                    <div class="product-option-shop">
                                        <a href="cart.php?id=<?php echo $row['idsp'] ?>"><input type="submit" name="form_click" value="Buy"></a>
                                    </div>
                                </div>
                            </div>

                <?php
                        }
                    }
                }
                ?>

<?php
                if ($id == 3) {
                    $sql = "select * from sanpham where loaisp = 'oppo'";
                    $query = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($query);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_array($query)) {


                ?>


                            <div class="col-md-3 col-sm-6">
                                <div class="single-shop-product">
                                    <div class="product-upper">
                                    <img src="<?php echo $row['img']?>" style="width: 200px; height: 200px;" alt="">
                                    </div>
                                    <h2><a href="single-product.php?search=<?php echo $row['tensp'] ?>"><?php echo $row["tensp"] ?></a></h2>
                                    <div class="product-carousel-price">
                                        <ins><?php echo $row["gia"] ?> VND</ins>
                                    </div>
                                    <div class="product-option-shop">
                                        <a href="cart.php?id=<?php echo $row['idsp'] ?>"><input type="submit" name="form_click" value="Buy"></a>
                                    </div>
                                </div>
                            </div>

                <?php
                        }
                    }
                }
                ?>

            </div>



           
        </div>
        <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        
                        <?php
                          $sql_trang = mysqli_query($conn,"SELECT * FROM sanpham WHERE loaisp = '$loaisp' ");
                          $row_count = mysqli_num_rows($sql_trang);
                          $trang = ceil($row_count / 3);
                        ?>
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                              <?php
                                for($i = 1;$i <=$trang;$i++)
                                {
                                    ?>
                                    <li> <a href="phone.php?"></a> <?php echo $i;?></li>
                                    <?php
                                }
                              ?>
                            
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>  
    </div>
</body>

</html>

