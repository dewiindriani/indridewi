<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<table width="100%" height="30" border="1" cellpadding="1" cellspacing="0">
<h4> Cek Apakah nama Anda sudah terdaftar </h4>
<tr height="30">
<td bgcolor="#FF0000" align="center" > No. </td>
<td bgcolor="#FF0000" align="center" > Nama Lengkap </td>
<td bgcolor="#FF0000" align="center" > Id Kamar </td>
<td bgcolor="#FF0000" align="center" > Chek In </td>
<td bgcolor="#FF0000" align="center" > Alamat </td>
<td bgcolor="#FF0000" align="center" > Chek Out</td>
<td bgcolor="#FF0000" align="center" > Id Bank</td>
</tr>
<?php
mysql_connect("localhost","root","root");
mysql_select_db("hotel");
$sql = mysql_query("select * from tbl_booking");
$no = 1;
while ($data = mysql_fetch_array($sql)) {
echo "<tr>
<td width=10 align=center> $no </td>
<td align=center> $data[nama_lengkap] </td>
<td align=center> $data[id_kamar] </td>
<td align=center> $data[chek_in] </td>
<td align=center> $data[alamat] </td>
<td align=center> $data[chek_out] </td>
<td align=center> $data[id_bank] </td>
</tr> ";
$no++;
}

?>
</table>
<p><a href="index.html">Kembali</a></p>
</body>
</html>
