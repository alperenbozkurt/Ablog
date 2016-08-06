<?php
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900&subset=latin,latin-ext,vietnamese' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<title></title>
</head>
<body>
	
<div class="kalip">
	<div class="menuler">
		<ul>
			<li><a href="anasayfa.php">Anasayfa</a></li>
			<li><a href="yazilar.php">Yazılar</a></li>
			<li><a href="programlar.php">Programlar</a></li>
			<li><a href="ayarlar.php" class="seciliMenu">Ayarlar</a></li>
			<li><a href="cikis.php">Çıkış Yap</a></li>
		</ul>
	</div>
	<div class="duzelt"></div>
	<div class="icerik">
		<h1>Ayarlar</h1><hr><br>
			<form>
				<table style="font-size:22px;">
					<tr>
						<td width="400">Site Adresi : </td>
						<td><input type="textbox" class="txtbox"></td>
					</tr>
					<tr>
						<td width="400">Site Açıklaması : </td>
						<td><input type="textbox" class="txtbox"></td>
					</tr>
					<tr>
						<td width="400">Copyright Bölümü : </td>
						<td><input type="textbox" class="txtbox"></td>
					</tr>
					<tr>
						<td width="400"></td>
						<td><input type="submit" class="btn" value="Değişiklikleri Kaydet"></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="duzelt"></div>
	</div>
</div>
</body>
</html>