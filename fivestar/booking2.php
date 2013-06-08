<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Prasasti Hotel Hotel | Booking</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="maxheight.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<link href="ie_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, #header .row-2, #header .nav li a, #content, .gallery li');</script>
<![endif]-->
<style type="text/css">
<!--
.style1 {
	font-size: x-large;
	color: #FF0000;
}
.style2 {
	color: #CC0000;
	font-weight: bold;
}
-->
</style>
</head>
<body id="page5" onload="new ElementMaxHeight();">
<div id="main">
  <!-- header -->
  <div id="header">
    <div class="row-1">
      <div class="wrapper">
        <div class="logo">
          <h1><a href="#">Prasasti Hotel</a></h1>
          <strong>True Luxury</strong> </div>
        <div class="phones"> (0357) 884846<br />
          (0357) 888654</div>
      </div>
    </div>
    <div class="row-2">
      <div class="indent">
        <!-- header-box begin -->
        <div class="header-box">
          <div class="inner">
            <ul class="nav">
              <li><a href="index.html">Home page</a></li>
              <li><a href="services.html">Kamar</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="restaurant.html">Restaurant</a></li>
              <li><a href="testimonials.html">Fasilitas</a></li>
              <li><a href="booking.php" class="current">Booking</a></li>
            </ul>
          </div>
        </div>
        <!-- header-box end -->
      </div>
    </div>
  </div>
  <!-- content -->
  <div id="content">
    <div class="wrapper">
      <div class="aside maxheight">
        <!-- box begin -->
        <div class="box maxheight">
          <div class="inner">
            <h3>Guestbook:</h3>
            <form id="form2" method="post" action="input_tamu">
              <table width="198" border="0">
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><label>
                    <input type="text" name="nama" id="nama" />
                  </label></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td><label>
                    <input type="text" name="email" id="email" />
                  </label></td>
                </tr>
                <tr>
                  <td>Pesan</td>
                  <td>:</td>
                  <td><label></label>
                      <label>
                      <input type="text" name="pesan" id="pesan" />
                    </label></td>
                </tr>
                <tr>
                  <td colspan="3"><p>&nbsp; </p>
                      <p>
                        <input type="submit" name="button2" id="button2" value="Simpan" />
                    </p></td>
                </tr>
              </table>
                        </form>
            </div>
        </div>
        <!-- box end -->
      </div>
      <div class="content">
        <div class="indent">
          <h2>Lokasi Kami</h2>
          <img class="img-indent png" alt="" src="images/5page-img1.png" />
          <div class="extra-wrap">
            <p class="alt-top">Lokasi kami sangat strategis yaitu dipusat kota, dan berdekatan dengan alun-alun kota Pacitan.</p>
            <p>Silahkan datang ke alamat kami di di Jl.Imam Bonjol No.8</p>
            <dl class="contacts-list">
              <dt>Atau hubungi</dt>
             <dd>(0357) 884846<br /></dd>
          <dd>(0357) 888654</dd>
            <dt>&nbsp;</dt>
            <dt class="inner style1">Cek Apakah Nama Anda Sudah Terdaftar!</dt>
          </dl>
            <p>&nbsp;</p>
          <form id="form1" method="post" action="input_pemesanan">
          <body>
<table width="100%" height="30" border="1" cellpadding="1" cellspacing="0">
<tr height="30">
<td bgcolor="#FF0000" align="center" > No. </td>
<td bgcolor="#FF0000" align="center" > Nama Lengkap </td>
<td bgcolor="#FF0000" align="center" > Id Kamar </td>
<td bgcolor="#FF0000" align="center" > Chek In </td>
<td bgcolor="#FF0000" align="center" > Alamat </td>
<td bgcolor="#FF0000" align="center" > Chek Out</td>
</tr>
<?php
mysql_connect("localhost","root","root");
mysql_select_db("hotel");
$masuk=mysql_query("SELECT id_book,nama_lengkap,jns_kel,kota,email,no_telp,id_kamar,jumlah_pemesanan,chek_in,alamat,chek_out,id_bank)
FROM tbl_booking
INNER JOIN tbl_kamar
ON tbl_kamar.id_kamar = tbl_booking.id_kamar");
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
</tr> ";
$no++;
}

?>
</table> <br />
          </form>
            <p>&nbsp;</p>
            <p class="style2">Silakan Konfirmasi kepada kami setelah proses pembayaran Anda selesai.</p>
            <p class="style2">Dalam 24 jam dari pemesanan Anda belum melakukan transaksi pembayaran, kami anggap batal!</p>
          <p class="style2">Terima Kasih!</p>
        </div>
        <p>&nbsp;</p>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div id="footer">
    <ul class="nav">
      <li><a href="#">Home</a>|</li>
      <li><a href="#">Kamar</a>|</li>
      <li><a href="#">Gallery</a>|</li>
      <li><a href="#">Restaurant</a>|</li>
      <li><a href="#">Fasilitas</a>|</li>
      <li><a href="#">Booking</a></li>
    </ul>
    <div class="wrapper">
      <div class="fleft">Copyright &copy; 2009 <a href="index">Prasast Hotel</a>. All Rights Reserved</div>
      <div class="fright">Designed by TemplateMonster - <a href="http://www.templatemonster.com/">website templates</a> provider</div>
    </div>
  </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
