<?php
include '../php/html/head.php';


if(isLoggedIn()){
	header('Location: beta.http://fotballguiden.nu');
	die();
}

?>

<br><br><br><br><div class="container">
<h1>Registrer</h1>

<form action="../php/post/registerpost.php" method="POST">
	<div class="input-group input-group-lg">
	<input type="text" placeholder="Navn" class="form-control" name="name"/>	
	<input type="email" placeholder="Epost" class="form-control" name="email"/>
	<input type="password" class="form-control" placeholder="Passord" name="password"/>
	<input type="password" placeholder="Gjenta passord" class="form-control" name="repeatPassword"/>
	<?php printRegisterMsg();?>
	<br><input type="submit" name="submit" value="OK" class="btn btn-default"/>
</div></div> 
</form>