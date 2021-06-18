<?php 
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
//连接数据库
$pdo = connect();

?>
<?php
include_once 'inc/header.inc.php';
?>
<!-- <script src="js/carousel.js"></script> -->
<script>
	$(document).ready(function(){
    //第一张轮播图 active
    	$(".item").first().addClass('active');
	});
</script>
	<body>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<?php
				//执行查询：访问量最高的三张图片
				$sql = "select artworkID, title, description from artworks order by view DESC limit 3";
				$view_res = execute($pdo, $sql);
				while ($row = $view_res->fetch()) {
					//定界符
$html = <<<A
<div class="item">
	<a href="PictureDetail.php?id={$row['artworkID']}"><img src="img/{$row['artworkID']}.jpg" alt="Los Angeles" style="width:100%;height:600px;"></a>
    <div class="carousel-caption">
        <h3>{$row['title']}</h3>
        <p>{$row['description']}</p>
    </div>
</div>
A;
					echo $html;
				}
				?>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>

		<div class="Top3Title">
			<span>Newly Released</span>
		</div>

		<div class="homepageTop3Pictures">
			<!-- <div class="left-mark"> -->
			
			<?php
			//执行查询：最新的三张图片 timeReleased最晚
			$sql = "select artworkID, title, artist, description from artworks order by timeReleased DESC limit 3";
			$view_res = execute($pdo, $sql);
			while ($row = $view_res->fetch()) {
$html = <<<A
<div class="EachPicture" align="center">
	<a href="PictureDetail.php?id={$row['artworkID']}">
		<img width="100px" src="img/{$row['artworkID']}.jpg">
	</a>
	<br>
	<a class="pictureLink" href="PictureDetail.html">
		<span class="pictureTitle">
			{$row['title']}
		</span>
		<span class="pictureArtist">
			{$row['artist']}
		</span>
		<span class="pictureDescription">
			{$row['description']}
		</span>
	</a>
</div>
A;
			echo $html;
			}
			?>
	</div>
	</body>
	<footer class="footer">
		<div id="copyright" class="copyright">
			<span class=>Copyright</span>
		</div>
	</footer>
</div>
<?php $pdo=null;?>
</html>