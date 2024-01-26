<?php
    $conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
    $array = array();
    $sql = mysqli_query($conn, "SELECT hangsp FROM hang ");
    error_reporting(0);
    
    if(mysqli_num_rows($sql)>0){
        while($row = mysqli_fetch_array($sql)){
            $objects = new stdClass();
            // array_push($array,$row['tensp']);
            // echo $row['tensp'];
            $objects->tieude = $row['hangsp'];
            $objects->value = $row['hangsp'];
            array_push($array,$objects);
        }
    }
    // echo $array;
    $object = new stdClass();
    $object->hang = $array;
    $sql_1 = mysqli_query($conn,"SELECT tensp FROM `sanpham` WHERE hang ='2' ");
    error_reporting(0);
    $Array = array();
    if(mysqli_num_rows($sql_1)>0){
        while($rows = mysqli_fetch_array($sql_1)){
            $objectz = new stdClass();
            $objectz->tieude = $rows['tensp'];
            $objectz->value = $rows['tensp'];
            array_push($Array,$objectz);
        }
    }
    $object->samsung = $Array;
    
    echo json_encode($object); 
       
  
?>
<?php
    $conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
    $array = array();
    $sql = mysqli_query($conn, "SELECT * FROM hang ");
    error_reporting(0);
    
    if(mysqli_num_rows($sql)>0){
        while($row = mysqli_fetch_array($sql)){
            $objects = new stdClass();
            $objects->hang = $row['hangsp'];
            $objects->hang = $row['hangsp'];
            // $objects->value = $row['hangsp'];
            array_push($array,$objects);
        }
    }
 $object->đienthoai=$array;
    
 
    echo json_encode($object); 
       
  
?>