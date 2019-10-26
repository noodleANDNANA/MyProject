<?php
$method = $_SERVER["REQUEST_METHOD"];
require "../lib/publicsql.php";
if($method == "GET"){
    $id = $_GET["id"];
    $mysqlFont = "select * from news where nid=$id";
    $data = $mysql->query($mysqlFont)->fetch_assoc();
    $mysqlFontselect = "select * from newclass";
    $selectdata = $mysql->query($mysqlFontselect)->fetch_all(MYSQLI_ASSOC);
    require "../View/admin/updateNews.html";
}
else{
  $data = $_POST;
//  var_dump($data);
    //joinKeys   joinValues    updatejson
 $nid = $data["nid"];
 unset($data["nid"]);
    require "../lib/lib.php";
    $str = updatejson($data);
//    echo $str;
    $mysqlFont="update news set $str where nid=$nid";
    $mysql->query($mysqlFont);
    if($mysql->affected_rows > 0){
       echo json_encode([
         "success"=>200,
         "font"=>"修改成功"
       ]);
       exit();
    }
    echo json_encode([
       "success"=>500,
       "font"=>"修改失败"
    ]);
}

