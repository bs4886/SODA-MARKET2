 	
  <?php
 session_start();?>
<html>
<head>
<meta charset="utf-8">
	</head>
	<script>
	</script>
  <body>
	<?php
    $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
	$okid =$_POST["okid"];
	$okpass=$_POST["okpass"];	

	$sql="select * from user WHERE id='$okid' and pw='$okpass';";
	$result = $link->query($sql);
	$sql2="update user set log_time = now() where id= '$okid';";
	$result2 = $link->query($sql2);
	 

	if($result->num_rows>= 1) {
     echo "<script>alert(\"$okid 様、こんにちは！\");</script>";	  
	  $_SESSION["id"]=$okid;
	  $_SESSION["log"]=true;
	  echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim';</script>";
	}else {
	 echo "<script>alert(\"ログイン失敗！\");</script>";
	 echo "<script>window.location.href=' https://jbit.bufs.ac.kr/~dkim/sodalogin.php';</script>";	
	}
  ?>
  </body>
</html>