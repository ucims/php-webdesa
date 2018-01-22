<?php
$server = "localhost";
$user = "root";
$pass = "";
$db_name = "webdesa";
$koneksi = mysql_connect($server,$user,$pass,$db_name) or die ("ada yang salah : $php_errormsg");
if (!$koneksi){
	die('Tidak tersambung'.mysql_error());	
}
$db = mysql_select_db($db_name, $koneksi)
	or die ("Terjadi kesalahan :".mysql_error());
	if($db){
		//echo"Koneksi berhasil";
	} else {
		echo"Koneksi gagal";
	}
?>