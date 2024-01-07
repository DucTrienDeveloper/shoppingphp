<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/fillterindex.css">
    <link rel="stylesheet" href="css/step2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <style>
        .lds-heart {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
            transform: rotate(45deg);
            transform-origin: 40px 40px;
        }

        .lds-heart div {
            top: 32px;
            left: 32px;
            position: absolute;
            width: 32px;
            height: 32px;
            background: rgb(227, 5, 120);
            animation: lds-heart 1.2s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        .lds-heart div:after,
        .lds-heart div:before {
            content: " ";
            position: absolute;
            display: block;
            width: 32px;
            height: 32px;
            background: rgb(227, 5, 120);
        }

        .lds-heart div:before {
            left: -24px;
            border-radius: 50% 0 0 50%;
        }

        .lds-heart div:after {
            top: -24px;
            border-radius: 50% 50% 0 0;
        }

        @keyframes lds-heart {
            0% {
                transform: scale(0.95);
            }

            5% {
                transform: scale(1.1);
            }

            39% {
                transform: scale(0.85);
            }

            45% {
                transform: scale(1);
            }

            60% {
                transform: scale(0.95);
            }

            100% {
                transform: scale(0.9);
            }
        }

        .card-dienthoai {
            height: 330px;

            padding: 16px;
            border: 1px solid #f3f3f3 !important;

        }

        .card-dienthoai:hover {
            -webkit-box-shadow: 0 2px 12px rgba(0, 0, 0, .12);
            -moz-box-shadow: 0 2px 12px rgba(0, 0, 0, .12);
            box-shadow: 0 2px 12px rgba(0, 0, 0, .12);
        }

        .card-dienthoai img {
            width: 180px;
            height: 150px;
            cursor: pointer;
        }

        .card-dienthoai #single-product-tieude a {
            font-size: 14px;
            text-decoration: none;
            color: black;
        }

        .card-dienthoai #single-product-tieude a:hover {
            color: #5a88ca;
        }

        #single-product-tieude {
            margin: 0 0 0 0px;
            margin-top: 10px;
            line-height: 17px;
        }

        .product-carouse ins {
            color: #e83a45;
            display: block;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            margin-bottom: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .product-carouse {
            margin-top: 15px;
        }
    </style>
</head>

<body>

</body>

</html>
<?php
$hang = 'hang';
$nhucau = 'nhucau';
session_start();
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM billday WHERE status = 2";
if (isset($_SESSION['USER_NAME'])) {
    $Username = $_SESSION['USER_NAME'];
    echo $Username;
}
require "../inc/headerweb.php";

?>
<!-- End mainmenu area                      -->
<!-- Slider -->


<div id="slider" class="slider-area">

    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <?php
            $sql = "SELECT * FROM sanpham WHERE gia > 12000000";
            $query = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($query);
            if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
            ?>

                    <li>
                        <img src="<?php echo $row['img'] ?>" style="width : 200px ; height : 200px;" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                <span class="primary"><strong><?php echo $row['tensp'] ?></strong></span>
                            </h2>
                            <h4 class="caption subtitle"><?php echo $row['gia'] ?> VND</h4>
                            <a class="caption button-radius" href="cart.php?id=<?php echo $row['idsp'] ?>"><span class="icon"></span>Shop now</a>
                        </div>
                    </li>
            <?php
                }
            }
            ?>
        </ul>
    </div>
</div>






