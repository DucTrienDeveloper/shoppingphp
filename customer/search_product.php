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
if(isset($_POST['input'])){
    $a = $_POST['input'];
    class sanpham
        {
            public $ten;
            public $gia;
            public $img;
        }
        $sanphams = array();
    $query = "SELECT * FROM sanpham WHERE tensp LIKE '%{$a}%' ORDER BY gia,soluong DESC LIMIT 5 ";
    $result = mysqli_query($conn,$query);
    
        if (!$result) {
            die("Query Failed.");
        }
        if($nums = mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_array($result)) {
            $sanpham = new sanpham();
            $sanpham->ten = $row['tensp'];
            $sanpham->gia = $row['gia'];
            $sanpham->img = $row['img'];
            $sanphams[] = $sanpham;
        }
        // mysqli_close($connection);
        echo json_encode($sanphams);
    }else{
        $query = "SELECT sanpham.tensp,sanpham.gia,sanpham.img FROM sanpham WHERE sanpham.dungluong = (SELECT iddungluong FROM luuluong WHERE (luuluong.dungluong = $a) AND (luuluong.loai = 'RAM'))";
        $result1 = mysqli_query($conn,$query);
        if(!$result1){
            die("Query Failed.");
        }
        if($quantity = mysqli_num_rows($result1)>0){
            while($row = mysqli_fetch_array($result1)){
                $sanpham = new sanpham();
                $sanpham->ten = $row['tensp'];
                $sanpham->gia = $row['gia'];
                $sanpham->img = $row['img'];
                $sanphams[] = $sanpham;
            }
            echo json_encode($sanphams);
        }

    }
    }    
//     if(mysqli_num_rows($result) > 0){
//         echo $a;
//     }else{
//         echo "khong có sản phẩm";
//     }
// }else{
//     echo "không nhận được data";
// }

?>