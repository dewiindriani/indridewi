<?php
include "koneksi.php";

$user=$_POST['user'];
$password=$_POST['password'];

$user = stripslashes($user);
$password = stripslashes($password);
$user = mysql_real_escape_string($user);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM user WHERE user='$user' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){
session_register("user");
 echo "<meta http-equiv='refresh' content='0; url=admin.php'> ";
}
else {
echo "  <SCRIPT language='JavaScript'>alert('Username atau Password Anda Salah');</SCRIPT>";
echo "<meta http-equiv='refresh' content='1; url=/index.html/'>";

}
?> 