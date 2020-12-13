<?php
require("../bar.php");
?>
<title>Connexion via Minecraft - Shadow's auth</title>
<center>
	<h2>Verification du code!</h2>
	<p><i>Ceci va prendre quelques instants...</i></p>
	<p>Code entré: <b><?php echo $_POST["authid"] ?></b></p>
	<div class="progress">
	  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
	</div>
</center>
<?php
//  VERIFICATION DU CODE ENTRÉ
$token = $_POST["authid"];
$opts = [
   "http" => [
      "method" => "GET",
      "header" => "Accept-language: en\r\n" .
      "token: $token\r\n"
   ]
];

$context = stream_context_create($opts);
$data = file_get_contents('https://mc-oauth.net/api/api?token', false, $context);
$json = json_decode($data);
if ($json->status == 'success') {
    $_SESSION["mc_username"] = $json->username;
    $_SESSION["mc_uuid"] = $json->uuid;
	$current = file_get_contents("../stats/lgt.txt");
	$now = $current + 1;
	$file = '../stats/lgt.txt';
	file_put_contents($file, $now);
   ?>
   <script>
   	window.location.replace("/mc/success");
   </script>
   <?php
} else {
   ?>
   <script>
   	window.location.replace("/minecraft?err=Code invalide ou expiré.");
   </script>
   <?php
}
?>