  <?php
 session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0097)file:///C:/Users/samsung/Desktop/%EB%84%A4%EB%B9%84%EA%B2%8C%EC%9D%B4%EC%85%98%20%EB%B0%941.html# -->
<html lang="ko"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ソーダマーケット</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/bootstrap.min.css">


	<style>
		body {
			padding-top: 50px;
			background-color:white;
		}
		

		.starter-template {
			padding: 40px 15px;
			background-color: white;
		}
		.navbar-default {
		background-color: #e74c3c;
		} 
	.nav_text_color{
        style="color: black"
    }
	

	 .navbar .navbar-nav {

  display: inline-block;
    
    
  float: none;
  

}#pointGuide{
			float: left;
			margin-top: 50px
			left:100px;
			width: 50%;
			
			}

		#pointCount{
			float: left;
			right:100px;
			width: 50%;
			
		}

		#point{
			width: 50%;
			float:left;
		}

		#point2{
			float:right;

		}
		#orderProcessing{
		clear: both;
			}

		#Process{
			border:0;
			width: 100%;
			text-align: center;
		}

		#Process td{
			font-size: 70px;
		}
		.menu li{
			display: inline;
		}

		.type1{
			text-align: center;
			font-size: 15;
		}

		.etc{
			list-style-type: disc;
			font-size: 15;
			text-align: left;
		}

 

.navbar .navbar-collapse {

  text-align: center;
  
}
#sidebar { font-size: 14px; z-index: 100; 
-webkit-transform: translate3d(-300px,0,0);
-moz-transform: translate3d(-300px,0,0);
transform: translate3d(-300px,0,0);
-webkit-transition: all 0.2s;
-moz-transition: all 0.2s;
-ms-transition: all 0.2s;
-o-transition: all 0.2s;
transition: all 0.2s;
}

html.open #sidebar { overflow-y: auto;
-webkit-transform: translate3d(0,0,0);
-moz-transform: translate3d(0,0,0);
transform: translate3d(0,0,0);
-webkit-transition: all 0.2s;
-moz-transition: all 0.2s;
-ms-transition: all 0.2s;
-o-transition: all 0.2s;
transition: all 0.2s;
}

#sidebar-toggle { display: block; position: fixed; right: 20px; bottom: 160px; width: 40px; height: 30px; line-height: 55px; text-align: center; color: #555; background-color: #ffffff; border-radius: 10px; opacity: 0.9; box-shadow: 0 0 10px #aaa; z-index: 101; }



	</style>
</head>


<body>


<div style="text-align:right">
						<?php	if(!isset($_SESSION["ses_id"])){ ?>
					<a href="https://jbit.bufs.ac.kr/~cosmos/login">login</a> &nbsp;&nbsp;&nbsp;
					<a href="https://jbit.bufs.ac.kr/~cosmos/join">Join</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php }else{ ?>
					<span class="label label-info"><?=$_SESSION['ses_id']?> 님 반갑습니다.</span>
				<a href="logout.php">로그아웃</a>
				<?php } ?>	  
			
                    </div>

<center>
<a href="https://jbit.bufs.ac.kr/~cosmos"><img  src="./소다 마켓_files/jp_sodalogo.png" class="img-responsive" ></a>
</center>
<br>
<br>
	<nav class="navbar navbar-default navbar fixed-top navbar-light bg-light " style="background-color: #ffffff;">
	
		<div class="container">
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a class="navbar-brand" style="color: #777777" href="https://jbit.bufs.ac.kr/~cosmos/마켓설명">About SODA</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
					<form action="file:///C:/Users/samsung/Desktop/%EB%84%A4%EB%B9%84%EA%B2%8C%EC%9D%B4%EC%85%98%20%EB%B0%941.html#" method="post" class="form-inline">
				<ul class="nav navbar-nav">
				<li ><a style="color: black"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">TOP		<span></span></a>
				<ul class="dropdown-menu" role="menu">
					 <li><a href="#">Tシャツ</a></li>
					 <li><a href="#blouse">ブラウス</a></li>
					 <li><a href="#">ニット</a></li>
				     <li class="divider"></li>
                     <li><a href="#">イベント</a></li>
                  </ul>
				
				
					<li ><a style="color: black"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">OUTER<span></span></a>
				 <ul class="dropdown-menu" role="menu">
					 <li><a href="#">ジャケット</a></li>
					 <li><a href="#">コート</a></li>
					 <li><a href="#">パディング</a></li>
					 <li><a href="#">ガーディガン</a></li>
				    
                  </ul>
				
					<li ><a style="color: black"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">OPS/SKIRT<span></span></a>
				 <ul class="dropdown-menu" role="menu">
					 <li><a href="#OPS">ガーディガン</a></li>
					 <li><a href="#skirt">スカート</a></li>
				     
                  </ul>
				
					<li ><a style="color: black"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PANTS<span></span></a>
				 <ul class="dropdown-menu" role="menu">
					 <li><a href="#pants">ジーパン</a></li>
					 <li><a href="#pants">長ズボン</a></li>
					 <li><a href="#pants">半ズボン</a></li>
					 <li><a href="#pants">レギンス</a></li>
				    
                  </ul>
				
                    <li ><a style="color: black"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">BAG/SHOES<span></span></a>
				 <ul class="dropdown-menu" role="menu">
					 <li><a href="#shose">シューズ</a></li>
					 <li><a href="#bag">バッグ</a></li>
				    
                  </ul>
				
                    <li ><a style="color: black"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ACC<span></span></a>
				 <ul class="dropdown-menu" role="menu">
					 <li><a href="#acc">スカーフ</a></li>
					 <li><a href="#acc">帽子</a></li>
					 <li><a href="#acc">ジュエリー</a></li>
					 <li><a href="#acc">その他</a></li>
				    
                  </ul>
                        <li ><a style="color: black"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SUMMER<span></span></a>
				 <ul class="dropdown-menu" role="menu">
					 <li><a href="#">うわぎ</a></li>
					 <li><a href="#">ワンピース</a></li>
					 <li><a href="#">パンツ</a></li>
					 <li><a href="#">その他</a></li>
				     
                  </ul>
					<li><a style="color: black" href="#">SALE</a></li>
					
					<form class="form-inline my-2 my-lg-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button type="submit" class="btn btn-info navbar-btn">검색!</button>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
                    </div>
				</ul></form>
			</div>
				



			<!--/.nav-collapse -->
		</div>
	</nav>

