<?
mysql_connect("localhost","root","root");
mysql_select_db("hotel");

//uraikan parameter kedalam bentuk variabel
$id_petugas=$_POST['id_petugas'];
$nama_pet=$_POST['nama_pet'];
$jns_kel=$_POST['jns_kel'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$bagian=$_POST['bagian'];
$tgl_lahir=$_POST['tgl_lahir'];

$masuk=mysql_query("insert into petugas (id_petugas,nama_pet,jns_kel,alamat,telp,bagian,tgl_lahir) values ('$id_petugas','$nama_pet','$jns_kel','$alamat','$telp','$bagian','$tgl_lahir')");

if ($masuk){
	echo "<center> Data Anda akan segera kami proses! </center>";
	echo "<meta http-equiv='refresh' content='1; url=karyawan2.php'>";
}
else {
	echo "gagal";
	echo "<meta http-equiv='refresh' content='2; url=admin.php'>";
}
?>
