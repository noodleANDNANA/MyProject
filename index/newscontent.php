<?php
require "../lib/publicsql.php";
require "publicheard.php";
$nid = $_GET["id"];
$mysqlFont="select * from news where nid=$nid";
$data = $mysql->query($mysqlFont)->fetch_assoc();
//查询是否还存在上一个
$msyqlFontlimit="SELECT nid,nname FROM news where nid<$nid ORDER BY nid DESC LIMIT 0,1";
$datalimit = $mysql->query($msyqlFontlimit)->fetch_assoc();
$mysqlFontlimitnext = "SELECT nid,nname FROM news where nid>$nid ORDER BY nid ASC LIMIT 0,1";
$datalimitnext = $mysql->query($mysqlFontlimitnext)->fetch_assoc();
$datastr = "";
$datastrnext="";
if($datalimit){
    $datastr.="<a href='newscontent.php?id={$datalimit['nid']}'>{$datalimit['nname']}</a>";

}
else{
    $datastr.="<a>没有了</a>";

}
if($datalimitnext){
    $datastrnext.="<a href='newscontent.php?id={$datalimitnext['nid']}'>{$datalimitnext['nname']}</a>";
}
else{
    $datastrnext.="<a>没有了</a>";
}
require "../View/index/newscontent.html";