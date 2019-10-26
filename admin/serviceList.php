<?php
//REQUEST_METHOD
$method = $_SERVER["REQUEST_METHOD"];
require "../lib/publicsql.php";
if($method == "GET"){
    $mysqlFont = "select res.rid,res.date,res.`name`,res.phone,res.supplement,res.sex,reservice.rsname from reservation res,reservationservice reservice WHERE res.rsid=reservice.rsid";
   $data =  $mysql->query($mysqlFont)->fetch_all(MYSQLI_ASSOC);

    require "../View/admin/reservationList.html";

}
else{

}

?>