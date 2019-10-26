<?php
require "../lib/publicsql.php";
require "publicheard.php";
$mysqlFont = "select * from news";
$data = $mysql->query($mysqlFont)->fetch_all(MYSQLI_ASSOC);
require "../View/index/news.html";