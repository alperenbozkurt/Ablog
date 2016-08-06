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
			<li><a href="programlar.php" class="seciliMenu">Programlar</a></li>
			<li><a href="ayarlar.php">Ayarlar</a></li>
			<li><a href="cikis.php">Çıkış Yap</a></li>
		</ul>
	</div>
	<div class="duzelt"></div>
	<div class="icerik">
		<h1>Programlar</h1><hr><div class="ortala">
			<a href="yeniprogram.php" class="yeniYazi">Yeni Program</a></div>
			<form>
				<table class="tablo">
					<tr>
						<td width="40px" class="tabloBasligi tabloX kenar">ID</td>
						<td width="220px" class="tabloBasligi tabloX">Programın Adı</td>
						<td width="340px" class="tabloBasligi tabloX">Açıklaması</td>	
						<td width="100px" class="tabloBasligi tabloX">Tarih</td>
						<td width="150px" class="tabloBasligi tabloX">Etiketler</td>
						<td width="100px" class="tabloBasligi tabloX kenarx">Düzenle</td>							
					</tr>	
					<tr>
						<td class="tabloX">ID</td>
						<td class="tabloX">Başlık</td>
						<td class="tabloX">Özet</td>	
						<td class="tabloX">Tarih</td>
						<td class="tabloX">Etiketler</td>
						<td class="tabloX"><img src="img/edit.png" width="20px" height="20px"> <img src="img/delete.png" width="20px" height="20px"></td>							
					</tr>
					<tr>
						<td class="tabloX">ID</td>
						<td class="tabloX">Başlık</td>
						<td class="tabloX">Özet</td>	
						<td class="tabloX">Tarih</td>
						<td class="tabloX">Etiketler</td>
						<td class="tabloX"><img src="img/edit.png" width="20px" height="20px"> <img src="img/delete.png" width="20px" height="20px"></td>							
					</tr>
				</table>
			</form>
	<div class="duzelt"></div>
	</div>
</div>
</body>
</html>