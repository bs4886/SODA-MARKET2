<?php
 session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0097)file:///C:/Users/samsung/Desktop/%EB%84%A4%EB%B9%84%EA%B2%8C%EC%9D%B4%EC%85%98%20%EB%B0%941.html# -->
<html lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
	<title>ソーダマーケット</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    	/*
    .star-rating{width:205px;}
    .star-rating,.star-rating span { display: inline-block; heigth:39px; overflow:hidden; background:url(star.png)no-repeat;}
    .star-rating span{ background-position:left bottom; line-height:0; vertical-align:top; }
    */
	</style>
</head>
<script>
  let input = document.querySelector(".input");
let button = document.querySelector(".button");
button.disabled = true;
input.addEventListener("change", stateHandle);
function stateHandle() {
  if (document.querySelector(".input").value === "") {
    button.disabled = true; 
  } else {
    button.disabled = false;
  }
}
  </script>

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
<script>var fileOK =false;</script>
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

<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light border border-gray sticky-top shadow-sm"style="background-color: #ffffff;">
  <div class="container text-center font-weight-bold">
    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#soda_menu" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
   <div class="collapse navbar-collapse" id="soda_menu">
    <h1 class="navbar-brand"><a href="#" style="color: #8eaef5">About SODA</a></h1>  
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="top" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Top
        </a>
          <div class="dropdown-menu font-weight-bold" aria-labelledby="top">
            <a class="dropdown-item" href="#">Tシャツ</a>
            <a class="dropdown-item" href="#">ブラウス</a>
            <a class="dropdown-item" href="#">ニット</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">イベント</a>
          </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="outer" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        OUTER
        </a>
        <div class="dropdown-menu" aria-labelledby="outer">
          <a class="dropdown-item" href="#">ジャケット</a>
          <a class="dropdown-item" href="#">コート</a>
          <a class="dropdown-item" href="#">パディング</a>
          <a class="dropdown-item" href="#">ガーディガン</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="ops" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        OPS/SKIRT
        </a>
        <div class="dropdown-menu" aria-labelledby="ops">
          <a class="dropdown-item" href="#">ジーパン</a>
          <a class="dropdown-item" href="#">長ズボン</a>
          <a class="dropdown-item" href="#">半ズボン</a>
          <a class="dropdown-item" href="#">レギンス</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">シューズ</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">バッグ</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <div class="search">
     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 text-centers" type="submit">Search</button>
     </form>
   </div>
  </div>
</nav>

<!--
<img src="./SODA_image/in1.png" class="img-fluid">
<img src="./SODA_image/in2.png" class="img-fluid">
 -->
 <div class="container" style="background-color: #FFFFF0"> 
 <div class="col-xs-12" style="text-align: center;"><br>
   <img src="./SODA_image/in1.png" style=" float: center; width:1000px; height:680px;" class="img-thumbnail img-fluid" vspace="10" hspace="10">
 </div>
 <CENTER>
 <h4>古着通販サイトとして、</h4>
 <h4>自分自身の服をポイント（SODA）を貰って販売します。</h4>
 <h4>そしてそのポイントで他の服を購入するサイトです。</h4>
 <h4>個人プロジェクトの勉強用なので</h4>
 <h4>登録されている商品は実際に販売している商品ではありません。</h4>
 <h4>アドバイスはいつも歓迎です。</h4>
<br>
 <form class="form-horizontal" action="memo.php" method="post">
		 <center>
			<div class="form-group" id="divId">
			 <label for="inputId" class="col-lg-4 control-label">メッセージ</label>
				<div class="col-lg-5">
				 <input type="text" class="form-control onlyAlphabetAndNumber"  placeholder="ありがとうございます。" name="memovalue">
         <br><button type="submit" class="btn btn-info navbar-btn">送信</button>
        </div>
			</div>
			</center>
		</form>
 </CENTER>
 <div class="col-xs-12" style="text-align: center;"><br>
   <img src="./SODA_image/in2.png" style=" float: center; width:1000px; height:680px;" class="img-thumbnail img-fluid" vspace="10" hspace="10">
 </div>

 <hr style="border:solid 3px  #808080;width: 95%;">
		<div class="container">
		
    <span>
    <img src="https://jbit.bufs.ac.kr/~dkim/SODA_image/favicon-96x96.png">© 2021 SodaMarket</img>
    <h4>金 多彬 Kim Dabin 個人プロジェクト</h4>
     </span>
   
		</div>
 </div>
    </body>



</html>