<?php 
	$bag = mysql_connect('localhost', 'root', '');
	if (!$bag) {
	    die('Mysql Veritabanına Bağlanamadık: ' . mysql_error());
	}
	mysql_select_db("alperenbozkurt");
	mysql_query("SET NAMES 'utf8'"); 
	mysql_query("SET CHARACTER SET utf8"); 
	mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");  
?>