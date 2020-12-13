<?php
require("../bar.php");
?>
<title>Fin de démonstration - Shadow's auth</title>
<style>
	.circular--square {
	  border-radius: 50%;
	}
</style>
<center>
	<h2>Et voilà!</h2>
	<p>Le système de connexion via est 99,9999% fonctionnel !</p>
	<p><i>Ceci était juste une démo, vous n'êtes pas vraiment connecté.</i></p>
	<br/>
	<p>Pour vous prouver que cela fonctionne: </p>
	<br/>
	<br/>
	<table>
	  <tr>
	    <th><img class="circular--square" src="<?php echo $_GET["pic"] ?>" width="64" /></th>
	    <th>
	    	<h3> <?php echo $_GET["username"] ?></h3>
	    	<code><?php echo $_GET["uuid"] ?></code>
	    </th>
	  </tr>
	</table><br/></br>
	<!--- CHOIX DE CONTINUER OU JE ME SUIS TROMPÉ DE COMPTE --->
	<table>
	  <tr>
	    <th><a href="/" ><button type="button" class="btn btn-success">En savoir plus sur Shadow's Auth et comment l'utiliser</button></a></th>
	  </tr>
	</table>
</center>