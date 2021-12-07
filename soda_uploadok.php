<?php

$uploaddir = '/home/dkim/imagetest/';
$filename = $_FILES['userfile']['name'];

if (count($_FILES)) {
  $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
  $imgsize = getimagesize($uploadfile);
  $imgtype = $imgsize[2];
  if ($imgtype == 1 or $imgtype == 2 or $imgtype == 3) {
    echo "<script>alert(\"$filename \\n アップ可能なイメージファイルです。 $imgtype\");</script>";
    echo "<script>window.location.href='https://jbit.bufs.ac.kr/~dkim/createItem.php';</script>";   
  }else if($_FILES['userfile']['error']==1) {
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
    echo "<script>alert(\"　拡張子の確認をしてください。 \\n 対応するファイル「GIF・JPG・PNG」 \");</script>";
    print_r($imgtype);
}
}

?>