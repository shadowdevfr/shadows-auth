<?php
require("../bar.php");
?>
<title>Connecté via Minecraft - Shadow's auth</title>
<style>
	.circular--square {
	  border-radius: 50%;
	}
</style>
<center>
	<h2>Bravo!</h2>
	<p>Vous êtes conncté via Minecraft!</p>
	<br/><br/>
	<table>
	  <tr>
	    <th><img class="circular--square" src="https://mc-heads.net/avatar/<?php echo $_SESSION["mc_uuid"] ?>/1000" width="64" /></th>
	    <th>
	    	<h3> <?php echo $_SESSION["mc_username"] ?></h3>
	    	<code><?php echo $_SESSION["mc_uuid"] ?></code>
	    </th>
	  </tr>
	</table><br/></br>
	<!--- CHOIX DE CONTINUER OU JE ME SUIS TROMPÉ DE COMPTE --->
	<table>
	  <tr>
	    <th><a href="/make?via=mc" ><button type="button" class="btn btn-success">Continuer</button></a></th>
	  </tr>
	</table>
</center>