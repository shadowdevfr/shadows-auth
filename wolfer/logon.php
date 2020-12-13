<?php
require("../bar.php");
if (isset($_GET["err"])) {
	?>
		<div class="alert alert-danger" role="alert">
		  <?php echo $_GET["err"] ?>
		</div>
	<?php
}
?>
<title>Connexion à Wolfer - Shadow's auth</title>
<style>
	.circular--square {
	  border-radius: 50%;
	}
</style>
<center>
	<h2>Connectez vous à votre compte Wolfer</h2>
</center>
	<br/><br/>
	<form action="log.action.php" method="POST">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Adresse E-Mail</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
	    <small id="emailHelp" class="form-text text-muted"><b>ATTENTION</b>: Si tu t'es inscrit avant le 30 novembre 2019, il se peut qu'il y ai un espace après ton adresse E-Mail.</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Mot de passe</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
	  </div>
  	<button type="submit" class="btn btn-success">Connexion</button>
</form>