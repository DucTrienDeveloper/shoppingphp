<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/fillterindex.css">
    <link rel="stylesheet" href="css/step2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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


<div class="slider-area">

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
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="latest-product" class="latest-product">
                    <h2 class="section-title">Điện thoại giá rẻ</h2>
                    <div id="product-carousel" class="product-carousel" style="display: flex;flex-wrap: nowrap">

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
                                        <!-- <del>$100.00</del> -->
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

<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <img src="img/brand1.png" alt="">
                        <img src="img/brand2.png" alt="">
                        <img src="img/brand3.png" alt="">
                        <img src="img/brand4.png" alt="">
                        <img src="img/brand5.png" alt="">
                        <img src="img/brand6.png" alt="">
                        <img src="img/brand1.png" alt="">
                        <img src="img/brand2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End brands area -->


<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top Sellers</h2>
                    <a href="" class="wid-view-more">View All</a>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Apple new mac book 2015</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Apple new i phone 6</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Recently Viewed</h2>
                    <a href="#" class="wid-view-more">View All</a>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Sony playstation microsoft</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Sony Smart Air Condtion</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top New</h2>
                    <a href="#" class="wid-view-more">View All</a>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Apple new i phone 6</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Sony playstation microsoft</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End product widget area -->

<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                    <h2>u<span>Stora</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                    <div class="footer-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">User Navigation </h2>
                    <ul>
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Order history</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Vendor contact</a></li>
                        <li><a href="#">Front page</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categories</h2>
                    <ul>
                        <li><a href="#">Mobile Phone</a></li>
                        <li><a href="#">Home accesseries</a></li>
                        <li><a href="#">LED TV</a></li>
                        <li><a href="#">Computer</a></li>
                        <li><a href="#">Gadets</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Newsletter</h2>
                    <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                            <div class="list_raw" id="raw-phone">

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
                        <span class="btn-text" user-selcect="none"> <a  id="getLink" href="#"> </a></span>
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
    let boloc = {
        hang: [],
        gia: [],
        dexuat: [],
        ldt: [],
        dungluong: [],
        dllt: []

    };
    let btn = document.querySelector("#ketqua");

    let danhSachHienThi = {}
    let listKey = ["gia", "hang", "dexuat", "dungluong", "dllt", "ldt"]
    // let link = "?hang = iphone,samsung"
    //     const putDb = async () => {

    // const res = await fetch("test.php", {
    //     method: "GET",
    //     headers: {
    //         "Content-Type": "application/json"
    //     }
    // });
    // let output = await res.json();
    // console.log(output);
    // // return danhSachHienThi =  await output






    // }

    const getshowfilter = async () => {
        const getHang = async () => {
            try {
                const res = await fetch("fetch.php", {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json"
                    }
                });
                let output = await res.json();
                console.log(output);
                return output

            } catch (error) {

            }
        }

        danhSachHienThi = await getHang()
        hienThiDanhSach();
        showUIUX()
    }





    const hienThiDanhSach = async () => {
        if (!!danhSachHienThi) {
            const hangPhone = document.getElementById("hang-phone")
            const giaPhone = document.getElementById("gia-phone")
            const ldtPhone = document.getElementById("ldt-phone") 
            const ncPhone = document.getElementById("dexuat-phone")
            const rawphone = document.getElementById("raw-phone")
            // const dlltPhone = document.getElementById("dllt-phone")
            const dlphPhone = document.getElementById("dlph-phone")

            console.log(hangPhone)

            if (danhSachHienThi.hang.length > 0) {
                let htmlHang = ""
                for (let index = 0; index < danhSachHienThi.hang.length; index++) {
                    htmlHang += "<div  id='" + danhSachHienThi.hang[index].value + "'   onclick=\"handleClick('hang','" + danhSachHienThi.hang[index].value + "','" + danhSachHienThi + "')\"  class=\"spc\">" + "<p>" + danhSachHienThi.hang[index].tieude + "</p> </div>"
                }
                hangPhone.innerHTML = htmlHang
            }
            if (danhSachHienThi.gia.length > 0) {
                let htmlGia = "";
                for (let index = 0; index < danhSachHienThi.gia.length; index++) {
                    htmlGia += "<div id='" + danhSachHienThi.gia[index].value + "'  onclick=\"handleClick('gia','" + danhSachHienThi.gia[index].value + "')\"  class=\"spc\">" + "<p>" + danhSachHienThi.gia[index].tieude + "</p> </div>"
                }
                giaPhone.innerHTML = htmlGia
            }

            if (danhSachHienThi.dungluong.length > 0) {
                let htmlraw = "";
                console.log("manh dep trai")
                for (let index = 0; index < danhSachHienThi.dungluong.length; index++) {
                    htmlraw += "<div id= '" + danhSachHienThi.dungluong[index].value + "'  onclick=\"handleClick('dungluong','" + danhSachHienThi.dungluong[index].value + "')\"  class=\"spc\">" + "<p>" + danhSachHienThi.dungluong[index].tieude + "</p> </div>"
                }
                rawphone.innerHTML = htmlraw
            }
            if (danhSachHienThi.dexuat.length > 0) {
                let htmlnc = "";
                for (let index = 0; index < danhSachHienThi.dexuat.length; index++) {
                    htmlnc += "<div id='" + danhSachHienThi.dexuat[index].value + "'  onclick=\"handleClick('dexuat','" + danhSachHienThi.dexuat[index].value + "')\"  class=\"spc\">" + "<p>" + danhSachHienThi.dexuat[index].tieude + "</p> </div>"
                }
                ncPhone.innerHTML = htmlnc
            }

            if (danhSachHienThi.ldt.length > 0) {
                let htmlldt = "";
                for (let index = 0; index < danhSachHienThi.ldt.length; index++) {
                    htmlldt += "<div id='" + danhSachHienThi.ldt[index].value + "'  onclick=\"handleClick('ldt','" + danhSachHienThi.ldt[index].value + "')\"  class=\"card_ldt\">" + "<img src='" + danhSachHienThi.ldt[index].img + "'>" + "<p class=\"text\">" + danhSachHienThi.ldt[index].tieude + "</p> </div>"
                }
                ldtPhone.innerHTML = htmlldt
            }



            if (danhSachHienThi.dllt.length > 0) {
                let htmldllt = "";
                for (let index = 0; index < danhSachHienThi.dllt.length; index++) {
                    htmldllt += "<div id= '" + danhSachHienThi.dllt[index].value + "'  onclick=\"handleClick('dllt','" + danhSachHienThi.dllt[index].value + "')\"  class=\"spc\">" + "<p>" + danhSachHienThi.dllt[index].tieude + "</p> </div>"
                }
                dlphPhone.innerHTML = htmldllt
            }


        }



    };

    function handleClick(key, value, danhSachHienThi) {
        handleData(key, value)
        showUIUX()
        handelefilter();

    }

    const showUIUX = async () => {
        const showHang = document.getElementById("showHang")
        let showHtml = "";
        let deleteAll = `<div> <p onclick=\"handleDeleteAll()\" class="xoatatca" id="deleteALL" style="color: blue; font-size: 14px;cursor: pointer;}">Xóa tất cả</p> </div>`
        if (boloc.dexuat.length > 0 || boloc.dungluong.length > 0 || boloc.hang.length > 0 || boloc.gia.length > 0 || boloc.dllt.length > 0 || boloc.ldt.length > 0) {
            for (indexKey = 0; indexKey < listKey.length; indexKey++) {
                for (let index = 0; index < danhSachHienThi[listKey[indexKey]].length; index++) {
                    let id = document.getElementById(danhSachHienThi[listKey[indexKey]][index].value)
                    id.style.border = "1px solid #666"
                    for (let item = 0; item < boloc[listKey[indexKey]].length; item++) {
                        if (boloc[listKey[indexKey]][item] == danhSachHienThi[listKey[indexKey]][index].value) {
                            let id = document.getElementById(danhSachHienThi[listKey[indexKey]][index].value)
                            id.style.border = "2px solid #288ad6"
                            showHtml += "<div   onclick=\"handleClick('" + listKey[indexKey] + "','" + danhSachHienThi[listKey[indexKey]][index].value + "')\"  class=\"spc\">" + "<p>" + danhSachHienThi[listKey[indexKey]][index].tieude + "</p> " + " &emsp; <i class=\"fa-regular fa-calendar-xmark\" \></i> </div>"
                        }
                    }
                }
            }
            showHtml += deleteAll

        } else {
            for (indexKey = 0; indexKey < listKey.length; indexKey++) {
                for (let index = 0; index < danhSachHienThi[listKey[indexKey]].length; index++) {
                    let id = document.getElementById(danhSachHienThi[listKey[indexKey]][index].value)
                    id.style.border = "1px solid #666"

                }
            }
            console.log(boloc, "afdsa")
        }

        showGia.innerHTML = showHtml
    }

    const handleDeleteAll = () => {
        boloc.hang.length = 0
        boloc.dexuat.length = 0
        boloc.dungluong.length = 0
        boloc.gia.length = 0
        boloc.ldt.length = 0
        boloc.dllt.length = 0
        showUIUX();
        handelefilter()
    }

    function handleData(key, value) {
        if (key === "hang") {
            if (boloc.hang.length > 0) {
                for (let index = 0; index < boloc.hang.length; index++) {
                    if (value === boloc.hang[index]) {
                        return boloc.hang.splice(index, 1)
                    }
                }
                return boloc.hang.push(value)
            }
            return boloc.hang.push(value)
        }
        if (key === "gia") {
            if (boloc.gia.length > 0) {
                for (let index = 0; index < boloc.gia.length; index++) {
                    if (value === boloc.gia[index]) {
                        return boloc.gia.splice(index, 1)
                    }
                }
                return boloc.gia.push(value)

            }
            return boloc.gia.push(value)
        }
        if (key === "dexuat") {
            if (boloc.dexuat.length > 0) {
                for (let index = 0; index < boloc.dexuat.length; index++) {
                    if (value === boloc.dexuat[index]) {
                        return boloc.dexuat.splice(index, 1)
                    }
                }
                return boloc.dexuat.push(value)

            }
            return boloc.dexuat.push(value)
        }
        if (key === "dungluong") {
            if (boloc.dungluong.length > 0) {
                for (let index = 0; index < boloc.dungluong.length; index++) {
                    if (value === boloc.dungluong[index]) {
                        return boloc.dungluong.splice(index, 1)
                    }
                }
                return boloc.dungluong.push(value)

            }

            return boloc.dungluong.push(value)
        }
        if (key === "dllt") {
            if (boloc.dllt.length > 0) {
                for (let index = 0; index < boloc.dllt.length; index++) {
                    if (value === boloc.dllt[index]) {
                        return boloc.dllt.splice(index, 1)
                    }
                }
                return boloc.dllt.push(value)

            }
            return boloc.dllt.push(value)
        }
        if (key === "ldt") {
            if (boloc.ldt.length > 0) {
                for (let index = 0; index < boloc.ldt.length; index++) {
                    if (value === boloc.ldt[index]) {
                        return boloc.ldt.splice(index, 1)
                    }
                }
                return boloc.ldt.push(value)

            }
            return boloc.ldt.push(value)
        }
    }



    const handelefilter = async () => {
        let link = 'http://localhost/php%20shopping/shoppingphp/customer/getsl.php?';
        for (indexKey = 0; indexKey < listKey.length; indexKey++) {
            if (boloc[listKey[indexKey]].length > 0) {
                link += listKey[indexKey] + '=' + boloc[listKey[indexKey]].join() + "&"

            }

        }
        postApi = link.slice(0, -1)
        console.log(postApi);


        // fetch(postApi).then(function(response) {
        //     let response = await response.json();

        // }).then(function(posts) {
        //     console.log(posts);
        // });

        try {
            let btn = document.querySelector("#ketqua"),
                spinIcon = document.querySelector(".spinner"),
                btnText = document.querySelector(".btn-text");
            btn.style.cursor = "wait";
            btn.classList.add("checked");
            spinIcon.style.display = "block";
            spinIcon.classList.add("spin");
            btnText.textContent = "Loading";
            const res = await fetch(postApi, {
                method: "GET",
                headers: {
                    "Content-Type": "application/json"
                }
            });
            let sumNumber = await res.json()
            if (sumNumber.soluong.soluong > 0) {
                btn.style.pointerEvents = "auto"
                btn.style.cursor = "pointer";
                btn.style.background = "#4070f4"

                spinIcon.style.display = "none";
                btnText.textContent = "Xem " + sumNumber.soluong.soluong + " kết quả ";

            } else {
                btn.style.pointerEvents = "none";
                spinIcon.style.display = "none";
                btn.style.background = "red"
                btnText.textContent = "Xem " + sumNumber.soluong.soluong + " kết quả ";

            }

            return output
        } catch (error) {

        }

        // fetch(postApi2).then(function(response){
        //     return response.json();
        // }).then(function(posts2){
        //     console.log(posts2);
        // });







    }

    const html = (danhsach) => {
        console.log(danhsach, "dad")
        if (danhsach && danhsach.length > 0) {
            let hienthi = ""
            let produc = document.querySelector("#product-carousel");
            if (produc) {
                produc.remove();
            }
            let late = document.querySelector("#latest-product")
            late.innerHTML = hienthi;


            for (let index = 0; index < danhsach.length; index++) {
                console.log(danhsach, "qrwer")
                hienthi += ` <div id="single-product" class="card-dienthoai" style="width:200px">
                                    <div  class="product-image">
                                         <img  id="single-product-img" src="${danhsach[index].img}"  alt="">
                                    </div>

                                    <h2 id="single-product-tieude"><a href="single-product.html">${danhsach[index].ten}</a></h2>

                                    <div id="single-product-gia" class="product-carouse">
                                        <ins>${Number(danhsach[index].gia).toLocaleString() } VND</ins>
                                        
                                    </div>
                                </div>`

            }
            late.innerHTML = hienthi
            late.style.display = "flex";
            late.style.flexWrap = "wrap";
            late.style.gap = "24px"
        }


    }

    btn.onclick = handleClickKetQua = async () => {
        let  hienthiurl  = "http://localhost/php%20shopping/shoppingphp/customer/getds.php?"
        let url = 'http://localhost/php%20shopping/shoppingphp/customer/getds.php?';
        for (indexKey = 0; indexKey < listKey.length; indexKey++) {
            if (boloc[listKey[indexKey]].length > 0) {
                url += listKey[indexKey] + '=' + boloc[listKey[indexKey]].join() + "&"

            }

        }
        Api = url.slice(0, -1)
        try {
            let loading = document.querySelector("#loading");
            loading.style.display = "flex";

            const res = await fetch(Api, {
                method: "GET",
                headers: {
                    "Content-Type": "application/json"
                }
            });
            let danhsach = await res.json();
            console.log(danhsach, "danhsachAPI")
            loading.style.display = "none";
            return html(danhsach)




            return output
        } catch (error) {

        }

    }



    getshowfilter()
    hienThiDanhSach()
    showUIUX()

    // hienThiDanhSach()
    console.log(danhSachHienThi, "danhSachHienThi")
</script>
</body>

</html>