<?php

use hang as GlobalHang;

$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

error_reporting(0);

class Hang {
    public $tieude;
    public $value;

    function set_tieude($tieude){
        $this->tieude = $tieude;
    }
    function set_value($value){
        $this->value = $value;
    }
}
$phone = array();
$sql = mysqli_query($conn,"SELECT * FROM hang");

$num = mysqli_num_rows($sql);
for($x = 0 ; $x < $num; $x++){
    $phone[] = new Hang ;
}
while($query = mysqli_fetch_all($sql)){
    $query['hangsp'] =;
}

?>