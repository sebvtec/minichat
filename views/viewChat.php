<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="lib/css/bootstrap.css">
	<script type="text/javascript" src="lib/js/jquery.js"></script>
	<script type="text/javascript" src="lib/js/bootstrap.js"></script>


	<link rel="stylesheet" type="text/css" href="src/css/index.css" />

	<title>minichat</title>
</head>
<body style="background-image: url(src/img/backgroundchat.jpg); background-attachment: fixed;">

	<div style="color:white">

		<?php 
		echo "session";
		var_dump($_SESSION['pseudo']);
		if($_SESSION === "undefined") { echo "PAS CO"; }
		echo "<br>";
		echo "POST";
		 var_dump($_POST);

		  ?>
	</div>
		<form method="post" action="index.php">
			<div class="form-group text-white">
				<label for="emailduclient">Email</label>
				<input name="emailduclient" type="text" class="form-control text-center" aria-describedby="emailHelp" placeholder="Enter email">				
			</div>
			<div class="form-group text-white">
				<label for="pseudoduclient">Pseudo</label>
				<input name="registerPseudo" type="text" class="form-control text-center" aria-describedby="pseudoHelp" placeholder="Enter pseudo">
			</div>
			<div class="form-group text-white">
				<label for="passduclientR">Mot de passe</label>
				<input name="passduclientR" type="password" class="form-control text-center" placeholder="Password">
			</div>
			<div class="form-group text-white">
				<label for="passduclientC">Confirmation du mot de passe</label>
				<input name="passduclientC" type="password" class="form-control text-center" placeholder="confirm Password">
			</div>
			<button type="submit" class="btn">Submit</button>
		</form>
		<form method="post" action="index.php">
			<div class="form-group text-white">
				<label for="exampleInputEmail1">Email</label>
				<input name="logEmail" type="text" class="form-control text-center" aria-describedby="emailHelp" placeholder="Enter email">
			</div>
			<div class="form-group text-white">
				<label for="exampleInputPassword1">Mot de passe</label>
				<input name="passduclient" type="password" class="form-control text-center" placeholder="Password">
			</div>
			<button type="submit" class="btn">Envoyer</button>
			<button type="text" name="quit" class="btn">Quitter</button>
		</form>
		<?php 
			if ($afficherChat) {
		?>
		<form method="post" action="index.php">	
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 backgroundPlanche">			
					<input type="text" class="form-control" name="message" value="message" />
					<input type="submit" class="btn text-center" id="btn" value=""/>
					<p class="text-white">
						
					</p>	
				</div>
				<div class="col-md-3"></div>
				<div class="text-white text-center"></div>
			</div>
		</form>
		<?php
			}
		?>

		<?php 
			while ($donnees = $reponse->fetch())
			{
				echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
			}
		?>
</body>
</html>
