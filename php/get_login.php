<?php
// include_once ("connect.php");
session_start();/*开启会话*/
if (isset($_SESSION['loggedin'])){
   /* 判断用户会话里用户名是否存在，即用户是否登录*/
    $json['username']=$_SESSION['username'];/*把昵称存起来，一会返回给首页*/
    $json['userID']=$_SESSION['userID'];//存用户id
    $json['loggedin']=true;/*用户已经登录，标志flag为true*/
}else {
    $json['loggedin']=false;/*用户已经登录，标志flag为true*/
}
echo json_encode($json);/*返回json*/
?>