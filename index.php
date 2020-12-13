<?php
require("bar.php");
$appID = rand(9999999999999999, 1000000000000000);
?>
<title>Shadow's Auth</title>
<center>
	<h2>Déjà <b><?php echo file_get_contents("stats/lgt.txt") ?></b> connexions effectués via Shadow's Auth!</h2>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<h3>Comment utiliser <b>Shadow's Auth</b></h3>
	<p>Un service pour pouvoir authentifier vos utilisateurs via plusieurs services.</p>
	<br/><br/>
</center>
<h4>Services disponnibles actuellement :</h4>
<h5><img src="https://i.imgur.com/Ho3Aw9z.png" width="30"> Minecraft</h5>
<h5><img src="https://i.imgur.com/hD4OPF2.png" width="30"> Wolfer</h5>

<h4>Comment je peux utiliser Shadow's Auth ?</h4>
<p>Vous pouvez utiliser Shadow's Auth pour votre application, site web ou pour des concours!</p>
<h5>Étape 1: Obtenir un ID d'application</h5>
<p>Nous venons de vous génerer un ID touuuuut frais :D</p>
<p>Votre ID:</p>
<code><?php echo $appID ?></code>
<br/><br/>
<h5>Étape 2: L'URL</h5>
<p>Une URL Shadow's Auth se présente comme ça:</p>
<code>https://shadow.conectapp.mx/public/ask?redurl=-[URL DE REDIRECTION]-&appID=-[ID DE L'APP]-&force=-[FORCE]-</code>
<p>redurl : Url ou l'utilisateur sera redirigé après avec les arguments GET PHP: ?username=[NOM D'UTILISATEUR]&uuid=[UUID]&pic=[URL DE L'IMAGE DE PROFIL]</p>
<p>appID : ID d'application fourni ci-dessus</p>
<p>force : Type de force appliqué (Nom d'application ou false si l'utilisateur choisis par lui même) Arguments: mc | wolfer | false</p>
<br/><br/>
<h5>Démo</h5>
<p>Minecraft:</p>
<code>https://shadow.conectapp.mx/public/ask?redurl=https://shadow.conectapp.mx/demo/ok&appID=197744154489479879781&force=mc</code>
<br/>
<p><b>NOUVEAU! </b>Wolfer: </b></p>
<code>https://shadow.conectapp.mx/public/ask?redurl=https://shadow.conectapp.mx/demo/ok&appID=197744154454498499494&force=wolfer</code>
<br/>