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
			<li><a href="anasayfa.php" class="seciliMenu">Anasayfa</a></li>
			<li><a href="yazilar.php">Yazılar</a></li>
			<li><a href="programlar.php">Programlar</a></li>
			<li><a href="ayarlar.php">Ayarlar</a></li>
			<li><a href="cikis.php">Çıkış Yap</a></li>
		</ul>
	</div>
	<div class="duzelt"></div>
	<div class="icerik">
		<h1>Anasayfa</h1><hr><br>
		<div class="icerikx">
		Sitendeki aktif ziyaretçi sayısı : <br>
		Sitendeki bugünkü ziyaretçi sayısı : <br>
		Sitendeki bu haftaki ziyaretçi sayısı : <br>
		Sitendeki toplam ziyaretçi sayısı : <br>
		<br><br>
		Son yorumlar : <br><br><br><br>
		Gelen Mesajlar : <br><br><br><br></div>
		<div class="duzelt"></div>
	</div>
</div>
</body>
</html>