
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<?php
	
include "function.php";
session_start();
?>
	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">

	<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/font-opensans.css" rel="stylesheet" type="text/css" media="screen" > 
<link href="assets/css/MTVM.css" rel="stylesheet" type="text/css">
<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="js/parsley.js"></script>
		<script type="text/javascript" language="javascript" src="js/parsley.min.js"></script>
		<script type="text/javascript" language="javascript" src="js/id.js"></script>
		<script type="text/javascript">
  window.Parsley.setLocale('id');
</script>
<script type="text/javascript" src="assets/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript">
	var htmlobjek;
$(document).ready(function(){
  //apabila terjadi event onchange terhadap object <select id=propinsi>
  $("#Provinsi").change(function(){
    var Provinsi = $("#Provinsi").val();
    $.ajax({
        url: "getter.php",
        data: "Provinsi="+Provinsi,
        cache: false,
        success: function(msg){
            //jika data sukses diambil dari server kita tampilkan
            //di <select id=kota>
            $("#Kabupaten").html(msg);
        }
    });
  });
});
</script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>	
</head>

<body>

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
            <li><a href="#">gamis Terbaru</a></li>
           <li> 
      <input type="text" class="form-control" placeholder="Cari gamis... "></li><li><button class="btn btn-default" type="button" style="background-image:url(assets/images/ico-search-loop.png) inherit">Cari</button></li>
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Keranjang <b>(<?php total(); ?>)<b></a>
          </li></ul>
		  
		  
		  </div>
		  </div>
		  </div>
		
<div id="row1">
<form class="form-horizontal" id="form" name="example_form" action="" method="POST" data-validate="parsley" enctype="multipart/form-data">
<div class="span12 center">
					<h2 style="text-align: center;">Selamat Datang di Menu Registrasi</h2>
				</div>
				<div class="span8">
					<h4 style="text-align: left">Silahkan masukkan data Anda dengan benar!</h4>
				</div>
								
<div class="control-group">
					<div class="controls">
					<label class="control-label" style="
    padding-left: 0px;
">Username </label>
						<input type="text" name="username" class="span6" required  style="
    margin-left: 46px;
">
					</div>
				</div>
<div class="control-group">
					<div class="controls">
					<label class="control-label" style="
    padding-left: 0px;
">Nama Lengkap  </label>
						<input type="text" name="namalengkap" class="span6" required style="
    margin-left: 14px;
">
					</div>
				</div>
				<div class="control-group">
					
					<div class="controls">
						<label class="control-label">Email &nbsp; &nbsp; &nbsp; </label><input type="email" name="email" class="span6" type="email" required style="
    margin-left: 59px;
">
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
					<label class="control-label">Password &nbsp; &nbsp; &nbsp; </label>	
					<input type="password" name="password" class="span6" required minlength="6" style="margin-left: 25px;">
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
					<label class="control-label">Ulangi Password &nbsp; </label>	
					<input type="password" name="password2" class="span6" required data-parsley-equalto="password" style="margin-left: -6px;">
					</div>
				</div>
		
				<div class="control-group">
					<div class="controls">
					<label class="control-label">Jenis Kelamin : &nbsp; &nbsp; &nbsp; </label>
					<input type="radio" name="kelamin" value="laki" >&nbsp; Laki-laki
					<input type="radio" name="kelamin" value="perempuan" >&nbsp; Perempuan
					</div>
				</div>

						<?php
						echo"
						<div class='control-group'>
					<label class='control-label'>Provinsi</label>
					
						<select id='Provinsi' name='Provinsi' required style='
    margin-left: 61px;'> <option>--pilih provinsi--</option> " ;
						$Provinsi = mysql_query("SELECT * FROM provinsi ORDER BY provinsiNama");
