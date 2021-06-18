//调用php 显示"加入购物车" 还是 "已添加"
//如果没添加过，那么点击加入购物车按钮 1.调用php检查是否收藏了 2.没收藏，添加进数据库 并且改变按钮状态
var addID;
var global_res;
$(document).ready( 
function () {

    //检查用户登陆状况，未登录的用户禁用收藏
    $.getJSON("php/get_login.php",function (res) {
        //获取当前用户是否登录
        //alert(res['loggedin'])
        global_res = res;
        if(res['loggedin']){//用户已经登录，判断该用户是否已经收藏
            addID = $('.ImgandInfo').data('id');
            $.ajax( 
                {
                    url: "php/addCart.php",
                    
                    data:{"id":addID, "userID":res['userID'], "action":"check"},
                    type: "get",
                    beforeSend:function()
                    {
                        //alert("正在处理")
                        return true;
                    },
                    success:function(inCart)
                    {
                        
                        // document.location.href='world_system_notice.php'
                        if (inCart == "false") {
                            //$("#addCartButton").css("display","inline-block") 
                        } else if (inCart == "true") {
                            $("#addCartButton").toggleClass("hidden");
                            $("#deleteButton").toggleClass("hidden");
                        } else {
                            alert(inCart)
                        }
                    
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
        } else { //用户没登陆，禁用收藏
            $('.addCartButton').toggleClass('disabled');
        }
    });
    $(".addCartButton").click(function() {
        $.ajax( 
        {
    
            url: "php/addCart.php",
            data:{"id":addID, "userID":global_res['userID'],"action":"add"},
            type: "get",
            beforeSend:function()
            {
                return true;
            },
            success:function()
            {
                $("#addCartButton").toggleClass("hidden")
                $("#deleteButton").toggleClass("hidden")
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
    })	
}
)
