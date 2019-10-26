<?php
require "../lib/publicsql.php";
$datas = $_POST;
$lid = $datas["lid"];
$lname = $datas["name"];
$value = $datas["value"];

$mysqlFont = "update insertnavigation set $lname='$value' where lid=$lid";
$mysql->query($mysqlFont);
if($mysql->affected_rows > 0){
     echo json_encode([
        "success"=>200,
        "font"=>"修改成功！"
     ]);
     exit();
}
echo json_encode([
    "success"=>500,
    "font"=>"数据修改失败！".$mysql->connect_error
]);