<?php
require("bar.php");
if (isset($_GET["err"])) {
	?>
		<div class="alert alert-danger" role="alert">
		  <?php echo $_GET["err"] ?>
		</div>
	<?php
}
?>
<title>Connexion via Minecraft - Shadow's auth</title>
<center>
	<p>Merci de vous connecter au serveur <b>srv.mc-oauth.net</b> <i>De la 1.7 à la 1.15.X</i></p>
	<p>Et de rentrer le code obtenu (exemple ci-dessous)</p>
	<form action="check/minecraft" autocomplete="off" method="POST">
		  <div class="form-group">
		    <label for="obtenucode">Code obtenu</label>
		    <input type="number" min="0" max="999999" autocomplete="off" class="form-control" id="obtenucode" name="authid">
		  </div>
		  <button type="submit" class="btn btn-primary">Se connecter</button>
	</form>
	<br/><br/>
	<i>Sachez qu'un code expire toutes les <b>5 minutes</b></i>
	<h2>Je me suis connecté mais je ne trouve pas le code...</h2>
	<p>Le code ce situe dans le message lorsque vous vous connectez:</p>
	<img src="https://i.imgur.com/DmePnKB.png" width="100%" />
	<br/><br/>
	<p><i>La méthode de connexion utilisée pour Minecraft est fournie par <a href="https://mc-oauth.net/">mc-oauth.net</a>.</i></p>
</center>