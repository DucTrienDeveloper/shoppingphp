<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
     <link href="css/styles.css" rel="stylesheet" />
     <link href ="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"/>
     <link href =" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
     <link hret ="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"/>
     <link href="https://canvasjs.com/assets/css/jquery-ui.1.11.2.min.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <link href ="css/index.css"  rel="stylesheet" />
     <link href ="css/editor.css" rel="stylesheet" />

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3"  href="index.php">ShopPhone</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Quản Trị</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Quản Lý</div>
                       
                        <div  aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav>
                                <a class="nav-link" href="loaisanpham.php">Loai Sản Phẩm</a>
                                <a class="nav-link" href="sanpham.php">Sản Phẩm</a>
                                <a class="nav-link" href="nhanvien.php">Nhân Viên</a>
                                <a class="nav-link" href="hoadon.php">Hóa đơn</a>
                                <a class="nav-link" href="khachhang.php">Khách Hàng</a>
                                <a class="nav-link" href="doanhthu.php">Doanh Thu</a>
                                <a class="nav-link" href="taikhoan.php">Tài Khoản</a>
                                <a class="nav-link" href="top5.php">Top 5 sản phẩm bán nhiều nhất</a>
                                <a class="nav-link" href="danhsanhhethan.php">Danh sách sản phẩm hết hạn</a>
                                <a class="nav-link" href="tọpitnhat.php">Top 5 sản phẩm bán ít nhất</a>
                            </nav>
                        </div>
                    </div>
                </div>
              
            </nav>
        </div>