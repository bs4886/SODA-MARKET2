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
    if(!isset($_SESSION["id"])){
    echo "<script>alert(\"ログインしてください！\");</script>";
    echo "<script>window.location.href=' https://jbit.bufs.ac.kr/~dkim/sodalogin.php';</script>";	
    }
    $ITEM_NO = $_GET['item_no'];
    $Item_point = $_GET['pot'];
    $ITEM_TYPE = $_GET['type'];
    $okuser =$_SESSION["id"];
    $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
    $sql="select * from item_$ITEM_TYPE where No=$ITEM_NO;";
  	$result = mysqli_query($link,$sql);
    $sql_data=mysqli_fetch_array($result);
    $sql2="select * from user where id='$okuser';";
    $result2 = mysqli_query($link,$sql2);
    $sql_data2=mysqli_fetch_array($result2);
    $user_name=$sql_data['username'];
   
    $okpoint =$sql_data2['soda_point'];
    $it_point =$Item_point;
    
	if($okuser == $user_name) {   
        echo "<script>alert(\"自分自身の商品は買えません。\");</script>";
        echo "<script>window.location.href=' https://jbit.bufs.ac.kr/~dkim/soda.php';</script>";	      
        die;

    }

  else if($it_point > $okpoint) {   
        echo "<script>alert(\"SODAポイント不足\");</script>";
        echo "<script>window.location.href=' https://jbit.bufs.ac.kr/~dkim/soda.php';</script>";	      
  }
  else{

  $sql="UPDATE user SET soda_point=soda_point-$it_point where id='$okuser';";
  $result = mysqli_query($link,$sql);
  $sql_data=mysqli_fetch_array($result);
    if($result) {
        echo "<script>alert(\"成功的に購入しました。\\n 詳細は注文履歴から確認できます。 \");</script>";	  
        echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/soda.php';</script>";
        $sql2="UPDATE item_$ITEM_TYPE SET buy=1 where No=$ITEM_NO;";
        $result2 = mysqli_query($link,$sql2);
        $sql3="UPDATE item_$ITEM_TYPE SET buy_user='$okuser' where No=$ITEM_NO;";
        $result3 = mysqli_query($link,$sql3);
    }
    else {
        echo "<script>alert(\"購入失敗！\");</script>";
        echo "<script>window.location.href=' https://jbit.bufs.ac.kr/~dkim/soda.php';</script>";	
    }
  } 
    
  ?>

  </body>
</html>