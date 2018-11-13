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
	if (isset($_POST['emailduclient'])) {
		$req = getUser($_POST['emailduclient']);
		while ($donnees =$req ->fetch()) {
			if ($donnees['password'] == $_POST['passduclientC']) {
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