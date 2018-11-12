<?php

	session_start();

	require('models/model.php');
	
	if(isset($_SESSION['pseudo'])) {
		$reponse = getMessage();
	}
	
	// ecrire un nouveau message
	if (isset($_POST['message'])) {
		// insertMsg();
	}

	if (isset($_POST['registerPseudo'])) {
		register();
	}
	
	// CONNEXION
	$afficherChat = false;
	if (isset($_POST['logEmail'])) {
		$req = getUser($_POST['logEmail']);
		while ($donnees =$req ->fetch()) {
			if ($donnees['password'] == $_POST['passduclient']) {
				$_SESSION['pseudoID'] = $donnees['ID'];
				$_SESSION['pseudo'] = $donnees['pseudo'];
				$afficherChat = true;
			}
			
		}
	}

	if (isset($_POST['quit'])) {
		session_destroy();
	}

require('views/viewChat.php');