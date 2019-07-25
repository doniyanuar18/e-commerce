
<html lang="en">
<?php
 include "function.php";
 include "Config/randunik.php";
error_reporting(0);
?>
<head>
  <title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/font-opensans.css" rel="stylesheet" type="text/css" media="screen" > 
<link href="assets/css/MTVM.css" rel="stylesheet" type="text/css">
<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">




<script type="text/javascript" src="assets/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

	<!-- Start css3menu.com HEAD section -->

	

	<!-- End css3menu.com HEAD section -->


<link rel="stylesheet" href="assets/css/MTVM1.css" type="text/css">
	<!-- Start css3menu.com HEAD section -->

	<link rel="stylesheet" href="Index_files/css3menu0/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>

	<!-- End css3menu.com HEAD section -->

</head>
<?php
if (empty($_SESSION['username'])){
  echo "<link href='../../assets/css/bootstrap.css' rel='stylesheet' type='text/css'>
  	<center><h2>Untuk mengakses modul</h2> <h1>Anda harus login</h1><br>";
  echo "<a href=loginchekout.php><h3>LOGIN</b></h3></center>";
}
else{
	?>

<body style="background-color: rgb(217, 217, 217);">

<div class="container" style="background-color:#FFF">
  <div class="jumbotron" style="background-image:url(assets/images/aisha.jpg)">
  <a href="#"><h1 style="color:#6F3">Toko gamis AISHA</h1></a>      
    <p style="color:#6F3">Selamat datang pengunjung... </p>      
  </div>

<div class="nav navbar-inverse" role="navigation"> 
    <div class="container">
      <a href="Index.php" class="navbar-brand">Beranda</a>
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button> 
        <div class="collapse navbar-collapse navHeaderCollapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#">Profil</a></li>
            <li><a href="#">Hubungi Kami</a></li>
            <li><a href="#">Gamis Terbaru</a></li>
           <li> 
      <input type="text" class="form-control" placeholder="Cari gamis... "></li><li><button class="btn btn-default" type="button" style="background-image:url(assets/images/ico-search-loop.png) inherit">Cari</button></li>
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Keranjang <?php total(); ?></a>
          </li></ul>
		  
      <!-- tombol login dan daftar -->
	  
	  
<?php include "login.php"; ?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div></ul> 
</div></div></div><br>


<div class="container-fluid">
 
  <div class="row">
  

<!-- End css3menu.com BODY section -->

<div class="col-sm-2">
<div class="kiri"> 
<div class="panel-heading">
<p><strong>Cari gamis Berdasarkan:</strong></p>
</div>

 <div id="MainMenu">
  <div class="list-group panel">
    <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Kategori gamis</a>
    <div class="collapse" id="demo3">
<?php kat(); ?>
    </div>
  </div>
</div>
<br>
<br>

</div>
<div class="kiri" > 
<div class="panel-heading">
<p><strong>4 Gamis Terlaris Minggu Ini:</strong></p>
</div>

<h6><strong>1. Aini Set Kids (hitam-coklat)</strong></h6>
<img src="assets/images/aini set/biru kuning.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
</a><br>

<h6><strong> 2. Anggita Set Kids (Merah)</strong></h6>
<img src="assets/images/anggita set/merah.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"></a>
<br>

<h6><strong>  3. Rahadian Set Kids (Coklat)</strong></h6>
<img src="assets/images/rahadian set/coklat.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"></a>
<br>

<h6><strong> 4. Shofiya Set Kids (Merah)</strong></h6>
<img src="assets/images/shofiya/pink.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"></a>
<br>
</div>
</div>


	<div class="col-sm-9" style="
    background-color: aliceblue;
    padding-right: 20px;
        width: 925px;">
<div class="headingdetail"><h4> Konfirmasi Bayar : </h4></div>
<div class="row"> Berikut adalah gamis yang telah Anda beli beserta data pemesanan,  klik Selesai untuk menyelesaikan pemesanan
</div><br><br/>

<?php

 $sel_member = "select member.*,provinsi.provinsiNama,kabupaten.kabupatenNama,kabupaten.Onkoskirim 
 from member,provinsi,kabupaten 
 where provinsi.provinsiId=member.provinsiId 
 AND kabupaten.kabupatenId=member.kabupatenId 
 AND username = '".$_SESSION['username']."'";
$cek_sel_member = mysql_query($sel_member) or die (mysql_error());
 $hsl_plg= mysql_fetch_array($cek_sel_member);


?>
<form action="belisukses.php?module=belisukses" method="post" >
<ul style="list-style:disc">
	<li> Id Member &nbsp; &nbsp;  &nbsp;  <b>: <?php echo $hsl_plg['id_member']?></b> <input name="TxtIdmember" type="hidden" value="<?php echo $hsl_plg['id_member'] ?>" >  </li>
    <li>Nama &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; <b>: &nbsp; <?php echo $hsl_plg['Namalengkap']?></b> </li>
    <li>Provinsi &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;<b>: <?php echo $hsl_plg['provinsiNama']?></b></li>
    <li>Alamat Rinci  &nbsp; &nbsp; <b>: <?php echo $hsl_plg['alamat']?></b></li>
    <li>Email &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <b>: &nbsp; <?php echo $hsl_plg['email']?></b></li>
    <li>No Telp   &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;<b>: &nbsp; <?php echo $hsl_plg['no_telp']?></b></li>
  </ul>


<table class="table" id="tabel">
 <tbody class id="backgroundtabel">
  
			  <tr class id="kepalatabel">
			  <th>No</th>
				  <th>Nama Barang</th>
          <th>Jumlah</th>
				  <th>Berat</th>
					<th>Harga@</th>
					<th>Subtotal</th>					
			  </tr>
			<?php
			
$ip = getIp();
$harga = "select * from shoppingcart where ip_add='$ip'";
$runharga = mysql_query($harga) or die (mysql_error());
$totalBerat = null;
while($sql=mysql_fetch_array($runharga)){
  $id_produk = $sql['id_produk'];
  $hargagamis = "select * from gamis where id_produk='$id_produk'";
  $runhargagamis= mysql_query($hargagamis);
  while($hsql=mysql_fetch_array($runhargagamis)){
    $totalBerat+=$hsql['berat'];
		$hargatotal = array($hsql['harga']);
		$ID = $sql['id_produk'];
		$berat = $hsql['berat'];
		$gambar = $hsql['fileGambar'];
		$jumlah = $sql['JumlahBeli'];
    $angka = $hsql['harga'];
  	$stok = $hsql['stok'];
			$hasil2 = number_format($angka,0,',','.');
			$subtotal = $angka*$jumlah;
$hasil = number_format($subtotal,0,',','.');
$values = array_sum($hargatotal);
$total =$total + $subtotal;
$total2 = number_format($total,0,',','.');
$ongkos = $hsl_plg['Onkoskirim'];
$totalOngkos = $ongkos*$totalBerat;
$totalakhir =  $totalOngkos + $total;
$totalakhir2 = number_format(($totalakhir),0,',','.');
$uniktrans = RandUnik('3');
$no = 1;
$nomer +=$no;
$_SESSION['total'] = $totalakhir2;					
  ?>
        <tr> 
    <td><?php echo $nomer;?></td> 
        <td><div class="col-md-3"> <img src="adminweb/<?php echo $gambar?>"
         class="img-thumbnail-detail" alt="Cinque Terre" width="304" height="236"></div>
         <div class="col-md-7">&nbsp <?php echo $judul;?> 
         <br><br>&nbsp Stok: <?php echo $stok?></div></td> 
          <td><?php echo $jumlah;?><br></td> 
          <td><?php echo $berat;?><br></td> 
          <td>Rp. <?php echo $hasil2;?></td>
          <td>Rp. <?php echo $hasil;?></td>
		 </tr>
			
<?php	

	}
}
?>
		 </tbody>
		 
</table>

<div class="row" style="text-align: right">TOTAL : Rp. <?php echo $total2;?></div>
<div class="row" style="text-align: right">Ongkos Kirim : <?php echo $ongkos?> /kg</div>
<div class="row" style="text-align: right">Total Ongkos Kirim : <?= $totalOngkos ?></div>
<div class="row" style="text-align: right">kode transaksi : <input name="TxtUnik" type="hidden" value="<?php echo $uniktrans; ?>" > <?php echo $uniktrans; ?></div>
<div class="row" style="text-align: right">Total yang Anda harus bayar : <?php echo $totalakhir2;?></div><br>
<br>

<div id="pss">

<button type="submit" class="btn btn-primary btn-lg btn-block1">Selesai </button>

<!--<p><a href='belisukses2.php' class='btn btn-default' role='button'>Selesai</a></p>-->
</div></div>
</form>

</div>
	</div>

</div>

</div>



<div class="container footer">
        <div class="col-sm-6">
          <h4 class="text-orange"><b>INFORMASI</b></h4>
          <ul class="no-bullet">
            <li><a href="#" class="text-grey"><h5>Pengiriman</h5></a></li>
            <li><a href="#" class="text-grey"><h5>Keanggotaan</h5></a></li>
            <li><a href="#" class="text-grey"><h5>Pemesanan</h5></a></li>
            <li><a href="#" class="text-grey"><h5>Pembayaran</h5></a></li>
            <li><a href="#" class="text-grey"><h5>Belanja</h5></a></li>
            <li><a href="#" class="text-grey"><h5>Kebijakan</h5></a></li>
          </ul>
        </div>

        

        <div class="col-sm-6">
		 <h4 class="text-orange"><b></b></h4>
          <ul class="no-bullet">
             <img src="assets/images/logo-bni.png" class="metode" ><br>
            <li>
            <h4 class="text-orange"><b>Ikuti : </b></h4>
                           <a href="#"> <img src="assets/images/Facebook Round.png" class="sosial" height="20" alt=".."></a>     
                 <a href="#"><img src="assets/images/Twitter round.png" class="sosial"></a>
                <a href="#"> <img src="assets/images/Instagram round.png" class="sosial"></a>
                <a href="#"> <img src="assets/images/Google plus round.png" class="sosial"></a>
                                </li>
          </ul>
        </div>
      </div><!-- end container -->

    

<div class="container">

    </div><!-- end container -->
</div>
<?php
}
?>

</body>
</html>

