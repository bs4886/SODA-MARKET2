<html>
	<head>
<meta charset="utf-8">

	</head>
	<script>

	</script>
  <body>
	
	
  <?php
   $link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
	$idvalue =$_POST["idvalue"];
	$passvalue=$_POST["passvalue"];
	$passvalue2=$_POST["passvalue2"];
	$emailvalue=$_POST["emailvalue"];

	$sql="INSERT INTO user(id,pw,email,in_time)VALUES('$idvalue', '$passvalue', '$emailvalue',now());";

		if($passvalue != $passvalue2){
			echo "<script>alert(\"PASSWORD入力エラー\");</script>";
			echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/join.php';</script>";
		}
		else
		{
			if($link->query($sql)) 
			{
			echo "<script>alert(\"$idvalue 様！アカウント登録ありがとうございます。\");</script>";
			echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim';</script>";
			}
			else
			{
			echo "<script>alert(\"登録エラー！入力した情報を確認してください。\");</script>";
			echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/join.php';</script>";
			}
		}   

  ?>
  
  
  </body>
</html>