<?php session_start(); ?>
<html><head><meta charset="utf-8"></head></html>
<?php
	session_destroy();
	echo "<script>alert(\"ログアウトしました。\");</script>";
	echo "<script>window.location.href=' https://jbit.bufs.ac.kr/~dkim';</script>";
?>


