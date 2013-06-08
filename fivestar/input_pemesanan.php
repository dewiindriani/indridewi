<?
mysql_connect("localhost","root","root");
mysql_select_db("hotel");

//uraikan parameter kedalam bentuk variabel
$id_book=$_POST['id_book'];
$nama_lengkap=$_POST['nama_lengkap'];
$jns_kel=$_POST['jns_kel'];
$kota=$_POST['kota'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp'];
$id_kamar=$_POST['id_kamar'];
$jumlah_pemesanan=$_POST['jumlah_pemesanan'];
$tot_bayar=$_POST['tot_bayar'];
$chek_in=$_POST['chek_in'];
$alamat=$_POST['alamat'];
$chek_out=$_POST['chek_out'];
$id_bank=$_POST['id_bank'];

$masuk=mysql_query("insert into tbl_booking (id_book,nama_lengkap,jns_kel,kota,email,no_telp,id_kamar,jumlah_pemesanan,tot_bayar,chek_in,alamat,chek_out,id_bank) values ('$id_book','$nama_lengkap','$jns_kel','$kota','$email','$no_telp','$id_kamar','$jumlah_pemesanan','tot_bayar','$chek_in','$alamat','$chek_out','$id_bank')");

if ($masuk){
	echo "<center> Pemesanan Anda akan segera kami proses! </center>";
	echo "<meta http-equiv='refresh' content='1; url=booking2.php'>";
}
else {
	echo "gagal memesan";
	echo "<meta http-equiv='refresh' content='2; url=booking2.php'>";
}
?>
