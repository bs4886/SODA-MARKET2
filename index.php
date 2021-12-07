  <?php
 session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0097)file:///C:/Users/samsung/Desktop/%EB%84%A4%EB%B9%84%EA%B2%8C%EC%9D%B4%EC%85%98%20%EB%B0%941.html# -->
<html lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ソーダマーケット</title>
	<!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
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
			
					</div>

				
<center>
 <a href="#"> <img  src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jp_sodalogo.png" class="img-responsive" > </a>
 </center>
<br>
<br>
	<nav class="navbar navbar-default navbar-light bg-light" style="background-color: #ffffff;">
		<div class="container ">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a class="navbar-brand" style="color: #777777" href="https://jbit.bufs.ac.kr/~cosmos/마켓설명">About SODA</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse ">
				<form action="#" method="post" class="form-inline">
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
					<li><a style="color: black" href="#">SALE</a></li>
					
					<form class="form-inline my-2 my-lg-0 justify-content-center ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					<input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
					<button type="submit" class="btn btn-info navbar-btn">Go!</button>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
				</ul></form>
			</div>
                    </div>
				
			<!--/.nav-collapse -->
		</div>
	</nav>
	
	<!--사이드 토글-->
					
<div id="sidebar-toggle">
 <a href="https://jbit.bufs.ac.kr/~cosmos/sodalogin"> <img class=" col-ml-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jp_talk.png"></a>
  <a href="https://jbit.bufs.ac.kr/~cosmos/mypage"> <img class=" col-ml-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jp_cart.png"></a>
   <a href="#"> <img class=" col-ml-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/위.png"></a>
    <a href="#end"> <img class=" col-ml-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/밑.png"></a>
													
								
</div>
	
	<!--사이드 토글 ! -->
	
		
	<div class="container">
		<div class="starter-template">
	
		<div id="sidebar">
   
</div>


		</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- 캐러셀! -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
<center>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img  src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/da1.png" >
      <div class="carousel-caption">
      
      </div>
    </div>

    <div class="item">
      <img  src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/da2.png" >
      <div class="carousel-caption">
      
     
      </div>
    </div>

    <div class="item">
      <img   src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/aaa.jpg">
      <div class="carousel-caption">
      
      
      </div>
    </div>

    <div class="item">
      <img  src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/a3.jpg">
      <div class="carousel-caption">
       
     
      </div>
    </div>
  </div>
</center>

  <!-- Left and right controls -->
	 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
	<!-- /.container -->

	
<!---->
<div class="container">
	<center>
	<br>
	<h2>TO DAY</h2>
	</center>
	  <div class="row">
                    <div class="col-xs-6 col-md-3">
                    <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                    <img src="./소다 마켓_files/out1.jpg">브런치 기본 가디건<br><center> 10000소다</center>
                    </a>
              </div>
                  <div class="col-xs-6 col-md-3">
                      <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                        <img src="./소다 마켓_files/out2.jpg">파스텔 진주 가디건<br><center> 17500소다</center>
                      </a>
                  </div>
                  <div class="col-xs-6 col-md-3">
                      <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                        <img src="./소다 마켓_files/out3.jpg">봄 꽈배기 가디건<br><center> 11000소다</center>
                      </a>
                  </div>
                  <div class="col-xs-6 col-md-3">
                      <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                        <img src="./소다 마켓_files/out4.jpg">승무원 트렌치 코트<br><center> 40000소다</center>
                      </a>
                  </div>
              </div>
</div>

<div class="container">
	
              <div class="row">
                    <div class="col-xs-6 col-md-3">
                    <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                    <img src="./소다 마켓_files/out5.jpg">봄 크롭 청자켓<br><center> 14000소다</center>
                    </a>
              </div>
                  <div class="col-xs-6 col-md-3">
                      <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                        <img src="./소다 마켓_files/out6.jpg">베를린 자켓<br><center> 35000소다</center>
                      </a>
                  </div>
                  <div class="col-xs-6 col-md-3">
                      <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                        <img src="./소다 마켓_files/out7.jpg">사선 라이더 가죽자켓<br><center> 18000소다</center>
                      </a>
                  </div>
                  <div class="col-xs-6 col-md-3">
                      <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                        <img src="./소다 마켓_files/out8.jpg">퐁당 하찌 박시 가디건<br><center> 14500소다</center>
                      </a>
                  </div>
              </div>
            </div>


