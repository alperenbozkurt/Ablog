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
		<h1>Yazıyı Düzenle</h1><hr><br><center>
		<?php
			if ($_POST) {
				include '../bag.php';
				$GelenID = $_GET["id"];
				$baslikr =$_POST["baslik"];
				$metinr =$_POST["icerikxx"];
				$etiketr =$_POST["etiktt"];

				$sorgur = mysql_query("update blog set baslik='$baslikr', metin='$metinr', etiketler='$etiketr' where id=".$GelenID,$bag);
				if ($sorgur) {
					echo $baslikr." başlıklı blog başarıyla düzenlendi.";
				}
				else{
					echo "Hata : Veriler düzenlenemedi /  ".mysql_error();
				}

			}
		?></center>
		<?php 

			$GelenID = $_GET['id'];
			include '../bag.php';
			$tarih = (date("H")+1).":".date("i")." ".date("d").".".date("m").".".date("o");
			$sorgu = mysql_query("select * from blog where id=".$GelenID,$bag);
			$sonuc = mysql_fetch_array($sorgu);
			$baslik = $sonuc[1];
			$icerik = $sonuc[2];
			$etiketler = $sonuc[4];
		?>
		
			<div class="icerikx">
				<form action="yaziDuzenle.php?id=<?php echo $GelenID; ?>" method="POST">
					<table>
						<tr>
							<td>Başlık</td>
							<td><input type="textbox" name="baslik" value="<?php echo $baslik; ?>" class="txtbox"></td>
						</tr>
						<tr>
							<td>İçerik</td>
							<td><textarea class="ckeditor" name="icerikxx"><?php echo $icerik; ?></textarea></td>
						</tr>
						<tr>
							<td>Etiketler</td>
							<td><input type="textbox" name="etiktt" value="<?php echo $etiketler; ?>" class="txtbox"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" class="btn" value="Yazıyı Yayınla"></td>
						</tr>
					</table>			
				</form>
			</div>
		<div class="duzelt"></div>
	</div>
</div>
</body>
</html>