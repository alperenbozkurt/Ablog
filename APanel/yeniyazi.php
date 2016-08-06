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
			<li><a href="yazilar.php" class="seciliMenu">Yazılar</a></li>
			<li><a href="programlar.php">Programlar</a></li>
			<li><a href="ayarlar.php">Ayarlar</a></li>
			<li><a href="cikis.php">Çıkış Yap</a></li>
		</ul>
	</div>
	<div class="duzelt"></div>
	<div class="icerik">
		<h1>Yeni Yazı</h1><hr><br>
		<?php 
			if(isset($_POST['submit'])){ 
				include '../bag.php';
				$tarih = (date("H")+1).":".date("i")." ".date("d").".".date("m").".".date("o");
				$sorgu = mysql_query("insert into blog (baslik,metin,etiketler,tarih) values('".$_POST["baslik"]."','".$_POST["metin"]."','".$_POST["etiketler"]."','".$tarih."')",$bag);
				if ($sorgu) {
					echo "<center>".$_POST["baslik"]." Adlı Blog Başarıyla Eklendi</center>";
				}
				else{
					echo "Hata Oldu.Veriler veritabanına eklenemedi..";
				}
			}
		?>
		<br>
			<div class="icerikx">
				<form action="yeniyazi.php" method="POST">
					<table>
						<tr>
							<td>Başlık</td>
							<td><input type="textbox" name="baslik" class="txtbox"></td>
						</tr>
						<tr>
							<td>İçerik</td>
							<td><textarea class="ckeditor" name="metin"></textarea></td>
						</tr>
						<tr>
							<td>Etiketler</td>
							<td><input type="textbox" name="etiketler" class="txtbox"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Yazıyı Yayınla"></td>
						</tr>
					</table>			
				</form>
			</div>
		<div class="duzelt"></div>
	</div>
</div>
</body>
</html>