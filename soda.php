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

  <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
      
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
<!-- 3개폰트-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://jbit.bufs.ac.kr/~dkim/SODA_image//ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  </head>

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

#sidebar-toggle { display: block; position: fixed; right: 20px; bottom: 50%; width: 40px; height: 50px; line-height: 60px; text-align: center; color: #555; background-color: #ffffff; border-radius: 15px; opacity: 0.9; box-shadow: 5 5 15px#aaa; z-index: 11; }
/*box-shadow: 0 0 15px#aaa; */
.best-item a {
    position: relative;
}
.best-item-content {
    position : absolute;
    top : 0;
    left : 0;
    right : 0;
    bottom : 0;
    background-color: rgb(255,255,255);
    background-image : url('https://jbit.bufs.ac.kr/~dkim/SODA_image/ttt.jpeg');
    background-repeat: no-repeat;
  }
.d-block{
    display:block!important
}
.best-item img {
    width : 100%; 
    height : auto;
}
.best-item-content {
	opacity : 0;
}

.best-item a:hover .best-item-content{
    opacity : 1;
}

h2,h4 {
      font-family: 'M PLUS Rounded 1c', sans-serif;
    }
	</style>
  <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $('#demo06').tooltip('show');
});

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

	<?php	if(!isset($_SESSION["id"])){ ?>
  <div style="text-align:right;"class="wrap">
  <a href="https://jbit.bufs.ac.kr/~dkim/sodalogin.php"style="position: relative; 
            right: 31px;">login</a>
	<a id="target" href="https://jbit.bufs.ac.kr/~dkim/join.php"class="chatbox">Join</a>
  <span id="demo06" data-toggle="tooltip" title="+50000 SODA" trigger="manual" data-placement="bottom"style="position: relative; 
            right: 15px;margin-right:75px;"></span>
  </div>
  <?php } else{
          $user_id=$_SESSION["id"];
          $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
          $sql="select * from user where id='$user_id';";
          $result = mysqli_query($link,$sql);
          $row = mysqli_fetch_array($result);
          $user_point=$row['soda_point'];
          ?>
  <div style="text-align:right;">
	<span class="badge badge-info" style="font-size: 14px;margin-right:5px;"><?=$_SESSION['id']?> 様、こんにちは！</span>
	<a href="logout.php" style="font-size: 14px;margin-right:35px;">logout</a>
  <br><br>
  <span class="badge rounded-pill bg-primary text-white" style="font-size: 14px; margin-right:80px;">保有SODA :<?=$user_point?> </span>
	<br> 
</div>
   <?php }?>  			
			

<center>
 <a href="#"> <img src="https://jbit.bufs.ac.kr/~dkim/SODA_image/soda_logo.png" class="img-fluid" > </a>
</center>

	<!--사이드 토글-->
					

<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light border border-gray sticky-top shadow-sm"style="background-color: #ffffff; z-index: 10;">
  <div class="container text-center font-weight-bold">
    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#soda_menu" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
   <div class="collapse navbar-collapse" id="soda_menu">
    <h1 class="navbar-brand"><a href="https://jbit.bufs.ac.kr/~dkim/about_soda.php" style="color: #8eaef5">About SODA</a></h1>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#Top" id="top_d" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Top
        </a>
          <div class="dropdown-menu font-weight-bold" aria-labelledby="top_d">
            <a class="dropdown-item" href="#Top_OK">Tシャツ</a>
            <a class="dropdown-item" href="#Top_OK">ブラウス</a>
            <a class="dropdown-item" href="#Top_OK">ニット</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#Top_OK">イベント</a>
          </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#Outer" id="outer_d" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        OUTER
        </a>
        <div class="dropdown-menu" aria-labelledby="outer_d">
          <a class="dropdown-item" href="#Outer_OK">ジャケット</a>
          <a class="dropdown-item" href="#Outer_OK">コート</a>
          <a class="dropdown-item" href="#Outer_OK">パディング</a>
          <a class="dropdown-item" href="#Outer_OK">ガーディガン</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#OPS" id="ops_d" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        OPS/SKIRT
        </a>
        <div class="dropdown-menu" aria-labelledby="ops_d">
          <a class="dropdown-item" href="#OPS_OK">ジーパン</a>
          <a class="dropdown-item" href="#OPS_OK">長ズボン</a>
          <a class="dropdown-item" href="#OPS_OK">半ズボン</a>
          <a class="dropdown-item" href="#OPS_OK">レギンス</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#shoes_OK">シューズ</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#bag_OK">バッグ</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="Blouse_d" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Blouse
        </a>
        <div class="dropdown-menu" aria-labelledby="Blouse_d">
          <a class="dropdown-item" href="#Blouse_OK">Blouse_t</a>
          <a class="dropdown-item" href="#Blouse_OK">Blouse_t2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#Blouse_OK">Blouse_t3</a>
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

