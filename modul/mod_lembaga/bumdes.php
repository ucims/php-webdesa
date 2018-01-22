<?php
echo "<article><hgroup>Halaman Strukut Organisasi BUMDES<br>";
?>
<?php
//tampilkan tahun
echo "<br>Berdasarkan Periode<br>";
include 'koneksi.php';
$sql = mysql_query("SELECT DISTINCTROW periode FROM perangkat where id_jenis = '6'");
if(mysql_num_rows($sql) != 0){
while($data = mysql_fetch_assoc($sql)){
echo "<a href='index.php?menu=periode_bumdes&periode=$data[periode]'  class='thperiode'>".$data['periode']."</a> ||";
  }
}
?>
  </article>
