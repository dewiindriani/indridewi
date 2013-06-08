<?
mysql_connect("localhost","root","root");
mysql_select_db("hotel");

//uraikan parameter kedalam bentuk variabel
$id_kamar=$_POST['id_kamar'];
$tipe_kamar=$_POST['tipe_kamar'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$sisa=$_POST['sisa'];
$keterangan=$_POST['keterangan'];
$no_kamar=$_POST['no_kamar'];


$masuk=mysql_query("insert into tbl_kamar (id_kamar,tipe_kamar,harga,jumlah,sisa,keterangan,no_kamar) values ('$id_kamar','$tipe_kamar','$harga','$jumlah','$sisa','$keterangan','$no_kamar')");

if ($masuk){
	echo "<center> Data Anda akan segera kami proses! </center>";
	echo "<meta http-equiv='refresh' content='1; url=tampil_kamar.php'>";
}
else {
	echo "gagal memesan";
	echo "<meta http-equiv='refresh' content='2; url=admin.php'>";
}
?>
