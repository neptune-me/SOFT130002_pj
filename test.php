<?php 
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/header.inc.php';
//连接数据库
// $pdo = connect();

//$_GET变量存储了用GET方法（URL）传过来的数据
// $id = $_GET['id'];
?>


<!-- <div class="pagination">
    <ul class="pagination">
        <li class="disable"><span>«</span></li>
        <li class="page active"><a href="#">1</a></li>
        <li class="page" data-id=2><a href="#">2</a></li>
        <li class="page"><a href="#">3</a></li>
        <li class="page"><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">»</a></li>
    </ul>
</div> -->
<link rel="stylesheet" href="css/pagination.css">
<script src="js/jquery.pagination.js"></script>
<div class="M-box"></div>
</body>
<script>
// $('.M-box').pagination({
//     callback:function(api){
//         $('.now').text(api.getCurrent());
//     }
// },function(api){
//     $('.now').text(api.getCurrent());
// });

var pageSize =6;     //每页显示多少条记录
var total;           //总共多少记录
$(function() {
//Init(0); //注意参数，初始页面默认传到后台的参数，第一页是0;    
$(".M-box").pagination(total, {   //total不能少        
  callback: PageCallback,            
  prev_text: '«',             
  next_text: '»',              
  items_per_page: pageSize,              
  num_display_entries: 4,        //连续分页主体部分显示的分页条目数
  num_edge_entries: 1,           //两侧显示的首尾分页的条目数 
});             
function PageCallback(index, jq) {     //前一个表示您当前点击的那个分页的页数索引值，后一个参数表示装载容器。  
    Init(index);      
}
});
</script>
</html>