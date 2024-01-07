<?php
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

error_reporting(0);
class nhucau{
    public $loai0;
    public $loai1;
    public $loai2;
    public $loai3;
    public $loai4;
    public $loai5;
    public $loai6;

    function set_loai0($loai0){
        $this->loai0 = $loai0;
    }
    function set_loai1($loai1){
        $this->loai1 = $loai1;
    }
    function set_loai2($loai2){
        $this->loai2 = $loai2;
    }
    function set_loai3($loai3){
        $this->loai3 = $loai3;
    }
    function set_loai4($loai4){
        $this->loai4 = $loai4;
    }
    function set_loai5($loai5){
        $this->loai5 = $loai5;
    }
    function set_loai6($loai6){
        $this->loai6 = $loai6;
    }
}
$noidung = new nhucau;
$sql = mysqli_query($conn,"SELECT noidung FROM nhucau");
$row = mysqli_fetch_all($sql);

if($row["noidung"] = 'Chơi game / Cấu hình cao'){
     $noidung->set_loai0('Chơi game / Cấu hình cao');
}

if($row["noidung"] = 'Chụp ảnh / quay phim'){
    $noidung->set_loai1('Chụp ảnh / quay phim');
}

if($row["noidung"] = 'Livestream'){
    $noidung->set_loai2('Livestream');
}

if($row["noidung"] = 'Pin khủng và Chơi game / Cấu hình cao'){
    $noidung->set_loai3('Pin khủng và Chơi game / Cấu hình cao');
}

if($row["noidung"] = 'Cấu hình cao,Chụp ảnh/quay phim,Livestream'){
    $noidung->set_loai4('Cấu hình cao,Chụp ảnh/quay phim,Livestream');
}

if($row["noidung"] = 'Pin khủng'){
    $noidung->set_loai5('Pin khủng');
}

if($row["noidung"] = 'Chơi game / Cấu hình cao và Chụp ảnh / quay phim'){
    $noidung->set_loai6('Chơi game / Cấu hình cao và Chụp ảnh / quay phim');
}

$output = $noidung;

// $sql = mysqli_query($conn, "SELECT noidung FROM nhucau ");
// $output = [];
// if ($sql->num_rows > 0) {
//     while($row = mysqli_fetch_all($sql)){
//        $output = $row;
//     }
// }else{
//     $output["empty"]="empty";
// }
 echo json_encode($output);

?>









