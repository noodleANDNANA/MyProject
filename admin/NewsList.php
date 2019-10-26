<?php
 require "../lib/publicsql.php";
 $msqlFont="SELECT ns.*,nc.ncname as ncname FROM news ns,newclass nc where ns.nclassid = nc.ncid";
 $result = $mysql->query($msqlFont)->fetch_all(MYSQLI_ASSOC);
 require "../View/admin/NewsList.html";
?>
