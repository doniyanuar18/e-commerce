
<html lang="en">
<?php

include "function.php";
session_start();

 
?>
<head>
  <title>RESPONSIVE WEB DESIGN</title>
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
            <li><a href="#">gamis Terbaru</a></li>
           <li> 
      <input type="text" class="form-control" placeholder="Cari gamis... "></li><li><button class="btn btn-default" type="button" style="background-image:url(assets/images/ico-search-loop.png) inherit">Cari</button></li>
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Keranjang <?php total(); ?></a>
          </li></ul>
		  
      <!-- tombol login dan daftar -->
	  
	  
<ul class="nav navbar-nav navbar-right">
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="glyphicon glyphicon-log-in"></span>Masuk</button>


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="span5 well center login-box text-center">
     <div class="alert alert-info">
						Silahkan masukkan Username dan Password Anda.
					</div>
					<form class="form-horizontal" action="ceklogin.php" method="post">
						<fieldset>
							<div class="input-prepend" title="username" data-rel="tooltip">
								<span class="add-on"><i class="glyphicon glyphicon-user"></i></span><input autofocus="" class="input-large span10" name="username" id="username" type="text">
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="password" data-rel="tooltip">
								<span class="add-on"><i class="glyphicon glyphicon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password">
							</div>
							<div class="clearfix"></div>
							
							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember">Ingatkan saya</label>
							</div>
							<div class="clearfix"></div>

							<li><a href="#">Lupa Password?<br></a></li>
							
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Masuk</button>
							</p>
						</fieldset>
					</form> ...</div>
    </div>
  </div>
</div>
           <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Daftar
</button>

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
    <?php kat(); ?>
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




<?php


include "Config/config_db.php";

terkait();
?>


<div class="col-md-9">
<br><br><p><strong>Metode Bayar : </strong></p>
      <p><strong><img src="assets/images/logo-bca.png" class="metode" height="20" alt="..">     
                 <img src="assets/images/logo-bni.png" class="metode" >
                 <img src="assets/images/logo-mandiri.png" class="metode">
                 <img src="assets/images/logo-paypal.png" class="metode">
                 <img src="assets/images/logo-jne.png" class="metode">
     </strong></p>
    </div>
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
          <h4 class="text-orange"><b>Contact Us: </b></h4>
          <ul class="no-bullet">
            <b style="color:#FFF">Jl. Wahidin Sudiro Husodo No 34<br>
            Yogyakarta<br>Telp. (0272) 3344556</b><br>
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
        <span class="align-left">Copyright © 2019 Ini Toko gamis Aisha, All Rights Reserved</span>
      </div>

    </div><!-- end container -->
</div>

</div>

</body>
</html>

