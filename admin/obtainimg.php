<?php
$file = $_FILES["file"];
/**
 * name  文件的文件
 * type  文件类型
 * tmp_name 文件上传后的临时地址
 * error  错误状态码
 * size   单位为 b
 */

//判断文件的目录是不是存在 如果不存在 就动态的创建一个目录
//is_file("../uploads");
if (!is_dir("../uploads")) {
    mkdir("../uploads");
}
    $date = date("y-m-d");
if(!is_dir("../uploads/".$date)){
    mkdir("../uploads/".$date);
}
//$tem_name->uploads/2019
$imganame = time().mt_rand(0,9999);
$ext = explode("/",$file['type']);
$ext = array_pop($ext);
//拼写图片
$imagepath = "/".$imganame.".".$ext;
$imagepath = "../uploads/".$date."/".$imganame.".".$ext;
//$imagepath = "/MyProject/uploads/".$date."/".$imganame.".".$ext;
if(move_uploaded_file($file["tmp_name"],$imagepath)){

    echo json_encode([
        "success"=>200,
        "font"=>"添加数据成功",
        "datapath"=>$imagepath
    ]);
    exit();
}
echo json_encode([
    "success"=>500,
    "font"=>"添加数据失败"
]);
//项目名/uploads
//要返回绝对路径 项目下的图片的地址