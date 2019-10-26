<?php
require "../lib/publicsql.php";
$id = $_GET['id'];
$mysqlFont="select * from goodstable where id=$id";
$data = $mysql->query($mysqlFont)->fetch_assoc();
require "../View/index/details.html";
