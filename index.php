<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="index_files/index.css" />
	<link rel="stylesheet" href="bootstrap.css">
	<script type="bootstrap.bundle.js"></script>
	<title>minichat</title>
</head>
<body style="background-image: url(backgroundchat.jpg); background-attachment: fixed;">
	<h1 style="background-image: url(backgroundminichat.jpg);background-attachment: fixed; font-style: bold; color: white;" class="text-center">CHAT-BOX</h1>
	<header>
		<form method="get" action="index.php">
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input style="width: 200px;" name="emailduclient" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">votre email n'est jamais communiquer a des tiers.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Mot de passe</label>
				<input style="width: 200px;"" name="passduclient" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<button type="submit" class="btn bg-white">Submit</button>
			<p>Bienvenue : <?php if(isset($_GET["emailduclient"])) echo htmlspecialchars($_GET["emailduclient"]); ?></p>
		</form>
	</header>			
	<section>
		<form method="POST" action="index.php">	
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 backgroundPlanche">			
					<input type="text" class="form-control" name="message"/>
					<input type="submit" class="btn text-center" id="btn"  value="Envoyer"/>
					<p>Votre message est :
					<?php if(isset($_POST["message"])) echo htmlspecialchars($_POST["message"]); ?></p>
					
				</div>
				<div class="col-md-3"></div>
								<div class="text-white" style="text-align: left;">
					
				clac
				</div>
			</div>
		</form>
	</section>
</body>
</html>
