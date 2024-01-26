
<?php
    $conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
    $array = array();
    $sql = mysqli_query($conn, "SELECT * FROM hang ");
    error_reporting(0);
    
    if(mysqli_num_rows($sql)>0){
        while($row = mysqli_fetch_array($sql)){
            $objects = new stdClass();
            $objects->hang->tieude = $row['hangsp'];
            $objects->hang->value = $row['hangsp'];
            array_push($array,$objects);
        }
    }
 $object->đienthoai=$array;
    
 
    echo json_encode($object); 
       
  
?>