<?php
session_start();
$filename = $_FILES['userfile']['name'];
$link = mysqli_connect("localhost", "dkim", "rlaekqls1q1q@", "dkim");
      
$item_name =$_POST["itemname"];
$item_info =$_POST["iteminfo"];
$item_point=$_POST["itempoint"];
$item_type=$_POST["itemtype"];
$item_username=$_SESSION["id"];

  if($item_type == 1 ) {
    $itemok="SELECT max(No)+1 as NO from item_Top";
    $itemno=mysqli_query($link,$itemok);
    $item_count2=mysqli_fetch_array($itemno);
    $item_count=$item_count2['NO'];
    $path_parts = pathinfo($_FILES['userfile']['name']);    // 확장자 추출
    $filerename = $item_count.".".$path_parts['extension']; 
    $sql="INSERT INTO item_Top(name,iteminfo,point,potoname,create_time,username)VALUES('$item_name', '$item_info', '$item_point','$filerename',now(),'$item_username');";
    $uploaddir = '/home/dkim/public_html/SODA_item_image/Top/'; 
  }
  else if ($item_type == 2){
    $itemok="SELECT max(No)+1 as NO from item_Blouse";
    $itemno=mysqli_query($link,$itemok);
    $item_count2=mysqli_fetch_array($itemno);
    $item_count=$item_count2['NO'];
    $path_parts = pathinfo($_FILES['userfile']['name']);    // 확장자 추출
    $filerename = $item_count.".".$path_parts['extension'];   
    $sql="INSERT INTO item_Blouse(name,iteminfo,point,potoname,create_time,username)VALUES('$item_name', '$item_info', '$item_point','$filerename',now(),'$item_username');";
    $uploaddir = '/home/dkim/public_html/SODA_item_image/Blouse/';
  }
  else if($item_type == 3 ){
    $itemok="SELECT max(No)+1 as NO from item_Outer";
    $itemno=mysqli_query($link,$itemok);
    $item_count2=mysqli_fetch_array($itemno);
    $item_count=$item_count2['NO'];       
    $path_parts = pathinfo($_FILES['userfile']['name']);    // 확장자 추출
    $filerename = $item_count.".".$path_parts['extension'];  
    $sql="INSERT INTO item_Outer(name,iteminfo,point,potoname,create_time,username)VALUES('$item_name', '$item_info', '$item_point','$filerename',now(),'$item_username');";
    $uploaddir = '/home/dkim/public_html/SODA_item_image/Outer/';
  }
  else if ($item_type == 4 ){
    $itemok="SELECT max(No)+1 as NO from item_OPS";
    $itemno=mysqli_query($link,$itemok);
    $item_count2=mysqli_fetch_array($itemno);
    $item_count=$item_count2['NO'];   
    $path_parts = pathinfo($_FILES['userfile']['name']);    // 확장자 추출
    $filerename = $item_count.".".$path_parts['extension']; 
    $sql="INSERT INTO item_OPS(name,iteminfo,point,potoname,create_time,username)VALUES('$item_name', '$item_info', '$item_point','$filerename',now(),'$item_username');";
    $uploaddir = '/home/dkim/public_html/SODA_item_image/OPS/'; 
  }
  else if ($item_type == 5){
    $itemok="SELECT max(No)+1 as NO from item_shoes";
    $itemno=mysqli_query($link,$itemok);
    $item_count2=mysqli_fetch_array($itemno);
    $item_count=$item_count2['NO'];     
    $path_parts = pathinfo($_FILES['userfile']['name']);    // 확장자 추출
    $filerename = $item_count.".".$path_parts['extension']; 
    $sql="INSERT INTO item_shoes(name,iteminfo,point,potoname,create_time,username)VALUES('$item_name', '$item_info', '$item_point','$filerename',now(),'$item_username');";
    $uploaddir = '/home/dkim/public_html/SODA_item_image/shoes/';
  }
  else if ($item_type == 6){
    $itemok="SELECT max(No)+1 as NO from item_bags";
    $itemno=mysqli_query($link,$itemok);
    $item_count2=mysqli_fetch_array($itemno);
    $item_count=$item_count2['NO'];    
    $path_parts = pathinfo($_FILES['userfile']['name']);    // 확장자 추출
    $filerename = $item_count.".".$path_parts['extension']; 
    $sql="INSERT INTO item_bags(name,iteminfo,point,potoname,create_time,username)VALUES('$item_name', '$item_info', '$item_point','$filerename',now(),'$item_username');";
    $uploaddir = '/home/dkim/public_html/SODA_item_image/bags/';     
  }
  else{
    $itemok="SELECT max(No)+1 as NO from item_Other";
    $itemno=mysqli_query($link,$itemok);
    $item_count2=mysqli_fetch_array($itemno);
    $item_count=$item_count2['NO'];
    $path_parts = pathinfo($_FILES['userfile']['name']);    // 확장자 추출
    $filerename = $item_count.".".$path_parts['extension']; 
    $sql="INSERT INTO item_Other(name,iteminfo,point,potoname,create_time,username)VALUES('$item_name', '$item_info', '$item_point','$filerename',now(),'$item_username');";
    $uploaddir = '/home/dkim/public_html/SODA_item_image/Other/';
  }

//  $itemno=mysqli_query($link,$itemok);
//  $item_count=mysqli_num_rows($itemno)+1;
    
//  $path_parts = pathinfo($_FILES['userfile']['name']);    // 확장자 추출
//  $filerename = $item_count.".".$path_parts['extension'];   // 파일명 변경한 파일
    

if (count($_FILES)) {
  $uploadfile = $uploaddir.$filerename;
  $imgsize = getimagesize($uploadfile);
  $imgtype = $imgsize[2];
    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){

      if($link->query($sql)) {
        echo "<script>alert(\"$filename \\n 成功的に商品登録しました！ \");</script>";
        echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/';</script>";
      }else {
        echo "<script>alert(\"$sql   登録エラー！入力した情報を確認してください。\");</script>";
        echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/createItem.php';</script>";
      }  
    }
    else if($_FILES['userfile']['error']==1) {
      echo "<script>alert(\" ファイルのサイズが大きいです。\");</script>";
      echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/createItem.php';</script>";
    }else if($_FILES['userfile']['error']==2) {
      echo "<script>alert(\" ファイルのサイズが大きいです。確認してください \");</script>";
      echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/createItem.php';</script>";
    }else if($_FILES['userfile']['error']==3) {
      echo "<script>alert(\" ファイルの一部だけ転送されました。確認してください \");</script>";
      echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/createItem.php';</script>";
    }else if($_FILES['userfile']['error']==4) {
      echo "<script>alert(\" アップしたファイルがありません。確認してください \");</script>";
      echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/createItem.php';</script>";
    } else{
      echo "<script>alert(\"確認できないエラーですㅠㅠ \");</script>";
      echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/createItem.php';</script>";
    }
}

?>