<?php
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
require "inc/header.php";

?>



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

<!-- <div class="brands-area">
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
</div> -->
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
                        <!-- <div class="slidecontainer">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                        </div> -->
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
    let listKey = []
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

            const res = await fetch("fetch.php", {
                method: "GET",
                headers: {
                    "Content-Type": "application/json"
                }
            });
            let output = await res.json();
            console.log(output, "output");
            return output
        }

        danhSachHienThi = await getHang()
        listKey = Object.keys(danhSachHienThi)
        console.log(listKey, "listkey")
        console.log(danhSachHienThi, "danhsach trong api");
        hienThiDanhSach();
        showUIUX()
    }

    

   
    





    const handlleUrl = async () => {


        let url = location.href;
        console.log(url)
        let layfilter = url.split("?").splice(1)
        if (layfilter.length > 0) {
            let list = layfilter.toString().split("&");
            console.log(list)
            for (index = 0; index < list.length; index++) {
                let urlItem = list[index].split("=")
                let key = urlItem[0]
                let valueString = urlItem.splice(1).toString();
                let danhsach = valueString.split(",")


                for (item = 0; item < danhsach.length; item++) {
                    console.log(danhsach[item],'handleurl')
                    handleData(key, danhsach[item])
                    console.log(key,"key");
                    console.log(danhsach[item],'danhsach')
                }

            }
            handelefilter()


            let url = 'http://localhost/thegioididong/getds.php?modal=1&hang=iphone';
            for (indexKey = 0; indexKey < listKey.length; indexKey++) {
                console.log(boloc,"bolocinfor") 
                if (boloc[listKey[indexKey]].length > 0) {
                    url += listKey[indexKey] + '=' + boloc[listKey[indexKey]].join() + "&"
                }
            }
            console.log(url,"url gửi đi")
            Api = url.slice(0, -1)
            
            // console.log(link)
            // window.location.replace(link);
            

            try {
                let loading = document.querySelector("#loading");
                loading.style.display = "flex";

                const res = await fetch(Api, {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json"
                    }
                });
                // console.log(Api)

                let danhsach = await res.json();
                console.log(Api, "danhsachAPI", "APi trả về ")
                loading.style.display = "none";

                // window.location.replace(link);8
                // console.log(link)


                return html(danhsach)

                return output
            } catch (error) {

            }
        }






    }



    const countValue = () => {
        let count = 0;
        for (let index = 0; index < listKey.length; index++) {

            count = boloc[listKey[index]].length + count;
        }
        console.log(count, "count")
    }

    const hienThiDanhSach = async () => {
        if (!!danhSachHienThi) {
            const hangPhone = document.getElementById("hang-phone")
            const giaPhone = document.getElementById("gia-phone")
            const ldtPhone = document.getElementById("ldt-phone")
            const ncPhone = document.getElementById("dexuat-phone")
            const rawphone = document.getElementById("ram-phone")
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
        countValue()
        showHang.innerHTML = showHtml
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
        let link = 'http://localhost/thegioididong/getsl.php?';
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
            console.log(sumNumber)
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
        // console.log(danhsach, "dad")
        if (danhsach && danhsach.length > 0) {
            let hienthi = ""
            let produc = document.querySelector("#product-carousel");
            if (produc) {
                produc.remove();
            }
            let late = document.querySelector("#latest-product")
            late.innerHTML = hienthi; //clear data cũ


            for (let index = 0; index < danhsach.length; index++) {
                // console.log(danhsach, "qrwer")
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
            late.innerHTML = hienthi // thêm data cũ
            late.style.display = "flex";
            late.style.flexWrap = "wrap";
            late.style.gap = "24px"
        }



    }


    btn.onclick = handleClickKetQua = async () => {
        // let  hienthiurl  = "http://localhost/php%20shopping/shoppingphp/customer/getds.php?"
        let url = 'http://localhost/thegioididong/getds?modal=1&';
        let hienthi = 'http://localhost/thegioididong/index.php?modal=1&';
        for (indexKey = 0; indexKey < listKey.length; indexKey++) {
            if (boloc[listKey[indexKey]].length > 0) {
                url += listKey[indexKey] + '=' + boloc[listKey[indexKey]].join() + "&"
                hienthi += listKey[indexKey] + '=' + boloc[listKey[indexKey]].join() + "&"
            }
        }
        Api = url.slice(0, -1)
        link = hienthi.slice(0, -1)
        window.location.replace(link);



    }


    handlleUrl();
    // getshowfilter()
    // hienThiDanhSach()
    showUIUX()

    // hienThiDanhSach()
    console.log(danhSachHienThi, "danhSachHienThi")
</script>
</body>

</html>