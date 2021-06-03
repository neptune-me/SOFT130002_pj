<?php 
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/header.inc.php';
//连接数据库
$pdo = connect();

//$_GET变量存储了用GET方法（URL）传过来的数据
// $id = $_GET['id'];
?>


<body>

    <div class="site_width">
        <div>
            <div class="cart-page_header">
                <div class="cart-page_header-section">
                    <h4 class="cart-page__title sp-h4">Your Cart  <small>welcome, admin</small></h4>
                </div>
                <!-- <div class="cart-page_header-welcome">
                    <h5>Welcome, admin</h5>
                </div> -->
            </div>
        <div class="cart-page_wrapper">
            <div class="cart-page_product-list" id="cart-page_product-list">
<?php
$userID = 1;
//把当前用户收藏的所有作品ID读取出来
$query = "select artworkID from carts where userID={$userID}";
$result = execute($pdo, $query);
if ($result->rowCount() != 0) {
    while ($row = $result->fetch()) { 
        //根据作品ID去作品表中读取详细信息
        $query1 = "select * from artworks where artworkID = {$row['artworkID']}";
        $row_detail = execute($pdo, $query1)->fetch();
        
        $html = <<<A
        <div class="cart-page_product-row" id="artwork{$row['artworkID']}">
                <a href="PictureDetail.php?id={$row['artworkID']}" class="product-row_image">
                    <img src="img/{$row['artworkID']}.jpg">
                </a>
            <div class="product-row_content">
                <div class="product-row_meta">
                    <a href="PictureDetail.php?id={$row['artworkID']}" class="product-row_meta-title">
                        {$row_detail['title']}
                    </a>
                </div>
                <div class="product-row_time">
                    Time of Released:{$row_detail['timeReleased']}
                </div>
                <div class="product-row_desc">
                    {$row_detail['description']}
                </div>
                <div class="product-row_tally">
                    <span class="product-row_item-total sp-subhead">
                        <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                        {$row_detail['price']}
                    </span>
                    
                    <button
                        type="button"
                        class="sp-button product-row_remove-button sp-button--ghost sp-button--mini sp-button--teal-text"
                        data-toggle="modal" data-target="#removeModal"
                        data-id={$row_detail['artworkID']}
                    >
                        <span class="sp-button_text">
                            Remove
                        </span>
                    </button>
                    
                </div>
            </div>
        </div>
A;
        echo $html;
    }

} else { //购物车为空 用js显示
    $js = <<<A
<script>
let div = document.getElementById("cart-page_product-list");
let newdiv = document.createElement("div");
let span = document.createElement("span");
newdiv.classList.add("cart-page__banner");
div.append(newdiv);
span.classList.add("sp-subhead");
span.innerHTML = "Your Cart is Empty!"
newdiv.append(span)
let pagination = document.getElementById("pagination")
pagination.remove()
</script>
A;

    echo $js;
}
?>      
            </div>

            <!-- Modal -->
            <form method="post" class="form-horizontal" role="form" id="form_data">
            <div class="modal fade" id="removeModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Item</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure to delete <span style="font-weight:bold;" class="delTitle"></span> from your cart?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary delBtn">Yes</button>
                    </div>
                    </div>
                </div>
            </div>
        </form>
            <div class="personalInfo">
                <header>Personal Infomation</header>
                <div class="setlist">
                    <span class="label">Username</span>
                    <span class="text">ljx</span>
                </div>
                <div class="setlist">
                    <span class="label">Email</span>
                    <span class="text">1</span>
                </div>
                <div class="setlist">
                    <span class="label">Sex</span>
                    <span class="text">Female</span>
                </div>
            </div>

        </div>
    </div>
    <div class="pagination" id="pagination">
        <ul class="pagination">
            <li class="disable"><span>«</span></li>
            <li><span class="active">1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">»</a></li>
        </ul>
    </div>
</body>

<script>
    
    $(document).ready(function(){
    
        $(".product-row_remove-button").click(
            function() {
                var el = this;
                var id = $(this).data('id');
                $(".delBtn").data('delId', id);
                //找到离这个button最近的title
                $title = $(this).parent().siblings(".product-row_meta").children().first().text().trim("\n");
                $(".delTitle").text($title);
            }
        )
            //点了模态框中的yes
        $(".delBtn").click(
            function() {
                var deleteid = $(this).data('delId');
                $.ajax( 
                    {
                        url: "php/delCart.php",
                        data:{"id":deleteid},
                        type: "get",
                        beforeSend:function()
                        {
                            //alert("正在处理")
                            return true;
                        },
                        success:function()
                        {
                            location.reload();
                        
                        },
                        error:function()
                        {
                            alert('请求出错');
                        },
                        complete:function()
                        {
                            // $('#tips').hide();
                        }
                    });
            }  
        )
    })
    
    // btn.onclick = function ()
    //     {
    //         //打开模态框
    //         //$('#removeModal').modal('show');
    //         var deleteid = btn.getAttribute('data-id')
    //         alert(deleteid)
        //     //监听Yes按钮的点击事件
        //     // var confirmation = $('#removeModal').modal('show');
        //     //var confirmation = confirm("Are you sure?");

        //     if (confirmation == true) {
        //         $.ajax( 
        //         {
        //             url: "php/delCart.php",
        //             data:{"id":deleteid},
        //             type: "get",
        //             beforeSend:function()
        //             {
        //                 //alert("正在处理")
        //                 return true;
        //             },
        //             success:function()
        //             {
                        
        //                 alert('操作成功');
        //                 // document.location.href='world_system_notice.php'
        //                 location.reload();
                    
        //             },
        //             error:function()
        //             {
        //                 alert('请求出错');
        //             },
        //             complete:function()
        //             {
        //                 // $('#tips').hide();
        //             }
        //         });
        //     }
        // }
        
//         function del(id){

//             alert()
//             $.ajax(
//                 {
//                     url: "php/delCart.php",
//                     data:{"id":id},
//                     type: "get",
//                     beforeSend:function()
//                     {
//                         alert("正在处理")
//                         return true;
//                     },
//                     success:function(data)
//                     {
//                         console.log(data)
//                         if(data > 0)
//                         {
//                             alert('操作成功');
//                             // document.location.href='world_system_notice.php'
//                              location.reload();
//                         }
//                         else
//                         {
//                             $("#tip").html("<span style='color:red'>失败，请重试</span>");
//                             alert('操作失败');
//                         }
//                     },
//                     error:function()
//                     {
//                         alert('请求出错');
//                     },
//                     complete:function()
//                     {
//                         // $('#tips').hide();
//                     }
//                 });

//         return false;
//             // var xmlhttp = new XMLHttpRequest();
// 			// xmlhttp.onreadystatechange = function() {
//             //     if (this.readyState == 4 && this.status == 200) {
//             //         row = document.getElementById("artwork<?php echo $row['artworkID'];?>")
//             //         row.remove()
//             //     }
// 			// };
// 			// xmlhttp.open("GET", "php/delCart.php?id=" + <?php echo $row['artworkID'];?>, true);
// 			// xmlhttp.send();
//             // return false;
//         }
    
</script>

</html>