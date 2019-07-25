
<html lang="en">
<?php


error_reporting(0);
include "function.php";
 session_start();
 
?>
<head>
  <title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/font-opensans.css" rel="stylesheet" type="text/css" media="screen" > 
<link href="assets/css/MTVM.css" rel="stylesheet" type="text/css">
<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">




<script type="text/javascript" src="assets/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

	<!-- Start css3menu.com HEAD section -->

	

	<!-- End css3menu.com HEAD section -->


<link rel="stylesheet" href="assets/css/MTVM1.css" type="text/css">
	<!-- Start css3menu.com HEAD section -->

	<link rel="stylesheet" href="Index_files/css3menu0/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>

	<!-- End css3menu.com HEAD section -->

</head>
<body style="background-color: rgb(217, 217, 217);">

<div class="container" style="background-color:#FFF">
  <div class="jumbotron" style="background-image:url(assets/images/aisha.jpg)">
  <a href="Index.php"><h1 style="color:#6F3">Toko gamis AISHA</h1></a>      
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
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Keranjang <b>(<?php total(); ?>)<b></a>
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
        <a href="" class="list-group-item">Gamis Anak Aini Set</a>
        <a href="" class="list-group-item">Gamis Anak Anggita Set</a>
        <a href="" class="list-group-item">Gamis Anak Rahadian Set</a>
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

<div class='col-sm-9' style='
    background-color: aliceblue;
    padding-right: 20px;
        width: 925px;'>
		
<div class="headingdetail"><h4> Keranjang Belanja</h4></div>
				<form method="POST" action="ubah.php?module=keranjang&act=update" > 
<table class="table" id="tabel">
 <tbody class id="backgroundtabel">
  
			  <tr class id="kepalatabel">
			  <th>No</th>
				  <th>Nama Barang</th>
				  <th>Jumlah</th>	
          <th>Harga@</th>
					<th>Subtotal</th>
					<th>Hapus</th>
					
			  </tr>
			<?php
			
$ip = getIp();
$harga = "select * from shoppingcart where ip_add='$ip'";
$runharga = mysql_query($harga) or die (mysql_error());
while($sql=mysql_fetch_array($runharga)){
	$id_produk = $sql['id_produk'];
	$hargagamis = "select * from gamis where id_produk='$id_produk'";
	$runhargagamis= mysql_query($hargagamis);
	while($hsql=mysql_fetch_array($runhargagamis)){
		$hargatotal = array($hsql['harga']);
		$ID = $sql['id_produk'];
		$nama_produk = $hsql['nama_produk'];
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
      $no = 1;
      $nomer +=$no;

	?>
			  <tr> 
		<td><?php echo $nomer;?></td> 
				<td>
          <div class="col-md-3"> <img src="adminweb/<?php echo $gambar?>" class="img-thumbnail-detail" alt="Cinque Terre" width="304" height="236"></div>
          <div class="col-md-7">&nbsp <?php echo $nama_produk;?> <br><br>&nbsp Stok: <?php echo $stok?></div>
        </td> 

				<td>
          <input type='hidden' name="id[]" value="<?php echo $ID;?>">
          <input type="text" id="qty" name="qty[]" value="<?php echo $jumlah;?>"><br>
        </td> 
	
				<td>Rp. <?php echo $hasil2; ?></td>
        <td>Rp. <?php echo $hasil;?></td>
					<?php
					echo " <td>
          <a href='ubah.php?module=keranjang&act=hapus&ID=$id_produk' onClick=\"return confirm('Apakah Anda yakin ingin Menghapus data ini ?')\">
          <i class='glyphicon glyphicon-trash' style='color:red;'>&nbsp;Hapus</i>
          </a>
          </td>";

					
					?>				
		 </tr>
			
<?php	

	}
}
?>
		 </tbody>
		 
</table>

<div class="row" style="text-align: right">TOTAL Rp. <?php echo $total2;?></div>

<a href="index.php" class="btn btn-primary" style="margin-left: 2px; text-align: right; background-color: darkgreen;">Lanjut Belanja</a>
<button type="submit" class="btn btn-default" value="update" style="
    margin-left: 325px;
">UPDATE</button>
<div class="nav navbar navbar-right">
<a href="loginchekout.php" class="btn btn-primary" >CHECK OUT</a></div>
</form>
</div></div>


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
     
<div class="copyright">    
        <span class="align-left">Copyright © 2013 Ini Toko gamis Online, All Rights Reserved</span>
      </div>

    </div><!-- end container -->
</div>

</div>

</body>
</html>
