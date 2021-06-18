var username = document.forms["form"]["username"];
var email = document.forms["form"]["email"];
var password = document.forms["form"]["password"];
var cpwd = document.forms["form"]["cpassword"];
var username_error = document.getElementById("username_error");
var pass_error = document.getElementById("pass_error");
var pass_tip = document.getElementById("pass_tip");
var cpwd_error = document.getElementById("cpwd_error");
var cpwd_tip = document.getElementById("cpwd_tip");
var email_error = document.getElementById("email_error");

username.addEventListener("textInput", username_Verify);
password.addEventListener("textInput", pass_Verify);
cpwd.addEventListener("textInput", cpwd_Verify);

function validated() {
  if (username.value.length == 0) {
    $("#username_error").text("Please fill up your Username");
    username.style.border = "1px solid red";
    username_error.style.display = "block";
    username.focus();
    return false;
  }
  if (password.value.length == 0) {
    password.style.border = "1px solid red";
    pass_error.style.display = "block";
    password.focus();
    return false;
  }
  if (email.value.length == 0) {
    $("#email_error").text("Please fill up your Email");
    email.style.border = "1px solid red";
    email_error.style.display = "block";
    email.focus();
    return false;
  }
  if (cpwd.value.length == 0) {
    cpwd.style.border = "1px solid red";
    cpwd_error.style.display = "block";
    cpwd.focus();

    return false;
  }
  if (password.value != cpwd.value) {
    cpwd.style.border = "1px solid red";
    cpwd_tip.style.display = "block";
    cpwd.focus();

    return false;
  } else {
    cpwd_tip.style.display = "none";
  }
  var regp = /^(?=.*[a-zA-Z]+)(?=.*[0-9]+)[a-zA-Z0-9]+$/;

  if (!regp.test(password.value)) {
    password.style.border = "1px solid red";
    pass_tip.style.display = "block";
    password.focus();

    return false;
  }

  //验证成功 注册账号
  $.ajax({
    url: "php/register.php",
    data: {
      username: username.value,
      password: password.value,
      email: email.value,
    },
    type: "post",

    success: function (err) {
      if (err != "") {
        $("#username_error").text(err);
        $("#username_error").css("display", "block");
        //alert(err);
      } else {
        alert("注册成功");
        //自动登录并跳转至首页
        $.ajax({
          url: "php/login.php",
          data: { username: username.value, password: password.value },
          type: "post",

          success: function (err) {
            if (err != "") {
              $("#username_error").text(err);
              $("#username_error").css("display", "block");
            } else {
              //   alert("登录成功");
              //跳至上一页
              history.back();
            }
          },
        });
      }

      //自动登录
    },
  });
  //alert("Register Success.");
  return false;
}
function username_Verify() {
  if (username.value.length >= 1) {
    username.style.border = "1px solid silver";
    username_error.style.display = "none";
    return true;
  }
}
function pass_Verify() {
  if (password.value.length >= 1) {
    password.style.border = "1px solid silver";
    pass_error.style.display = "none";
    pass_tip.style.display = "none";
    return true;
  }
}
function cpwd_Verify() {
  if (cpwd.value.length >= 1) {
    cpwd.style.border = "1px solid silver";
    cpwd_error.style.display = "none";
    cpwd_tip.style.display = "none";
    return true;
  }
}
