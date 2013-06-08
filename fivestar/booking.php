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
          <dd>(0357) 888654</div></dd>
            <dt>&nbsp;</dt>
            <dt class="inner style1">Silahkan memesan!</dt>
            </dl>
            <p>&nbsp;</p>
          <form action="input_pemesanan" method="post" enctype="multipart/form-data" id="form1">
            <table width="514" border="0">
              <tr>
                <td>Id booking</td>
                <td>:</td>
                <td><label>
                  <input name="id_book" type="text" id="id_book" value="" />
                </label></td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap" id="nama_lengkap" /></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><label>
                  <select name="jns_kel" id="jns_kel">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                </label></td>
              </tr>
              <tr>
                <td>Kota</td>
                <td>:</td>
                <td><input type="text" name="kota" id="kota" /></td>
              </tr>
              <tr>
                <td>E-mail</td>
                <td>:</td>
                <td><input name="email" type="text" id="email" size="30" /></td>
              </tr>
              <tr>
                <td>Telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telp" id="no_telp" /></td>
              </tr>
              <tr>
                <td>Tipe Kamar</td>
                <td>:</td>
                <td><label>
                  <select name="id_kamar" id="id_kamar">
                    <?
        include "koneksi.php";
		
		$sql=mysql_query("select * from tbl_kamar order by id_kamar");
		while ($data = mysql_fetch_array($sql)) {
		echo"<option value = '$data[id_kamar]'> $data[tipe_kamar] </option>";
		}
		?>
                  </select>
                </label></td>
              </tr>
              <tr>
                <td>Jumlah Pemesanan</td>
                <td>:</td>
                <td><label>
                  <input name="jumlah_pemesanan" type="text" class="field" id="jumlah_pemesanan" value="" size="5" />
                </label></td>
              </tr>
              <tr>
                <td><label>Total yang harus dibayar</label></td>
                <td><label>:</label></td>
                <td><input type="text" readonly="readonly" name="tot_bayar" onblur="fill()6;" id="tot_bayar"  size="30"/></td>
              </tr>
              <tr>
                <td>Chek in</td>
                <td>:</td>
                <td><label>
                  <link type="text/css" href="js/themes/base/ui.all.css" rel="stylesheet" />
                  <script type="text/javascript" src="js/jquery-1.3.2.js"></script>
                  <script type="text/javascript" src="js/ui.core.js"></script>
                  <script type="text/javascript" src="js/ui.datepicker.js"></script>
                  <script type="text/javascript">
          $(document).ready(function(){
            $("#chek_in").datepicker({
            dateFormat  : "yy-mm-dd",
              changeMonth : true,
              changeYear  : true
             
            });
          });
         
            </script>
                  <input type="text" name="chek_in" id="chek_in" />
                  <br />
                </label></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><label>
                  <textarea name="alamat" id="alamat" cols="45" rows="5"></textarea>
                </label></td>
              </tr>
              <tr>
                <td><p>Chek Out</p></td>
                <td>:</td>
                <td><label>
                  <link type="text/css" href="js/themes/base/ui.all.css" rel="stylesheet" />
                  <script type="text/javascript" src="js/jquery-1.3.2.js"></script>
                  <script type="text/javascript" src="js/ui.core.js"></script>
                  <script type="text/javascript" src="js/ui.datepicker.js"></script>
                  <script type="text/javascript">
          $(document).ready(function(){
            $("#chek_out").datepicker({
            dateFormat  : "yy-mm-dd",
              changeMonth : true,
              changeYear  : true
             
            });
          });
         
            </script>
                  <input type="text" name="chek_out" id="chek_out" />
                </label></td>
              </tr>
              <tr>
                <td><p>Bayar Melalui</p></td>
                <td>:</td>
                <td><label>
                  <select name="id_bank" id="id_bank">
                    <?
        include "koneksi.php";
		
		$sql=mysql_query("select * from tbl_bank order by id_bank");
		while ($data = mysql_fetch_array($sql)) {
		echo"<option value = '$data[id_bank]'> $data[nama] </option>";
		}
		?>
                  </select>
                </label></td>
              </tr>
              <tr>
                <td colspan="3"><input type="submit" name="button" id="button" value="Pesan" />
                    <label></label></td>
              </tr>
            </table>
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
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>

</body>
</html>
