<?php	
include "Config/config_db.php";


$module=$_GET['module'];
$act=$_GET['act'];
	 
		
		if ($module=='keranjang' AND $act=='update'){ 

       $id = $_POST['id'];
  $jml_data = count($id);
  $jumlah   = $_POST['qty']; // quantity 
  for ($i=1; $i<$jml_data; $i++)
  {
 
mysql_query($update = "UPDATE shoppingcart SET jumlah = '".$_POST['qty'][$i]."'
WHERE id_produk = '".$_POST['id'][$i]."'")or die($update.'<br>error</br>'.mysql_error());
header('Location:checkout.php');
    }
  }
		if ($module=='keranjang' AND $act=='hapus'){
		 $GID=$_GET['ID'];	       
		mysql_query($hapus = "Delete from shoppingcart WHERE id_produk = '$GID'")or die($hapus.'<br>error</br>'.mysql_error());	
			echo "<script></script>";
			echo "<script>window.location = 'checkout.php'</script>";
		}
				
		?>