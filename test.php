<?php 
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/header.inc.php';
//连接数据库
// $pdo = connect();

//$_GET变量存储了用GET方法（URL）传过来的数据
// $id = $_GET['id'];
?>

<div class="cart-page_product-row" id="artwork{$row['artworkID']}">
            <a href="PictureDetail.php?id={$row['artworkID']}" class="product-row_image">
                <img src="img/{$row['artworkID']}.jpg">
            </a>
            <div class="product-row_time">
                {$row_detail['timeRe']}
            </div>
            <div class="product-row_content">
                <div class="product-row_meta">
                    <a href="PictureDetail.php?id={$row['artworkID']}" class="product-row_meta-title">
                        {$row_detail['title']}
                    </a>
                </div>
                
                <div class="product-row_desc">
                    {$row_detail['description']}
                </div>
                <div class="product-row_tally">
                    <span class="product-row_item-total sp-subhead">
                        <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                        50
                    </span>
                    
                    <button
                        type="button"
                        class="sp-button product-row_remove-button sp-button--ghost sp-button--mini sp-button--teal-text"
                        data-toggle="modal" data-target="#removeModal"
                        data-id=1

                    >
                        <span class="sp-button_text">
                            Remove
                        </span>
                    </button>
                    
                </div>
            </div>
        </div>

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