<?php

	session_start();

	require('models/model.php');
	
	$reponse = getMessage();

	if (isset($_POST['registerPseudo'])) {
		register();
	}
	
	echo "POST";
	var_dump($_POST);
	$afficherChat = false;
	if (isset($_POST['logEmail'])) {
		echo "dkazopdkazpo";
		connexion();
		
	}
	if (isset($_POST['message'])) {
		displaymessage();
		
	}
	if (isset($_GET['quit'])) {
		quit();
		
	}

require('views/viewChat.php');