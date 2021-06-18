<?php
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
$pdo = connect();

$username_err = "";
//检查用户名是否为空
if (isset($_POST['username'])){
    $username = $_POST['username'];
}

//检查用户名是否重复
// echo $username;
$sql = "SELECT userID FROM users WHERE name='$username'";
$result = execute($pdo, $sql);
if ($result->rowCount() != 0) {
    $username_err = "This username is already taken.";
} 

//没有重复，将用户加入数据库
if (isset($_POST['password'])) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);//Creates a password hash
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if(empty($username_err)) {

    $sql = "INSERT INTO users (name, password, email) VALUES ('$username', '$password', '$email')";
    execute($pdo, $sql);
}
//返回的数据包括  err错误信息
echo $username_err;
?>