while($p=mysql_fetch_array($Provinsi)){
echo "<option value=\"$p[provinsiId]\">$p[provinsiNama]</option>\n";
}
							
						
				  		echo "</select>
				
				</div>
				
				
				
			
						<div class='control-group'>
					<label class='control-label'>Kabupaten</label>
					
						<select id='Kabupaten' name='Kabupaten' required style='
    margin-left: 41px;'> <option>--Pilih Kabupaten/Kota--</option>";
						$kab  = mysql_query("SELECT * FROM kabupaten ORDER BY kabupatenNama");
						while($rkab = mysql_fetch_array($kab)){
							
								echo "<option value=\"$rkab[kabupatenId]\">$rkab[kabupatenNama]</option>\n";
							}
							
						
				  		echo "</select>
					
				</div>
				
				
		
		"
			
						?>
						
					<div class="control-group">
				
					<div class="controls">
						<label class="control-label">Alamat Rinci: &nbsp; &nbsp; &nbsp; </label>	<input type="text" name="alamat" class="span6" required style="
    margin-left: 31px;
">
					</div>
				</div>	
						
						
				
				
				<div class="control-group">
				
					<div class="controls">
						<label class="control-label">Kodepos &nbsp; &nbsp; &nbsp; </label>	<input type="number" name="kodepos" class="span6" type="number" required style="
    margin-left: 31px;
">
					</div>
				</div>
				<div class="control-group">
				
					<div class="controls">
							<label class="control-label">No Telp &nbsp; &nbsp; &nbsp; </label><input type="number" name="notelp" class="span6"  required style="
    margin-left: 44px;
">
					</div>
				</div>
				
				<input type="submit" class="btn btn-primary" value="Daftar" name="register" style="
    margin-top: 17px; margin-left: 119px;
">
				
				
				</div>
				  </div>
		  </div>
		  <script>
		  $(document).ready(function() {
     $('#example_form').parsley();//id form
});
</script>
	</body>
	</html>
	<?php
	if(isset($_POST['register'])){
		$ip = getIp();
		$username = $_POST['username'];	
		$namalengkap = $_POST['namalengkap'];
		$Email = $_POST['email'];
		$kelamin = $_POST['kelamin'];
		$idmember = $_POST['id_member'];
		$password = $_POST['password'];
		$provinsi = $_POST['Provinsi'];
		$alamat = $_POST['alamat'];
		$kabupaten = $_POST['Kabupaten'];
		$kodepos = $_POST['kodepos'];
		$notelp = $_POST['notelp'];
	if ($_POST['password']==$_POST['password2'] ) { //proses simpan data, $_POST['pw'] dan $_POST['pw1'] adalah name dari masing masing text password  
} else {
echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
}
$username = strtolower($username);
$sql_cek="SELECT * FROM member WHERE username='$username'";
$qry_cek=mysql_query($sql_cek);
$jum_cek=mysql_num_rows($qry_cek);
if ($jum_cek >= 1) {

echo "<script>alert('USERNAME : $username SUDAH ADA SILAHKAN GUNAKAN YANG LAIN')</script>";
echo "<script>window.location = 'registrasi.php'</script>";
exit;
}	

$passwordmd5 = md5($password);
$save="insert into member (username,kelamin, alamat,   password, provinsiId, kodepos, email ,no_telp,Namalengkap,kabupatenId)
				   values ('$username','$kelamin','$alamat','$passwordmd5','$provinsi', '$kodepos','$Email','$notelp','$namalengkap','$kabupaten')";
			$res=mysql_query ($save) or die (mysql_error());
			
			$tampil_krj = "select * from shoppingcart where ip_add = '$ip'";
			
			$run_tampil_krj = mysql_query($tampil_krj) or die (mysql_error());
			
			$cek_krj = mysql_num_rows($run_tampil_krj);
			
			if($cek_krj==0){
				
				$_SESSION['username'] =$username;
				
				echo "<script>alert('Akun berhasil dibuat!')</script>";
				echo "<script>window.open('member/member.php?modul=home','_self')</script>";
				
			}
			else{
				$_SESSION['username']=$username;
				
				echo "<script>alert('Akun berhasil dibuat!')</script>";
				echo "<script>window.open('loginchekout.php','_self')</script>";
			}
	}
	
	
	?>
	