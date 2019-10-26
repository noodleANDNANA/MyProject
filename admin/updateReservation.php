<?php
$method = $_SERVER["REQUEST_METHOD"];
require "../lib/publicsql.php";
if($method == "GET"){
   $rid = $_GET["id"];
   $mysqlFont="select * from reservation where rid=$rid";
  $data =  $mysql->query($mysqlFont)->fetch_assoc();
//  var_dump($data);
   $mysqlselect = "SELECT * from reservationservice";
    $selectdata = $mysql->query($mysqlselect)->fetch_all(MYSQLI_ASSOC);
   require "../View/admin/updataReservation.html";
}
else{
$data = $_POST;
require "../lib/lib.php";
//joinKeys   joinValues    updatejson
    $rid = $data["rid"];
    unset($data["rid"]);
    $str = updatejson($data);
    $mysqlFont = "update reservation set $str where rid=$rid";
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
