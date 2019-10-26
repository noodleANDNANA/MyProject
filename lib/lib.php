<?php

/**
 * 连接数组的属性
 *
 */
function joinKeys($arr){

    $str = "";
// 遍历关联数组
    foreach ($arr as $key=>$value){
        $str .= $key.',';
    }
    $str = substr($str,0,-1);

    return $str;

}
//joinKeys   joinValues    updatejson
/**
 * 连接数据的值
 */
function joinValues($arr){
    $str = "";
// 遍历关联数组
    foreach ($arr as $key=>$value){
        $str .="'$value',";

    }
    $str = substr($str,0,-1);

    return $str;
}
function updatejson($arr){
    $str = "";
    foreach($arr as $key=>$value){
        $str.="$key='$value',";
    }

    return substr($str,0,-1);
}
?>