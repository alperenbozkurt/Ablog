
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1254"> 
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">  
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900&subset=latin,latin-ext,vietnamese' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/sari.css">
	<title><?php 
	include 'bag.php';  
	$sorgu = mysql_query("select * from bilgiler where id=1",$bag);
	$sonuc = mysql_fetch_array($sorgu);
	$baslik=$sonuc["SiteAdi"];
	echo "$baslik";
	?></title>
</head>
<body>
<div class="baslik">Alperen Bozkurt</div>
<div class="orta">
	<div class="ortala">
		<div class="resim"></div>
		<ul class="menu">
			<li><a href="index.php">Anasayfa</a></li>
			<li><a href="blog.php">Blog</a></li>
			<li><a href="programlar.php">Programlar</a></li>
			<li><a href="iletisim.php">İletışım</a></li>
		</ul>
		<div class="aciklama">#FıratUniversitesi #BilgisayarMühendisliği #Tosya #Kahve #CSharp #Php</div>
	</div>
</div>
</body>
</html>