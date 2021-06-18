$(document).ready(function toggle() {
  $.getJSON("php/get_login.php", function (res) {
    //alert(res);
    //获取当前用户是否登录
    if (res["loggedin"]) {
      //用户已经登录，显示昵称和注销选项
      //alert(res["username"]);
      $("li.nav-item").toggleClass("hidden");
      // $('li.').toggleClass('hidden');
      $("span.username").html(res["username"]);
    }
  });
});
