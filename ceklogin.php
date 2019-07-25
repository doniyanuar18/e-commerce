<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>Validasi</title>

  <!-- The styles -->
  <link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
  <style type="text/css">
    body {
    padding-bottom: 40px;
    }
    .sidebar-nav {
    padding: 9px 0;
    }
  </style>
  <link href="css/charisma-app.css" rel="stylesheet">
  <link href="css/uniform.default.css" rel="stylesheet">
  <link href="css/opa-icons.css" rel="stylesheet">    
</head>
<html>
<body>

<?php
include "/Config/config_db.php";
function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

$username = anti_injection($_POST['username']);
$pass     = anti_injection(md5($_POST['password']));

// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($username) OR !ctype_alnum($pass)){
  echo "Anda tidak bisa menginjeksi.";
}
else{
$login=mysql_query("SELECT * FROM member WHERE username='$username' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);


// Apabila username dan password ditemukan
if ($ketemu > 0 ) {
  session_start();

 $_SESSION['idmember']         = $r['id_member'];
  $_SESSION['username']     	= $r['username'];
  $_SESSION['passuser']     	= $r['password'];
$_SESSION['username']= $username;


$sid_lama = session_id();	
	session_regenerate_id();
	$sid_baru = session_id();

  mysql_query("UPDATE member SET id_session='$sid_baru' WHERE username='$username'");
  

header('location:Index.php');
}
// Apabila username dan password TIDAK ditemukan
else{
  echo "<link href=css/style.css rel=stylesheet type=text/css>";
  echo "<br><br><center><h1>LOGIN GAGAL! </h1><br> 
        <h2>Username / Password Anda tidak benar</h2>
        <h3>Atau account Anda sedang diblokir</h3><br><br>";
  echo "<a href=index.php><h2><b>ULANGI LAGI</b></h2></a></center>";
}
}




?>
</body>
</html>