<br>
<!--<div style="margin-left: 300px"><marquee direction=up scrollamount="3.5">나는 위로~</marquee>
<a href="item_master.php" class="btn btn-outline-danger btn-sm" style="font-size: 20px;">登録商品管理</a>
<a href="createItem.php"  class="btn btn-dark" style="font-size: 18px;">商品登録</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="createItem.php" class="btn btn-warning" style="font-size: 18px;">購入商品確認</a>
</div>-->
<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2300" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://jbit.bufs.ac.kr/~dkim/SODA_image/da1.jpg" class="d-block w-75  mx-auto img-fluid">
    </div>
    <div class="carousel-item">
      <img src="https://jbit.bufs.ac.kr/~dkim/SODA_image/da2.jpg" class="d-block w-75  mx-auto img-fluid">
    </div>
    <div class="carousel-item">
      <img src="https://jbit.bufs.ac.kr/~dkim/SODA_image/sua.jpg" class="d-block w-75  mx-auto img-fluid">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div id="blouse"class="container"> 
 <br><br>
  <hr style="border:solid 1px  #808080;">

 <center>
	<h2>Blouse</h2>
	</center><br>
          
  <div class="row" id="Blouse_OK">
    <!--
		<div class="col-xs-6 col-md-3" style="text-align: center;">
      <a href="https://jbit.bufs.ac.kr/~dkim" class="text-center">
      <img src="./SODA_image/huku1_290.gif" class="img-thumbnail img-fluid"><br>스윗입술넥니트<br><center> 19000ソダ</center>
      </a><br>
    </div>

    <div class="col-xs-6 col-md-3" style="text-align: center;">
      <a href="https://jbit.bufs.ac.kr/~dkim" class="text-center">
      <img src="./SODA_image/huku2_290.gif" class="img-thumbnail img-fluid"><br>퓨어프릴 블라우스<br><center> 11500ソダ</center>
      </a><br>
    </div>
                
    <div class="col-xs-6 col-md-3" style="text-align: center;">
      <a href="https://jbit.bufs.ac.kr/~dkim" class="text-center">
      <img src="./SODA_image/huku3_290.gif" class="img-thumbnail img-fluid"><br>오피스룩V블라우스<br><center> 12500ソダ</center>
      </a><br>
    </div>
                
    <div class="col-xs-6 col-md-3" style="text-align: center;">
      <a href="https://jbit.bufs.ac.kr/~dkim"  class="text-center">
      <img src="./SODA_image/huku4_290.gif" class="img-thumbnail img-fluid"><br>리본 몽쉘 블라우스<br><center> 15000ソダ</center>
      </a><br>
    </div>
		<div class="col-xs-6 col-md-3" style="text-align: center;">
      <a href="https://jbit.bufs.ac.kr/~dkim" class="text-center">
      <img src="./SODA_image/huku1_290.gif" class="img-thumbnail img-fluid"><br>스윗입술넥니트<br><center> 19000ソダ</center>
      </a>
    </div>

    <div class="col-xs-6 col-md-3" style="text-align: center;">
      <a href="https://jbit.bufs.ac.kr/~dkim" class="text-center">
      <img src="./SODA_image/huku2_290.gif" class="img-thumbnail img-fluid"><br>퓨어프릴 블라우스<br><center> 11500ソダ</center>
      </a>
    </div>
                
    <div class="col-xs-6 col-md-3" style="text-align: center;">
      <a href="https://jbit.bufs.ac.kr/~dkim" class="text-center">
      <img src="./SODA_image/huku3_290.gif" class="img-thumbnail img-fluid"><br>오피스룩V블라우스<br><center> 12500ソダ</center>
      </a>
    </div>
                
    <div class="col-xs-6 col-md-3" style="text-align: center;">
      <a href="https://jbit.bufs.ac.kr/~dkim"  class="text-center">
      <img src="./SODA_image/huku4_290.gif" class="img-thumbnail img-fluid"><br>리본 몽쉘 블라우스<br><center> 15000ソダ</center>
      </a>
    </div>

    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
      new표시                   
  -->
    <?php
      $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
      $sql="select * from item_Blouse;";
	    $result = mysqli_query($link,$sql);
      //$row=mysqli_fetch_array($rs); 이 줄을 while문 안에 넣어야 행이 끝났을 때 while이 중단됨  
      while($row = mysqli_fetch_array($result))
      {
        if($row['buy']==1){
      ?><div class="best-item col-xs-6 col-md-3" style="text-align: center; margin-top:12px ">
      <a href="#"  onclick="return false;" class="d-block">
       <img style=" opacity: 0.6;"src="./SODA_item_image/Blouse/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
       <div class="best-item-content d-flex flex-column justify-content-end">
            <h2 class="best-item-title font-weight-bold">品切れ</h2>
      </div> 
        </a>
      </div>
    <?php  }else{ ?>
    <div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
      <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=Blouse"class="text-center">
       <img src="./SODA_item_image/Blouse/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
      </a>
      <?php if ($row['username']=='nao'){ ?>
           <div class="d-flex justify-content-center small text-warning mb-2">
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
            </div>                                  
        <?php }else if($row['username']=='admin'){  ?>
          <div class="d-flex justify-content-center small text-warning mb-2">
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
          </div>   
        <?php } ?>
    </div>
   <?php } }  $result->free();?>
  </div>

 <!-- /blouse -->


 <br><br>
 <!-- Skirt -->

  
 <br>
  <hr style="border:solid 1px  #808080;">
	<center>
	<h2 id="Top_OK">Top</h2>
	</center><br>
          
  <div class="row">
    <?php
      $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
      $sql="select * from item_Top;";
	    $result = mysqli_query($link,$sql);
      //$row=mysqli_fetch_array($rs); 이 줄을 while문 안에 넣어야 행이 끝났을 때 while이 중단됨  
      while($row = mysqli_fetch_array($result))
      {
        if($row['buy']==1){
          ?><div class="best-item col-xs-6 col-md-3" style="text-align: center; margin-top:12px ">
          <a href="#"  onclick="return false;" class="d-block">
           <img style=" opacity: 0.4;"src="./SODA_item_image/Top/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
           <div class="best-item-content d-flex flex-column justify-content-end">
                <h2 class="best-item-title font-weight-bold">品切れ</h2>
          </div> 
            </a>
          </div>
        <?php  }else{ ?>
        <div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
          <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=Top"class="text-center">
           <img src="./SODA_item_image/Top/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
          </a>
          <?php if ($row['username']=='nao'){ ?>
           <div class="d-flex justify-content-center small text-warning mb-2">
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
          </div>                                  
          <?php }else if($row['username']=='admin'){  ?>
          <div class="d-flex justify-content-center small text-warning mb-2">
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
          </div>   
        <?php } ?>
        </div>
       <?php } }  $result->free();?>
      </div>


  <br>
  <hr style="border:solid 1px  #808080;">
	<center>
	<h2 id="Outer_OK">Outer</h2>
	</center><br>
          
  <div class="row">
    <?php
      $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
      $sql="select * from item_Outer;";
	    $result = mysqli_query($link,$sql);
      //$row=mysqli_fetch_array($rs); 이 줄을 while문 안에 넣어야 행이 끝났을 때 while이 중단됨  
      while($row = mysqli_fetch_array($result))
      {
        if($row['buy']==1){
          ?><div class="best-item col-xs-6 col-md-3" style="text-align: center; margin-top:12px ">
          <a href="#"  onclick="return false;" class="d-block">
           <img style=" opacity: 0.4;"src="./SODA_item_image/Outer/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
           <div class="best-item-content d-flex flex-column justify-content-end">
                <h2 class="best-item-title font-weight-bold">品切れ</h2>
          </div> 
            </a>
          </div>
        <?php  }else{ ?>
        <div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
          <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=Outer"class="text-center">
           <img src="./SODA_item_image/Outer/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
          </a>
          <?php if ($row['username']=='nao'){ ?>
           <div class="d-flex justify-content-center small text-warning mb-2">
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
           </div>                                  
         <?php }else if($row['username']=='admin'){  ?>
          <div class="d-flex justify-content-center small text-warning mb-2">
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
          </div>   
         <?php } ?>
        </div>
       <?php } 
      }  $result->free();?>
  </div>


  <br>
  <hr style="border:solid 1px  #808080;">
	<center>
	<h2 id="OPS_OK">OPS/Skirt</h2>
	</center><br>
          
  <div class="row">
    <?php
      $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
      $sql="select * from item_OPS;";
	    $result = mysqli_query($link,$sql);
      //$row=mysqli_fetch_array($rs); 이 줄을 while문 안에 넣어야 행이 끝났을 때 while이 중단됨  
      while($row = mysqli_fetch_array($result))
      {
        if($row['buy']==1){
          ?><div class="best-item col-xs-6 col-md-3" style="text-align: center; margin-top:12px ">
          <a href="#"  onclick="return false;" class="d-block">
           <img style=" opacity: 0.4;"src="./SODA_item_image/OPS/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
           <div class="best-item-content d-flex flex-column justify-content-end">
                <h2 class="best-item-title font-weight-bold">品切れ</h2>
          </div> 
            </a>
          </div>
        <?php  }else{ ?>
        <div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
          <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=OPS"class="text-center">
           <img src="./SODA_item_image/OPS/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
          </a>
          <?php if ($row['username']=='nao'){ ?>
           <div class="d-flex justify-content-center small text-warning mb-2">
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
           </div>                                  
         <?php }else if($row['username']=='admin'){  ?>
          <div class="d-flex justify-content-center small text-warning mb-2">
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
          </div>   
        <?php } ?>
        </div>
       <?php } }  $result->free();?>
  </div>

  <br>
  <hr style="border:solid 1px  #808080;">
	<center>
	<h2 id="shoes_OK">シューズ</h2>
	</center><br>
          
  <div class="row">
    <?php
      $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
      $sql="select * from item_shoes;";
	    $result = mysqli_query($link,$sql);
      //$row=mysqli_fetch_array($rs); 이 줄을 while문 안에 넣어야 행이 끝났을 때 while이 중단됨  
      while($row = mysqli_fetch_array($result))
      {
        if($row['buy']==1){
          ?><div class="best-item col-xs-6 col-md-3" style="text-align: center; margin-top:12px ">
          <a href="#"  onclick="return false;" class="d-block">
           <img style=" opacity: 0.4;"src="./SODA_item_image/shoes/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
           <div class="best-item-content d-flex flex-column justify-content-end">
                <h2 class="best-item-title font-weight-bold">品切れ</h2>
          </div> 
            </a>
          </div>
        <?php  }else{ ?>
        <div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
          <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=shoes"class="text-center">
           <img src="./SODA_item_image/shoes/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
          </a>
          <?php if ($row['username']=='nao'){ ?>
           <div class="d-flex justify-content-center small text-warning mb-2">
             <div class="bi-star-fill"></div>
             <div class="bi-star-fill"></div>
             <div class="bi-star-fill"></div>
             <div class="bi-star-fill"></div>
             <div class="bi-star-fill"></div>
           </div>                                  
         <?php }else if($row['username']=='admin'){  ?>
          <div class="d-flex justify-content-center small text-warning mb-2">
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
          </div>   
        <?php } ?>
        </div>
       <?php } }  $result->free();?>
  </div>

  <br>
  <hr style="border:solid 1px  #808080;">
	<center>
	<h2 id="Other_OK">Other</h2>
	</center><br>
          
  <div class="row" id="end">
    <?php
      $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
      $sql="select * from item_Other;";
	    $result = mysqli_query($link,$sql);
      //$row=mysqli_fetch_array($rs); 이 줄을 while문 안에 넣어야 행이 끝났을 때 while이 중단됨  
      while($row = mysqli_fetch_array($result))
      {
        if($row['buy']==1){
          ?><div class="best-item col-xs-6 col-md-3" style="text-align: center; margin-top:12px ">
          <a href="#"  onclick="return false;" class="d-block">
           <img style=" opacity: 0.4;"src="./SODA_item_image/Other/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
           <div class="best-item-content d-flex flex-column justify-content-end">
                <h2 class="best-item-title font-weight-bold">品切れ</h2>
          </div> 
            </a>
          </div>
        <?php  }else{ ?>
        <div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
          <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=Other"class="text-center">
           <img src="./SODA_item_image/Other/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
          </a>
          <?php if ($row['username']=='nao'){ ?>
           <div class="d-flex justify-content-center small text-warning mb-2">
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
            <div class="bi-star-fill"></div>
           </div>                                  
           <?php }else if($row['username']=='admin'){  ?>
          <div class="d-flex justify-content-center small text-warning mb-2">
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
              <div class="bi-star-fill"></div>
          </div>   
        <?php } ?>
        </div>
       <?php } }  $result->free();?>
  </div>
</div>  
<br><br><br>

<!-- /Skirt -->

<div id="sidebar-toggle">
  <a href="createItem.php" style="color:#151515;"data-toggle="tooltip" data-placement="left"  title="商品登録 "><i class="fas fa-boxes fa-2x"></i></a>
  <a href="buy_history.php" style="color:#151515;"data-toggle="tooltip" data-placement="left"  title="注文履歴 "><i class="fas fa-clipboard-list fa-2x"></i></a>
  <a href="item_master.php" style="color:#151515;"data-toggle="tooltip" data-placement="left"  title="販売管理"><i class="fas fa-clipboard-check fa-2x"></i></a>
  <a href="https://jbit.bufs.ac.kr/~dkim/soda_talk.php" data-toggle="tooltip" data-placement="left"  title="SODAトーク "> <img class=" col-ml-2 img-fluid" src="./SODA_image/sodatalk.png"></a>
  <a href="#"> <img class=" col-ml-2 img-fluid" src="./SODA_image/upup.png"></a>
  <a href="#end"> <img class=" col-ml-2 img-fluid" src="./SODA_image/down.png"></a>																
</div>
	<!--사이드 토글 ! -->	
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