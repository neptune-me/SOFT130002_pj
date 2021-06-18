<?php

include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';

function check($id, $userID) {
    $pdo = connect();
    $query = "select * from carts where artworkID = ${id} and userID = ${userID}";
    $result = execute($pdo, $query);
    if ($result->rowCount() != 0) {
        echo "true";
    } else { //没查询到 说明该作品没收藏过
        echo "false";
    }
}

function add($id, $userID) {
    $pdo = connect();
    $sql = "insert into carts (userID, artworkID) values ({$userID}, {$id})";
    execute($pdo, $sql);
}


$id = $_GET['id'];
$userID = $_GET['userID'];
$action = $_GET['action'];
if ($action == "check") {
    check($id, $userID);
} else if ($action == "add") {
    add($id, $userID);
}


?>