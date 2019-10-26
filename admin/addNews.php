<?php
$method = $_SERVER["REQUEST_METHOD"];

if($method === "GET"){
    require "../lib/publicsql.php";
    $mysqlFont = "select * from newclass";
    $result = $mysql->query($mysqlFont)->fetch_all(MYSQLI_ASSOC);

    require "../View/admin/addNews.html";
}
else{
    require "../lib/lib.php";
    $data = $_POST;

    //joinKeys   joinValues
    $keys = joinKeys($data);
    $values = joinValues($data);
    require "../lib/publicsql.php";
    $mysqlFont="insert into news ($keys) values ($values)";

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
            "font"=>"添加数据失败"
        ]);
    }
}
?>