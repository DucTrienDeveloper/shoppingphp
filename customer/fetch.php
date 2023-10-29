<?php


$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

error_reporting(0);
class hang 
{
    public $tieude;
    public $value;


    function set_iphone($iphone)
    {
        $this->tieude = $iphone;
    }
    function set_value($iphone)
    {
        $this->value = $iphone;
    }
}
class nhucau
{
    public $tieude;
    public $value;


    function set_tieude($loai0)
    {
        $this->tieude = $loai0;
    }
    function set_value($loai1)
    {
        $this->value = $loai1;
    }
}
class luuluong
{
    public $tieude;
    public $value;
    function set_tieude($dungluong)
    {
        $this->tieude = $dungluong;
    }
    function set_value($chi_so)
    {
        $this->value = $chi_so;
    }
}
class dungluong
{
    public $tieude;
    public $value;
    function set_tieude($dungluong)
    {
        $this->tieude = $dungluong;
    }
    function set_value($chiso)
    {
        $this->value = $chiso;
    }
}
class gia
{
    public $tieude;
    public $value;
    function set_tieude($gia)
    {
        $this->tieude = $gia;
    }
    function set_value($gia)
    {
        $this->value = $gia;
    }
}
class loaidt{
    public $tieude;
    public $img;
    public $value;
    function set_tieude($tieude){
        $this->tieude = $tieude;
    }
    function set_img($img){
        $this->img = $img;
    }
    function set_value($value){
        $this->value = $value;
    }
}
$android = new loaidt;
$IOS = new loaidt;

$chiso2 = new luuluong;
$chiso4 = new luuluong;
$chiso5 = new luuluong;
$chiso6 = new luuluong;
$chiso7 = new luuluong;

$chi_so2 = new dungluong;
$chi_so4 = new dungluong;
$chi_so5 = new dungluong;
$chi_so6 = new dungluong;
$chi_so7 = new dungluong;



$noidung = new nhucau;
$noidung1 = new nhucau;
$noidung2 = new nhucau;
$noidung3 = new nhucau;
$noidung4 = new nhucau;
$gia = new gia;
$gia1 = new gia;
$gia2 = new gia;
$dienthoai = new hang;
$dienthoai1 = new hang;
$dienthoai2 = new hang;

$mysql = mysqli_query($conn,"SELECT nameimg FROM img WHERE loai = 'android' ");
$get = mysqli_fetch_array($mysql);
$img_1 = $get['nameimg'];
$android->tieude = 'Android';
$android->img = $img_1;
$android->value = 'android';

$mysql_1 = mysqli_query($conn,"SELECT nameimg FROM img WHERE loai = 'IOS' ");
$get_1 = mysqli_fetch_array($mysql_1);
$img_2 = $get_1['nameimg'];
$IOS->tieude = 'iPhone(iOS)';
$IOS->img = $img_2;
$IOS->value = 'IOS';


    $gia->set_tieude('nhỏ hơn 5 triệu');
    $gia->set_value('duoi5trieu');


    $gia1->set_tieude('từ 5 tới 10 triệu');
    $gia1->set_value('tu5toi10trieu');


    $gia2->set_tieude('trên 10 triệu');
    $gia2->set_value('tren10trieu');

$sql = mysqli_query($conn, "SELECT dungluong,loai FROM `luuluong` WHERE loai = 'RAM' ");
$query = mysqli_fetch_all($sql);


if ($query["dungluong"] = '4' && $query["loai"] = 'RAM') {
    $chiso2->set_tieude('4 GB');
    $chiso2->set_value('4');
}
if ($query["dungluong"] = '8' && $query["loai"] = 'RAM') {
    $chiso4->set_tieude('8 GB');
}
if ($query["dungluong"] = '8' && $query["loai"] = 'RAM') {
    $chiso4->set_value('8');
}
if ($query["dungluong"] = '12' && $query["loai"] = 'RAM') {
    $chiso5->set_tieude('12 GB');
}
if ($query["dungluong"] = '12' && $query["loai"] = 'RAM') {
    $chiso5->set_value('12');
}
if ($query["dungluong"] = '24' && $query["loai"] = 'RAM') {
    $chiso6->set_tieude('24 GB');
}
if ($query["dungluong"] = '24' && $query["loai"] = 'RAM') {
    $chiso6->set_value('24');
}
if ($query["dungluong"] = '32' && $query["loai"] = 'RAM') {
    $chiso7->set_tieude('32 GB');
}
if ($query["dungluong"] = '32' && $query["loai"] = 'RAM') {
    $chiso7->set_value('32');
} 

