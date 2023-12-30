<?php
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
require "../inc/headerweb.php";
error_reporting(0);
$tensp = $_GET['tensp'];

echo $tensp;



?>

<body>


    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">


                <div class="col-md-8">
                    <div class="product-content-right">


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">

                                    </div>




                                </div>
                            </div>
                            <?php
                            if (isset($tensp)) {
                                $sql = "SELECT * FROM `sanpham` WHERE tensp = '$tensp';";
                                $query = mysqli_query($conn, $sql);
                                $num = mysqli_num_rows($query);
                                if ($num > 0) {
                                    while ($row = mysqli_fetch_array($query)) {

                            ?>          
                                        
                                        <div class="col-sm-6">
                                            
                                            <div class="product-inner">
                                                <?php
                                                if($row['loaisp'] == 'iphone'){
                                                    $id = 1;
                                                }
                                                if($row['loaisp'] == 'samsung'){
                                                    $id = 2;
                                                }
                                                if($row['loaisp'] == 'oppo'){
                                                    $id = 3;
                                                }    
                                                ?>
                                                <a href="index1.php">Trang chủ /</a>
                                                <a href="phone.php?id=<?php echo $id?>"><?php echo $row['loaisp']?></a>
                                                
                                                <h2 class="product-name"> Tên sản phẩm : <?php echo $row['tensp'] ?></h2>
                                                <div><img src="<?php echo $row['img'] ?>" style="width: 200px; height : 200px" alt=""></div>
                                                <div class="product-inner-price">
                                                Giá sản phẩm : <?php echo $row['gia'] ?> VND
                                                <br>
                                                <a href="cart.php?id=<?php echo $id?>"><input type="submit"name= "form_click"value="Mua"></a> 
                                                </div>



                                            </div>
                                        </div>
                            <?php
                                    }
                                }
                            }
                            ?>
                            <?php
                              $insert = mysqli_query($conn,"SELECT * FROM `mota` WHERE tensp = '$tensp'")  ;
                              
                              $request = mysqli_num_rows($insert);
                              if($request > 0 ){
                                while($output = mysqli_fetch_array($insert)){
                                    ?>

                                    <h4>MÔ TẢ : <?php echo $output['mota']?></h4>
                                    <h4>MÀN HÌNH : <?php echo $output['manhinh']?></h4>
                                    <h4>CAMERA : <?php echo $output['camera']?></h4>
                                    <h4>CPU : <?php echo $output['cpu']?></h4>
                                    <h4>RAM : <?php echo $output['ram']?></h4>
                                    <h4>KÍCH THƯỚC : <?php echo $output['kichthuoc']?></h4>
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
                            <li><a href="">My account</a></li>
                            <li><a href="">Order history</a></li>
                            <li><a href="">Wishlist</a></li>
                            <li><a href="">Vendor contact</a></li>
                            <li><a href="">Front page</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="">Mobile Phone</a></li>
                            <li><a href="">Home accesseries</a></li>
                            <li><a href="">LED TV</a></li>
                            <li><a href="">Computer</a></li>
                            <li><a href="">Gadets</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
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
</body>

</html>