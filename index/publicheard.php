<?php
require "../lib/publicsql.php";
$mysqlFont = "select * from insertnavigation order by nsort";
$data = $mysql->query($mysqlFont)->fetch_all(MYSQLI_ASSOC);

require "../View/index/heard.html";
?>

