<?php
 session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0097)file:///C:/Users/samsung/Desktop/%EB%84%A4%EB%B9%84%EA%B2%8C%EC%9D%B4%EC%85%98%20%EB%B0%941.html# -->
<html lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ソーダマーケット</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<link rel="apple-touch-icon" sizes="57x57" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="https://jbit.bufs.ac.kr/~dkim/SODA_image//android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//favicon-16x16.png">
<link rel="manifest" href="https://jbit.bufs.ac.kr/~dkim/SODA_image//manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://jbit.bufs.ac.kr/~dkim/SODA_image//ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
		
		<style>
		body {
			padding-top: 50px;
			background-color:white;
		}
		/*
    .starter-template {
			padding: 1px 10%;
			background-color: white;
		}*/
    .navbar-custom .navbar-brand {
    color:#eeeeee;
    }
    .navbar {
      min-height: 50px;
    }
    .navbar-nav > li{
    padding-left:3px;
    padding-right:3px;
    }
	</style>
</head>


<body>
<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

		<div style="text-align:right">
	<?php	if(!isset($_SESSION["id"])){ ?>
	<a href="https://jbit.bufs.ac.kr/~dkim/sodalogin.php">login</a> &nbsp;&nbsp;&nbsp;
	<a href="https://jbit.bufs.ac.kr/~dkim/join.php">Join</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php }else{ ?>
	<span class="badge badge-info"><?=$_SESSION['id']?> 様、こんにちは！</span>
	<a href="logout.php">logout</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<?php } ?>	  			
</div>			


<center>
<a href="https://jbit.bufs.ac.kr/~dkim"> <img src="https://jbit.bufs.ac.kr/~dkim/SODA_image/soda_logo.png" class="img-fluid" > </a>
</center>
<hr style="border:solid 3px  #808080;width: 95%;">
<br>
<br>
<div style="text-align : center;">
<img src="https://jbit.bufs.ac.kr/~dkim/SODA_image/logo2_1281.png" class="img-fluid" >
</div><br>
<br>
	
	<!--사이드 토글 ! -->
<div class="container">
	<div class="starter-template">
		<center>
		<h1>ソーダマーケット会員登録</h1>
		<br><br>
		</center>
		<form class="form-horizontal" action="joinin.php" method="post">
		 <center>
			<div class="form-group" id="divId">
			 <label for="inputId" class="col-lg-4 control-label">ID</label>
				<div class="col-lg-5">
				 <input type="text" class="form-control onlyAlphabetAndNumber"  placeholder="id" maxlength="30"name="idvalue">
				</div>
			</div>

			<div class="form-group" id="divPassword">
			 <label for="inputPassword" class="col-lg-4 control-label">Password</label>
			 	<div class="col-lg-5">
				 <input type="password" class="form-control" id="password"  placeholder="Password" maxlength="30"name="passvalue">
				</div>
			</div>

			<div class="form-group" id="divPassword">
			 <label for="inputPassword" class="col-lg-4 control-label">Password check</label>
			 	<div class="col-lg-5">
				 <input type="password" class="form-control" id="password"  placeholder="Password check" maxlength="30"name="passvalue2">
				</div>
			</div>

			<div class="form-group" id="divPassword">
			 <label for="inputPassword" class="col-lg-4 control-label">Email</label>
				<div class="col-lg-5">
				 <input type="email" class="form-control" id="password"  placeholder="Email" maxlength="30"name="emailvalue">
					<div class="form-group" id="divId">
						<br>&nbsp; <button type="submit" class="btn btn-info navbar-btn">OK</button>
						&nbsp;&nbsp;&nbsp;&nbsp;
				   		<br><br>
					</div>
				</div>
			</div>
			</center>
		</form>
		
	</div>
</div>	
	<br><br>
		<hr style="border:solid 3px  #808080;width: 95%;">
		<div class="container">
		金 多彬 個人プロジェクト
		</div>
</body>

</html>