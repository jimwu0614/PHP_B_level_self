<?php
include_once "./base.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>健康促進網</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
</head>

<body>

	<iframe name="back" style="display:none;"></iframe>
	<div id="all">
		<div id="title">
			<?=date("m-d-l")?> | 今日瀏覽: <?=$Guest->find(['date'=>$today])['total']?> | 累積瀏覽: <?=$Guest->math('sum','total')?> </div>
		<div id="title2">
			<a href="index.php"><img src="./icon/02B01.jpg" title="健康資訊網-回首頁" alt=""></a>
		</div>
		<div id="mm">
			<div class="hal" id="lef">
				<a class="blo" href="?do=po">分類網誌</a>
				<a class="blo" href="?do=news">最新文章</a>
				<a class="blo" href="?do=pop">人氣文章</a>
				<a class="blo" href="?do=know">講座訊息</a>
				<a class="blo" href="?do=que">問卷調查</a>
			</div>
			<div class="hal" id="main">
				<div>
					<marquee behavior="" direction="">跑馬燈  請民眾......</marquee>
					<span style="width:19%; display:inline-block;">
					<?php
						if (isset($_SESSION['user']) && $_SESSION['user']=="admin") {
						    echo "歡迎，{$_SESSION['user']}<br><a href='./back.php'><button>管理</button></a>|<a href='./api/logout.php'><button>登出</button></a>";
						} else if(isset($_SESSION['user'])){
						    echo "歡迎，{$_SESSION['user']}<a href='./api/logout.php'><button>登出</button></a>";
						}else{
						    echo "<a href='?do=login'>會員登入</a>";
						}
					?>
					</span>
					<div class="container">
						<?php
						$do = $_GET['do']??'main';
						include "./front/$do.php";
						?>
					</div>
				</div>
			</div>
		</div>
		<div id="bottom">
			本網站建議使用：IE9.0以上版本，1024 x 768 pixels 以上觀賞瀏覽 ， Copyright © 2022健康促進網社群平台 All Right Reserved
			<br>
			服務信箱：health@test.labor.gov.tw<img src="./icon/02B02.jpg" width="45">
		</div>
	</div>

</body>

</html>