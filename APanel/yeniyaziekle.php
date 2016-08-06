<?php 
	if(isset($_POST['submit'])){ 
		include '../bag.php';
		$tarih = "".(date(H)+1).":".date(i)." ".date(d).".".date(m).".".date(o)."";
		$sorgu = mysql_query("insert into blog (baslik,metin,etiketler,tarih) values('".$_POST["baslik"]."','".$_POST["metin"]."','".$_POST["etiketler"]."','".$tarih."')",$bag);
		if ($sorgu) {
			echo "eklendi";
		}
		else{
			echo "Hata Oldu.Veriler veritabanına eklenemedi..".mysql_error();
		}
	}
?>