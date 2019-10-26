<?php
require "../lib/publicsql.php";
$mysqlFont = "select gt.*,gf.gname as gfname from goodstable gt,gclassification gf where gt.gid = gf.gid";
$resout = $mysql->query($mysqlFont)->fetch_all(MYSQLI_ASSOC);
require "../View/admin/productList.html";
