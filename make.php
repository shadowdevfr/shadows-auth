<?php
require("bar.php");
$type = $_GET["via"];
if ($type=="mc") {
	$sType = "Minecraft";
} else {
	if($type=="wol") {
		$sType = "Wolfer";
	} else if($type=="discord") {
		$sType = "Discord";
	} else {
		echo "Une erreur est survenue (2)";
		die();
	}
}
?>
<title>Préparation... - Shadow's auth</title>
<center>
	<h1>Enregistrement de vos paramètres...</h1>
	<br />
	<p>Vous vous êtes connecté via <b><?php echo $sType ?></b>.</p>
	<br/><br/>
	<div class="progress">
		  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
	</div>
</center>
<?php
if ($type=="mc") {
	$_SESSION["username"] = $_SESSION["mc_username"];
	$_SESSION["uuid"] = $_SESSION["mc_uuid"];
	$_SESSION["pic"] = "https://mc-heads.net/avatar/" . $_SESSION["mc_username"] . "/1000";
} 
if ($type=="wol") {
	$_SESSION["username"] = $_SESSION["wol_name"];
	$_SESSION["uuid"] = $_SESSION["wol_uuid"];
	$pic = $_SESSION["wol_pic"];
	$_SESSION["pic"] = "";
}
if($type=="discord") {
	$_SESSION["username"] = $_SESSION["dc_name"];
	$_SESSION["uuid"] = $_SESSION["dc_id"];
	$_SESSION["pic"] = $_SESSION["dc_pic"];
}
if (!isset($_SESSION["f_redurl"])) {
	echo "L'url de redirection finale n'est pas définie. Conctactez l'administrateur du site, ou, si vous l'êtes, pensez à la définir dans l'url de base. Redirection annulée.";
	die();
}
$fredURL = $_SESSION["f_redurl"];
echo "<script>window.location='/redirect?redurl=$fredURL'</script>";
?>
