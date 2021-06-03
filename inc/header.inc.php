<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="IE=Edge, chrome=1">
	<meta http-equiv="Page-Enter" content="RevealTrans(duration=5,Transitionv=11)">
	<!-- cache issue. Force css to reload -->
	<link rel="stylesheet" title="default" href="css/Magnifier.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" title="default" href="css/style1.css?v=<?php echo time(); ?>">
	<script src="js/jq.js"></script>
	<script src="js/Magnifier.js"></script>
	<script src="js/carousel.js"></script>
	<!-- <script src="js/history.js"></script> -->
	<script src="js/Cart.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<style>
	nav {
		padding-bottom: 12px;
	}
</style>


<div>
	<header>
		<!-- <nav class="top"> -->
		<div class="wrapper flex" id="wrapper">
			<div class="logo">
				<a href="index.php" class="logo">Unsplash</a>
				<span style="font-style:italic;">
					Bring Beautiful Artworks Home
				</span>
			</div>
			<form class="form-inline" id="searchForm" action="Search.php" method="GET">
				<input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			</form>
			<nav>
				<ul class="clearfix">
					<li class="nav-item">
						<a href="index.php"><span>Home</span></a>
					</li>
					<li class="nav-item"><a href="Cart.php">Cart</a></li>
					<li class="nav-item"><a href="Login.html">Sign in</a></li>
					<li class="nav-item"><a href="Register.html">Sign up</a></li>
					
				</ul>
			</nav>
		</div>
	</header>
