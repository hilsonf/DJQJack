<?php
/**
* UserAccounts
*/
class UserAccount{

	public function login(){
		
		// Variables for admin credentials
		$usernameVer = 'admin';

		$passwordVer = 'admin';

		// incoming user input
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//verifying credentials
		if($usernameVer == $username && $passwordVer == $password){
			header("Location: /?action=aDmINDasHBoard");
		}
		else{
			header("Location: /?action=error");
		}

	}

	public function logout(){
		ini_set('session.gc_maclifetime', 86400);
		session_start();
		session_unset();
		session_destroy();
		header("Location: index.php");
	}
}
?>