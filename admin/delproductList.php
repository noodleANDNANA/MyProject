<?php
$arr = $_POST;
$id = $arr["id"];

require  "../lib/publicsql.php";
$mysqlFont = "delete from goodstable  where id=$id";
$mysql->query($mysqlFont);

if($mysql->affected_rows > 0){
    echo json_encode([
       "success"=>200,
       "font"=>"删除成功"
    ]);
}
else{
    echo  json_encode([
        "success"=>500,
        "font"=>"删除失败"
    ]);
 exit();
}
