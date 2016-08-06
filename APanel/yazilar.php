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
			<li><a href="yazilar.php" class="seciliMenu">Yazılar</a></li>
			<li><a href="programlar.php">Programlar</a></li>
			<li><a href="ayarlar.php">Ayarlar</a></li>
			<li><a href="cikis.php">Çıkış Yap</a></li>
		</ul>
	</div>
	<div class="duzelt"></div>
	<div class="icerik">
		<h1>Yazılar</h1><hr>	
		<div class="ortala">
			<a href="yeniyazi.php" class="yeniYazi">Yeni Yazı</a></div>
			<?php 
				if ($_GET) {
					$GelenID = $_GET['silId'];
					include '../bag.php';
					$sorgu = mysql_query("delete from blog where id=".$GelenID,$bag);
					if ($sorgu) {
						echo $GelenID." başarıyla silindi.";
				}
			}
		?>

			<form>
				<table class="tablo">
					<tr>
						<td width="40px" class="tabloBasligi tabloX kenar">ID</td>
						<td width="220px" class="tabloBasligi tabloX">Başlık</td>
						<td width="340px" class="tabloBasligi tabloX">Özet</td>	
						<td width="100px" class="tabloBasligi tabloX">Tarih</td>
						<td width="180px" class="tabloBasligi tabloX">Etiketler</td>
						<td width="70px" class="tabloBasligi tabloX kenarx">Düzenle</td>							
					</tr>	
					<?php 
						include '../bag.php';
						$sorgu = mysql_query("select * from blog",$bag);
						while ($sonuc = mysql_fetch_array($sorgu)) {
							echo '<tr>';
						    echo '<td class="tabloX">'.$sonuc["id"].'</td>';
						    echo '<td class="tabloX">'.$sonuc["baslik"].'</td>';
						    echo '<td class="tabloX">'.substr($sonuc["metin"], 0,55).'</td>';
						    echo '<td class="tabloX">'.$sonuc["tarih"].'</td>';
						    echo '<td class="tabloX">'.substr($sonuc["etiketler"], 0,22).'</td>';
						    $x = $sonuc["id"];
						    echo '<td class="tabloX">
						    	<a href="yaziDuzenle.php?id='.$x.'"><img src="img/edit.png" height="18" width="18"></a>
						    	<a href="yazilar.php?silId='.$x.'"><img src="img/delete.png" height="18" width="18"></a>
						    </td>';
						    echo '</tr>';
						}
					?>
				</table>
			</form>

	<div class="duzelt"></div>
	</div>
</div>
</body>
</html>