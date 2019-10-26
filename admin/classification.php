<?php

$method = $_SERVER['REQUEST_METHOD'];
if($method == "GET"){
    require  "../lib/publicsql.php";
    $mysqlFont= "SELECT * FROM gclassification ";
   $data = $mysql->query($mysqlFont)->fetch_all(MYSQLI_ASSOC);

    require "../View/admin/classification.html";

}
else{

}

?>