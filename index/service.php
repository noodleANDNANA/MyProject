<?php
require "../lib/publicsql.php";

$method = $_SERVER["REQUEST_METHOD"];
if($method == "GET"){
    require "publicheard.php";
    $mysqlFont="select * from reservationservice";
    $data = $mysql->query($mysqlFont)->fetch_all(MYSQLI_ASSOC);
    require "../View/index/service.html";
}
else{
$data = $_POST;
//var_dump($data);
require "../lib/lib.php";
////joinKeys   joinValues    updatejson
$key = joinKeys($data);
$value = joinValues($data);
$mysqlFont="insert into reservation ($key) values ($value)";
//var_dump($mysqlFont);
$mysql->query($mysqlFont);
if($mysql->affected_rows > 0){
    echo json_encode([
       "success"=>200,
       "font"=>"预约成功"
    ]);
    exit();
}
    echo json_encode([
        "success"=>500,
        "font"=>"预约失败"
    ]);
}
