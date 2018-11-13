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
<body style="background-image: url(src/img/american.jpg); background-attachment: fixed;">	
	
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Inscription
</button>	
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enregistrez-vous !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="index.php">
      	<div class="modal-body">
			<div class="form-group text-white">
				<label for="emailduclient">Email</label>
				<input name="emailduclient" type="text" class="form-control text-center" aria-describedby="emailHelp" placeholder="adresse e-mail">				
			</div>
			<div class="form-group text-white">
				<label for="pseudoduclient">Pseudo</label>
				<input name="registerPseudo" type="text" class="form-control text-center" aria-describedby="pseudoHelp" placeholder="votre pseudo">
			</div>
			<div class="form-group text-white">
				<label for="passduclientR">Mot de passe</label>
				<input name="passduclientR" type="password" class="form-control text-center" placeholder="mot de passe">
			</div>
			<div class="form-group text-white">
				<label for="passduclientC">Confirmation du mot de passe</label>
				<input name="passduclientC" type="password" class="form-control text-center" placeholder="confirmez votre mot de passe">
			</div>
      	</div>
      	<div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
	        <button type="submit" class="btn btn-primary">Envoyer</button>
      	</div>
      </form>
    </div>
  </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
  Mon Espace
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Mon espace</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="index.php">
      <div class="modal-body">
       <div class="form-group text-white">
				<label for="emailduclient">Email</label>
				<input name="emailduclient" type="text" class="form-control text-center" aria-describedby="emailHelp" placeholder="adresse e-mail">				
		</div>
				<div class="form-group text-white">
					<label for="passduclientC">Mot de passe</label>
					<input name="passduclientC" type="password" class="form-control text-center" placeholder="mot de passe">
				</div>
  			</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Envoyer</button>
        <button type="submit" class="btn btn-primary">Quitter</button>
      </div>
  </form>

    </div>
  </div>
</div>
<?php 
			if ($afficherChat) {
				while ($donnees = $reponse->fetch())
             {
               echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
             }
		?>
		
		<?php
			}
		?>
</body>
</html>
