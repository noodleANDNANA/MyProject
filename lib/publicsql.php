<?php

$mysql = new mysqli("localhost","root","","enterprise","3306");
if($mysql->connect_error){
    echo json_encode([
        "success"=>500,
        "font"=>"数据库连接失败".$mysql->connect_error

    ]);
    exit();
}
$mysql->query("set names utf8");
