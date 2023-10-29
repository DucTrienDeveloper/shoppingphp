<?php
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
// $dexuat = $_GET['dexuat'];
// $gia = $_GET['gia'];
// $hang = $_GET['hang'];
// $loaisp = $_GET['loaisp'];
// $ram = $_GET['ram'];

error_reporting(0);
// echo $dexuat;
if(isset($_GET['hang'])){
   $hang = $_GET['hang'];
}
// echo $hang;s
$test_array = explode(',',$hang);
$count = count($test_array);
for ($x = 0; $x <= $count; $x++) {
   error_reporting(0);
   if ($test_array[$x] == 'iphone') {
      $iphone = $test_array[$x];
   }
   // else{$iphone = 0;}
   error_reporting(0);
   if ($test_array[$x] == 'samsung') {
      $samsung = $test_array[$x];
   }
   // else{$samsung = 0;}
   if ($test_array[$x] == 'oppo') {
      $oppo = $test_array[$x];
   }
   // else{$oppo = 0;}

}

$sql = mysqli_query($conn, "SELECT idhang FROM `hang` WHERE hangsp = '$iphone' OR hangsp = '$samsung' OR hangsp = '$oppo' ");

$num = mysqli_num_rows($sql);
// echo $num;
if ($num > 0) {
   while ($query = mysqli_fetch_array($sql)) {
      if ($query['idhang'] == '1') {
         $iphone = 1;
      }
      // else{$iphone = 0;}
      if ($query['idhang'] == '2') {
         $samsung = 2;
      }
      // else{$samsung = 0;}
      if ($query['idhang'] == '3') {
         $oppo = 3;
      }
      // else{$oppo = 0;}
   }
}
// hãng xong
// echo $iphone; echo $samsung; echo $oppo; 
if(isset($_GET['gia'])){
   $gia = $_GET['gia'];
}
// echo $gia;
$gia1 = substr($gia, 0, 2);
if ($gia1 == 'du') {
   $price =' gia <= 5000000';
}
else{$price = 'gia = 0';}
if ($gia1 == 'tu') {
   $price_1 = ' gia <= 10000000 && gia > 5000000';
}
else{$price_1 = 'gia = 0';}
if ($gia1 == 'tr') {
   $price_2 = 'gia > 10000000';
}
else{$price_2 = 'gia = 0';}
$sql = mysqli_query($conn,"SELECT tensp FROM sanpham WHERE $price OR $price_1 OR $price_2");
if($num = mysqli_num_rows($sql) > 0){
   while($row = mysqli_fetch_array($sql)){
      // echo $row['tensp'];
   }
}
if(isset($_GET['dexuat'])){
   $dexuat = $_GET['dexuat'];
}
$dexuat_array = explode(',', $dexuat);
$quantity = count($dexuat_array);
for ($x = 0; $x < $quantity; $x++) {
   if ($dexuat_array[$x] == 'choigamecauhinhcao') {
      $dexuat_1 = 'Chơi game / Cấu hình cao';
   }
   else{$dexuat_1 = 0;}
   if ($dexuat_array[$x] == 'Pin khủng và Chơi game / Cấu hình cao') {
      $dexuat_2 = 'Pin khủng và Chơi game / Cấu hình cao';
   }
   else{$dexuat_2 = 0;}
   if ($dexuat_array[$x] == 'cauhinhcaochupanhquayphimlivestream') {
      $dexuat_3 = 'Cấu hình cao/Chụp ảnh/quay phim/Livestream';
   }
   else{$dexuat_3 = 0;}
   if ($dexuat_array[$x] == 'pinkhung') {
      $dexuat_4 = 'Pin khủng';
   }
   else{$dexuat_4 = 0;}
   if ($dexuat_array[$x] == 'choigamecauhinhcaovachupanhquayphim') {
      $dexuat_5 = 'Chơi game / Cấu hình cao và Chụp ảnh / quay phim';
   }
   else{$dexuat_5 = 0;}
}
$mysql = mysqli_query($conn, "SELECT id FROM nhucau WHERE noidung = '$dexuat_1'|| noidung ='$dexuat_2'|| noidung = '$dexuat_3' || noidung ='$dexuat_4' || noidung = '$dexuat_5' ");
$num = mysqli_num_rows($mysql);
if ($num > 0) {
   while ($row = mysqli_fetch_array($mysql)) {
      if ($row['id'] == 1) {
         $dexuat_1 = 1;
      }
      else{$dexuat_1 = 0;}
      if ($row['id'] == 4) {
         $dexuat_2 = 4;
      }
      else{$dexuat_2 = 0;}
      if ($row['id'] == 5) {
         $dexuat_3 = 5;
      }
      else{$dexuat_3 = 0;}
      if ($row['id'] == 6) {
         $dexuat_4 = 6;
      }
      else{$dexuat_4 = 0;}
      if ($row['id'] == 7) {
         $dexuat_5 = 7;
      }
      else{$dexuat_5 = 0;}
   }
}
// nhucau xong
if(isset($_GET['dungluong'])){
   $dungluong = $_GET['dungluong'];
}
// echo $dungluong;
$dungluong_array = explode(',',$dungluong);
$quantity_1 = count($dungluong_array);
for($i = 0 ;$i < $quantity_1;++$i){
   if($dungluong_array[$i] =='4'){
      $dungluong_1 = 4 ; 
    }
    if($dungluong_array[$i] == '8'){
      $dungluong_2 = 8;
   }
   if($dungluong_array[$i] == '12'){
      $dungluong_3 = 12;
   }
    if($dungluong_array[$i] == '24'){
      $dungluong_4 = 24;
   }
    if($dungluong_array[$i] == '32'){
      $dungluong_5 = 32;
   }
   
   
}
if(isset($_GET['dllt'])){
   $luuluong = $_GET['dllt'];
}
// echo $dungluong;
$luuluong_array = explode(',',$luuluong);
$quantity_1 = count($luuluong_array);
for($i = 0 ;$i < $quantity_1;++$i){
   if($luuluong_array[$i] =='64'){
      $luuluong_1 = 64 ; 
    }
   //  else{$dungluong_1 = 0;}
   else if($luuluong_array[$i] == '128'){
      $luuluong_2 = 128;
   }
   // else{$dexuat_2 = 0;}
   else if($luuluong_array[$i] == '256'){
      $luuluong_3 = 256;
   }
   // else{$dungluong_3 = 0;}
   else if($luuluong_array[$i] == '512'){
      $luuluong_4 = 512;
   }
   // else{$dungluong_4 = 0;}
   else if($luuluong_array[$i] == '1'){
      $luuluong_5 = 1;
   }
   // else{$dungluong_5 = 0;}
   
   
}

