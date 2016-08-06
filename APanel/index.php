<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>APanel Yönetim Paneli</title>
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900&subset=latin,latin-ext,vietnamese' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="bosluk">
	<div class="sifreEkrani">
		<h2>APanel Yönetim Paneli</h2>
		<hr>
		<form action="index.php" method="POST">
			<table align="center">
			<tr>
			<td>Kullanici Adi</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
			</tr>
			<tr>
			<td>Sifre</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
			</tr>
			<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Giris"></td>
			</tr>
			</table>
			</form>
			<center>
			<?php
				if($_POST){ 
					if (preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $_POST["username"]) || preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $_POST["password"])){
						echo "Hacı bu olmadı işte.";
					}
					else{
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
					}
				}
			?></center>
	</div>
</div>
</body>
</html>
