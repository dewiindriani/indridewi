<?
mysql_connect("localhost","root","root");
mysql_select_db("hotel");

//uraikan parameter kedalam bentuk variabel
$id_user=$_POST['id_user'];
$user=$_POST['user'];
$password=$_POST['password'];


$masuk=mysql_query("insert into user (id_user,user,password,) values ('$id_user','$user','$password')");

if ($masuk){
	echo "<center> Data Anda akan segera kami proses! </center>";
	echo "<meta http-equiv='refresh' content='1; url=tampil_user.php'>";
}
else {
	echo "gagal memesan";
	echo "<meta http-equiv='refresh' content='2; url=admin.php'>";
}
?>
