<?php
$method = $_SERVER["REQUEST_METHOD"];
require  "../lib/publicsql.php";
$times = null;
if($method === "GET"){
    $id = $_GET["id"];
   $mysqlFont = "select * from goodstable where id=$id";
   $data = $mysql->query($mysqlFont)->fetch_assoc();
    $times = $data["create_time"];
//   查询select 所需要的值
    $mysqlFont = "select * from gclassification";
    $selectdata = $mysql->query($mysqlFont)->fetch_all(MYSQLI_ASSOC);

    require "../View/admin/updateproductList.html";
}
else{
 $data = $_POST;
// echo $data['banner'];
// exit();
// $data["create_time"] = date("Y-m-d H:i:s");
    $data["create_time"] = $times;
 $id = $data["id"];
 require "../lib/lib.php";
    //joinKeys   joinValues
//    开启事务
    $mysql->autocommit(false);
    $keys = joinKeys($data);
    $values = joinValues($data);
    $mysqlFont = "delete from goodstable where id=$id";
//    $mysqlFont = "update goodstable set ";
    $mysql->query($mysqlFont);
    $mysqlFontinsert = "insert into goodstable ($keys) values ($values)";
    $mysql->query($mysqlFontinsert);
    if($mysql->affected_rows > 0){
//        如果成功  提交事务
        $mysql->commit();
         echo json_encode([
             "success"=>200,
             "font"=>"编辑成功"
         ]);
         exit();
    }
//    否则失败 回滚事务
    $mysql->rollback();
    echo json_encode([
        "success"=>500,
        "font"=>$mysql->connect_error
    ]);
}