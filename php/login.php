<?php
// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
//session_destroy();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
include_once "../inc/config.inc.php";
include_once '../inc/mysql.inc.php';
$pdo = connect();

if (isset($_POST['username'])){
    $username = $_POST['username'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
//检查用户名是否存在
$sql = "SELECT userID as id, name, password FROM users WHERE name='$username'";
$result = execute($pdo, $sql);

//如果用户名不存在或密码错误
$err = "Invalid username or password.";

//如果存在，则检查密码是否正确
if ($result->rowCount() != 0) {
    $row = $result->fetch();
    $id = $row['id'];
    $hashed_password = $row['password'];
    // $err = "1";
    if (password_verify($password, $hashed_password)) {
        // Password is correct, so start a new session
        //session_start();
        session_regenerate_id();                  
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["userID"] = $id;
        $_SESSION["username"] = $username;
        $err = "";
    }
} 

echo $err;

?>
