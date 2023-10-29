<?php
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

error_reporting(0);
 class luuluong{
    
 }

$sql = mysqli_query($conn, "SELECT dungluong FROM `luuluong` WHERE loai = 'RAM' ORDER BY dungluong");
$output = [];
if ($sql->num_rows > 0) {
    while($row = mysqli_fetch_all($sql)){
       $output = $row;
    }
}else{
    $output["empty"]="empty";
}
echo json_encode($output);

?>








