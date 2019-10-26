<?php
$Hosts = $_SERVER['REQUEST_METHOD'];
//header("Location: ../lib/lib.php");
if($Hosts === "GET"){
     require "../View/admin/newnavigaiton.html";
}
else{

    require "../lib/lib.php" ;
//    <!--  navigationNames    navigationENames   nsort   ntpl -->
    $inputNum = $_POST;
    $inputkeys = joinKeys($inputNum);
    $inputvalues = joinValues($inputNum);
//echo $inputvalues;
//数据库
    $mysql = new mysqli("localhost","root","","enterprise","3306");
    if($mysql->connect_error){
        echo json_encode([
            "success"=>500,
            "font"=>"数据库连接失败".$mysql->connect_error
        ]);
        exit();
    }
    $mysql->query("set names utf8");
    $mysqlFont = "insert into insertnavigation ($inputkeys) values ($inputvalues)";
    $mysql->query($mysqlFont);
    if($mysql->affected_rows >0){
        echo json_encode([
            "success"=>200,
            "font"=>"插入成功"

        ]);
    }
    else{
        echo json_encode([
            "success"=>500,
            "font"=>"插入失败".$mysqlFont
        ]);
    }
}
?>