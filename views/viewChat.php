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
	<?php var_dump($_SESSION) ?>
	<?php var_dump($_POST) ?>
	<h1 style="background-image: url(src/img/backgroundminichat.jpg);background-attachment: fixed; font-style: bold; color: white;" class="text-center">CHAT-BOX</h1>
	<header>	
	</header>			
	<section>
		<form method="post" action="index.php">
			<div class="form-group">
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
			<button type="submit" class="btn btn-secondary">Submit</button>
			<p class="text-white">
				<?php// if(isset($_GET["emailduclient"])) echo htmlspecialchars($_GET["emailduclient"]); ?>
			</p>
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
	</section>
</body>
</html>