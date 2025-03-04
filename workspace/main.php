<?php
	session_start();
?>
<!DOCTYPE html>
<html>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Software Engineering Lab - Notice</title>
	
	<link rel="stylesheet" href="./common/css/index.css?var=6" type="text/css" />
	<link rel="stylesheet" href="./common/css/sidebar.css?var=6">
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script src="./common/scripts/sidebar.js" type="text/javascript"></script>
	<script src="./common/scripts/home.js" type="text/javascript"></script>
	<script src="./common/scripts/unslider.js" type="text/javascript"></script>


</head>

<body>
	<header>
	</header>
	<aside id="sidebar">
		<div>
			<ul>
				<li><a href="./login/login.php">Logout</a></li>
				<br><br>
				<li><a href="./qna/qna.php">NOTICE</a></li>
				<li><a href="./qna/qna.php">RESEARCH</a></li>
				<li><a href="./qna/qna.php">PUBLICATIONS</a></li>
				<li><a href="./qna/qna.php">COURSES</a></li>
				<li><a href="./qna/qna.php">GALLERY</a></li>
				<li><a href="./qna/qna.php">QnA</a></li>
				<li><a href="./qna/qna.php">CONTACT</a></li>
			</ul>
		<button>● ● ●</button>
	</aside>

	<article>
		<div id=background>
			<p>Welcome to Software Engineering Laboratory!</p>
			<a href="./index.html"><img src=./common/images/selab_logo_S.png onmouseover="this.src='./common/images/hanyang_logo.png'" onmouseout="this.src='./common/images/selab_logo_S.png'"></a>
			
			<div class="contents" id="box">
				<div class="banner has-dots" style="overflow: hidden; width: 700px; height: 300px;">
					<ul id = "bnlist" style="width: 300%; position: relative; left: 0%; height: 300px;">
						<li id="img1" style="width: 33.3333%;"></li>
						<li id="img2" style="width: 33.3333%;"></li>
						<li id="img3" style="width: 33.3333%;"></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="copyright">
		</div>
	</article>
	<footer role="contentinfo">

	</footer>
</body>
</html>