<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Noto+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1254"> 
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">  
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900&subset=latin,latin-ext,vietnamese' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/sari.css">
	<title>Alperen Bozkurt</title>
</head>
<body>
<div class="ust">
	<div class="ortalaAna">
		<div class="baslikAna">Alperen Bozkurt</div>
		<ul class="menuAna">
			<li><a href="index.php">Anasayfa</a></li>
			<li class="secili"><a href="blog.php">Blog</a></li>
			<li><a href="programlar.php">Programlar</a></li>
			<li><a href="iletisim.php">İletişim</a></li>
		</ul>
		</div>
	</div>
	<div class="ortalaAna">
		<div class="yazilar">
			<?php 
				include 'bag.php';
				$sorgu = mysql_query("select * from blog",$bag);
				while ($sonuc = mysql_fetch_array($sorgu)) {
					echo '<div class="yazi">';
				    echo '<h2><a href="detay.php?id='.$sonuc["id"].'">'.$sonuc["baslik"].'</a></h2>';
				    echo '<div class="yazibilgisi">Alperen Bozkurt tarafından '.$sonuc["tarih"].' de yayınlandı.</div><hr>';
				    echo '<p>'.substr($sonuc["metin"], 0,355).'</p>';
				    echo '</div>';
				}
			?>
		</div>
	</div>
	<div class="sag">
		<div class="arama">
			<input type="textarea" class="aramaKutusu" value="Ara...">
			<button type="submit" class="aramaButonu">
	    		<img src="img/arama.png" width="30" height="30" alt="submit" />
			</button>
		</div>
		<div class="widget">
		<h3>Son Yazılar</h3><hr>
		<ul>
			<li>[Css] Gölge efekti</li>
			<li>[Css] Animasyon Yapımı</li>
			<li>[C#] TCP-IP Sohbet Yapalım I</li>
			<li>[Java] Sudoku Yapalım II</li>
			<li>[Php/Mysql] Sayfalı Veri Çekme</li>
		</ul>
		</div>
	</div>
</div>
<div class="footer">
	<div class="ortala">
		<div class="copy">Copyright © AlperenBozkurt 2015 | Tasarım ve kodlama Alperen Bozkurt</div>
		<div class="copyy">Websitemdeki içeriği öğrenmek şartıyla kaynak göstermeden paylaşabilirsiniz...</div>
	</div>
</div>
</body>
</html>