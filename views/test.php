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
<body>
		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="index.php">
			<div class="form-group text-white">
				<label for="exampleInputEmail1">Email</label>
				<input name="logEmail" type="text" class="form-control text-center" aria-describedby="emailHelp" placeholder="Enter email">
			</div>
			<div class="form-group text-white">
				<label for="exampleInputPassword1">Mot de passe !</label>
				<input name="passduclient" type="password" class="form-control text-center" placeholder="Password">
			</div>
			<button type="submit" class="btn">Envoyer</button>
			<button type="text" name="quit" class="btn">Quitter</button>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>