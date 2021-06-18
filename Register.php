<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
    <link rel="stylesheet" title="default" href="css/style1.css?v=<?php echo time(); ?>">
    <script src="js/jq.js"></script>
    <!-- <script src="js/history.js"></script> -->
</head>
<header>
	<nav class = "top">
		<a href="index.php" class="logo">Unsplash</a>
        <span class="pull-right" style="float: right">
            <a href="Login.php">Sign in</a>
        </span>
	</nav>
</header>
<body>

<div class="container" style="width:450px;">
    <h1 class="label">User Register</h1>
    <form class="login_form" method="post" name="form" onsubmit="return validated()">
    <!-- <form class="login_form" method="post" name="form" action="php/register.php"> -->
        <div class="font">Username</div>
        <!-- <input autocomplete="off" type="text" name="username"> -->
        <input autocomplete="off" type="text" name="username" value="mastr">
        <div id="username_error">Please fill up your Username </div>
        <div class="font font2">Email</div>
        <input autocomplete="off" type="email" name="email" value="1261802138@qq.com">
        <div id="email_error"></div>
        <div class="font font2">Password</div>
        <input type="password" name="password" value="1l">
        <div id="pass_error">Please fill up your Password</div>
        <div id="pass_tip">Make sure it's including a number and a lowercase letter.</div>
        <div class="font font2">Confirm Password</div>
        <input type="password" name="cpassword" value="1l">
        <div id="cpwd_error">Please fill up Confirm Password</div>
        <div id="cpwd_tip">Make sure you input the same password</div>
        <button type="submit">Sign Up</button>

    </form>
</div>
<script src="js/register.js"></script>
</body>
</html>