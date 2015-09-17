<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
#load models
include('../models/View.php');
include("../models/UserAccount.php");
include("../models/Crud.php");
include("../models/Queries.php");
#instantiate classes
$view = new View();
$user = new UserAccount();
$crud = new Crud();
$queries = new Queries();
#routes
if(!empty($_GET["action"])){

	# =-=-=-=-=-=-= Route for Admin log in page =-=-=-=
	if($_GET['action'] == "aDmInLoGIN"){
	        $view->getView("../views/head.php");
	        $view->getView("../views/loginForm.php");
	        $view->getView("../views/footer.php");
	}

    	# =-=-=-=-=-=-= Action to login=-=-=-=-=-=-=-=-=-=
	if($_GET['action'] == "login"){
		$user->login();
	}

	# =-=-=-=-=-=-= Action to logout =-=-=-=-=-=-=-=-=-=
	if ($_GET["action"] == "logout"){

		$view->getView("../views/head.php");
		$view->getView("../views/footer.php");
	}


	# =-=-=-=-=-=-= Route for admin page =-=-=-=-=-=-=
    	if ($_GET["action"] == "aDmINDasHBoard"){
	        $view->getView("../views/head.php");
	        $view->getView("../views/uploadForm.php");
	        $view->getView("../views/footer.php");
	}

	# =-=-=-=-=-=-= Action to upload song =-=-=-=-=-=-=
	if ($_GET["action"] == "createPost"){
		$checkUpload = $crud->postSong();
        		$view->getView("../views/head.php");
        		$view->getView("../views/uploadForm.php",$checkUpload);
        		$view->getView("../views/footer.php");
	}

	# =-=-=-=-=-=-= Action to like song=-=-=-=-=-=-=-=-=
	if ($_GET["action"] == "like"){
		$songid=$_GET['songId'];
		$crud->likeSong($songid);
		$view->getView("../views/head.php");
		$view->getView("../views/nav.php");
		$songs= $crud->dateSort();
        		$view->getView("../views/musicFeed.php",$songs);
		$view->getView("../views/footer.php");
	}

	# =-=-=-=-=-=-= Action to download song =-=-=-=-=-=
   	if ($_GET["action"] == "download"){
		$songid=$_GET['songId'];
        		$file=$_GET['file'];
		$crud->downloadSong($songid,$file);
		$view->getView("../views/head.php");
		$view->getView("../views/nav.php");
		$songs= $crud->dateSort();
        		$view->getView("../views/musicFeed.php",$songs);
		$view->getView("../views/footer.php");
	}

	#if ($_GET["action"] == "error"){
		#$view->getView("views/header.php");
		#$view->getView("views/loginForm.php");
		#$view->getView("views/usError.php");
		#$view->getView("views/footer.php");
	#}

	# =-=-=-=-=-=-= Route for media page =-=-=-=-=-=-=-=
	if ($_GET["action"] == "media"){
		$view->getView("../views/head.php");
		$view->getView("../views/nav.php");
		$lastUploads = $queries->latestUploads();
		$view->getView("../views/media.php",$lastUploads);
		$view->getView("../views/footer.php");
	}

	# =-=-=-=-=-=-= Route for about page =-=-=-=-=-=-=-=-=-=
	if ($_GET["action"] == "about"){
		$view->getView("../views/head.php");
		$view->getView("../views/nav.php");
		$view->getView("../views/about.php");
		$view->getView("../views/footer.php");
	}
}
# =-=-=-=-=-=-= If no action is specified, display this =-=-=-=-=-=-=-=-=-=
else{

	$view->getView("../views/head.php");
	$view->getView("../views/nav.php");
	$songs= $crud->dateSort();
	$view->getView("../views/musicFeed.php",$songs);
	$view->getView("../views/footer.php");
}
# =-=-=-=-=-=-= XXXXXXXXXXXXX =-=-=-=-=-=-=-=-=-=


?>
