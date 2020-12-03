<?php


if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

	require 'Login.class.php';

	$u = new Login();

	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	

	if ($u->login($email,$senha) == true) {
		if (isset($_SESSION['iduser'])) {
			header("Location:../web/tab.php");
		}
	}else{
		header("Location:../web/index.html");
	}
		
}

/*else{
	header("Location:index.html");

}*/


?>