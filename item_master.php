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
<!-- 3개폰트-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">

<title>ソーダマーケット</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<style>
		body {
			padding-top: 50px;
			background-color:white;
     
		}
    h2 {
      font-family: 'M PLUS Rounded 1c', sans-serif;
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

<div class="container"> 
<?php
    $ITEM_NO = $_GET['item_no'];
    $photo_name = $_GET['ptn'];
    $ITEM_TYPE = $_GET['type'];
    $master_username=$_SESSION["id"];
    $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
    $Blouse_sql="select * from item_Blouse where username='$master_username' AND buy= 0;";
	  $Blouse_sql2="select * from item_Blouse where username='$master_username'AND buy= 1;";
    $Blouse_result = mysqli_query($link,$Blouse_sql);
    $Blouse_result2 = mysqli_query($link,$Blouse_sql);

    $OPS_sql="select * from item_OPS where username='$master_username'AND buy= 0;";
	  $OPS_result = mysqli_query($link,$OPS_sql);
  
    $Other_sql="select * from item_Other where username='$master_username'AND buy= 0;";
	  $Other_sql2="select * from item_Other where username='$master_username' AND buy= 1;";
	  $Other_result = mysqli_query($link,$Other_sql);
    $Other_result2 = mysqli_query($link,$Other_sql2);
   
    $Outer_sql="select * from item_Outer where username='$master_username'AND buy= 0;";
	  $Outer_sql2="select * from item_Outer where username='$master_username' AND buy= 1;"; 
    $Outer_result = mysqli_query($link,$Outer_sql);
    $Outer_result2 = mysqli_query($link,$Outer_sql2);
   
    $Top_sql="select * from item_Top where username='$master_username'AND buy= 0;";
	  $Top_result = mysqli_query($link,$Top_sql);

    $bags_sql="select * from item_bags where username='$master_username'AND buy= 0;";
	$bags_result = mysqli_query($link,$bags_sql);

    $shoes_sql="select * from item_shoes where username='$master_username'AND buy= 0;";
	$shoes_result = mysqli_query($link,$shoes_sql);
 ?>
<div class="container">
    <br><br>
<center>
<h2><?= $master_username?> さんが登録中の商品</h2>
</center>
<br>
<div class="row">
 <?php
 while($row = mysqli_fetch_array($Blouse_result))
 {
?>
<div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
 <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=Blouse"class="text-center">
  <img src="./SODA_item_image/Blouse/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?></center>
 </a>
 <button type="button" class="btn btn-outline-secondary btn"style="margin-top:7px">商品編集</button>                                                                                                     
 <button type="button" class="btn btn-outline-danger"style="margin-top:7px">販売取り消す</button>  
</div>
<?php }  $Blouse_result->free();?>
 


<?php
 while($row = mysqli_fetch_array($OPS_result))
 {
?>
<div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
 <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=OPS"class="text-center">
  <img src="./SODA_item_image/OPS/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?></center>
 </a>
 <button type="button" class="btn btn-outline-secondary btn"style="margin-top:7px">商品編集</button>                                                                                                     
 <button type="button" class="btn btn-outline-danger"style="margin-top:7px">販売取り消す</button>  
</div>
<?php }  $OPS_result->free();?>




<?php
 while($row = mysqli_fetch_array($Outer_result))
 {
?>
<div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
 <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=Outer"class="text-center">
  <img src="./SODA_item_image/Outer/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?></center>
 </a>
 <button type="button" class="btn btn-outline-secondary btn"style="margin-top:7px">商品編集</button>                                                                                                     
 <button type="button" class="btn btn-outline-danger"style="margin-top:7px">販売取り消す</button>  
</div>
<?php }  $Outer_result->free();?>
 


<?php
 while($row = mysqli_fetch_array($Top_result))
 {
?>
<div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
 <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=Top"class="text-center">
  <img src="./SODA_item_image/Top/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?></center>
 </a>
 <button type="button" class="btn btn-outline-secondary btn"style="margin-top:7px">商品編集</button>                                                                                                     
 <button type="button" class="btn btn-outline-danger"style="margin-top:7px">販売取り消す</button>  
</div>
<?php }  $Top_result->free();?>
 <hr style="border:solid 1px  #808080;">


<?php
 while($row = mysqli_fetch_array($bags_result))
 {
?>
<div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
 <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=bags"class="text-center">
  <img src="./SODA_item_image/bags/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?></center>
 </a>
 <button type="button" class="btn btn-outline-secondary btn"style="margin-top:7px">商品編集</button>                                                                                                     
 <button type="button" class="btn btn-outline-danger"style="margin-top:7px">販売取り消す</button>  
</div>
<?php }  $bags_result->free();?>



<?php
 while($row = mysqli_fetch_array($shoes_result))
 {
?>
<div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
 <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=shoes"class="text-center">
  <img src="./SODA_item_image/shoes/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?></center>
 </a>
 <button type="button" class="btn btn-outline-secondary btn"style="margin-top:7px">商品編集</button>                                                                                                     
 <button type="button" class="btn btn-outline-danger"style="margin-top:7px">販売取り消す</button>  

</div>
<?php }  $shoes_result->free();?>



<?php
 while($row = mysqli_fetch_array($Other_result))
 {
?>
<div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
 <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=Other"class="text-center">
  <img src="./SODA_item_image/Other/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?></center>
 </a>
 <button type="button" class="btn btn-outline-secondary btn"style="margin-top:7px">商品編集</button>                                                                                                     
 <button type="button" class="btn btn-outline-danger"style="margin-top:7px">販売取り消す</button>  
</div>
<?php }  $Other_result->free();?>
 </div>

<br><br><br><br><br>

<hr style="border:solid 3px  #808080;width: 95%;">
<center>
<h2 style=" margin-top:12px"><?= $master_username?>さんの販売確認待ちの商品</h2>
 </center>
<div class="row">
 <?php
 while($row = mysqli_fetch_array($Blouse_result2))
 {
?>
<div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
 <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=Blouse"class="text-center">
  <img src="./SODA_item_image/Blouse/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?></center>
 </a>
 <button type="button" class="btn btn-outline-success btn"style="margin-top:7px">販売確認</button>                                                                                                     
</div>
<?php }  $Blouse_result2->free();?>
 </div>

 <div class="row">
<?php
 while($row = mysqli_fetch_array($Outer_result2))
 {
?>
<div class="col-xs-6 col-md-3" style="text-align: center; margin-top:12px">
 <a href="https://jbit.bufs.ac.kr/~dkim/item_info.php?item_no=<?php echo $row['No'];?>&ptn=<?php echo $row['potoname'];?>&type=Outer"class="text-center">
  <img src="./SODA_item_image/Outer/<?=$row['potoname']?>" class="img-thumbnail img-fluid"><br><?=$row['name']?><br><center><?=$row['point']?></center>
 </a>
 <button type="button" class="btn btn-outline-success btn"style="margin-top:7px">販売確認</button>                                                                                                     
</div>
<?php }  $Outer_result2->free();?>
 </div>
<br><br><br>
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