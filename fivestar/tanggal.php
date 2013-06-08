<?php
//array yang digunakan pada ComboBox bulan
$bln=array(1=>"Januari","Februari","Maret","April","Mei",
"Juni","July","Agustus","September","Oktober",
"November","Desember");

//membuat tanggal 1-31 pada ComboBox
echo "Tanggal:<select name=tanggal>
<option value=01 selected>01</option>";
for($tgl=2; $tgl<=31; $tgl++){
$tgl_leng=strlen($tgl);
if ($tgl_leng==1)
$i="0".$tgl;
else
$i=$tgl;
echo "<option value=$i>$i</option>";}
echo "</select>";

//membuat bulan ComboBox
echo "<select name=bulan>
<option value=Januari selected>Januari</option>";
for($bulan=2; $bulan<=12; $bulan++){
echo "<option value=$bulan>$bln[$bulan]</option>";}
echo "</select>";

//Membuat tahun 1900 sampai sekarang pada ComboBox
$now=date("Y");
echo "<select name=tahun>
<option value=1900 selected>1900</option>";
for($thn=1901; $thn<=$now; $thn++){
echo "<option value=$thn>$thn</option>";}
echo "</select>";
?>
