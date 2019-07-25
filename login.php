
<?php
include "Config/config_db.php";

if (isset($_SESSION['username'])){
	   
?>
   <ul class="nav navbar-nav navbar-right">			
				<div class="btn-group" style= "padding-right: 18px;">
    <button type="button" class="glyphicon glyphicon-user btn btn-default dropdown-toggle" data-toggle="dropdown">
<?php echo "$_SESSION[username]";?>
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="member/member.php?modul=home">Profil</a></li>
	  <li class="divider"></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
	</ul>
  
<?php
}

else{
	?>
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
								<span class="add-on"><i class="glyphicon glyphicon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text"  />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="password" data-rel="tooltip">
								<span class="add-on"><i class="glyphicon glyphicon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password"  />
							</div>
							<div class="clearfix"></div>
							
							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Ingatkan saya</label>
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
		   <a href="registrasi.php">
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Daftar
</button></a>

<?php
	
}?>