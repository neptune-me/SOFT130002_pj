<!DOCTYPE html>
<html>

<head>
	<title>Sign in</title>
	<link rel="stylesheet" title="default" href="css/style1.css">
	<script src="js/jq.js"></script>
	<script src="js/history.js"></script>
	<script src="js/valid.js?v=<?php echo time(); ?>"></script>
</head>


<body>
	<header>
		<nav class="top">
			<a href="index.php" class="logo">Unsplash</a>
			<span style="font-style:italic;">
				Bring Beautiful Artworks Home
			</span>
			<span class="pull-right">
				<a href="Register.php">Sign up</a>
			</span>
		</nav>
	</header>

	<div class="container" style="width:450px;">
		<h1 class="label">User Login</h1>
		<form class="login_form" method="post" name="form">
			<div class="font">Username</div>
			<input autocomplete="off" type="text" name="username" value="mastr">
			<div id="username_error">Please fill up your Username</div>
			<div class="font font2">Password</div>
			<input type="password" name="password" value="1l">
			<div id="pass_error">Please fill up your Password</div>
			<button type="submit">Login</button>
		</form>
	</div>
</body>

</html>