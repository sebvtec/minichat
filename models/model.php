<?php 

function register(){

	$bdd = co();

	// Insertion du message à l'aide d'une requête préparée
	$req = $bdd->prepare('INSERT INTO utilisateurs (email,pseudo,password,confirmpassword) VALUES(?, ?, ?, ?)');
	$req->execute(array($_POST['emailduclient'], $_POST['registerPseudo'], $_POST['passduclientR'], $_POST['passduclientC']));




	// Redirection du visiteur vers la page du minichat
	header('Location: index.php');
	}





function getUser($mail) {
	$bdd = co();
	$req = $bdd->prepare('
		SELECT *
		FROM utilisateurs 
		WHERE utilisateurs.email = :mail
		ORDER BY ID
	');
	$req->bindParam(':mail', $mail, PDO::PARAM_STR);
	$req->execute();
	return $req;
}
	
function co() {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
		return $bdd;
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}
}

function getMessage() {
	$bdd = co();
	$reponse = $bdd->prepare('
		SELECT * 
		FROM messages 
	    LEFT JOIN utilisateurs 
	    	ON messages.utilisateurid =utilisateurs.ID; ORDER BY ID DESC LIMIT 0, 10');
	$reponse->execute();
	return $reponse;
}

function insertMsg() {
	$bdd = co();

	// Insertion du message à l'aide d'une requête préparée
	$req = $bdd->prepare('INSERT INTO messages(message) VALUES(:message,:utilisateurid)');
	$req->bindParam(':message', $_POST['message'], PDO::PARAM_STR);
	$req->bindParam(':utilisateurid', $_SESSION['pseudoID'], PDO::PARAM_STR);
	$req->execute();
}


