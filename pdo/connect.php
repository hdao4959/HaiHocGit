<?php 
    $dbname = "duanmau";
    $host= "localhost";
    $username = "root";
    $password = "";
    try{
        $conn= new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Lỗi kết nối csdl" .$e->getMessage();
    }
?>