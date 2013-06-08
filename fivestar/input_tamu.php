<?
mysql_connect("localhost","root","root");
mysql_select_db("hotel");


//uraikan parameter kedalam bentuk variabel
$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];

$masuk=mysql_query("insert into guestbook (nama,email,pesan) values ('$nama','$email','$pesan')");

if ($masuk){
	echo "Data tersimpan!";
	echo "<meta http-equiv='refresh' content='2; url=index.html'>";
}
else {
	echo "gagal memesan";
}
?>
