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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
		<h1>Yeni Program</h1><hr><br>
			<div class="icerikx">
				<form method="post" action="programYukleniyor.php" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Program Adı</td>
							<td><input type="textbox" class="txtbox"></td>
						</tr>
						<tr>
							<td>Açıklama</td>
							<td><textarea class="ckeditor" name="icerikxx"></textarea></td>
						</tr>
						<tr>
							<td>Etiketler</td>
							<td><input type="textbox" class="txtbox"></td>
						</tr>
						<tr>
							<td>Programın Dosyası</td>
							<td><input type="file" name="dosya"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" class="btn" value="Programı Yayınla"></td>
						</tr>
					</table>			
				</form>
			</div>
		<div class="duzelt"></div>
	</div>
</div>
</body>
</html>