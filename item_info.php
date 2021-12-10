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

	<title>ソーダマーケット</title>
	<!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
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

 <?php	if(!isset($_SESSION["id"])){ 
   echo "<script>alert(\"ログインしてください！\");</script>";
	 echo "<script>window.location.href=' https://jbit.bufs.ac.kr/~dkim/sodalogin.php';</script>";	
?>
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
    <h1 class="navbar-brand"><a href="https://jbit.bufs.ac.kr/~dkim/about_soda.php" style="color: #8eaef5">About SODA</a></h1>  
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
<?php
    $ITEM_NO = $_GET['item_no'];
    $photo_name = $_GET['ptn'];
    $ITEM_TYPE = $_GET['type'];
    $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
    $sql="select * from item_$ITEM_TYPE where No=$ITEM_NO;";
  	$result = mysqli_query($link,$sql);
    $sql_data=mysqli_fetch_array($result);
    $user_name=$sql_data['username'];
 ?>
<div class="container"> 
 <div class="col-xs-4" style="text-align: center;"><br>
   <img src="./SODA_item_image/<?=$ITEM_TYPE?>/<?=$photo_name?>" style="width:600px; height:600px; " class="img-thumbnail img-fluid" align="left" vspace="10" hspace="10">
 </div>

 <div class="col-xs-4" style="text-align: left;margin-top:30px; ">
 <?php	if($_SESSION["id"]==$user_name){ ?>
 <center>
 <button type="button" class="btn btn-secondary btn-lg">商品内容編集</button>
 &nbsp;&nbsp;&nbsp;                                                                                                     
<a class="btn btn-danger btn-lg" href="https://jbit.bufs.ac.kr/~dkim/item_delete.php?item_no=<?php echo $sql_data['No'];?>&ptn=<?php echo $sql_data['potoname'];?>&type=<?php echo $ITEM_TYPE;?>">商品削除</a>
 </center> <br><br><br>
 <?php } ?>
 <h4>　商品登録日：<?= $sql_data['create_time']?>　  <span class="badge badge-pill badge-warning">new !</span></h4>
 <br>
 <h3>　商品名：<?= $sql_data['name']?></h3>
 <br>
 <h3 style="color:#5882FA;">　<?= $sql_data['point']?> Soda</h3>
 <br>
 <h4>　商品説明：<?= $sql_data['iteminfo']?></h4>
 <br>
 <h4>　配送方法：宅配</h4>
 <br>
 <h4>　配送費：2000円</h4>
 <br>
 <h4>　登録者：　<?= $sql_data['username']?>　<span class="badge badge-info">登録者情報見る</span></h4>
 <br>

 <br><br><br>
 <center>
 <button type="button" class="btn btn-outline-warning btn-lg">★気になる</button>
 &nbsp;&nbsp;&nbsp;
 <a class="btn btn-outline-success btn-lg" href="https://jbit.bufs.ac.kr/~dkim/item_buy.php?item_no=<?php echo $ITEM_NO;?>&pot=<?php echo $sql_data['point'];?>&type=<?php echo $ITEM_TYPE;?>"class="text-center"> 購入する!</a>
 </center>
 <!--cont<span class ="star-rating">
     <span style ="width:50%"></span>
 </span>-->
 </div>


 <div style="margin-top:80px; ">
 <br>
 <hr style="border:solid 1px  #808080;　width: 1000px;">
<center>
 <h3>他の商品</h3>
 </center>
 </div>
    <div class="row">
    <?php
      $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
      $sql="select * from item_$ITEM_TYPE where No!=$ITEM_NO and buy=0 limit 4;";
  	  $result = mysqli_query($link,$sql);
      //$row=mysqli_fetch_array($rs); 이 줄을 while문 안에 넣어야 행이 끝났을 때 while이 중단됨  
      while($row = mysqli_fetch_array($result))
      {
        if($row['buy']==1){
          ?><div class="best-item col-xs-6 col-md-3" style="text-align: center; margin-top:12px ">
          <a href="#"  onclick="return false;" class="d-block">
           <img style=" opacity: 0.4;"src="./SODA_item_image/<?=$ITEM_TYPE?>/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
           <div class="best-item-content d-flex flex-column justify-content-end">
                <h2 class="best-item-title font-weight-bold">品切れ</h2>
          </div> 
            </a>
          </div>
        <?php  }else{ ?>
        <div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
          <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=<?=$ITEM_TYPE?>"class="text-center">
           <img src="./SODA_item_image/<?=$ITEM_TYPE?>/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?> soda</center>
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
	
</div><!--cont-->

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