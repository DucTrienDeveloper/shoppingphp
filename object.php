<?php
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM billday WHERE status = 2";
if (isset($_SESSION['USER_NAME'])) {
    $Username = $_SESSION['USER_NAME'];
    echo $Username;
}
$doituong = new stdClass;

//Them gia tri 

$doituong->mau = "xanh";
$doituong->banh = "4 banh";
$doituong->tocdo = "1200 km/h";
$doituong->loai = "sieu xe";
$doituong->hinhdang = array("to", "den", "hoi");


//Lay gia tri
echo $kichco = implode(" ",$doituong->hinhdang);

