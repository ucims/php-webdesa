<?php
include"../koneksi.php";
extract($_GET);
if(isset($id_komentar))
{
	$query="delete from komentar where id_komentar='$id_komentar'";
	$del=mysql_query($query);
	if($del)
	{
		echo "<script>alert('Pesan berhasil di hapus');
		window.location.href='admin.php?n=pesan&page=1';
		</script>";
	}
	else
	{
		echo "<script>alert('Pesan gagal di hapus');
		window.location.href='admin.php?n=pesan&page=1';
		</script>";
	}
}
