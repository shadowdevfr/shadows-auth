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
	<h2>You are logged in.</h2>
	<p>Please choose a way for the app to identify you.</p>
	<br/><br/>
	<table>
	  <tr>
	    <th><img class="circular--square" src="<?php echo $_SESSION["dc_pic"] ?>" width="64" /></th>
	    <th>
	    	<h3> <?php echo $_SESSION["dc_name"] ?></h3>
	    	<code><?php echo $_SESSION["dc_id"] ?></code>
	    </th>
	    <th>
	    	&nbsp;&nbsp;<a href="/make?via=discord" ><button type="button" class="btn btn-success">Continue</button></a>
	    </th>
	  </tr>
	  <tr>
	    <th><img class="circular--square" src="https://better-default-discord.netlify.app/Icons/Rotate-Blast-Green.gif" width="64" /></th>
	    <th>
	    	<h3> <?php echo $_SESSION["dc_name"] ?></h3>
	    	<code><?php echo $_SESSION["dc_id"] ?></code>
	    </th>
	    <th>
	    	&nbsp;&nbsp;<a href="/make?via=discord" ><button type="button" class="btn btn-secondary" disabled="1">Donators only</button></a>
	    </th>
	  </tr>
	</table><br/></br>
	<!--- CHOIX DE CONTINUER OU JE ME SUIS TROMPÉ DE COMPTE --->
	<table>
	  <tr>
	    <th></th>
	  </tr>
	</table>
</center>