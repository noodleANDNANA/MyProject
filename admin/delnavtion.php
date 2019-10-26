<?php
require "../lib/publicsql.php";
$data = $_POST;
$lid = $data["lid"];
$mysqlFont = "delete from insertnavigation where lid = $lid";
$mysql->query($mysqlFont);
if($mysql->affected_rows > 0){
    echo json_encode([
       "success"=>200,
       "font"=>"删除成功"
    ]);
    exit();
}
echo json_encode([
    "success"=>500,
    "font"=>"删除失败 ".$mysql->connect_error
]);