$select = mysqli_query($conn,"SELECT iddungluong,dungluong FROM luuluong WHERE (dungluong = '$luuluong_1' OR dungluong = '$luuluong_2' OR dungluong = '$luuluong_3' OR dungluong = '$luuluong_4' OR dungluong = '$luuluong_5') AND loai = 'DISK' ");
$num_2 = mysqli_num_rows($select);
if($num_2 > 0){
   while($row = mysqli_fetch_array($select)){
     

      if($row['dungluong'] == 64){
         $luuluong_1 = 9;
      }
      // else{ $dungluong_1 = 0;}
      
      if($row['dungluong'] == 128){
         $luuluong_2 = 10;
      }
      // else{ $dungluong_2 = 0;}
      if($row['dungluong'] == 256){
         $luuluong_3 = 11;
      }
      // else{ $dungluong_3 = 0;}
      if($row['dungluong'] == 512){
         $luuluong_4 = 12;
      }
      // else{ $dungluong_4 = 0;}
      if($row['dungluong'] == 1){
         $luuluong_5 = 13;
      }
      
   }
   
}

// $select = mysqli_query($conn,"SELECT iddungluong,dungluong FROM luuluong WHERE (dungluong = '$dungluong_1' OR dungluong = '$dungluong_2' OR dungluong = '$dungluong_3' OR dungluong = '$dungluong_4' OR dungluong = '$dungluong_5') AND loai = 'RAM' ");
// $num_2 = mysqli_num_rows($select);
// if($num_2 > 0){
//    while($row = mysqli_fetch_array($select)){
     

//       if($row['dungluong'] == 4){
//          $dungluong_1 = 3;
//       }
//       // else{ $dungluong_1 = 0;}
      