$sql = mysqli_query($conn, "SELECT dungluong,loai FROM `luuluong` WHERE loai = 'DISK' ");
$query = mysqli_fetch_all($sql);


if ($query["dungluong"] = '64' && $query["loai"] = 'DISK') {
    $chi_so2->set_tieude('64 GB');
    $chi_so2->set_value('64');
}
if ($query["dungluong"] = '128' && $query["loai"] = 'DISK') {
    $chi_so4->set_tieude('128 GB');
}
if ($query["dungluong"] = '128' && $query["loai"] = 'DISK') {
    $chi_so4->set_value('128');
}
if ($query["dungluong"] = '256' && $query["loai"] = 'DISK') {
    $chi_so5->set_tieude('256 GB');
    $chi_so5->set_value('256');
}
    
if ($query["dungluong"] = '512' && $query["loai"] = 'DISK') {
    $chi_so6->set_tieude('512 GB');
    $chi_so6->set_value('512');
}
    
if ($query["dungluong"] = '1' && $query["loai"] = 'DISK') {
    $chi_so7->set_tieude('1 TB');
    $chi_so7->set_value('1');
}
    

$sql = mysqli_query($conn, "SELECT noidung FROM nhucau");
$row = mysqli_fetch_all($sql);

if ($row["noidung"] = 'Chơi game / Cấu hình cao') {
    $noidung->set_tieude('Chơi game / Cấu hình cao');
}
if ($row["noidung"] = 'Chơi game / Cấu hình cao') {
    $noidung->set_value('choigamecauhinhcao');
}


if ($row["noidung"] = 'Cấu hình cao,Chụp ảnh/quay phim,Livestream') {
    $noidung2->set_tieude('Cấu hình cao,Chụp ảnh/quay phim,Livestream');
}
if ($row["noidung"] = 'Cấu hình cao,Chụp ảnh/quay phim,Livestream') {
    $noidung2->set_value('cauhinhcaochupanhquayphimlivestream');
}

if ($row["noidung"] = 'Pin khủng') {
    $noidung3->set_tieude('Pin khủng');
}
if ($row["noidung"] = 'Pin khủng') {
    $noidung3->set_value('pinkhung');
}

if ($row["noidung"] = 'Chơi game / Cấu hình cao và Chụp ảnh / quay phim') {
    $noidung4->set_tieude('Chơi game / Cấu hình cao và Chụp ảnh / quay phim');
}
if ($row["noidung"] = 'Chơi game / Cấu hình cao và Chụp ảnh / quay phim') {
    $noidung4->set_value('choigamecauhinhcaovachupanhquayphim');
}
$phone = new stdClass();
$phone->hang = array();
$phone->dexuat = array();
$phone->dungluong = array();
$phone->gia = array();
$phone->ldt = array();
$phone->dllt = array();

$phone->dllt[] = $chi_so2;
$phone->dllt[] = $chi_so4;
$phone->dllt[] = $chi_so5;
$phone->dllt[] = $chi_so6;
$phone->dllt[] = $chi_so7;
$phone->ldt[] = $android;
$phone->ldt[] = $IOS;
$phone->gia[] = $gia;
$phone->gia[] = $gia1;
$phone->gia[] = $gia2;
$phone->dungluong[] = $chiso2;
$phone->dungluong[] = $chiso4;
$phone->dungluong[] = $chiso5;
$phone->dungluong[] = $chiso6;
$phone->dungluong[] = $chiso7;
$phone->dexuat[] = $noidung;
$phone->dexuat[] = $noidung2;
$phone->dexuat[] = $noidung3;
$phone->dexuat[] = $noidung4;


$sql = mysqli_query($conn, "SELECT hangsp FROM hang");
$row = mysqli_fetch_all($sql);
if ($row["hangsp"] = 'iphone') {
    $dienthoai->set_iphone('iphone');
    $dienthoai->set_value('iphone');
}
if ($row["hangsp"] = 'samsung') {
    $dienthoai1->set_iphone('samsung');
    $dienthoai1->set_value('samsung');
}
if ($row["hangsp"] = 'oppo') {
    $dienthoai2->set_iphone('oppo');
    $dienthoai2->set_value('oppo');
}

$phone->hang[] = $dienthoai;
$phone->hang[] = $dienthoai1;
$phone->hang[] = $dienthoai2;

$output = $phone;
echo $hang; 


echo json_encode($output);
