<?php
include"../koneksi.php";
extract($_GET);
if(isset($id_struktur)){
	$query="SELECT * from struktur_organisasi where id_struktur='$id_struktur'";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);
	if(is_file("../images/struktur/".$data['gambar_struktur'])) // Jika foto ada
	unlink("../images/struktur/".$data['gambar_struktur']);
	$query2 = mysql_query("delete from struktur_organisasi where id_struktur='$id_struktur'");
	if($query2)
	{
			echo "<script>alert('Data berhasil di hapus');
			window.location.href='admin.php?n=struktur&page=1';
			</script>";
		}
		else
		{
			echo "<script>alert('Data gagal di hapus".mysql_error()."');
			window.location.href='admin.php?n=struktur&page=1';
			</script>";
		}
}
