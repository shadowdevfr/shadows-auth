<?php
require("../bar.php");
?>
<title>Connecté via Wolfer - Shadow's auth</title>
<style>
	.circular--square {
	  border-radius: 50%;
	}
</style>
<center>
	<h2>Bravo!</h2>
	<p>Vous êtes conncté via <B>Wolfer!</B></p>
	<br/><br/>
	<table>
	  <tr>
	    <th><img class="circular--square" src="https://www.shadowdev.ga/d1/cdn/public/wolfer/assets/all/<?php echo $_SESSION["wol_pic"] ?>" width="64" /></th>
	    <th>
	    	<h3> <?php echo $_SESSION["wol_name"] ?></h3>
	    	<code><?php echo $_SESSION["wol_uuid"] ?></code>
	    </th>
	  </tr>
	</table><br/></br>
	<!--- CHOIX DE CONTINUER OU JE ME SUIS TROMPÉ DE COMPTE --->
	<table>
	  <tr>
	    <th><a href="/make?via=wol" ><button type="button" class="btn btn-success">Continuer</button></a></th>
	  </tr>
	</table>
</center>