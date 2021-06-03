<?php
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';

$pdo = connect();
$query = "select * from artworks where title like $_POST['keyword']";
$result = execute($pdo, $query);
while ()
?>