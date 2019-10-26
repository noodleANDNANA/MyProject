<?php
$id = $_GET['id'];

require "../lib/publicsql.php";
$mysqlFont="select * from insertnavigation where lid=$id";
$data = $mysql->query($mysqlFont)->fetch_assoc();
$file = file_exists("../View/index/".$data['ntpl'].".html");
if($file == true){
    header("Location:".$data['ntpl'].".php");
}
//file_exists();   包含页面