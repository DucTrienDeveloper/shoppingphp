<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307");

// IF
if (isset($_POST["action"])) {
    if ($_POST["action"] == "register") {
        register();
    } 
}
if(!isset($_POST["email"]) || !isset($_POST["password"])){
    echo "error server";
}
// REGISTER
function register()
{
    global $conn;


    $email = $_POST["email"];
    $password = $_POST["password"];
    $ten = $_POST["fullname"];
    $tuoi = $_POST["tuoi"];
    $diachi = $_POST["diachi"];
    $phone = $_POST["phone"];
    
    echo $email;
    echo $password;
    if (empty($email) || empty($password) || empty($ten) || empty($tuoi) || empty($diachi) || empty($phone)) {
        echo "Please Fill Out The Form!";
        exit;
    } else {
        
        $query = "INSERT INTO `account`( `email`, `password`) VALUES('$email','$password')";
        mysqli_query($conn, $query);
        $sql = "INSERT INTO `khachhang`( `hoten`, `diachi`, `Age`, `phone`) VALUES ('$ten','$diachi','$tuoi','$phone');";
        mysqli_query($conn, $sql);
        echo "Register Successfull . Please click Login";
    }
    

}




