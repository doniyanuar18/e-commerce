<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<?php
		session_start();
	?>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/font-opensans.css" rel="stylesheet" type="text/css" media="screen" > 
<link href="assets/css/MTVM.css" rel="stylesheet" type="text/css">
<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="assets/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>	
</head>  
		<?php  
		  if(!isset($_SESSION['username'])){
			  echo "
			  <body>
  <div class='container' style='background-color:#FFF'>
  <div class='jumbotron' style='background-image:url(assets/images/aisha.jpg)'>
  <a href='Index.php'><h1 style='color:#6F3'>Toko gamis AISHA</h1></a>      
    <p style='color:#6F3'>Selamat datang pengunjung... </p>      
  </div>

<div class='nav navbar-inverse' role='navigation'> 
    <div class='container'>
      <a href='Index.php' class='navbar-brand'>Beranda</a>
          <button class='navbar-toggle' data-toggle='collapse' data-target='.navHeaderCollapse'>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          </button> 
        <div class='collapse navbar-collapse navHeaderCollapse'>
          <ul class='nav navbar-nav navbar-left'>
            <li><a href='#'>Profil</a></li>
            <li><a href='#'>Hubungi Kami</a></li>
            <li><a href='#'>Gamis Terbaru</a></li>
           <li> 
      <input type='text' class='form-control' placeholder='Cari gamis... '></li><li><button class='btn btn-default' type='button' style='background-image:url(assets/images/ico-search-loop.png) inherit'>Cari</button></li>
          <li><a href='#'><span class='glyphicon glyphicon-shopping-cart'></span>Keranjang <b>(<?php total(); ?>)<b></a>
          </li></ul>
		  
		  
		  </div>
		  </div>
		  </div>
		  </div>
		  </div>
		<div class='container'>
		<div class='row'>
		
			<div class='row'>
				<div class='span12 center login-header'>
					<h2 style='text-align: center;'>Selamat Datang di Menu Login Member</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class='row-fluid'>
				<div class='well span5 center login-box'>
					<div style='text-align: center;' class='alert alert-info'>
						Silahkan Masukkan Username dan Password.
					</div>
					<form class='form-horizontal' action='ceklogin.php' method='post'>
						<fieldset style='text-align: center;'>
							<div class='input-prepend' title='Username' data-rel='tooltip'>
								<span class='add-on'><i class='icon-user'></i></span><input autofocus='' class='input-large span10' name='username' id='username' value='admin' type='text'>
							</div>
							<div class='clearfix'></div>

							<div class='input-prepend' title='Password' data-rel='tooltip'>
								<span class='add-on'><i class='icon-lock'></i></span><input class='input-large span10' name='password' id='password' value='adminadmin' type='password'>
							</div>
							<div class='clearfix'></div>

							<div class='input-prepend'>
							<label class='remember' for='remember'><input id='remember' type='checkbox'>Ingatkan saya</label>
							</div>
							<div class='clearfix'></div>

							<p class='center span5'>
							<button type='submit' class='btn btn-primary'>Login</button>
							</p>
							
							<p class='center span5'>
							Belum Punya Akun? <br>
							<a href='registrasi.php'><b>DAFTAR</b></a>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
	</div><!--/.fluid-container-->
	</body> 
	";
		 }
		  else{
			  include("konfirmasibayar.php");
		  }
		
?>


</html>