<!---->

	<div class="container">
	<div class="starter-template">
			<hr>
			<img class=" img-responsive" src="./소다 마켓_files/a2.jpg">

	</div>
	</div>
	<br><br>
		
          <div	id="OPS" class="container">  
		  
			<hr style="border:solid 1px  #808080;">
		  <center>
	<h2>One Piece</h2>
	</center>
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/dre1.jpg">소프트 플라워 원피스 <br><center> 11600소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/dre2.jpg">토트 캉캉 미니원피스<br><center> 8500소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/dre3.jpg">피치 꽃 리본원피스<br><center> 17000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/dre4.jpg">레이스 꽃 쉬폰원피스<br><center> 25000소다</center>
                  </a>
                </div>
            </div>
          </div>

          <div class="container">   
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/dre5.jpg">플로럴 시스루 꽃원피스<br><center> 26000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/dre6.jpg">플라워 프릴 원피스<br><center> 23000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/dre7.jpg">벨 브이넥 미니원피스<br><center> 23000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/dre8.jpg">배색 리본 미니원피스<br><center> 0000소다</center>
                  </a>
                </div>
            </div>
          </div>

          <div class="container">   
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/dre9.jpg">퓨어 리본 미니 원피스<br><center> 19000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/dre10.jpg">진주 가디건+스커트 세트<br><center> 30000소다</center>
                  </a>
                </div>
            </div>
          </div>

      <div id="blouse"class="container">   
            <div class="row">
				<hr style="border:solid 1px  #808080;">
		  <center>
	<h2>Blouse</h2>
	</center>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/상의1.jpg">스윗입술넥니트<br><center> 19000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/상의2.jpg">퓨어프릴 블라우스<br><center> 11500소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/상의3.jpg">오피스룩V블라우스<br><center> 12500소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/상의4.jpg">리본 몽쉘 블라우스<br><center> 15000소다</center>
                  </a>
                </div>
            </div>
          </div>

      <div class="container">   
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/상의5.jpg">단작블라우스<br><center> 8500소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/상의6.jpg">러브 모찌맨투맨<br><center> 9000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/상의7.jpg">원티드 스프라이프 티셔츠<br><center> 6000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/상의8.jpg">트윈체크남방<br><center> 9500소다</center>
                  </a>
                </div>
            </div>
          </div>

      <div class="container">   
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/상의9.jpg">루즈 박시 티셔츠<br><center> 7000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/상의10.jpg">소프트 데일리 니트 <br><center> 11000소다</center>
                  </a>
                </div>
            </div>
          </div>
		<hr>

			<div class="container">
	<div class="starter-template">
			<img class=" img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/바지.jpg">
	</div>
	</div>
		<br><br>
      <div id="pants"class="container">  
	  	<hr style="border:solid 1px  #808080;">

	    <center>
	<h2>Pants</h2>
		</center>
	          <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/하의1.jpg">히든밴딩 컷팅팬츠<br><center> 11000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/하의2.jpg">감탄 슬림팬츠<br><center> 13000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/하의3.jpg">인밴딩 크롭스키니<br><center> 10000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/하의4.jpg">텐션 힙업팬츠<br><center> 11500소다</center>
                  </a>
                </div>
            </div>
          </div>

       <div class="container">   
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/하의5.jpg">오트일자팬츠<br><center> 12200소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/하의6.jpg">론니부츠컷 슬랙스<br><center> 14000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/하의7.jpg">워싱크롭 일자팬츠<br><center> 15000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/하의8.jpg">롱다리스키니<br><center> 9000소다</center>
                  </a>
                </div>
            </div>
          </div>

       <div class="container">   
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/하의9.jpg">커버핏 슬랙스<br><center> 16000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/하의10.jpg">토니트임 일자팬츠!<br><center> 18000소다</center>
                  </a>
                </div>
            </div>
          </div>
		


      <div id="skirt"class="container">   
       
			<div class="row">
	<hr style="border:solid 1px  #808080;">

			    <center>
	<h2>Skirt</h2>
		</center>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/치마1.jpg">베이직 미니 프릴스커트<br><center> 15000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/치마2.jpg">피니 플레어스커트<br><center> 20000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/치마3.jpg">비주얼 데일리 스커트<br><center> 12000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/치마4.jpg">꽃진주 레이스 미니스커트<br><center> 17000소다</center>
                  </a>
                </div>
            </div>
          </div>

      <div class="container">   
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/치마5.jpg">카롱 체크 스커트팬츠<br><center> 16500소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/치마6.jpg">크로버 플라워레이스 스커트<br><center> 8000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/치마7.jpg">멜로 체크 버클스커트<br><center> 13000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/치마8.jpg">모카골드 울스커트<br><center> 17300소다</center>
                  </a>
                </div>
            </div>
          </div>

      <div class="container">   
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/치마9.jpg">하운드 미니스커트<br><center> 10000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/치마10.jpg">쥬얼리 버튼스커트<br><center> 13000소다</center>
                  </a>
                </div>
            </div>
          </div>
	

	<hr style="border:solid 1px  #808080;">

      <div id="shose"class="container">   
            <div class="row">
					    <center>
	<h2>Shose</h2>
		</center>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/구두1.jpg">에나멜 스퀘어 미들힐 슬링백<br><center> 12000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/구두2.jpg">레더스퀘어 펌프스<br><center> 14000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/구두3.jpg">레더통굽 스틸레토 슬링백<br><center> 11000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/구두4.jpg">통굽 미들힐 펌프스<br><center> 13000소다</center>
                  </a>
                </div>
            </div>
          </div>

       <div class="container">   
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/구두5.jpg">패브릭 단화 슬링백 플랫<br><center> 20000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/구두6.jpg">스틸레토 미들힐 펌프스<br><center> 17000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/구두7.jpg">스퀘어 스웨이드 플랫슈즈<br><center> 10000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/구두8.jpg">레더링버클 로퍼 블로퍼<br><center> 13000소다</center>
                  </a>
                </div>
            </div>
          </div>

       <div class="container">   
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/구두9.jpg">화이트 플랫 하이힐<br><center> 14000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/구두10.jpg">통굽 스니커즈 운동화<br><center> 11000소다</center>
                  </a>
                </div>
            </div>
          </div>

		  
	<hr style="border:solid 1px  #808080;">


       <div id="bag"class="container">   
            <div class="row">
			   <center>
	<h2>Bag/Acc</h2>
		</center>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/잡화1.jpg">퀸 스퀘어 크로스백 가방<br><center> 14000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/잡화2.jpg">네모네모 크로스백 가방<br><center> 16000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/잡화3.jpg">데일리 쇼퍼백 가방<br><center> 7000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/잡화4.jpg">편지 스퀘어 크로스백 가방<br><center> 9000소다</center>
                  </a>
                </div>
            </div>
          </div>

      <div  class="container">   
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/잡화5.jpg">메리 미니크로스백 가방<br><center> 9900소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/잡화6.jpg">똑딱이 숄더 크로스 미니백<br><center> 10000소다</center>
                  </a>
                </div>


                <div  id="acc"class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/잡화7.jpg">루비 하트 진주 롱이어링<br><center> 3500소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/잡화8.jpg">리아 물방울 다이아이어링<br><center> 5000소다</center>
                  </a>
                </div>
            </div>
          </div>
      <div class="container">   
            <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/잡화9.jpg">진주펍 드롭이어링<br><center> 5000소다</center>
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="https://jbit.bufs.ac.kr/~cosmos/상품정보" class="thumbnail">
                  <img src="./소다 마켓_files/잡화10.jpg">코제 진주 리본이어링<br><center> 6000소다</center>
                  </a>
                </div>
            </div>
          </div>



<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<hr style="border:solid 3px  #808080;">
	
	
	<div class="container">
	
<img class=" col-sm-2 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/학교2.png"><img class=" col-sm-1 img-responsive"  src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jbit.png">
<a  href="https://jbit.bufs.ac.kr/~cosmos/5조.html"><img  id="end"class=" col-sm-1 img-responsive" src="https://jbit.bufs.ac.kr/~cosmos/소다 마켓_files/jbit2019.png"> </a><h4> 부산외국어 대학교 JBIT-UNITED 제 5팀 COSMOS </h4><h5>제 5팀: 김다빈 이광호 최다은 천나정 </h5>
	
	</div>

</body>

</html>