  <?php
 session_start(); ?>
<!DOCTYPE html>       <!--!DOCTYPE html이걸 씀으로써 html5 로 적용 (css 사용하기위해)  -->
<!-- saved from url=(0097)file:///C:/Users/samsung/Desktop/%EB%84%A4%EB%B9%84%EA%B2%8C%EC%9D%B4%EC%85%98%20%EB%B0%941.html# -->
<html lang="ko">     <!--  언어를 한국어로 설정-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">      
	<meta name="viewport" content="width=device-width, initial-scale=1">    <!--웹이든 모바일이든 크기를 디바이스 창에맞게 설정해줌 -->

	<title>ソーダマーケット</title>     <!-- 작업설정창 상태바에 뜨는 이름 -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/bootstrap.min.css">    <!-- 해당 사이트에있는css클래스 사용  -->
 
</head>

<style>
		body {
			padding-top: 50px;
			background-color:white;       <!--  본문부분에 패딩 지정 음..이건 여백 공간이라고 생각하면됨 -->
		}
		

		.starter-template {
			padding: 40px 15px;         <!-- 여백공간설정 임-->
			background-color: white;
		}
		.navbar-default {
		background-color: #e74c3c;       <!-- 네비게이션바 색상지정 -->
		} 
	.nav_text_color{
        style="color: black"                  <!-- 네비게이션 바 글자색 지정-->
    }
		 .navbar .navbar-nav {

  display: inline-block;
    
    
  float: none;
  

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

<body>

		<div style="text-align:right">
				<?php	if(!isset($_SESSION["id"])){ ?>
					<a href="https://jbit.bufs.ac.kr/~cosmos/sodalogin">login</a> &nbsp;&nbsp;&nbsp;
					<a href="https://jbit.bufs.ac.kr/~cosmos/join">Join</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php }else{ ?>
					<span class="label label-info"><?=$_SESSION['id']?> 님 반갑습니다.</span>
						<a href="logout.php">로그아웃</a>
				<?php } ?>	  
			
       </div>  <!--로그인 -->
					<center>
			<a href="https://jbit.bufs.ac.kr/~cosmos"> <img  src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jp_sodalogo.png" class="img-responsive" > </a>
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
				
				<a class="navbar-brand" style="color: #777777" href="#">About SODA</a>
			</div> <!--nav header -->
			<div id="navbar" class="collapse navbar-collapse">
				<form action="#" method="post" class="form-inline">
				<ul class="nav navbar-nav">
				
				 	<ul class="nav navbar-nav ">
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
					<li><a style="color: black" href="file:///C:/Users/samsung/Desktop/%EB%84%A4%EB%B9%84%EA%B2%8C%EC%9D%B4%EC%85%98%20%EB%B0%941.html">SALE</a></li>
					
					<form class="form-inline my-2 my-lg-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button type="submit" class="btn btn-info navbar-btn">Go!</button>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
                    </div>
				</ul></form>
			</div><!-- 네비 바-->
			</div> <!--컨테이너 -->
	</nav>


<!--사이드 토글-->
					
<div id="sidebar-toggle">

  <a href="https://jbit.bufs.ac.kr/~cosmos/sodalogin"> <img class=" col-ml-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jp_talk.png"></a>
  <a href="https://jbit.bufs.ac.kr/~cosmos/mypage"> <img class=" col-ml-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jp_cart.png"></a>
   <a href="#"> <img class=" col-ml-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/위.png"></a>
    <a href="#bag"> <img class=" col-ml-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/밑.png"></a>
													



</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<!--사이드 토글 ! -->

	<div class="container">
		<div class="starter-template">

		<img class=" col-ml-8 img-responsive " src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jp_sogae2.png">
		<br><br><br><br>
		
		</div>
	</div> 

	
		<a ><h1 id="sun" style="color: #00bfff">SODA</h1></a>
		<h1 id="earth">O</h1>
		<h1 id="moon">*</h1>

<script>
			var sun=document.getElementById("sun");
			var earth=document.getElementById("earth");
            var moon=document.getElementById("moon");
            
		sun.style.position="absolute";
		earth.style.position="absolute";
        moon.style.position="absolute";
	
		var sunX=660;
		var sunY=660;

		sun.style.position="absolute";
		sun.style.left=sunX+"px";
        sun.style.top=sunY+"px";

		earth.style.position="absolute";
		moon.style.position="absolute";

		var earthAngle=0;
		var moonAngle=0;
        
        
        setInterval(function(){
			var earthX=sunX+Math.cos(earthAngle)*150;
			var earthY=sunX+Math.sin(earthAngle)*150;
			var moonX=earthX+Math.cos(moonAngle)*30;
			var moonY=earthY+Math.sin(moonAngle)*30;

			earth.style.left=earthX+"px";
			earth.style.top=earthY+"px";
            moon.style.left=moonX+"px";
            moon.style.top=moonY+"px";

			earthAngle+=0.07;
			moonAngle+=0.1;
		},1000/30);
            
            
        



</script>


	
	<script src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jquery.min.js.다운로드"></script>
	<script src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/bootstrap.min.js.다운로드"></script>





<hr style="border:solid 3px  #808080;width: 90%;">
	
	
	<div class="container">
	
	
	<img class=" col-sm-2 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/학교2.png"><img class=" col-sm-1 img-responsive"  src="./소다 마켓_files/jbit.png">
<a  href="https://jbit.bufs.ac.kr/~cosmos/5조.html"><img  class=" col-sm-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jbit2019.png"> </a><h4> 부산외국어 대학교 JBIT-UNITED 제 5팀 COSMOS </h4><h5>제 5팀: 김다빈 이광호 최다은 천나정 </h5>
	
	</div>
		</body>
		