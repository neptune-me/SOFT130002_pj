$(document).ready(function () {
  var username = document.forms["form"]["username"];
  var password = document.forms["form"]["password"];

  var username_error = document.getElementById("username_error");
  var pass_error = document.getElementById("pass_error");

  username.addEventListener("textInput", username_Verify);
  password.addEventListener("textInput", pass_Verify);
  $(".login_form").on("submit", validated);
  function validated() {
    if (username.value.length == 0) {
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

    $.ajax({
      url: "php/login.php",
      data: {
        username: username.value,
        password: password.value,
        // email: email.value,
      },
      type: "post",

      success: function (err) {
        if (err != "") {
          $("#username_error").text(err);
          $("#username_error").css("display", "block");
        } else {
          alert("登录成功");
          //跳至上一页
          history.back();
          // return true;
        }
        // alert(err);
      },
    });

    //alert("Login Success.")
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
      return true;
    }
  }
});

// var username = $(".login_form input[name='username']")
// var password = $(".login_form input[name='password']")

// function
