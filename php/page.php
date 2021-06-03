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
$sum_query = "select COUNT(*) from artworks where title like '%{$_GET['keyword']}%'";
$result = execute($pdo, $sum_query);
$sum = $result->fetchColumn(0);
//总页数
$page_sum = ceil($sum / $limit);

$res = "";
for($i = 1; $i <= $page_sum; $i ++) {
    $temp = <<<A
<li class="page"><a href="#">{$i}</a></li>
A;
    $res .= $temp;
}
echo $res;
?>