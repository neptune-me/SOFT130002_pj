
<?php 
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
//连接数据库
$pdo = connect();

//$_GET变量存储了用GET方法（URL）传过来的数据
$id = $_GET['id'];
?>

<?php
include_once('inc/header.inc.php');
?>
<script src="js/pic_detail.js"></script>
<body>
	<?php
	//将artworkID为id的作品的详细信息从数据库中读取出
	$sql = "select * from artworks where artworkID = {$id}";
	$result = execute($pdo, $sql);
	$row = $result->fetch();

	//访问量相应地增加1，并更新数据库
	$row['view'] += 1;
	$sql = "update artworks set view = {$row['view']} where artworkID = {$id}";
	execute($pdo, $sql);
	// exit(1);
$html = <<<A
	<div class="ImgandInfo" data-id={$row['artworkID']}>
		<!-- <div class="Img"> -->

		<div id="small">
			<img src="img/{$row['artworkID']}.jpg" />
			<div id="shadow"></div>
			<div id="cover"></div>
		</div>
		<div id="big">
			<img src="img/{$row['artworkID']}.jpg" class="bigImg">
		</div>

		<div class="Info">
			<div class="Info_Title">
				<span>{$row['title']}</span>
			</div>
			<div class="Info_Artist">
				<span>Artist:</span>
				<span>
					<a href="Search.php">
						{$row['artist']}
					</a>
				</span>
			</div>
			<div class="Info_other">
				<p>Painted circa {$row['yearOfWork']}</p>
				<p>Dimensions: {$row['width']} cm × {$row['height']} cm</p>
				<p>Genre:{$row['genre']}</p>
				<p>Heat:{$row['view']}</p>
				<p>Time of Released:{$row['timeReleased']}</p>
			</div>
			<div class="Info_Price">
				<span class="PriceDesc">Price </span>
				<span class="PriceUnit">$</span>
				<span class="PriceValue">{$row['price']}</span>
			</div>
		</div>

	</div>
A;
	echo $html;
	//检查用户收藏夹内是否存在该作品，如果收藏过，则显示已收藏；如果没收藏，则显示加入购物车的按钮
	//用户默认为admin
?>

	<!-- <div class="buyDiv">
		<a href="Cart.php" class="addCartLink"><button class="addCartButton iconfont" onclick="success()">Add
				to Wish
				List</button></a>
	</div> -->
	<div class="buyDiv">
		<button type="button" class="btn btn-default addCartButton" id="addCartButton"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>Add to Wish List</button>
		<button type="button" class="btn btn-default deleteButton disabled hidden" id="deleteButton" ><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Already in Cart</button>
	</div>
</body>

</html>