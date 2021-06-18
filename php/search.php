<?php
header("Content-Type: text/html;charset=utf-8");
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
$pdo = connect();

$query = "select * from artworks where title like '%{$_GET['keyword']}%' order by view DESC";
// $query = "select * from artworks where title like '%k%' order by view DESC";
if (isset($_GET['sort'])) { //默认按热度从高到低排序 如果选了排序为Price从高到低
    // foreach ($_GET['sort'] as $d) {
    if ($_GET['sort'] == "phtl") {
        $query = "select * from artworks where title like '%{$_GET['keyword']}%' order by price DESC";
    } else if ($_GET['sort'] == "plth"){
        $query = "select * from artworks where title like '%{$_GET['keyword']}%' order by price ASC";
    } else if ($_GET['sort'] == "rlth") {
    $query = "select * from artworks where title like '%{$_GET['keyword']}%' order by view ASC";
    }
}
$result = execute($pdo, $query);

// $res = "";
$res = array();
$i = 0;

while ($row = $result->fetch()) {
    //$artwork_row = new artwork($row['artworkID'], $row['title'], $row['artist'], $row['description'], $row['price'], $row['view']);
    // $res.push(array("artworkID"=>$row['artworkID'], "title"=>));
    //array_push($res,$artwork_row);
    // $res .= json_encode(array("artworkID"=>$row['artworkID'], "title"=>$row['title'], "artist"=>$row['artist'], "description"=>$row['description'], "price"=>$row['price'], "view"=>$row['view']));
    // $encode = mb_detect_encoding($row['description'], array("ASCII",'UTF-8',"GB2312","GBK",'BIG5'));
    $desc = utf8_encode($row['description']);
    $title = utf8_encode($row['title']);
    $artist = utf8_encode($row['artist']);
    $json = json_encode(array("artworkID"=>$row['artworkID'], "title"=>$title, "artist"=>$artist, "description"=>$desc, "price"=>$row['price'], "view"=>$row['view']));
    array_push($res, $json);
}

echo json_encode($res);
?>