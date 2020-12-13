<?php
require("../bar.php");
?>
<title>Connecté via Discord - Shadow's auth</title>
<style>
	.circular--square {
	  border-radius: 50%;
	}
</style>
<center>
	<h2>Bravo!</h2>
	<p>Vous êtes conncté via Discord!</p>
	<br/><br/>
	<table>
	  <tr>
	    <th><img class="circular--square" src="<?php echo $_SESSION["dc_pic"] ?>" width="64" /></th>
	    <th>
	    	<h3> <?php echo $_SESSION["dc_name"] ?></h3>
	    	<code><?php echo $_SESSION["dc_id"] ?></code>
	    </th>
	  </tr>
	</table><br/></br>
	<!--- CHOIX DE CONTINUER OU JE ME SUIS TROMPÉ DE COMPTE --->
	<table>
	  <tr>
	    <th><a href="/make?via=discord" ><button type="button" class="btn btn-success">Continuer</button></a></th>
	  </tr>
	</table>
</center>