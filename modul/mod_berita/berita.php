<?php
include 'koneksi.php';
$tabel = "isi_berita";
$sql = mysql_query("select * from $tabel where id_kategori = '1' order by tanggal desc limit 5");
while ($tampil = mysql_fetch_array($sql)){
	$potong = substr($tampil['gambar'],3);
	echo"<article>";
	echo"<figure>";
	echo"<img src='$potong' align='left' alt='gambar'>";
	echo "</figure><hgroup><h2>";
	echo $tampil['judul'];
	echo "</h2><br>";
	echo $tampil['tanggal'];
	echo "</hgroup><br>";
	$data = substr($tampil['isi'],0,200);
	echo $data;
	echo"<a href='index.php?menu=detail_berita&id_berita=$tampil[id_berita]'> &nbsp  baca selengkap >>>.</a>";
	echo"</article>  <br>";

}
?>
