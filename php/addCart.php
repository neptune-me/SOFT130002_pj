<?php

include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';

function check($id) {
    $pdo = connect();
    $query = "select * from carts where artworkID = ${id} and userID = 1";
    $result = execute($pdo, $query);
    if ($result->rowCount() != 0) {
        echo "true";
    } else { //没查询到 说明该作品没收藏过
        echo "false";
    }
}

function add($id) {
    $pdo = connect();
    $sql = "insert into carts (userID, artworkID) values (1, {$id})";
    execute($pdo, $sql);
}


$id = $_GET['id'];
$action = $_GET['action'];
if ($action == "check") {
    check($id);
} else if ($action == "add") {
    add($id);
}


?>