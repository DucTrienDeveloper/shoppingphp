<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Page- Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="style1.css"> -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        ::selection {
            color: #fff;
            background: #664AFF;
        }

        .wrapper {
            max-width: 450px;
            margin: 12px !important
        }

        .wrapper .search-input {
            background: #fff;
            width: 100%;
            border-radius: 5px;
            position: relative;
            z-index: 999999;
        }

        .container {
            height: 20px !important;
            display: contents;

        }

        .search-input.active .autocom-box {
            position: absolute;
            padding: 10px 8px;
            width: 251px;
            opacity: 1;
            background: white;
            pointer-events: auto;
        }

        .wrapper .search-input {
            box-shadow: none !important;
        }

        .search-input input {
            font-size: 14px !important;
            height: 40px !important;

        }

        .search-input .icon {
            height: 40px !important;
            line-height: 40px !important;
        }

        .search-input input {
            height: 55px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            padding: 0 60px 0 20px;
            font-size: 18px;
        }

        .search-input.active input {
            border-radius: 5px 5px 0 0;
        }

        .search-input .autocom-box {
            padding: 0;
            opacity: 0;
            pointer-events: none;
            max-height: 280px;
            overflow-y: auto;
        }

        .search-input.active .autocom-box {
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }

        .autocom-box li {
            list-style: none;
            padding: 8px 12px;
            display: none;
            width: 100%;
            cursor: default;
            border-radius: 3px;
        }

        .search-input.active .autocom-box li {
            display: block;
        }

        .autocom-box li:hover {
            background: #efefef;
        }

        .search-input .icon {
            position: absolute;
            right: 0px;
            top: 0px;
            height: 55px;
            width: 55px;
            text-align: center;
            line-height: 55px;
            font-size: 20px;
            color: #644bff;
            cursor: pointer;
        }
    </style>
</head>

<body style="background-color: white;">



    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index1.php"><img src="../img/logo.png"></a></h1>
                    </div>
                </div>

                <div class="col-sm-6">
                    <!-- <div class="shopping-item">
                        <a href="cart.php">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" style="display: flex !important;">
                    <ul id="host" class="nav navbar-nav">
                        <li><a id="listen" href="#latest-product" data-toggle="modal" data-target="#login">Bộ lọc
                                <strong class="count">
                                    <script></script>
                                </strong>
                            </a></li>


                    </ul>

                    <div>
                        <div class="wrapper">
                            <div class="search-input">
                                <a href="" target="_blank" hidden></a>
                                <input id="live_search" type="text" placeholder="Type to search..">
                                <div class="autocom-box">
                                    <!-- here list are inserted from javascript -->
                                </div>
                                <div class="icon"><i class="fas fa-search"></i></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>



    </div> <!-- End mainmenu area -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        const searchWrapper = document.querySelector(".search-input");
        const inputBox = searchWrapper.querySelector("input");
        const suggBox = searchWrapper.querySelector(".autocom-box");
        const icon = searchWrapper.querySelector(".icon");
        let linkTag = searchWrapper.querySelector("a");
        let dataReturn = {}
        $(document).ready(function() {

            $("#live_search").keyup(function() {
                var input = $(this).val().trim();
                console.log(input, "Không có dữ liệu")
                if (input.length) {
                    console.log(input.length, "Không có dữ liệu")
                    icon.onclick = () => {
                        // webLink = `http://localhost/php%20shopping/shoppingphp`;
                        webLink = `https://www.google.com/search?q=${selectData}`;
                        window.location.replace(webLink);
                    }

                    $.ajax({
                        url: "search_product.php",
                        method: "POST",
                        data: {
                            input: input
                        },
                        dataType: "JSON",


                        success: function(data) {
                            debugger
                            if (data['sanpham'].length || data["keyword"].length) {
                                
                                let keyArray = [` <li style=${"color: blue;"}> gợi ý keyword </li>`];
                                let productArray = [`<li> gợi ý sản phẩm </li>`];

                                for (let index = 0; index < data['key'].length; index++) {
                                    keyArray.push(` <li >${data['key'][index]} </li>`)
                                }

                                for (let number = 0; number < data['sanpham'].length; number++) {
                                    productArray.push(` <li >${data['sanpham'][number].ten} </li>`)
                                }

                                searchWrapper.classList.add("active"); //show autocomplete box
                                showSuggestions(keyArray);
                                showSuggestions(productArray);
                                let allList = suggBox.querySelectorAll("li");
                                for (let i = 0; i < allList.length; i++) {
                                    //adding onclick attribute in all li tag
                                    allList[i].setAttribute("onclick", "select(this)");
                                }
                            } else {
                                showSuggestions(["Không có dữ liệu"])
                            }
                        }
                    });
                } else {

                    showSuggestions([])

                }
            });


        });
        console.log(dataReturn, "datasau");

        let dbReturn = {}
        const getData = document.getElementById("live_search");
        console.log(getData, "getData")

        $("#form").on("submit", function() {
            event.preventDefault();
            if ($("#live_search").val() == "") {
                alert("vui lòng nhập sản phẩm bạn muốn tìm kiếm");
            } else {
                $.ajax({
                    url: "handleproduct.php",
                    method: "get",
                    data: $("#form").serialize(),


                    success: function(data) {
                        console.log(data)
                        emptyArray = data.map((item) => {

                            // passing return data inside li tag
                            return data = `<li>${item.tensp}</li>`;
                        });
                        searchWrapper.classList.add("active"); //show autocomplete box
                        showSuggestions(emptyArray);
                        console.log(emptyArray, "emtpy");
                        let allList = suggBox.querySelectorAll("li");
                        for (let i = 0; i < allList.length; i++) {
                            //adding onclick attribute in all li tag
                            allList[i].setAttribute("onclick", "select(this)");
                        }
                    }
                });

            }
        })

        function select(element) {
            let selectData = element.textContent;
            inputBox.value = selectData;

            webLink = `http://localhost/php%20shopping/shoppingphp/customer/single-product.php?tensp=${selectData}`;
            window.location.replace(webLink);

            searchWrapper.classList.remove("active");
        }

        function showSuggestions(list) {
            debugger
            let listData_1;
            if (!list.length > 1) {
                listData_1 = `<li>  </li>`;
            } else {
                listData_1 = list.join('');
            }
            suggBox.innerHTML = listData_1;
            console.log(suggBox,'innerHTML');
        }
        function showSuggestions_two(list) {
            let listData;
            if (!list.length > 1) {
                listData = `<li>  </li>`;
            } else {
                listData = list.join('');
            }
            suggBox.innerHTML = listData;
        }



        // var handleClick = document.getElementById("live_search");
        // handleClick.addEventListener("keypress", function(event){
        //     if (event.key === "Enter") {
        //         var data = handleClick.val();
        //         console.log(data,"data enter");
        //     }
        // })
    </script>

</html>