</div> <!-- End main content area -->
<!-- <div class="abc">Hiển thị</div> -->
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="latest-product" class="latest-product">
                    <h2 class="section-title"></h2>
                    <div id="product-carousel" class="product-carousel">

                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM sanpham WHERE GIA < 9000000 ");
                        $num = mysqli_num_rows($sql);
                        if ($num > 0) {
                            while ($row = mysqli_fetch_array($sql)) {
                        ?>

                                <div id="single-product" class="single-product">
                                    <div class="product-f-image">
                                        ` <img id="single-product-img" src="<?php echo $row['img'] ?>" style="width = 270px; height = 120px;" alt="">
                                        <div class="product-hover">
                                            <a href="cart.php?id=<?php echo $row['idsp'] ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>mua sản phẩm</a>
                                            <a href="single-product.php?search=<?php echo $row['tensp'] ?>" class="view-details-link"><i class="fa fa-link"></i> xem chi tiết</a>
                                        </div>
                                    </div>

                                    <h2 id="single-product-tieude"><a href="single-product.html"><?php echo $row['tensp']; ?></a></h2>

                                    <div id="single-product-gia" class="product-carousel-price">
                                        <ins><?php echo $row['gia'] ?> VND</ins>

                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End brands area -->



<!-- End product widget area -->


<!-- End footer top area -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 800px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="layout-bl" style="width: 780px;">
                    <div id="dc">
                        <h6>Đã chọn:</h6>
                        <div style="display: flex;">
                            <div class="layout-spc" id="showHang">

                            </div>
                            <div class="layout-spc" id="showGia" style="display: flex;align-items: flex-end;flex-wrap: wrap;">

                            </div>

                        </div>
                        <hr />
                    </div>
                    <div class="tl">
                        <h6> Hãng :</h6>
                        <div class="list-h" id="hang-phone">
                            <div class="card-hang">
                                <img src="https://cdn.tgdd.vn/Brand/1/logo-iphone-220x48.png" alt="">
                            </div>
                            <div class="card-hang">
                                <img src="https://cdn.tgdd.vn/Brand/1/logo-iphone-220x48.png" alt="">
                            </div>
                            <div class="card-hang">
                                <img src="https://cdn.tgdd.vn/Brand/1/logo-iphone-220x48.png" alt="">
                            </div>
                            <div class="card-hang">
                                <img src="https://cdn.tgdd.vn/Brand/1/logo-iphone-220x48.png" alt="">
                            </div>
                            <div class="card-hang">
                                <img src="https://cdn.tgdd.vn/Brand/1/logo-iphone-220x48.png" alt="">
                            </div>
                            <div class="card-hang">
                                <img src="https://cdn.tgdd.vn/Brand/1/logo-iphone-220x48.png" alt="">
                            </div>
                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <hr />
                    <div class="chon">
                        <div class="chon-1">
                            <h6>Giá</h6>
                            <div id="gia-phone">

                            </div>
                        </div>
                        <div class="chon-2">
                            <h6>
                                Loại điện thoại
                                <div class="ldt_dt" id="ldt-phone">

                                </div>

                            </h6>
                        </div>
                        <div class="chon-3" style="width: 380px;">
                            <div>
                                <h6>Nhu Cầu</h6>
                                <div class="list_nc" id="dexuat-phone">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="chon">
                        <div class="chon-1">
                            <h6>Ram</h6>
                            <div class="list_raw" id="ram-phone">

                            </div>
                        </div>
                        <div class="chon-2">
                            <h6>Dung lượng phù hợp</h6>
                            <div class="list_raw" id="dlph-phone">
                            </div>
                        </div>
                        <div class="chon-3">

                        </div>
                    </div>
                </div>
                <div style="display:flex; width: 320px;justify-content: space-between; margin: auto;">
                    <button type="button" style="width: 150px;height: 32px;" data-dismiss="modal" class=" btn btn-outline-danger">Hủy</button>
                    <div id="ketqua" class="button" style="width: 150px; height: 32px;" data-dismiss="modal">
                        <i class="fa-solid fa-circle-notch icon spinner"></i>
                        <span class="btn-text" user-selcect="none"> <a id="getLink" href="#"> </a></span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                    <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-card-icon">
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End footer bottom area -->
<div id="loading" style="width: 100vw; overflow: hidden;height: 100vh; display: flex;justify-content: center;align-items: center;position: fixed;top:0px;left: 0px; background: white; display: none;z-index: 9999">
    <div class="lds-heart">
        <div></div>
    </div>
</div>
<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="js/main.js"></script>

<!-- Slider -->
<script type="text/javascript" src="js/bxslider.min.js"></script>
<script type="text/javascript" src="js/script.slider.js"></script>
<script>
 
    
    // viết hàm nhận api step 1 : (object gồm giá , hãng ,đề xuất, dungluong, dung lượng lưu trữ , loại điện thoại)
    
    // step 2 : fetch api tới back end (nhận số lượng )

    // step 3 : thay đổi url , hiển thị sản phẩm .
    
    
   
</script>
</body>

</html>