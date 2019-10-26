<?php
require "../lib/publicsql.php";
$mysqlFont = "select * from insertnavigation order by lid desc";
$result = $mysql->query($mysqlFont)->fetch_all(MYSQLI_ASSOC);
require "../View/admin/navigation.html";
?>

