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
if(isset($_GET['search'])){
    $search = $_GET['search'];
}



// $search = $_GET['search'];
// $search = "iPhone 14 Plus";
$sql = "SELECT * FROM `sanpham` WHERE tensp LIKE '{$search}%'ORDER BY gia DESC LIMIT 5";
$query = mysqli_query($conn, $sql);
$nums = mysqli_num_rows($query);
class sanpham
{
    public $ten;
    public $gia;
    // public $dungluong;
    public $img;
}
$sanphams = array();
if (!$query) {
    die("Query Failed.");
}
if($nums > 0){
  
    while($row = mysqli_fetch_array($query)){
        $sanpham = new sanpham();
        $sanpham->ten = $row['tensp'];
        $sanpham->gia = $row['gia'];
        $sanpham->img = $row['img'];
        $sanphams[] = $sanpham;
    }
    echo json_encode($sanphams);
    exit();
  
   
}else{
    $sql = "SELECT sanpham.tensp,sanpham.gia,sanpham.img FROM sanpham WHERE sanpham.dungluong = (SELECT iddungluong FROM luuluong WHERE (luuluong.dungluong = $search) AND (luuluong.loai = 'RAM') )";
    $query = mysqli_query($conn, $sql);
    $nums = mysqli_num_rows($query);
    if($nums > 0){
        while($row = mysqli_fetch_array($query)){
            echo $row['tensp'];
            echo $row['gia'];
            echo $row['img'];
        }
        echo "<br/>";
        echo "ram";
    }
}