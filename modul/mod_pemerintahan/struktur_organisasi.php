<?php
//tampilkan tahun
include 'koneksi.php';
$sql = mysql_query("SELECT DISTINCTROW periode FROM perangkat where id_jenis = '1'");
if(mysql_num_rows($sql) != 0){
while($data = mysql_fetch_assoc($sql)){
echo "<article><hgroup> Berikut data Struktur Pemerintahan Desa berdasarkan periode<br>
<a href='index.php?menu=periode_organisasi&periode=$data[periode]' class='thperiode'>".$data['periode']."</a></hgroup></article>";
  }
}
?>
  </article>
