<?php
 session_start(); ?>
<html>
<head>
<meta charset="utf-8">
	</head>
	<script>
        
	</script>
  <body>
	<?php
    $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
	$ok =$_POST["memovalue"];
	if(!isset($_SESSION["id"])){
        $okuser=NULL;
    }else{
        $okuser=$_SESSION["id"];
    }

	$sql="insert into coco(memo,oktime,okuser) values('$ok',now(),'$okuser');";
	$result = $link->query($sql);
	
	if($result&& !empty($ok)) {
     echo "<script>alert(\"コメントありがとうございます。\");</script>";	  
	  	  echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/about_soda.php';</script>";
	}else {
	 echo "<script>alert(\"送信失敗！ 入力データを確認してください。！\");</script>";
	 echo "<script>window.location.href=' https://jbit.bufs.ac.kr/~dkim/about_soda.php';</script>";	
	}
  ?>
  </body>
</html>