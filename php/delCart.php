<?php

include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';

$pdo = connect();
session_start();

$id = $_GET['id'];
$userID = $_SESSION['userID'];
$sql = "delete from carts where userID={$userID} and artworkId={$id}";
$res = execute($pdo, $sql);
echo $res->fetch();
?>