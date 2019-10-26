<?php
$Hosts = $_SERVER['REQUEST_METHOD'];
//header("Location: ../lib/lib.php");
require  "../lib/publicsql.php";
if($Hosts == "GET"){

    $mysqlFont= "SELECT * FROM gclassification ";
    $data = $mysql->query($mysqlFont)->fetch_all(MYSQLI_ASSOC);

    require "../View/admin/addproduct.html";

}
else{
    //joinValues    joinKeys
    require "../lib/lib.php";
    $data = $_POST;
    $bannerimage = $data["banner"];
    $data["banner"] = rtrim($bannerimage,",");
//    追加时间
    $data["create_time"] = date("Y-m-d H:i:s");
    $keys = joinKeys($data);
    $value = joinValues($data);
    $mysqlFont = "insert into goodstable ($keys) values ($value)";

    $mysql->query($mysqlFont);
    if($mysql->affected_rows > 0){
        echo json_encode([
           "success"=>200,
           "font"=>"添加数据成功"
        ]);
    }
    else{
        echo json_encode([
            "success"=>500,
            "font"=>"数据添加失败"
        ]);
    }
}

?>
