<?php
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
$pdo = connect();

//设置全局变量
$limit = 12;
//获取要显示的页数
// $page = get_page();
// $start = get_start($page, $limit);
//结果总数
// $sum_query = "select COUNT(*) from artworks where title like '%{$_GET['keyword']}%'";
// $result = execute($pdo, $sum_query);
// $sum = $result->rowCount();

// $query = "select * from artworks where title like '%{$_GET['keyword']}%' order by view DESC limit {$start}, {$limit}";
// if (isset($_GET['sort'])) { //默认按热度从高到低排序 如果选了排序为Price从高到低
//     // foreach ($_GET['sort'] as $d) {
//         if ($_GET['sort'] == "phtl") {
//             $query = "select * from artworks where title like '%{$_GET['keyword']}%' order by price DESC limit {$start}, {$limit}";
            
//         } else if ($_GET['sort'] == "plth"){
//             $query = "select * from artworks where title like '%{$_GET['keyword']}%' order by price ASC limit {$start}, {$limit}";
//         } else if ($_GET['sort'] == "rlth") {
//         $query = "select * from artworks where title like '%{$_GET['keyword']}%' order by view ASC limit {$start}, {$limit}";
//         }
// }
$query = "select * from artworks where title like '%{$_GET['keyword']}%' order by view DESC";
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
$res = "";
//$res = array('html' => '', 'sum' => 0);

//统计有多少条搜索结果、要分多少页

if ($result->rowCount() != 0) {
    while ($row = $result->fetch()) {
        $html = <<<A
        <div class="productUnit">
            <a href="PictureDetail.php?id={$row['artworkID']}">
                <img class="productImage" src="img/{$row['imageFileName']}">
            </a>

            <div class="productInfo">
                <a class="productLink" href="PictureDetail.php?id={$row['artworkID']}">
                    {$row['title']}
                </a>
                
                <span class="productArtist">Artist:<span>{$row['artist']}</span>
                <br>
                <span class="productDesc">{$row['description']}</span>
                <div class="productPrice">
                <span><span class="glyphicon glyphicon-usd" aria-hidden="true">{$row['price']}</span></span>
                </div>

                <div class="productView">
                <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>{$row['view']}
                </div>
            </div>
        </div>
A;
        $res .= $html;
        //echo $html;
    }
}
echo $res;

function get_page() {
    if (isset($_GET["page"])) {    
        $page = $_GET["page"];    
    }    
    else {    
        $page = 1;    
    }
    return $page;
}
function get_start($page, $limit) {
    $start_from = ($page-1) * $limit;
    return $start_from;
}
?>