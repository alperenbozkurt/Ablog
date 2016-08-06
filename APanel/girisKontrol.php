<?php
	include '../bag.php';
	session_start();
	$sonuc = mysql_query("select * from kullanicilar where id=1",$bag);
	$kullanici = mysql_fetch_array($sonuc);
	ob_start();
	if(($_POST["username"]==$kullanici["Adi"]) and (md5($_POST["password"])==$kullanici["Sifre"])){
	$_SESSION["login"] = "true";
	$_SESSION["user"] = $user;
	$_SESSION["pass"] = $pass;
	header("Location:anasayfa.php");
	}else{
	echo "Kullancı Adı veya Şifre Yanlış.<br>";
	}
?>