$(document).ready(function () {
  $page = $(".page.active").index();
  if ($page == -1) {
    $page = 1;
  }
  //alert($page);
  $sort_way = "rhtl";
  //请求默认排序方式第一页的数据
  requestData($sort_way, $page);
  //统计总页数，并生成对应的分页条
  requestPage();

  //高亮page
  //activate($page);
  //alert(GetQueryString("keyword"));

  $("input[name=ref]").click(function () {
    $sort_way = $(this).val();
    requestData($sort_way, $page);
    requestPage();
  });
  $(document).on("click", ".page", function (e) {
    e.preventDefault();
    $page = $(this).index();
    alert($(this).index());
    requestData($sort_way, $page);
    requestPage();
    activate($page);
  });
});

function requestData($sort_way, $page) {
  $.ajax({
    url: "php/sort.php",
    data: { keyword: GetQueryString("keyword"), sort: $sort_way, page: $page },
    type: "get",
    beforeSend: function () {
      //$(".load").css("display","block");
      // return true;
    },
    success: function (data) {
      $(".products").empty();
      $(".products").append(data);
    },
  });
}

function requestPage() {
  $.ajax({
    url: "php/page.php",
    data: { keyword: GetQueryString("keyword") },
    type: "get",
    beforeSend: function () {
      //$(".load").css("display","block");
      // return true;
    },
    success: function (data) {
      //清空分页的li
      $("li.page").remove();
      //将分页的li填进前一页的li的后面
      //$(data).insertAfter($("li.Prev"));
      // alert(data);
      $res = JSON.parse(data);
      //alert($res.page_sum);
      for ($i = $res.page_sum; $i >= 1; $i--) {
        $eachli = $('<li class="page"><a>' + $i + "</a></li>");
        // $eachli.text($i);
        $eachli.insertAfter($("li.Prev"));
      }
      //高亮page
      activate($page);
      //显示搜索结果总数
      $("#Pagination").pagination(total, {
        //total不能少
        dataSource: [1, 2, 3, 4, 5, 6, 7],
        callback: function (data, pagination) {
          // template method of yourself
          var html = template(data);
          $("#data-container").html(html);
        },
      });
      $(".sum").text($res.res_sum);
    },
  });
}

function template(data) {
  var html = "<ul>";
  $.each(data, function (index, item) {
    html += "<li>" + item + "</li>";
  });
  html += "</ul>";
  return html;
}

//将此时正处于的页的li调成active
function activate($page) {
  $activepage = $("li.page").slice($page - 1, $page);
  //alert($page);
  $activepage.addClass("active");
}
function GetQueryString(name) {
  var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
  var r = window.location.search.substr(1).match(reg);
  if (r != null) return unescape(r[2]);
  return null;
}
