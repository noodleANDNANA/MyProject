<?php
$Hosts = $_SERVER['REQUEST_METHOD'];
if($Hosts == "GET"){
    require ("../View/admin/login.html");
}
else{
//   echo "成功了";
    $arr = $_POST;
    $username = $arr["username"];
    $password = $arr["password"];
    if($username == null){
         echo json_encode([
            "success"=>404,
             "font"=>"意外的用户名"
         ]);
         exit();
    }
//    连接数据库
     $mysql = new mysqli("localhost","root","","enterprise","3306");
   if($mysql->connect_error){
       echo json_encode([
           "success"=>500,
           "font"=>"数据库出错".$mysql->connect_error
       ]);
       exit();
   }
// admintable
   $mysqlFont = "select * from admintable where username='$username'";
   $mysql->query("set names utf8");
   $result =  $mysql->query($mysqlFont)->fetch_all(MYSQLI_ASSOC);
    $num = count($result);
//    $md5s = md5($password);
//   echo crypt($md5s,"QWCDFT");
//    echo $md5s;
//    var_dump($num);
//    QWKXjY2PGHa2M
//  如果用户名在数据库中存在
  if($num > 0){
    $newpassword = crypt(md5($password),"QWCDFT");
      for($i=0;$i<$num;$i++){
//          判断密码是否正确+
          if($result[$i]["password"] ==$newpassword){
              echo json_encode([
                  "success"=>200,
                  "font"=>"登陆成功"
              ]);
              exit();
          }
          else{
              echo json_encode([
                  "success"=>500,
                  "font"=>"用户名或密码不正确"
              ]);
              exit();
          }

      }
  }
  else{
    echo json_encode([
       "success"=>500,
       "font"=>"没有找到相关用户名"
    ]);
  }

}
?>