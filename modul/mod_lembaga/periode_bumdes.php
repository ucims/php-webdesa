<article class="tengah">
  <?php
  include "koneksi.php";
  $periode = $_GET['periode'];
  $data = mysql_query("select * from struktur_organisasi where id_jenis = '6' and periode='$periode'  ");
  $organisasi = mysql_fetch_array ($data);
    $prd = $organisasi['periode']+5;
    $potong = substr($organisasi['gambar_struktur'],3);
    echo "
    Struktur
    $organisasi[nama_organisasi]<br>
    Periode
    $organisasi[periode] - $prd<br>
     ";
     echo"<img src='$potong' align='left' alt='gambar'><br>";
  ?>
  Daftar Perangkat BUMDES<br>
  <table border="1" id='tabel2'>
    <tr>
      <th>Nama</th>
      <th>Jabatan</th>
    </tr>
  <?php
  $data = mysql_query("select * from perangkat where id_jenis = '6' ");
  while($desa = mysql_fetch_array($data)){
    $prd = $desa['periode']+5;
    echo "<tr>
    <td><a href='index.php?menu=detail_ap_l&id_perangkat=$desa[id_perangkat]'>$desa[nama]</a></td>
    <td>$desa[jabatan]</td>
    </tr>
     ";
  }
  ?>
</article>
</table>
