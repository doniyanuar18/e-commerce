<?php
include "/Config/config_db.php";


function kdauto($tabel, $inisial){
	$struktur	= mysql_query("SELECT * FROM $tabel");
	$field		= mysql_field_name($struktur,0);
	$panjang	= mysql_field_len($struktur,0);

 	$qry	= mysql_query("SELECT max(".$field.") FROM ".$tabel);
 	$row	= mysql_fetch_array($qry); 
 	if ($row[0]=="") {
 		$angka=0;
	}
 	else {
 		$angka		= substr($row[0], strlen($inisial));
 	}
	
 	$angka++;
 	$angka	=strval($angka); 
 	$tmp	="";
 	for($i=1; $i<=($panjang-strlen($inisial)-strlen($angka)); $i++) {
		$tmp=$tmp."0";	
	}
 	return $inisial.$tmp.$angka;
}



function kat(){
	
	
	$kat = mysql_query("SELECT * FROM kategori_gamis ORDER By namaKategori ASC ");
	while($rkat = mysql_fetch_array($kat)){
		$IDKategori = $rkat['IDKategori'];
		echo "<a href='kategori.php?IDKategori=$IDKategori' class='list-group-item'>$rkat[namaKategori]</a>";
		
	}
}

function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

//AWAL ERROR
function cart(){
	if(isset($_GET['keranjang'])){
	
			date_default_timezone_set('Asia/Jakarta');
		$tanggal = 	date('Y-m-d');
		$jam 	= date('H:i:s');
		
		$ip = getIp();
		$id_produk = $_GET['keranjang'];
		
		$cekid_produk = "select * from shoppingcart where ip_add='$ip' AND id_produk='$id_produk' ";
		$runcek = mysql_query ($cekid_produk) or die (mysql_error());
			
		if(mysql_num_rows($runcek)>0){
			echo "<script>alert('gamis yang anda pilih sudah ada dalam keranjang.!')</script>";
			echo "<script>window.location = 'detail.php?id_produk=$id_produk'</script>";
			
			
		}
		else{
			$insert_keranjang = "insert into shoppingcart (id_produk,TanggalOrder,jam,JumlahBeli,ip_add) values ('$id_produk','$tanggal','$jam','1','$ip')";
			
			$runkeranjang = mysql_query($insert_keranjang) or die (mysql_error());
			
			echo "<script>window.open('checkout.php?id_produk=$id_produk','_self' )</script>";
		}
	}
}

function total(){
	if(isset($_GET['keranjang'])){
		
		$ip = getIp();
		
		$ambilgamis = mysql_query("select * from shoppingcart where ip_add='$ip'");
		$rungamis =  mysql_num_rows($ambilgamis);
	}
		else {
			
		$ip = getIp();
		
		$ambilgamis = mysql_query("select * from shoppingcart where ip_add='$ip'");
		$rungamis =  mysql_num_rows($ambilgamis);
			
		}
		
		echo $rungamis;
	}
	

function gamisrekomen(){
	$gamisrekomen = mysql_query("select * from gamis order by RAND() LIMIT 0,4"); 
	while($rgamis = mysql_fetch_array($gamisrekomen)){
		
	$id_produk = $rgamis['id_produk'];		
	$angka = $rgamis['harga'];
	$hasil = number_format($angka,0,',','.');
	$hasil2 = number_format($angka,0,',','.');
		
		    if($rgamis['stok']>0)
      $infostok="Tersedia";
    else
      $infostok="HABIS";

		echo "
		 <div class='col-sm-6 col-md-3'>
    <div class='thumbnail' id='thumbnail'>
      <img src='adminweb/$rgamis[fileGambar]' class='img' alt='...'>
      <div class='caption'>
        <a href='detail.php?id_produk=$id_produk'><h4>$rgamis[nama_produk]</h4></a>
        <p>Stock : $infostok<br>
          Harga :Rp.
		  $hasil2 ,- 
        </p>
        <p><a href='detail.php?id_produk=$id_produk' class='btn btn-default' role='button'>Pesan</a></p>
      </div>
    </div>
  </div>
		
		";
		
	}
	
}


function gamisBaru(){
	$gamisBaru = mysql_query("select * from gamis order by tanggal DESC LIMIT 20"); 
	while($rgamisbaru = mysql_fetch_array($gamisBaru)){
		
		$id_produk = $rgamisbaru['id_produk'];		
	$angka = $rgamisbaru['harga'];
	$hasil = number_format($angka,0,',','.');
	$hasil2 = number_format($angka,0,',','.');
		
		    if($rgamisbaru['stok']>0)
      $infostok="Tersedia";
    else
      $infostok="HABIS";

		echo "
		
		 <div class='col-sm-6 col-md-3' id='example1'>
    <div class='thumbnail' id='thumbnail'>
      <img src='adminweb/$rgamisbaru[fileGambar]' class='img' alt='...'>
      <div class='caption'>
        <a href='detail.php?id_produk=$id_produk'><h4>$rgamisbaru[nama_produk]</h4></a>
        <p>Stock : $infostok<br>
          Harga :	Rp.
		  $hasil2 ,- 
        </p>
        <p><a href='detail.php?id_produk=$id_produk' class='btn btn-default' role='button'>Pesan</a></p>
      </div>
    </div>
		
  </div>
  
		";
	
	}

	
}



function terkait(){
if(isset($_GET['IDKategori'])){
$IDKategori = $_GET['IDKategori'];	
	
	
	


$sql =mysql_query("SELECT a.*, d.namaKategori FROM gamis a, kategori_gamis d WHERE a.IDKategori=d.IDKategori AND d.IDKategori = '$IDKategori' order by RAND() LIMIT 0,12") 

or die($sql.'<br>error</br>'.mysql_error());
while($rsql=mysql_fetch_array($sql)){
	
	$id_produk = $rsql['id_produk'];
	$angka = $rsql['harga'];
	$hasil = number_format($angka,0,',','.');
	$hasil2 = number_format($angka,0,',','.');

	
	
		
		    if($rsql['stok']>0)
      $infostok="Tersedia";
    else
      $infostok="HABIS";
  echo"
   <div class='col-sm-6 col-md-3'>
    <div class='thumbnail' id='thumbnail'>
      <img src='adminweb/$rsql[fileGambar]' class='img' alt='...'>
      <div class='caption'>
        <a href='detail.php?id_produk=$id_produk'><h4>$rsql[nama_produk]</h4></a>
        <p>Stock : $infostok<br>
          Harga :<br> Rp.
		  $hasil2 ,- 
        </p>
        <p><a href='#' class='btn btn-default' role='button'>Pesan</a></p>
      </div>
    </div>
  </div>";
  
}
}
}


?>