<!--사이드 토글-->
					
<div id="sidebar-toggle">


 <a href="https://jbit.bufs.ac.kr/~cosmos/login"> <img class=" col-ml-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jp_talk.png"></a>
  <a href="https://jbit.bufs.ac.kr/~cosmos/mypage"> <img class=" col-ml-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jp_cart.png"></a>
   <a href="#"> <img class=" col-ml-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/위.png"></a>
    <a href="#end"> <img class=" col-ml-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/밑.png"></a>
		
</div>
	
	<!--사이드 토글 ! -->

<div class="container">
		<div id="pointGuide">

		<br>
		<br>
			<h4>SODA-marketは<b>ポイント制</b>で行われております。</h4>
				<h4>ポイントを積み立てて欲しい服を購入してみてください!</h4>
		</div>

		<div id="pointCount">
			<table border="0">
			<br>
			<br>
				<tr>
					<td width="600">現在 SODA</td>
					<td>0</td>
					<td><input type="button" value="充電" name="charge" 
					/>
				</tr>

				<tr>
					<td>使用可能 SODA</td>
					<td>0</td>
				</tr>
				<tr>
					<td>クーポン</td>
					<td>0</td>
					<td><input type="button" value="照会" name="coupon" 
					onclick="alert('사용할 수 있는 쿠폰이 없습니다')" />
				</tr>

				<tr>
					<td>総使用ポイント</td>
					<td>0</td>
				</tr>
			</table>
		
	</div>
<br><br>
	<br><br><br><br><br><br>
	<hr>
		<div id=orderProcessing>
			<!--내용마다 링크 걸어서 상황 보고 페이지로 연결되게 해야함-->
			<h1><font size="3">
			私の注文処状況(最近、3ヶ月を基準)</h1></font>
			<table id=Process>
			<tr><th>入金 前</th>
				<th>配送 準備中</th>
				<th>配送 中</th>
				<th>配送 完了</th>
				<th rowspan="5">	
					<ul class="etc">
						<li>キャンセル</li>
						<li>払い戻し</li><ul>
					</th></tr>
				
			<tr><td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td></tr>

			</table>
		</div>

	<br><br><br>
	<hr noshade width = "-100" size ="2" color ="gray">

	<ul class="menu">
	 <!--다 페이지 만들어야하고 아이콘을 따로 만들지 고민-->
		<li><a href="#">注文照会</a></li>
		<li><a href="#">会員情報</a></li>
		<li><a href="#">関心商品</a></li>
		<li><a href="#">掲示物管理</a></li>
	</div>

	<script src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jquery.min.js.다운로드"></script>
   	<script src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/bootstrap.min.js.다운로드"></script>




<hr style="border:solid 3px  #808080;width: 95%;">
	
	
	<div class="container">
	
<img class=" col-sm-2 img-responsive" src="./소다 마켓_files/학교2.png"><img class=" col-sm-1 img-responsive"  src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jbit.png">
<a  href="https://jbit.bufs.ac.kr/~cosmos/5조.html"><img  class=" col-sm-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jbit2019.png"> </a><h4> 부산외국어 대학교 JBIT-UNITED 제 5팀 COSMOS </h4><h5>제 5팀: 김다빈 이광호 최다은 천나정 </h5>
	
	</div>
</body>

</html>