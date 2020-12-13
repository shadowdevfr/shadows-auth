<?php
require("bar.php");
if (!isset($_GET["redurl"])) {
	echo "Merci de spécifier un URL valide de redirection.";
	die();
}
$redurl = $_GET["redurl"];
?>
<title>Redirection... - Shadow's auth</title>
<center>
	<div class="progress">
		  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
	</div>
</center>
<?php
$fullURL = $redurl . "?username=" . $_SESSION["username"] . "&uuid=" . $_SESSION["uuid"] . "&pic=" . $_SESSION["pic"];

?>
<script>
	window.location.replace('<?php echo $fullURL ?>');
</script>