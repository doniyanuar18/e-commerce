<?php
include "function.php";
session_start();
$module=$_GET['module'];
$ip = getIp();


if (isset($_SESSION['username'])){
  
if ($_GET['module']=="belisukses") {
	if(! $_POST['TxtUnik']=="") {			
		$kode= kdauto("orderdata","TR-");
		$sql = "INSERT INTO orderdata SET 
				IDOrder='".$kode."',
				id_member='".$_POST['TxtIdmember']."',
				TanggalOrder='".date('Y-m-d')."',
				jam='".date('G:i:s')."',  
				StatusOrder='pesan',
				unik_transfer='".$_POST['TxtUnik']."'";
		
		$query = mysql_query($sql);
		if ($query) {
			$sql_trans="INSERT INTO detailorder
				(IDOrder,id_produk,JumlahBeli)
				SELECT orderdata.IDOrder, shoppingcart.id_produk, shoppingcart.JumlahBeli
				FROM orderdata, shoppingcart
				WHERE orderdata.IDOrder='$kode'
				AND shoppingcart.ip_add='$ip'";
			mysql_query($sql_trans)
				or die ("Gagal query transfer".mysql_error());
			
			$hapus_kantong="DELETE FROM shoppingcart WHERE ip_add='".$ip."'";
			mysql_query($hapus_kantong)
			or die ("Gagal query hapus kantong".mysql_error());

			$sql_plg = "UPDATE member SET StatusOrder='Order' 
						WHERE username='".$_SESSION['username']."'";
			mysql_query($sql_plg);
			
			echo "<meta http-equiv='refresh' content='0; url=belisukses2.php'>";
		}
		else {
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
		}
	}
}
}
else{
echo "<link href='../../assets/css/bootstrap.css' rel='stylesheet' type='text/css'>
  	<center><h2>Untuk mengakses modul</h2> <h1>Anda harus login</h1><br>";
  echo "<a href=loginchekout.php><h3>LOGIN</b></h3></center>";
}
?>
