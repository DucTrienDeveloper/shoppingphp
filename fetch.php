<?php
// step1: Connect Db
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();

// query get infor from tables : 
$queryHang = mysqli_query($conn, "SELECT hangsp FROM hang ");
error_reporting(0);

$arrayHang = array();

$arrayDungluong = array();
$arrayRaw = array();
$arrayNoiDung = array();
$arrayLoai = array();

if (mysqli_num_rows($queryHang) > 0) {
    while ($row = mysqli_fetch_array($queryHang)) {
        $objectHang = new stdClass();
        // array_push($array,$row['tensp']);
        // echo $row['tensp'];
        $objectHang->tieude = $row['hangsp'];
        $objectHang->value = $row['hangsp'];
        array_push($arrayHang, $objectHang);
    }
}
// echo $array;

$queryDungluong = mysqli_query($conn, "SELECT dungluong,loai,donvi FROM `luuluong` WHERE loai = 'DISK'");
error_reporting(0);

if (mysqli_num_rows($queryDungluong) > 0) {
    while ($row = mysqli_fetch_array($queryDungluong)) {
        $objectDungluong = new stdClass();
        $objectDungluong->tieude = '' . $row['dungluong'] . '' . $row['donvi'] . '';
        $objectDungluong->value = $row['dungluong'];
        array_push($arrayDungluong, $objectDungluong);
    }
}

$queryRaw = mysqli_query($conn, "SELECT dungluong,loai,donvi FROM `luuluong` WHERE loai = 'RAM'");
error_reporting(0);

if (mysqli_num_rows($queryRaw) > 0) {
    while ($row = mysqli_fetch_array($queryRaw)) {
        $objectRaw = new stdClass();
        $objectRaw->tieude = '' . $row['dungluong'] . '' . $row['donvi'] . '';
        $objectRaw->value = $row['dungluong'];
        array_push($arrayRaw, $objectRaw);
    }
}

$queryNodung = mysqli_query($conn, "SELECT noidung FROM nhucau");
error_reporting(0);

if (mysqli_num_rows($queryNodung) > 0) {
    while ($row = mysqli_fetch_array($queryNodung)) {
        $objectNoidung = new stdClass();
        $objectNoidung->tieude = $row['noidung'];
        $objectNoidung->value = $row['noidung'];
        array_push($arrayNoiDung, $objectNoidung);
    }
}

$queryLoai = mysqli_query($conn, "SELECT nameimg,loai FROM img");
error_reporting(0);

if (mysqli_num_rows($queryLoai) > 0) {
    while ($row = mysqli_fetch_array($queryLoai)) {
        $objectLoai = new stdClass();
        $objectLoai->img = $row['nameimg'];
        $objectLoai->tieude = $row['loai'];

        $objectLoai->value = $row['loai'];
        array_push($arrayLoai, $objectLoai);
    }
}
//
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

$gia = new gia;
$gia1 = new gia;
$gia2 = new gia;

$gia->set_tieude('nhỏ hơn 5 triệu');
$gia->set_value('duoi5trieu');


$gia1->set_tieude('từ 5 tới 10 triệu');
$gia1->set_value('tu5toi10trieu');


$gia2->set_tieude('trên 10 triệu');
$gia2->set_value('tren10trieu');


$object = new stdClass();
$object->hang = $arrayHang;
$object->dllt = $arrayDungluong;
$object->dungluong = $arrayRaw;
$object->dexuat = $arrayNoiDung;
$object->ldt = $arrayLoai;
$object->gia[] = $gia;
$object->gia[] = $gia1;
$object->gia[] = $gia2;
echo json_encode($object);
