<?php	
	include "Config/config_db.php";

	$Provinsi = $_GET['Provinsi'];
		$sub = mysql_query("SELECT * FROM kabupaten WHERE provinsiId = '$Provinsi' order by kabupatenNama");
		echo "<option>-- Pilih Kabupaten/Kota --</option>";
		while($rsub = mysql_fetch_array($sub)){
			echo "<option value=\"$rsub[kabupatenId]\">$rsub[kabupatenNama]</option>\n";
		}
	
?>