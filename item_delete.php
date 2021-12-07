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
    $ITEM_NO2 = $_GET['item_no'];
    $photo_name2 = $_GET['ptn'];
    $ITEM_TYPE2 = $_GET['type'];
    $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
    $sql="delete from item_$ITEM_TYPE2 where No=$ITEM_NO2;";
	//$result = $link->query($sql);
    $result = mysqli_query($link,$sql);
    //echo "<script>alert(\"$ITEM_NO2\");</script>";	  
	if($result) {
     echo "<script>alert(\"成功的に削除しました。\");</script>";	  
	 echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/soda.php';</script>";
	}else {
	 echo "<script>alert(\"削除失敗！\");</script>";
	 echo "<script>window.location.href=' https://jbit.bufs.ac.kr/~dkim/soda.php';</script>";	
	}
  ?>
  </body>
</html>


