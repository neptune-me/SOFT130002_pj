<?php

include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';

$pdo = connect();
$id = $_GET['id'];
$sql = "delete from carts where userID=1 and artworkId={$id}";
execute($pdo, $sql);

?>