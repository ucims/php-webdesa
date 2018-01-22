<?php
include'../koneksi.php';
extract($_POST);
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}
$username = antiinjection($_POST['username']);
$password = antiinjection(md5($_POST['password']));
if(isset($login))
{
	$query = mysql_query("select * from user where username = '$username' and password = '$password'");
	$p=mysql_num_rows($query);
	if($p==1)
	{
	session_start();
	$q=mysql_fetch_array($query);
	$_SESSION['sesi'] = $q['username'];

	echo"<script> alert('Login berhasil !'); </script>";
	echo"<meta http-equiv='refresh' content='0; url=admin.php'>";
	}
	else
	{
	echo"<script> alert('Login Gagal!'); </script>";
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
	}
}
