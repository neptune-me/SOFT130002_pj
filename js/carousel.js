$(document).ready(function(){
    // 业务逻辑   触发了一个定时器
    // 1.图片不断出现/隐藏  不断向左侧移动
    // 2.对应的小圆点背景颜色变红
    let num = 1;
    let i = 0;
    let timer = null;
    // swiper();
    // 把定时器功能做一个函数封装
    function swiper() {
        timer = setInterval(() => {
            // 1、图片功能
            num++;
            // 设置条件 当num大于5，num=2
            if (num > 4) {
                // num = 5的时候，其实显示  ban1  
                // 应该通过样式赋值的形式，直接变为 真正的 ban1
                $("#navs").css('left', -900)
                num = 2;
            }
            $("#navs").animate({ left: -num * 900 }, 1000);

            // 2.小圆点功能
            i++;
            if (i > 2) {
                i = 0;
            }
            $("#bots li").eq(i).addClass('active').siblings().removeClass('active');

        }, 2000);
    }
    // 鼠标移入 清除定时器
    $(".viewport").mouseover(() => {
        clearInterval(timer);
        });

    //鼠标移出 开启定时器
    $(".viewport").mouseout(() => {
        swiper();
    });
})