<?php
require("../bar.php");
if (!isset($_GET["redurl"])) {
	echo "Merci de définir l'URL de redirection à la requête via <code>?redurl=VOTREURL</code>. ";
	die();
}
if (!isset($_GET["appID"])) {
	echo "Merci de définir l'ID de l'appli à la fin de la requête via <code>&appID=VOTREID</code>. ";
	die();
}
if (!isset($_GET["force"])) {
	echo "Merci de définir le force de l'appli dans la requête via <code>&force= mc | wolfer | false</code>. ";
	die();
}
$_SESSION["f_redurl"] = $_GET["redurl"];
$_SESSION["appID"] = $_GET["appID"];
if ($_GET["force"]=="false") {
	echo "<script>window.location='/login'</script>";
} else if ($_GET["force"]=="mc") {
	echo "<script>window.location='/minecraft'</script>";
} else if ($_GET["force"]=="wolfer") {
	echo "<script>window.location='https://shorturl.at/abd16'</script>";
} else if ($_GET["force"]=="discord") {
	echo "<script>window.location='/discord/index'</script>";
} else {
	echo "Force invalide";
	die();
}
?>
Redirection...