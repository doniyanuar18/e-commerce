
<html lang="en">
<?php



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
  <a href="Index.php"><h1 style="color:#FFF">Toko Gamis AISHA</h1></a>      
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
            <li><a href="#">Buku Terbaru</a></li>
           <li> 
      <input type="text" class="form-control" placeholder="Cari Buku... "></li><li><button class="btn btn-default" type="button" style="background-image:url(assets/images/ico-search-loop.png) inherit">Cari</button></li>
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


</div>




<div class='col-sm-9' style='
    background-color: aliceblue;
    padding-right: 20px;
        width: 925px;'>
		<br><br><br><br>
		
		<tr> Proses Transaksi Sukses... Silahkan segera tranfer uang Anda senilai Rp <?php echo $_SESSION['total']; ?> ke Alamat rekening BNI atas nama Ade Puspitaningrum </tr>
<br><br><br><br>
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
          <ul class="no-bullet">
            <img src="assets/images/logo-bni.png" class="metode" >
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
        <span class="align-left">Copyright © 2013 Ini Gamis Buku Online, All Rights Reserved</span>
      </div>

    </div><!-- end container -->
</div>

</div>

</body>
</html>
