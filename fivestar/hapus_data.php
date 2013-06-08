<?php
mysql_connect("localhost","root","root");
mysql_select_db("hotel");
//tangkap variabel
$id_book = $_GET['id_book'];

// proses hapus
$sql = mysql_query("delete from tbl_booking where id_book='$id_book'");
if ($sql) {
	echo "<center> Proses hapus berhasil </center>";
	echo "<meta http-equiv='refresh' content='1; url=booking2.php'>";
}
else {
	echo "<center> Proses hapus gagal </center>";
	echo "<meta http-equiv='refresh' content='1; url=booking2.php'>";
}
?>