//       if($row['dungluong'] == 8){
//          $dungluong_2 = 15;
//       }
//       // else{ $dungluong_2 = 0;}
//       if($row['dungluong'] == 12){
//          $dungluong_3 = 5;
//       }
//       // else{ $dungluong_3 = 0;}
//       if($row['dungluong'] == 24){
//          $dungluong_4 = 6;
//       }
//       // else{ $dungluong_4 = 0;}
//       if($row['dungluong'] == 32){
//          $dungluong_5 = 7;
//       }
      
//    }
   
// }
// echo $dungluong_1;echo $dungluong_2; echo $dungluong_3;
if(isset($_GET['ldt'])){
   $img = $_GET['ldt'];
}
$img_array = explode(',',$img);

$quantity_2 = count($img_array);
for($x = 0 ; $x < $quantity_2 ; $x ++){
   if($img_array[$x] == 'android'){
      $android = 'android';
   }
   else{$android = 0;}
   if($img_array[$x] == 'IOS'){
      $IOS = 'IOS';
   }
   else{$IOS = 0;}
}
// echo $android;
$select_1 = mysqli_query($conn,"SELECT Idimg,loai FROM img WHERE (loai = '$android' OR loai = '$IOS')");
$num_4 = mysqli_num_rows($select_1);  
while($row = mysqli_fetch_array($select_1)){
   if($row['loai'] == 'android'){
      $lsp_1 = 1;
   }else{$lsp_1 = 0;}
   if($row['loai'] == 'IOS'){
      $lsp_2 = 2;
   }
   else{$lsp_2 = 0;}
}

if(isset($hang)){
    $a = "AND (sanpham.hang = '$iphone' OR sanpham.hang = '$samsung' OR sanpham.hang = '$oppo')";
}
else $a = '';
if(isset($img)){
    $b = "AND (sanpham.idhdh = '$lsp_1' OR sanpham.idhdh = '$lsp_2')";
}
else $b = '';
if(isset($dexuat)){
    $c = "AND (sanpham.nhucau = '$dexuat_1' OR sanpham.nhucau = '$dexuat_2' OR sanpham.nhucau = '$dexuat_3' OR sanpham.nhucau = '$dexuat_4' OR sanpham.nhucau = '$dexuat_5')";
}
else $c = '';
if(isset($gia)){
    $d = "AND ( $price OR  $price_1 OR $price_2 )";
}
else $d = '';
if(isset($dungluong)){
    $e = "AND (luuluong.dungluong = '$dungluong_1' OR luuluong.dungluong = '$dungluong_2' OR luuluong.dungluong = '$dungluong_3' OR luuluong.dungluong = '$dungluong_4' OR luuluong.dungluong = '$dungluong_5')";
}
else $e = '';
if(isset($luuluong)){
   $h = "AND (ocung = '$luuluong_1' OR ocung = '$luuluong_2' OR ocung = '$luuluong_3' OR ocung = '$luuluong_4' OR ocung = '$luuluong_5')";
}
else $h = "";
$s = "SELECT sanpham.tensp ,luuluong.dungluong, sanpham.gia,sanpham.img FROM sanpham JOIN luuluong ON luuluong.iddungluong = sanpham.dungluong WHERE 1 ";
$sql = $s.''.$a.''.$b.''.$c.''.$d.''.$e.''.$h;
$result = mysqli_query($conn,$sql);
// echo json_encode();
class sanpham{
    public $ten;
    public $gia;
    public $dungluong;
    public $img;
 }
 
 $sanphams = array();
 if (!$result) {
     die("Query Failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
     $sanpham = new sanpham();
     $sanpham->ten = $row['tensp'];
     $sanpham->gia = $row['gia'];
     $sanpham->dungluong = $row['dungluong'];
     $sanpham->img = $row['img'];
     $sanphams[] = $sanpham;
 }
 mysqli_close($connection);
 echo json_encode($sanphams);



// $receive = new soluong;
// $receive ->soluong = $count;
// $return = new stdClass();
// $return ->soluong = array();
// $return ->soluong[] = $receive;
// $posts = $return;
// echo json_encode($posts);



  

