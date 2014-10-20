<?php
include '../php/html/head.php';

if(isLoggedIn()){
	header('Location: http://beta.fotballguiden.nu');
	die();
}


?>

<br><br><br><br><div class="container">
<h1>Logg inn</h1></div>

<form action="../php/post/loginpost.php" method="POST">
	<div class="input-group input-group-lg">
	<input type="email" placeholder="Epost" class="form-control" name="email"/>
	<input type="password" class="form-control" placeholder="Passord" name="password"/>
	<?php printLoginMsg();?>
	<br><input type="submit" name="submit" value="OK" class="btn btn-default"/>
</div>
</form>