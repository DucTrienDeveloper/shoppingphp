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
?>

<body>

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    

                  
                </div>
                <?php
                $sql = "SELECT * FROM sanpham where idsp = $id";
                $query = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($query);
                if ($num > 0) {
                    while ($row = mysqli_fetch_array($query)) {

                ?>
                        <div class="col-md-8">
                            <div class="product-content-right">
                                <div class="woocommerce">
                                    <form method="post" action="#">
                                        <table cellspacing="0" class="shop_table cart">
                                            <thead>
                                                <tr>
                                                    <th class="product-remove">&nbsp;</th>
                                                    <th class="product-thumbnail">&nbsp;</th>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product-quantity">Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <form action="code.php" method="post">
                                                <tr class="cart_item">
                                                    <td class="product-remove">
                                                        <a title="Remove this item" class="remove" href="#">×</a>
                                                    </td>

                                                    <td class="product-thumbnail">
                                                        <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/product-thumb-2.jpg"></a>
                                                    </td>

                                                    <td class="product-name">
                                                        <?php echo $row['tensp'] ?>
                                                    </td>

                                                    <input type="hidden" id="id" value="<?php echo $row['id'];?>">
                                                    <td class="product-price">
                                                        <span class="amount"><?php echo $row['gia'] ?></span>
                                                    </td>

                                                    <td class="product-quantity">
                                                        1
                                                    </td>
                                                    </tr>
                                                <tr>
                                                    <td class="actions" colspan="6">

                                                    <a href="code.php?id=<?php echo $row['idsp']?>&&gia=<?php echo $row['gia']?>">Buy</a>
                                                    </td>
                                                </tr>
                                                </form>
                                            </tbody>
                                        </table>
                                    </form>

                                    <div class="cart-collaterals">
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    </script>
    <script type="text/javascript">
        function submitBuy()
        <?php
        echo "vao được";
        ?>
        $(document).ready(function() {
            var data = {
                tensp: $row["tensp"],
                gia: $row["giá"],
                soluong: 1,
                total: $row["giá"],
                tenkh: $Username,
                id : $id,
                idKH : $idKH,
   
            };
            // $.ajax({
            //     url: 'function.php',
            //     type: 'post',
            //     data: data,
            //     success: function(response) {
            //         alert(response);
            //         if (response == "Buy Successful") {
            //             window.location.reload();
            //         }
            //     }
            // });
        })
    </script>




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


            </div>
        </div>
    </div> <!-- End footer top area -->

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
    </div> <!-- End footer bottom area -->

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