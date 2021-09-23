<?php
require __DIR__ . '/config.php';
if (isset($_GET['idx']) && isset($backgrounds[$_GET['idx']])) {
    $idx = $_GET['idx'];
} else {
    $idx = rand(0, count($backgrounds) - 1);
}
$background = $backgrounds[$idx];
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW" style="height: 100%;">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
		integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="SHORTCUT ICON" href="/resource/tnfshicon.ico" type="image/x-icon">
	<meta property="og:title" content="臺南一中線上系統" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="臺南一中各種電子化線上系統，包含訂購教科書及學用品、借用教室、報修" />
	<meta property="og:url" content="https://sp.tnfsh.tn.edu.tw/" />
	<meta property="og:image" content="http://www.tnfsh.tn.edu.tw/ezfiles/0/1000/sys_1000_1720276_57846.png">
	<meta name="description" content="臺南一中各種電子化線上系統，包含訂購教科書及學用品、借用教室、報修">
	<meta name="author" content="xiplus">
	<title>臺南一中線上系統</title>
	<style type="text/css">
		body {
			background: url('res/img/<?=$background['image']?>');
  			background-attachment: fixed;
  			background-repeat: no-repeat;
			background-position: <?=$background['desktop-position']?>;
			-webkit-background-size: <?=$background['desktop-size']?>;
			-moz-background-size: <?=$background['desktop-size']?>;
			-o-background-size: <?=$background['desktop-size']?>;
			background-size: <?=$background['desktop-size']?>;
		}
		@media screen and (max-width : 480px) {
			body {
				background-position: <?=$background['mobile-position']?>;
				-webkit-background-size: <?=$background['mobile-position']?>;
				-moz-background-size: <?=$background['mobile-position']?>;
				-o-background-size: <?=$background['mobile-position']?>;
				background-size: <?=$background['mobile-position']?>;
			}
		}

		.caption {
			color: #000;
		}

	</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118980789-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-118980789-2');
	</script>

</head>

<body topmargin="0" leftmargin="0" bottommargin="0" style="height: 100%;">
	<div style="background: rgba(255, 255, 255, <?=$background['alpha']?>); min-height: 100%;">
		<div id="top" class="bs-docs-header" id="content" tabindex="-1" style="padding: 60px;">
			<div class="container">
				<h1 style="word-break: keep-all;">臺南一中<wbr>線上系統</h1>
					<p style="word-break: keep-all;">請選取您要使用的系統 <a href="#student" style="color: #666;">跳至學生相關</a>
						<wbr><a href="#teacher" style="color: #666;">跳至教師相關</a></p>
					<div id="carbonads-container">
						<div class="carbonad">
							<div id="azcarbon"></div>
						</div>
					</div>
			</div>
		</div>
		<div class="container bs-docs-container">
			<div class="row">
				<div class="col-sm-12">
					<div class="thumbnail">
						<div class="caption">
							<h2 id="student">學生相關</h2>
							<a href="#top" style="color: #666;">回最上方</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="thumbnail">
						<div class="caption">
							<h3>獎學金公告</h3>
							<p></p>
							<p><a href="/scholarship/" class="btn btn-primary" role="button">進入</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="thumbnail">
						<div class="caption">
							<h3>排名百分比試算工具</h3>
							<p></p>
							<p><a href="/rankpercent/" class="btn btn-primary" role="button">進入</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="thumbnail">
						<div class="caption">
							<h3>教科書訂購系統</h3>
							<p>學生訂購教科書</p>
							<p><a href="/book/" class="btn btn-primary" role="button">進入</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="thumbnail">
						<div class="caption">
							<h3>在學證明書</h3>
							<p>下載在學證明書</p>
							<p><a href="/certificate_of_enrolment/" class="btn btn-primary" role="button">進入</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="thumbnail">
						<div class="caption">
							<h2 id="teacher">教師相關</h2>
							<a href="#top" style="color: #666;">回最上方</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="thumbnail">
						<div class="caption">
							<h3>點名系統</h3>
							<p>教師點名</p>
							<p><a href="/attend/" class="btn btn-primary" role="button">進入</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="thumbnail">
						<div class="caption">
							<h3>場地預約系統</h3>
							<p>教師登記借用教室</p>
							<p>
								<a href="/room/" class="btn btn-primary" role="button">進入</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="thumbnail">
						<div class="caption">
							<h3>報修系統</h3>
							<p>教師及廠商回報修繕物品</p>
							<p><a href="/report/" class="btn btn-primary" role="button">進入</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="thumbnail">
						<div class="caption">
							<h3>公民科教師資料填報</h3>
							<p>學校公民教師統計及公民教師資料填報</p>
							<p>
								<a href="/teacherinfo/" class="btn btn-primary" role="button">進入</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					Background image: <?=$background['attribution']?>
				</div>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
