<?php 

function register(){

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}

	// Insertion du message à l'aide d'une requête préparée
	$req = $bdd->prepare('INSERT INTO utilisateurs (email,pseudo,password,confirmpassword) VALUES(?, ?, ?, ?)');
	$req->execute(array($_POST['emailduclient'], $_POST['registerPseudo'], $_POST['passduclientR'], $_POST['passduclientC']));




	// Redirection du visiteur vers la page du minichat
	header('Location: index.php');
	}




function connexion(){
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}

	echo "test";

	// Insertion du message à l'aide d'une requête préparée
	$req = $bdd->prepare('SELECT ID ,email ,password FROM utilisateurs ORDER BY ID');
	while ($donnees =$req ->fetch()) {
		if ($donnees['email']==$_POST['logEmail'] && $donnees['password']==$_POST['passduclient']) {
			$_SESSION['pseudoID']=$donnees['ID'];
			$afficherChat = true;
			echo "connexion!!!!!!!!!!!!!!!";
		}
		
	}
	$req->closeCursor();




	// Redirection du visiteur vers la page du minichat
	header('Location: index.php');
	
}

function getMessage() {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}
	$reponse = $bdd->query('SELECT * FROM messages 
	      LEFT JOIN utilisateurs ON messages.utilisateurid =utilisateurs.ID; ORDER BY ID DESC LIMIT 0, 10');
	return $reponse;
}

function post(){
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}

	// Insertion du message à l'aide d'une requête préparée
	$req = $bdd->prepare('INSERT INTO messages(message) VALUES(:message,:utilisateurid)');
	$req->bindParam(':message', $_POST['message'], PDO::PARAM_STR);
	$req->bindParam(':utilisateurid', $_SESSION['pseudoID'], PDO::PARAM_STR);
	$req->execute();

	// Redirection du visiteur vers la page du minichat
	header('Location: index.php');



function displaymessage(){

			if(isset($_SESSION['pseudoID'])) {
				while ($donnees = $reponse->fetch())
				{
					echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
				}
			}
		}

}
function quit(){
	session_destroy();
	header('Location: index.php');


}